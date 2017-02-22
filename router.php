<?php

class Router{
    
    private $routes = [// маршруты
        
        'main' => 'main/index',
        'about' => 'about/index',
        'services' => 'services/index',
        'contacts' => 'contacts/index',
        
    ];
    
    
    public function getControllerAndAction(&$ctrl,&$act){
        
        
        $url = $_SERVER['REQUEST_URI'];
        
        echo $url;
        
        die;
        
    }
    
    
    
    
    
    public function run(){
        
        $this -> getControllerAndAction($ctrl,$act);
        
        
        
    }
    
    
    
    
}








?>