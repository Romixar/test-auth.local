<?php


class Router{
    
    private $routes = [// маршруты
        
        'admin/login' => 'login/run',
        'admin/logout' => 'login/logout',
        'admin/main' => 'main/run',
        'admin/about' => 'about/run',
        'admin/services' => 'services/run',
        'admin/contacts' => 'contacts/run',
        
    ];
    
    
    
    public function getControllerAndAction(&$ctrl,&$act){
        
        
        session_start();
        
        $url = $_SERVER['REQUEST_URI'];
        
        $arr = explode('/',$url);
        
        $reg = '/[a-zA-Z]*/';
        
        $tmp = [];
        
        if(count($arr) == 2 && empty($arr[1])){
            include 'settings.php';
            exit();
        }

        
        if((count($arr) > 3) || (!isset($_SESSION['loggedIn'])) || ($arr[1] == 'admin' && $arr[2] == '')){
            $ctrl = 'login';
            $act = 'run';
            
            $ctrl = ucfirst($ctrl).'Controller';
            $act = 'action'.ucfirst($act);
            
            return;
        }

        
        if(!empty($arr[2]) && preg_match($reg,$arr[2]) && $arr[1] == 'admin'){
            
            foreach($this->routes as $k => $v){
                
                $routes = explode('/',$k);
                
                if($arr[2] == $routes[1]) $tmp = explode('/',$v);
                
            }
        }
        
        if(!empty($tmp)){
            $ctrl = $tmp[0];
            $act = $tmp[1];
        }else{
            $ctrl = 'main';
            $act = 'run';
        }
        
        $ctrl = ucfirst($ctrl).'Controller';
        $act = 'action'.ucfirst($act);
        
    }
    
    
    
    
    
    public function run(){
        
        $this -> getControllerAndAction($ctrl, $act);
        
        $controller = new $ctrl(); // запуск класса объекта и его метода
        $controller -> $act();
                
        
        echo 'CONTROLLER - '.$ctrl.'<br/>';
        echo 'ACTION - '.$act;

        
        
    }
    
    
    
    
}








?>