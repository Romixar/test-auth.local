<?php


class ViewsController{
    

    
    public function render($tmpl,$data=[]){

        
        ob_start();
        extract($data); // названия ключей будут переменными
        
        //include '/admin/view/'.$tmpl.'.php';
        include '/../view/'.$tmpl.'_tpl.php';
        
        $content = ob_get_clean();
        
        $this -> display('main',compact('content'));
        //return $content;
        
    }
    
    public function display($tmpl,$data){
        
        ob_start();
        extract($data); // названия ключей будут переменными
        
        //include '/admin/view/'.$tmpl.'.php';
        include '/../view/'.$tmpl.'_tpl.php';
        
        echo ob_get_clean();

    }

    
}









