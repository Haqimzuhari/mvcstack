<?php

class UserModel extends Model
{
    public function __construct()
    {
        $this->connect();
        $this->table_name = "users";
    }

    public function getProfile($id)
    {
        return $this->hasOne('profile', 'user_id', $id);
    }
}