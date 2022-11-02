<?php

function now()
{
    return date('Y-m-d H:i:s');
}

function auth()
{
    return Auth::get();
}

function profile($user_id = null)
{
    return (auth()) ? Users::Profile(($user_id) ? $user_id : auth()->id) : false;
}

function uuid()
{
    $random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0,6);
    $now = date('ynjGis');
    return str_shuffle($random.$now);
}