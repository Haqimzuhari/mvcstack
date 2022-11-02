<?php

class Component
{
    private $template = null, $params = [];
    
    public function __construct($template_name, $params = [])
    {
        $template_name = str_replace('/', DS, str_replace('.', DS, $template_name));
        $this->template = ROOT . DS . "app" . DS . "views" . DS . "components" . DS . $template_name . ".php";
        $this->params = $params;

        ob_start();
    }

    public function close()
    {
        $content = ob_get_clean();
        ob_start();
        if(!empty($this->params)) {
            foreach($this->params as $variable => $value) {
                ${$variable} = $value;
            }
        }

        include($this->template);
        $component = ob_get_clean();
        echo str_replace('@content', $content, $component);
    }
}