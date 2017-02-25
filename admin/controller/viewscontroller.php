<?php


class ViewsController{
    
    public $data = []; // переменные для передачи в шаблон
    
//    public function __construct(){
//        
//        include '/../view/index.php';
//        
//    }
    
    public function render($tmpl){
        
        
        
        ob_start();
        extract($this->data); // названия ключей будут переменными
        
        //include '/admin/view/'.$tmpl.'.php';
        include '/../view/'.$tmpl.'_tpl.php';
        
        return ob_get_clean($tmpl);
        
    }
    
    public function display($tmpl){
        echo $this->render($tmpl);
    }
    
    
    
    public function set($k,$v){
        $this -> data[$k] = $v;
    }
    
}









