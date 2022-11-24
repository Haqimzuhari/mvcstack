<?php

class Model extends Database
{
    public function __construct()
    {
        $this->connect();
    }

    public function hasOne($target_model, $target_column, $source_column)
    {
        $this->where_clause = "";
        $value = (!empty($source_column)) ? $this->current_row[$source_column] : $source_column;
        $Model = new $target_model;
        return $Model->where($target_column, $value)->first();
    }

    public function hasMany($target_model, $target_column, $source_column)
    {
        $this->where_clause = "";
        $value = (!empty($source_column)) ? $this->current_row[$source_column] : $source_column;
        $Model = new $target_model;
        return $Model->where($target_column, $value)->get();
    }
}