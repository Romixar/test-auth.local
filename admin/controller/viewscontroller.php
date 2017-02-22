<?php


class ViewsController{
    
    
    public function __construct(){
        
        //include '/admin/view/index.php';
        include '/../view/index.php';
        
    }
    
    public function render($tmpl){
        
        //include '/admin/view/'.$tmpl.'.php';
        include '/../view/'.$tmpl.'.php';
        
    }
    
    
    
    
    
}









