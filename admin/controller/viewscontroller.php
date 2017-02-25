<?php


class ViewsController{
    
    
    public function render($tmpl,$data=[]){

        $content = $this->prerender($tmpl,$data);
        
        $this -> display('main',compact('content'));
        
    }
    
    public function display($tmpl,$data){
        
        echo $this->prerender($tmpl,$data);

    }
    
    private function prerender($tmpl,$data=[]){
        
        if(file_exists('admin\view\\'.$tmpl.'_tpl.php')){
            
            ob_start();
            extract($data); // названия ключей будут переменными

            include '/../view/'.$tmpl.'_tpl.php';
            return ob_get_clean();
            
            
        }
        return false;
        
    }

    
}









