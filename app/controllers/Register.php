<?php

class Register extends Controller
{
    public $email_address;
    
    public function __construct()
    {
        if(auth() != false) return redirect('dashboard');

        $this->Database = new Database;
    }
    
    public function index()
    {
        if(isset($_POST['register'])) {
            $this->email_address = $_POST['email_address'];
            
            $validate = Validate::post([
                'email_address' => $_POST['email_address'],
                'password' => $_POST['password'],
                'password_confirmation' => $_POST['password_confirmation'],
            ]);

            if($validate == true) {
                $input = Validate::$data;

                $query = "select * from `users` where `email`='".$input['email_address']."' and `password`='".md5($input['password'])."'";
                $user = $this->Database->count($query);

                if($user > 0) {
                    Flash::set('warning', 'You already registered!', 'Account already exists. Please login');
                }
                else {
                    if($input['password'] === $input['confirm_password']) {

                        $query = "insert into `users` (
                                `email`,
                                `password`,
                                `role`,
                                `created_at`
                            )
                            values (
                                '".$input['email']."',
                                '".md5($input['password'])."',
                                '2',
                                '".date('Y-m-d H:i:s')."'
                            )
                        ";
                        $this->Database->query($query);

                        Flash::set('success', 'Congratulation!', 'Account created. Please Login.');
                    }
                    else {
                        Flash::set('warning', 'Password did\'t match!', 'Password not identical.');
                    }
                }

                return redirect('login');
            }
        }
        
        $this->title = "Register";
        $this->view('register', [
            'email_address' => $this->email_address,
        ]);
    }
}