<?php
class User extends Controller
{
    public function __construct() {
        if (!auth()->check()) return redirect(DEFAULT_NON_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('create')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
            ]);
            
            if ($validate) {
                $user_inputs = request()->only('email', 'password');
                $user_inputs['password'] = md5(request()->input('password'));
                try {
                    $user = UserModel::create($user_inputs);
                    $profile_inputs = request()->only('name');
                    $profile_inputs['user_id'] = $user->id;
                    ProfileModel::create($profile_inputs);
                    Toast::flash('success', 'User Registered');
                } catch (Exception $e) {
                    Toast::flash('danger', 'Failed to register user');
                }
            }
        }

        if (request()->has('update')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
            ]);
        
            if ($validate) {
                $user_id = request()->input('user_id');
                $user_inputs = request()->only('email');
                $profile_inputs = request()->only('name');
                try {
                    UserModel::where('id', $user_id)->update($user_inputs)->save();
                    ProfileModel::where('user_id', $user_id)->update($profile_inputs)->save();
                    Toast::flash('success', 'User updated');
                } catch (Exception $e) {
                    Toast::flash('danger', 'Failed to update user');
                }
            }
        }

        if (request()->has('delete')) {
            $user_id = request()->input('user_id');
            try {
                ProfileModel::where('user_id', $user_id)->delete();
                UserModel::where('id', $user_id)->delete();
                Toast::flash('info', 'User deleted');
            } catch (Exception $e) {
                Toast::flash('danger', 'Failed to delete user');
            }
        }
        
        $this->view('user.index', [
            'users' => UserModel::whereRaw("`role` != '1' AND `id` != '".auth()->user()->id."'")->get(),
        ]);
    }
}
