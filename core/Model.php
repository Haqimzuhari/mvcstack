<?php

class Model extends Database
{
    public function __construct()
    {
        //
    }

    public function hasOne($target_table, $target_column, $source_column)
    {
        $this->where_clause = "";

        $value = (!empty($source_column)) ? $this->current_row[$source_column] : $source_column;
        return $this->table($target_table)->where($target_column, $value)->first();
    }

    public function hasMany($target_table, $target_column, $source_column)
    {
        $this->where_clause = "";

        $value = (!empty($source_column)) ? $this->current_row[$source_column] : $source_column;
        return $this->table($target_table)->where($target_column, $value)->get();
    }
}