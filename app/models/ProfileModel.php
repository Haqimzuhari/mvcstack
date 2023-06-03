<?php
class ProfileModel extends Model
{
    protected $table_name = "profiles";

    public function user() {
        return $this->hasOneOnly('UserModel', 'id', 'user_id');
    }

    public function fullname() {
        return $this->row->first_name . " " . $this->row->last_name;
    }
}