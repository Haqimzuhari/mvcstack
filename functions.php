<?php

function domain()
{
    return Application::$domain;
}

function root()
{
    return Application::$root_url;
}

function app()
{
    return domain() . root();
}

function job($job)
{
    $job = str_replace('/', DS, str_replace('.', DS, $job)) . ".php";
    return ROOT . DS . 'app' . DS . 'jobs' . DS . $job;
}

function route($target)
{
    $target = str_replace('.', '/', $target);
    return app() . $target;
}

function redirect($target)
{
    return header('Location: ' . route($target));
}

function auth()
{
    return Auth::get();
}

function currpage($page)
{
    return (in_array($page, Application::$url)) ? true : false;
}

function asset($file_path)
{
    return root() . "app/assets/" . $file_path;
}

function storage($file_path)
{
    return root() . "app/storage/" . $file_path;
}

function storage_folder($folder)
{
    $folder = str_replace('.', DS, $folder);
    return ROOT . DS . 'app' . DS . 'storage' . DS . $folder;
}

function uuid()
{
    $random = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0,6);
    $now = date('ynjGis');
    return str_shuffle($random.$now);
}