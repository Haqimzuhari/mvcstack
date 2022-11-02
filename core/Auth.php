<?php

class Auth
{
    public static function set($infos)
    {
        return Session::set('auth', $infos);
    }

    public static function get()
    {
        return Session::get('auth');
    }

    public static function close()
    {
        return Session::close('auth');
    }

    public static function update($users)
    {
        self::close();
        self::set($users);
        return true;
    }
}