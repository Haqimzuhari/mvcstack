<?php

class Component
{
    private static $template, $params;

    public static function start($name, $params = [])
    {
        $name = str_replace('/', DS, str_replace('.', DS, $name));
        
        self::$template = ROOT . DS . "app" . DS . "views" . DS . "components" . DS . $name . ".php";
        self::$params = $params;

        ob_start();
    }

    public static function end()
    {
        $content = ob_get_clean();

        ob_start();

        if(!empty(self::$params)) {

            foreach(self::$params as $variable => $value) {

                ${$variable} = $value;
            }
        }

        include_once(self::$template);

        $component = ob_get_clean();

        echo str_replace('@content', $content, $component);
    }
}