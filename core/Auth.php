<?php
class Auth {

    public $data;

    public function __construct()
    {
        if ($this->check()) {
            $this->data = Session::get('auth');
        }
    }
    
    public function check()
    {
        return (Session::check('auth')) ? true : false;
    }

    public function user()
    {
        return ($this->check()) ? UserModel::where('id', $this->data['id'])->first() : false;
    }

    public function attempt($input=[])
    {
        if (!empty($input) > 0) {
            $user = UserModel::where('email', $input['email'])->where('password', md5($input['password']))->first();
            if ($user) {
                Session::set('auth', ['uuid' => uuidv4(), 'id' => $user->id]);
                return true;
            } else {
                Toast::flash('warning', 'Account not found. Please try again');
            }
        }

        return false;
    }

    public function close()
    {
        if ($this->check()) {
            Session::close('auth');
            return ($this->check()) ? false : true;
        }

        return false;
    }
}