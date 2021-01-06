<?php

class Users extends Database
{
    protected $table = "users";

    public static function profile($id)
    {
        $query = "select * from `profiles` where `user_id` = '".$id."'";
        return (new self)->first($query);
    }
}