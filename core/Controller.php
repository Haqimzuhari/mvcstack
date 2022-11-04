<?php
class Controller
{
    protected $layout = DEFAULT_LAYOUT;
    protected $Database;

    private $variable;
    
    public function __get($varName)
    {
        if (is_array($this->variable)) {
            return (!array_key_exists($varName,$this->variable)) ? null : $this->variable[$varName];
        }

        return null;
    }

    public function __set($varName, $value) 
    {
        $this->variable[$varName] = $value;
    }

    public function view($viewName, $params=null)
    {
        $viewName = str_replace('.', DS, $viewName);
        $viewName = str_replace('/', DS, $viewName);
        $viewPath = ROOT.DS."app".DS."views".DS."pages".DS.$viewName.".php";

        if(file_exists($viewPath)) {
            $this->gen_data($params);
            $this->render($viewPath);
        }else {
            if(ENV == 'dev') {
                dd('View '. $viewName .' does not exists');
            }else {
                Response::set_statusCode(404);
                dd('404: Page not found');
            }
        }
    }

    protected function gen_layout()
    {
        ob_start();
        include_once(ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.$this->layout.'.php');
        return ob_get_clean();
    }

    protected function gen_content($view)
    {
        ob_start();
        include_once($view);
        return ob_get_clean();
    }

    private function render($view)
    {
        $layout = $this->gen_layout();
        $content = $this->gen_content($view);
        echo str_replace('@content', $content, $layout);
    }

    private function gen_data($datas)
    {
        if($datas) {
            foreach($datas as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }
}