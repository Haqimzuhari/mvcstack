<?php
class Toast
{
    public static function flash($type, $message, $details=null)
    {
        Session::set('toast', [
            'type' => $type,
            'message' => $message,
            'details' => $details,
        ]);
    }

    public static function exists()
    {
        return (Session::get('toast')) ? true : false;
    }

    public static function message()
    {
        $toast = Session::get('toast');
        Session::close('toast');
        return $toast;
    }
}