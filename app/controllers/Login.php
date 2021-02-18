<?php

class Login extends Controller
{
    public function __construct()
    {
        if(auth() != false) {

            return redirect('dashboard');
        }

        $this->Database = new Database;
    }
    
    public function index()
    {
        if(isset($_POST['login'])) {
            
            $validate = Validate::post([
                'email' => $_POST['email'],
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

                    Flash::set('warning', 'Unable to find an account with this Email and Password');
                }
            }
        }
        
        $this->title = "Login &mdash; " . TITLE;
        $this->view('login');
    }
}