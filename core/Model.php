<?php

class Model extends Database
{
    public function __construct()
    {
        //
    }

    public function hasOne($table, $column, $id)
    {
        return $this->table($table)->where($column, $id)->first();
    }

    public function hasMany($table, $column, $id)
    {
        return $this->table($table)->where($column, $id)->get();
    }
}