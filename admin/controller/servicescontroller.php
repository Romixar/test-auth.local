<?php

class ServicesController extends Controller{
    
    
    public function actionRun(){
        
        $h1 = 'Page of Services';
        $title = 'Управление страницей услуги';
        $buttons = parent::initMain();
        $this -> view -> vars = compact('title','buttons');
        $this -> view -> render('services',compact('h1'));
        
        
    }
    
    
    
    
    
}