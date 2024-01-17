<?php
class ResetPassword extends Controller
{
    public function __construct() {
        if (auth()->check()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('reset')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
                'new_password' => 'confirm:new_password_confirmation',
            ]);
            
            if ($validate) {
                $email = request()->input('email');
                $user_inputs['password'] = md5(request()->input('new_password'));
                $user = UserModel::where('email', $email)->count();
                if ($user > 0) {
                    UserModel::where('email', $email)->update($user_inputs)->save();
                    Toast::flash('success', 'Password reset success', 'Please login using new password');
                    return redirect(DEFAULT_NON_AUTH_ROUTE);
                }
                Toast::flash('warning', 'We cannot found your account', 'Please make sure you have registered with us');
            }
        }
        
        $this->view('reset-password.index');
    }
}