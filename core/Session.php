<?php

class Session
{
    public static function set($name, $value)
    {
        $_SESSION[$name] = $value;
        return true;
    }

    public static function get($name)
    {
        if(isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function close($name)
    {
        if(isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
            return true;
        } else {
            return false;
        }
    }
}