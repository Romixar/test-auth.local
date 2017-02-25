<?php

class LoginController extends Controller{
    
    public $model;
    
    public function __construct(){
        
        $this -> model = new User();
        
        parent::__construct();
        
        
    }
    
    
    
    
    public function actionRun(){
        
        
        if(isset($this->data['do_login'])) $this -> model -> run();
        
        if(isset($_SESSION['loggedIn'])){
            
            
            
            $this -> view -> display('main');
            
            
            
        }else{
            
            $h1 = 'Авторизация';
            $this -> view -> render('login',compact('h1'));
            
            
            
            
        }

        
    }

    public function actionLogout(){
        
        session_destroy();
        
        $this -> view -> render('login');
        
        exit();
    }
    
    
    
    
    
}










