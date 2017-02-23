<?php

function __autoload($cl_name){
    
    $file = strtolower($cl_name).'.php';
    
    
    if(file_exists($file)){
        
        include $file;
        
    }
    
    if(file_exists('../'.$file)){
        
        include '../'.$file;
        
    }
    
    if(file_exists(__DIR__.'/admin/'.$file)){
        
        include __DIR__.'/admin/'.$file;
        
    }
    
    if(file_exists(__DIR__.'/admin/model/'.$file)){
        
        include __DIR__.'/admin/model/'.$file;
        
    }
    
    if(file_exists(__DIR__.'/admin/controller/'.$file)){
        
        include __DIR__.'/admin/controller/'.$file;
        
    }
    
    if(file_exists(__DIR__.'/admin/view/'.$file)){
        
        include __DIR__.'/admin/view/'.$file;
        
    }
    
    
}

//spl_autoload_register();

function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}







?>