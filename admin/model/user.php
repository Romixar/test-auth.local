<?php


class User extends DB{
    
    public static $table = 'users';
    
    public function __construct(){
        parent::__construct();
    }
    
    
    
    
    
    public function run(){
        
        $sth = $this -> dbh -> prepare("SELECT `id` FROM `users` WHERE `login` = :login AND `password` = MD5(:password)");
        
        $sth -> execute(array(
           ':login' => $_POST['login'],
           ':password' => $_POST['password']
        ));

        $data = $sth->fetchAll();
        
        if(count($data) > 0){
            
//           Session::init();
//           Session::set('loggedIn', true);
            
            echo 'ok';
            die;
            
           //header('Location: /main');
            
        }else{
            
            echo 'bad(((...';
            die;
            
           //header('Location: /');
            
        }
        
        
        
        
    }
    
    
    
    
    
}







