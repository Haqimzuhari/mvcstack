<?php

class CreateAccount extends Controller
{
    public $email_address;
    
    public function __construct()
    {
        if(auth() != false) return redirect('dashboard');

        $this->Database = new Database;
    }
    
    public function index()
    {
        $email = null;
        
        if(isset($_POST['create_account'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $encrypt_password = md5($password);
            $confirm_password = $_POST['confirm_password'];

            $role = 2;
            $timestamps = now();

            $query = "select * from `users` where `email`='$email' and `password`='$encrypt_password'";
            $user = $this->Database->count($query);

            if($user > 0) {
                Flash::set('warning', 'You already registered!', 'Account already exists. Please login');
                return redirect('sign-in');
            } else {
                if($password === $confirm_password) {
                    $query = "
                        insert into `users` (`email`, `password`, `role`, `created_at`)
                        values ('$email', '$encrypt_password', '$role', '$timestamps')
                    ";
                    $this->Database->query($query);

                    Flash::set('success', 'Congratulation!', 'Account created. Please Login.');
                    return redirect('sign-in');
                }
                else {
                    Flash::set('warning', 'Password did\'t match!', 'Password not identical.');
                }
            }
        }
        
        $this->title = "create account &mdash; " . TITLE;
        $this->view('create_account', [
            'email' => $email,
        ]);
    }
}