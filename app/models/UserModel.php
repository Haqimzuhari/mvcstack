<?php

class UserModel extends Model
{
    protected $table_name = "users";

    public function profile()
    {
        return $this->hasOneOnly('ProfileModel', 'user_id', 'id');
    }
}