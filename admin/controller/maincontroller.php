<?php

class MainController extends Controller{
    
    
    
    public function actionRun(){
        
        
        
        $h1 = 'Page of Main';
        $title = 'Управление страницей главная';
        $buttons = parent::initMain();
        $this -> view -> vars = compact('title','buttons');
        $this -> view -> render('video',compact('h1'));
        
        
    }
    
    
    
    
    
}
