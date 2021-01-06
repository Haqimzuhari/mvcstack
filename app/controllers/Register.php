<?php

class Register extends Controller
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
        if(isset($_POST['register'])) {
            
            $validate = Validate::post([
                'email' => $_POST['email'],
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
            ]);

            if($validate == true) {

                $input = Validate::$data;

                $query = "select * from `users` where `email`='".$input['email']."' and `password`='".md5($input['password'])."'";
                $user = $this->Database->count($query);

                if($user > 0) {

                    Flash::set('warning', 'Account already exists. Please login');
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
                                '4',
                                '".date('Y-m-d H:i:s')."'
                            )
                        ";
                        $this->Database->query($query);
                        
                        $query = "
                            insert into `profiles` (
                                `user_id`,
                                `first_name`,
                                `last_name`
                            )
                            values (
                                '".$this->Database->lastInsertId."',
                                '".$input['first_name']."',
                                '".$input['last_name']."'
                            )
                        ";
                        $this->Database->query($query);

                        Flash::set('success', 'Account created. Please Login.');
                    }
                    else {

                        Flash::set('warning', 'Password not identical.');
                    }
                }
            }
            
            return redirect('login');
        }
        
        $this->view('register');
    }
}