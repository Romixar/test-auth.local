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
            
            $title = 'Управление страницей главная';
            
            $h1 = 'Page of Main';
            
            $buttons = parent::initMain();
            $this -> view -> vars = compact('title','buttons');

            $this -> view -> render('video',compact('h1'));
            
            
            
        }else{
            
            $h1 = 'Авторизация';
            
            $title = 'Страница авторизаци';
            
            $footer = 'Футер для страницы авторизации';
            
            
            $this -> view -> vars = compact('title','footer');
            
            $this -> view -> render('login',compact('h1'));
            
            
            
            
        }

        
    }

    public function actionLogout(){
        
        session_destroy();
        
        $h1 = 'Авторизация';
            
        $title = 'Страница авторизаци';
            
        $footer = 'Футер для страницы авторизации';
            
            
        $this -> view -> vars = compact('title','footer');
            
        $this -> view -> render('login',compact('h1'));
        
        exit();
    }
    
    
    
    
    
}










