<?php

class Application
{
    protected $controller;
    protected $method;
    protected $params = [];

    public static $domain;
    public static $root_url;
    public static $url;

    public function __construct()
    {
        $url = $this->get_url();
        self::$url = $url;
        
        $controllerName = (!empty($url) and $url[0] != "") ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $this->controller = str_replace(' ', '', ucwords(str_replace('-', ' ', str_replace('_', '-', $controllerName))));
        $controllerPath = ROOT.DS."app".DS."controllers".DS.$this->controller.".php";
        
        if(file_exists($controllerPath)) {
            unset($url[0]);
            $url = (!empty($url)) ? array_values($url) : [];
            require_once($controllerPath);
            $this->controller = new $this->controller;
            $methodName = (!empty($url)) ? str_replace(' ', '', ucwords(str_replace('-', ' ', str_replace('_', '-', $url[0])))) : DEFAULT_METHOD;
            
            if(method_exists($this->controller, $methodName)) {
                $this->method = $methodName;
                unset($url[0]);
                $this->params = (!empty($url)) ? array_values($url) : [];
                call_user_func_array([$this->controller, $this->method], $this->params);
            } else {
                if(method_exists($this->controller, DEFAULT_METHOD)) {
                    $this->method = DEFAULT_METHOD;
                    $this->params = (!empty($url)) ? array_values($url) : [];
                    call_user_func_array([$this->controller, $this->method], $this->params);
                } else {
                    if(ENV == 'dev') {
                        dd('Method ' . $methodName . ' does not exists');
                    } else {
                        Response::set_statusCode(404);
                        dd('404: Page not found');
                    }
                }
            }
        } else {
            if(ENV == 'dev') {
                dd('Class ' . $controllerName . ' does not exists');
            } else {
                Response::set_statusCode(404);
                dd('404: Page not found');
            }
        }
    }

    private function get_url() 
    {
        if(isset($_SERVER['REQUEST_URI'])) {
            $url = $_SERVER['REQUEST_URI'];
            if(isset($_SERVER['QUERY_STRING'])) {
                $url = str_replace($_SERVER['QUERY_STRING'], '', $url);
                $url = str_replace('?', '', $url);
            }

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
            $host = $_SERVER['HTTP_HOST'];

            self::$domain = $protocol . $host;
            self::$root_url = URL;
            
            $url = ($url == "/") ? $url.DEFAULT_AUTH_ROUTE : $url;

            return $this->cleanUrl($url);
        }
    }

    private function cleanUrl($urlString)
    {
        $url = explode('/', $urlString);
        if (($key = array_search('', $url)) !== false) {
            unset($url[$key]);
        }

        if (($key = array_search(str_replace('/','',URL), $url)) !== false) {
            unset($url[$key]);
        }

        return array_values($url);
    }
}