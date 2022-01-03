<?php

class Login extends Controller
{
    public $email;
    
    public function __construct()
    {
        if(auth()) return redirect('dashboard');

        $this->Database = new Database;
    }
    
    public function index()
    {
        if(isset($_POST['login'])) {
            $this->email = $_POST['email-address'];

            $validate = Validate::post([
                'email' => $_POST['email-address'],
                'password' => $_POST['password'],
            ]);

            if($validate == true) {
                $input = Validate::$data;
                
                $query = "select * from `users` where `email`='".$input['email']."' and `password`='".md5($input['password'])."'";
                $user = $this->Database->first($query);

                if(!empty($user)) {
                    Auth::set($user);
                    return redirect('dashboard');
                }
                else {
                    Flash::set('warning', 'Account not found!', 'Invalid <strong>Email Address</strong> or <strong>Password</strong>.');
                }
            }
        }
        
        $this->title = "Login";
        $this->view('login', [
            'email' => $this->email,
        ]);
    }
}