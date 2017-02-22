<?php


class Router{
    
    private $routes = [// маршруты
        
        'main' => 'main/run',
        'about' => 'about/run',
        'services' => 'services/run',
        'contacts' => 'contacts/run',
        'admin' => 'login/run',
        
    ];
    
    
    
    public function getControllerAndAction(&$ctrl,&$act){
        
        
        $url = $_SERVER['REQUEST_URI'];
        
        $arr = explode('/',$url);
        
        $reg = '/[a-zA-Z]*/';
        
        $tmp = [];
        
        if(!empty($arr[1]) && preg_match($reg,$arr[1])){
            
            foreach($this->routes as $k => $v){
                
                if($arr[1] == $k) $tmp = explode('/',$v);
                
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
        
        
        
        
        
        
//        echo 'CONTROLLER - '.$ctrl.'<br/>';
//        echo 'ACTION - '.$act;
//        
//        die;
        
        
        
    }
    
    
    
    
}








?>