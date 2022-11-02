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

function route($target)
{
    $target = str_replace('.', '/', $target);
    return app() . $target;
}

function redirect($target)
{
    return header('Location: ' . route($target));
}

function asset($file_path)
{
    return root() . "app/assets/" . $file_path;
}

function curr_route($route)
{
    return (in_array($route, Application::$url)) ? true : false;
}

function storage($file_path)
{
    return root() . "app/storage/" . $file_path;
}

function storage_folder($folder)
{
    $folder = str_replace('.', DS, $folder);
    return ROOT . DS . 'app' . DS . 'storage' . DS . $folder . DS;
}