<?php

function __autoload($cl_name){
    
    $file = strtolower($cl_name).'.php';
    
    if(file_exists($file)){
        
        include $file;
        
    }
    
    if(file_exists(__DIR__.'/model/'.$file)){
        
        include __DIR__.'/model/'.$file;
        
    }
    
    if(file_exists(__DIR__.'/controller/'.$file)){
        
        include __DIR__.'/controller/'.$file;
        
    }
    
    if(file_exists(__DIR__.'/view/'.$file)){
        
        include __DIR__.'/view/'.$file;
        
    }
    
    
}

//spl_autoload_register();

function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}







?>