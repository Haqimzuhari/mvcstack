<?php
class UserModel extends Model
{
    protected $table_name = "users";

    public function profile() {
        return $this->hasOneOnly('ProfileModel', 'user_id', 'id');
    }

    public function isAdmin() {
        return (in_array($this->row->role, [1])) ? true : false;
    }

    public function nameNoSpace() {
        return strtolower(str_replace(" ", "", $this->row->profile->name));
    }
}