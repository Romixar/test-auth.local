<?php


class Router{
    
    private $routes = [// маршруты
        
        'admin/' => 'login/run',
        'admin/login' => 'login/run',
        'admin/logout' => 'login/logout',
        //'main' => 'main/run',
        'admin/main' => 'main/run',
        //'about' => 'about/run',
        'admin/about' => 'about/run',
        //'services' => 'services/run',
        'admin/services' => 'services/run',
        //'contacts' => 'contacts/run',
        'admin/contacts' => 'contacts/run',
        
        
    ];
    
    
    
    public function getControllerAndAction(&$ctrl,&$act){
        
        session_start();
        
        $url = $_SERVER['REQUEST_URI'];
        
        $arr = explode('/',$url);
        
//        debug($arr);
//        if(isset($_SESSION)) debug($_SESSION);
        
        
        
        $reg = '/[a-zA-Z]*/';
        
        $tmp = [];
        
        if(count($arr) > 3){
            
            $ctrl = 'login';
            $act = 'run';
            
            $ctrl = ucfirst($ctrl).'Controller';
            $act = 'action'.ucfirst($act);
            
            return;
        }
        
        
        if(!isset($_SESSION['loggedIn'])){
            $ctrl = 'login';
            $act = 'run';
            
            $ctrl = ucfirst($ctrl).'Controller';
            $act = 'action'.ucfirst($act);
            
            return;
        }
        
        
        
        if($arr[1] == 'admin' && $arr[2] == ''){
            $ctrl = 'login';
            $act = 'run';
            
            $ctrl = ucfirst($ctrl).'Controller';
            $act = 'action'.ucfirst($act);
            
            return;
        }

        
        
//        if($arr[1] == 'admin' && $arr[2] == 'login' && $arr[3] == 'logout'){
//            $ctrl = 'login';
//            $act = 'logout';
//            
//            $ctrl = ucfirst($ctrl).'Controller';
//            $act = 'action'.ucfirst($act);
//            
//            return;
//        }
        
//        if(!empty($arr[2]) && preg_match($reg,$arr[2])){
//            
//            foreach($this->routes as $k => $v){
//                
//                if($arr[2] == $k) $tmp = explode('/',$v);
//                
//            }
//            
//            
//        }
        
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
//        
//        die;
        
        
        
    }
    
    
    
    
}








?>