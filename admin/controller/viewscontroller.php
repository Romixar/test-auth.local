<?php


class ViewsController{
    
    
    public function __construct(){
        
        include '/../view/index.php';
        
    }
    
    public function render($tmpl){
        
        //include '/admin/view/'.$tmpl.'.php';
        include '/../view/'.$tmpl.'.php';
        
    }
    
    
    
    
    
}









