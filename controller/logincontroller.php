<?php

class LoginController extends Controller{
    
    public $model;
    
    public function __construct(){
        
        $this -> model = new User();
        
    }
    
    
    
    
    public function actionRun(){
        
        $this -> model -> run();
        
    }
    
    
    
    
    
    
}










