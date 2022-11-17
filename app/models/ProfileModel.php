<?php

class ProfileModel extends Model
{
    public function __construct()
    {
        $this->connect();
        $this->table_name = "profiles";
    }
}