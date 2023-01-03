<?php
class CreateAccount extends Controller
{
    public function __construct()
    {
        if(auth()->check()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index()
    {
        if (request()->has('create_account')) {
            $validate = request()->validate([
                'password' => 'confirm:password_confirmation',
                'email' => 'unique:UserModel,email',
            ]);
            
            if ($validate) {
                $user_inputs = request()->only(['email']);
                $user_inputs['password'] = md5(request()->input('password'));
                $user_inputs['role'] = 2;
                $user = UserModel::create($user_inputs);

                $profile_inputs['name'] = request()->input('name');
                $profile_inputs['user_id'] = $user->id;
                ProfileModel::create($profile_inputs);

                Toast::flash('success', 'Create account success', 'Please login using new created account. Welcome aboard!');
                return redirect('sign-in');
            }
        }
        
        $this->view('authentication.create-account');
    }
}