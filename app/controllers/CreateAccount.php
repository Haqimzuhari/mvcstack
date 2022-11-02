<?php

class CreateAccount extends Controller
{
    public function __construct()
    {
        if(auth()) return redirect(DEFAULT_AUTH_ROUTE);
        $this->Database = new Database;
        $this->layout = "main";
    }
    
    public function Index()
    {
        $email = null;
        if(isset($_POST['create_account'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $encrypt_password = md5($password);
            $confirm_password = $_POST['confirm_password'];

            $role = 2;
            $timestamps = now();

            $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$encrypt_password'";
            $user = $this->Database->count($sql);

            if($user > 0) {
                Flash::set('warning', 'You already registered!', 'Account already exists. Please login');
                return redirect('sign-in');
            } else {
                if($password === $confirm_password) {
                    $sql = "INSERT INTO `users` (`email`, `password`, `role`, `created_at`) VALUES ('$email', '$encrypt_password', '$role', '$timestamps')";
                    $this->Database->query($sql);

                    Flash::set('success', 'Congratulation!', 'Account created. Please Login.');
                    return redirect('sign-in');
                }
                else {
                    Flash::set('warning', 'Password did\'t match!', 'Password not identical.');
                }
            }
        }
        
        $this->title = "create account &mdash; " . TITLE;
        $this->view('create-account', [
            'email' => $email,
        ]);
    }
}