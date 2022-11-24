<?php

class UserModel extends Model
{
    protected $table_name = "users";

    public function Profile()
    {
        return $this->hasOne('ProfileModel', 'user_id', 'id');
    }
}