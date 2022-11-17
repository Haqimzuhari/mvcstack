<?php

class UserModel extends Model
{
    public function __construct()
    {
        $this->connect();
        $this->table_name = "users";
    }

    public function getProfile()
    {
        return $this->hasOne('profiles', 'user_id', 'id');
    }
}