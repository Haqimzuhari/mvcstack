<?php
class Auth {

    public $data;

    public function __construct() {
        if ($this->check()) {
            $this->data = Session::get('auth');
        }
    }
    
    public function check() {
        return (Session::check('auth')) ? true : false;
    }

    public function user() {
        return ($this->check()) ? UserModel::where('id', $this->data['id'])->first() : false;
    }

    public function default_picture_link () {
        $profile_picture_path = storage("dp/");
        $default_link = "https://api.dicebear.com/6.x/bottts/svg?seed=";

        if ($this->user()) {
            $profile_picture = $this->user()->profile->picture;
            $profile_fullname = $this->user()->profile->fullname;
            return ($profile_picture) ? $profile_picture_path . $profile_picture : $default_link . $profile_fullname;
        }
        return $default_link . uniqid();
        
        
    }

    public function attempt($input=[]) {
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

    public function close() {
        if ($this->check()) {
            Session::close('auth');
            return ($this->check()) ? false : true;
        }

        return false;
    }
}