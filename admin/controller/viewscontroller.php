<?php


class ViewsController{
    
    public $vars = []; // переменные для шаблона main
    
    
    public function render($tmpl,$data=[]){

        $content = $this->prerender($tmpl,$data);
        
        $this -> display('main',compact('content'));
        
    }
    
    public function display($tmpl,$data){
        
        if(!empty($this->vars)) $data = $this -> setVars($data);
        
        echo $this->prerender($tmpl,$data);

    }
    
    public function prerender($tmpl,$data=[]){
        
        if(file_exists('admin\view\\'.$tmpl.'_tpl.php')){
            
            ob_start();
            extract($data); // названия ключей будут переменными

            include '/../view/'.$tmpl.'_tpl.php';
            return ob_get_clean();
            
            
        }
        return false;
        
    }
    
    private function setVars($data){ // добавляю переменные в шаблон main
        
        foreach($this->vars as $k => $v){
            $data[$k] = $v;
        }
        return $data;
        
    }

    
}









