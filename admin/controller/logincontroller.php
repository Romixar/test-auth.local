<?php

class LoginController extends Controller{
    
    public $model;
    
    public function __construct(){
        
        $this -> model = new User();
        
        
        parent::__construct();
        
//        Session::init();
//        
//        $logged = Session::get('loggedIn');
//        
//        if($logged == false){
//            
//           Session::destroy();
//            
//           //header('Location: ../login');
//           exit();
//        }
        
    }
    
    
    
    
    public function actionRun(){
        
        if(isset($this->data['do_login'])){
            
            //debug($this->data);
            //die;
            
            $this -> model -> run();
            
//            debug($_SESSION);
//            
//            die('завершаю login/run');
        }
        
        if(isset($_SESSION['loggedIn'])){
            
            //debug($_SESSION);
            
            $this-> view -> render('main');
        }else{
            $this-> view -> render('login');
        }

        
    }
    
    
    public function actionIndex(){
        
        $this-> view -> render('login');
        
        
    }
    
    public function actionLogout(){
        
        session_destroy();
        
        $this -> view -> render('login');

        
        exit();
    }
    
    
    
    
    
}










