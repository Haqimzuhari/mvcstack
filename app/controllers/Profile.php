<?php
class Profile extends Controller
{
    public function __construct() {
        if (!auth()->check()) return redirect(DEFAULT_NON_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('update_email')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
            ]);

            if ($validate) {
                UserModel::where('id', auth()->user()->id)->update(['email'=>request()->input('email')])->save();
                Toast::flash('success', 'Account updated');
            }
        }

        if (request()->has('update_password')) {
            $validate = request()->validate([
                'new_password' => 'confirm:new_password_confirmation',
            ]);

            if ($validate) {
                UserModel::where('id', auth()->user()->id)->update(['password'=>md5(request()->input('new_password'))])->save();
                Toast::flash('success', 'Account updated');
            }
        }

        if (request()->has('update_personal')) {
            $personal_inputs = request()->only(['first_name', 'last_name']);
            ProfileModel::where('user_id', auth()->user()->id)->update($personal_inputs)->save();
            Toast::flash('success', 'Personal details updated');
        }

        $this->view('profile.index', [
            'user' => UserModel::where('id', auth()->user()->id)->first()
        ]);
    }
}