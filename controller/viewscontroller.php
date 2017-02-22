<?php


class ViewsController{
    
    
    public function __construct(){
        
        include 'view/index.php';
        
    }
    
    public function render($tmpl){
        
        include 'view/'.$tmpl.'.php';
        
    }
    
    
    
    
    
}









