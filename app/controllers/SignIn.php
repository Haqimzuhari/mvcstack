<?php

class SignIn extends Controller
{
    public function __construct()
    {
        if(auth()) return redirect('dashboard');
        $this->Database = new Database;
    }
    
    public function index()
    {
        $email = null;

        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $query = "select * from `users` where `email`='$email' and `password`='$password'";
            $user = $this->Database->first($query);

            if(!empty($user)) {
                Auth::set($user);
                return redirect('dashboard');
            }
            else {
                Flash::set('warning', 'Account not found!', 'Invalid <strong>Email Address</strong> or <strong>Password</strong>.');
            }
        }
        
        $this->title = "sign-in &mdash; " . TITLE;
        $this->view('sign_in', [
            'email' => $email,
        ]);
    }
}