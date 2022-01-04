<?php

class Flash
{
    public static function set($type, $title, $value)
    {
        if(!is_array($value)) {
            $message[] = $value;
        }
        else {
            $message = $value;
        }
        
        Session::set('flash', [
            'type' => $type,
            'title' => $title,
            'message' => $message
        ]);
    }

    public static function exists()
    {
        return (Session::get('flash')) ? true : false;
    }

    public static function all()
    {
        $flash = Session::get('flash');
        Session::close('flash');
        return $flash;
    }
}