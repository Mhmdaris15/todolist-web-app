<?php 

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        
        if(!empty($url)){
            $path = "$_SERVER[DOCUMENT_ROOT]/learnphp/todolist/app/controllers/$url[0].php"; 
            
            // Controller
            if(file_exists($path)){
                $this->controller = $url[0];
                unset($url[0]);
                clearstatcache();
            }
        }
        

        require_once "$_SERVER[DOCUMENT_ROOT]/learnphp/todolist/app/controllers/$this->controller.php";
        $this->controller = new $this->controller;
        
        // Method
        if (isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Params
        if(!empty($url)){
            // var_dump($url);
            $this->params = array_values($url);
        }

        // Run Controller & Method, and send params if exists
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}