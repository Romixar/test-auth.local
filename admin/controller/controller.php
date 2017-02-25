<?php


class Controller{
    
    public $view;
    
    public $data = []; // POST данные
    
    public function __construct(){
        
        $this -> view = new ViewsController(); // контроллер видов
        
        if(isset($_POST)) $this->data = $_POST;
        
    }
    
    public function initMain(){
        if(isset($_SESSION['loggedIn'])){
            return $this -> view -> prerender('buttons');
        }
    }
    
    
}






