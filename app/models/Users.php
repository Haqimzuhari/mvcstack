<?php

class Users extends Database
{
    protected $table = "users";

    public static function Profile($id)
    {
        $query = "SELECT * FROM `profiles` WHERE `user_id` = '".$id."'";
        return (new self)->first($query);
    }
}