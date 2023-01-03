<?php
class Elem
{
    private $component = null, $parameters = [];
    
    public function __construct($component, $parameters = [])
    {
        $component = str_replace('/', DS, str_replace('.', DS, $component));
        $component_fullpath = ROOT . DS . "app" . DS . "views" . DS . "components" . DS . $component . ".php";
        $component_index_fullpath = ROOT . DS . "app" . DS . "views" . DS . "components" . DS . $component. DS . "index.php";
        $this->component = (file_exists($component_fullpath)) ? $component_fullpath : $component_index_fullpath;
        $this->parameters = $parameters;

        ob_start();
    }

    public function close()
    {
        $content = ob_get_clean();
        ob_start();
        if(!empty($this->parameters)) {
            foreach($this->parameters as $_variable => $_value) {
                ${$_variable} = $_value;
            }
        }

        include($this->component);
        $component = ob_get_clean();
        echo str_replace('@slot', $content, $component);
    }
}