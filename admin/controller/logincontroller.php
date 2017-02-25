<?php

class LoginController extends Controller{
    
    public $model;
    
    public function __construct(){
        
        $this -> model = new User();
        
        parent::__construct();
        
        
    }
    
    
    
    
    public function actionRun(){
        
            
//        $this -> view -> set('buttons','Кнопки управления');
//        $this -> view -> display('main');
        
        
        if(isset($this->data['do_login'])) $this -> model -> run();
        
        if(isset($_SESSION['loggedIn'])){
            
            
            
            $this -> view -> display('main');
            
            
            
        }else{
            
            $title = 'Авторизация';
            $content = $this -> view -> render('login');
            
            //echo $content;
            
            $this -> view -> set('title',$title);
            $this -> view -> set('content',$content);
            
            $this -> view -> display('main');
            
            
            
        }
        //$this-> view -> render('login');

        
    }

    public function actionLogout(){
        
        session_destroy();
        
        $this -> view -> render('login');
        
        exit();
    }
    
    
    
    
    
}










