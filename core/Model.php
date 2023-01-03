<?php
class Model extends Database
{
    protected $row;

    protected function hasOne($target_model, $target_column, $current_model_column)
    {
        static::$where_clause = "";
        $value = (!empty($current_model_column)) ? $this->row->$current_model_column : $current_model_column;
        return $target_model::where($target_column, $value)->first();
    }

    protected function hasMany($target_model, $target_column, $current_model_column)
    {
        static::$where_clause = "";
        $value = (!empty($current_model_column)) ? $this->row->$current_model_column : $current_model_column;
        return $target_model::where($target_column, $value)->get();
    }

    protected function hasOneOnly($target_model, $target_column, $current_model_column)
    {
        static::$where_clause = "";
        $value = (!empty($current_model_column)) ? $this->row->$current_model_column : $current_model_column;
        return $target_model::where($target_column, $value)->first(true);
    }

    protected function hasManyOnly($target_model, $target_column, $current_model_column)
    {
        static::$where_clause = "";
        $value = (!empty($current_model_column)) ? $this->row->$current_model_column : $current_model_column;
        return $target_model::where($target_column, $value)->get(true);
    }
}