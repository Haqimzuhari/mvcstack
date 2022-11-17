<?php

class SignIn extends Controller
{
    public function __construct()
    {
        if (auth()) return redirect(DEFAULT_AUTH_ROUTE);
        $this->layout = "main";
    }
    
    public function Index()
    {
        $email = null;

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $UserModel = new UserModel;
            $user = $UserModel->where('email', $email)->where('password', $password)->first();

            if(!empty($user)) {
                Auth::set($user);
                return redirect('');
            } else {
                Flash::set('warning', 'Account not found!', 'Invalid <strong>Email Address</strong> or <strong>Password</strong>.');
            }
        }
        
        $this->title = "sign-in &mdash; " . TITLE;
        $this->view('sign-in', [
            'email' => $email,
        ]);
    }
}