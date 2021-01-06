<?php

class Validate
{
    public static $data;
    
    public static function post($inputs)
    {
        $error = false;
        $alerts = [];
        
        foreach($inputs as $key => $value) {
            if($value == "" or is_null($value)) {
                $alerts[] = "Field ".self::clean($key)." is required.";
                $error = true;
            }

            self::$data[$key] = $value;
        }

        if($error == false) {
            return true;
        }
        else {
            Flash::set('warning', $alerts);
            return false;
        }
    }

    private static function clean($key)
    {
        $key = str_replace('-', ' ', $key);
        $key = str_replace('_', ' ', $key);
        return ucwords($key);
    }
}