<?php


class Controller{
    
    public $view;
    
    public $data = []; // POST данные
    
    public function __construct(){
        
        //session_start();
        $this -> view = new ViewsController(); // контроллер видов
        
        if(isset($_POST)) $this->data = $_POST;

        
    }
    
    
}






