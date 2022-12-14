<?php

function now()
{
    return date('Y-m-d H:i:s');
}

function auth()
{
    return Auth::get();
}

function uuid()
{
    $random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0,6);
    $now = date('ynjGis');
    return str_shuffle($random.$now);
}

function only($array, $desire) 
{
    $filtered = [];
    foreach ($array as $key => $value) {
        if (in_array($key, $desire)) {
            $filtered[$key] = $value;
        }
    }
    return $filtered;
}

function except($array, $desire) 
{
    $filtered = [];
    foreach ($array as $key => $value) {
        if (!in_array($key, $desire)) {
            $filtered[$key] = $value;
        }
    }
    return $filtered;
}