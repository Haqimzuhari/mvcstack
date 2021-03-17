<?php

class Component
{
    public static function use($name)
    {
        ob_start();

        include_once(ROOT . DS . 'app' . DS . 'views' . DS . 'components' . DS . $name . '.php');

        return ob_get_clean();
    }
}