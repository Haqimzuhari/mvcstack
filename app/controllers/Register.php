<?php
class Register extends Controller
{
    public function __construct() {
        if(auth()->check()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('register')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
                'password' => 'confirm:password_confirmation',
            ]);
            
            if ($validate) {
                $user_inputs = request()->only(['email']);
                $user_inputs['password'] = md5(request()->input('password'));
                $user_inputs['role'] = 2;
                $user = UserModel::create($user_inputs);

                $profile_inputs = request()->only(['first_name', 'last_name']);
                $profile_inputs['user_id'] = $user->id;
                ProfileModel::create($profile_inputs);

                Toast::flash('success', 'Create account success', 'Please login using new created account');
                return redirect(DEFAULT_NON_AUTH_ROUTE);
            }
        }
        
        $this->view('register.index');
    }
}