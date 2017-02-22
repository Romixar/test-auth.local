<?php

function __autoload($cl_name){
    
    $file = $cl_name.'php';
    
    if(file_exists($file)){
        
        include $file;
        
    }
    
    if(file_exists('/model/'.$file)){
        
        include '/model/'.$file;
        
    }
    
    if(file_exists('/controller/'.$file)){
        
        include '/controller/'.$file;
        
    }
    
    if(file_exists('/view/'.$file)){
        
        include '/view/'.$file;
        
    }
    
    
}

spl_autoload_register();









?>