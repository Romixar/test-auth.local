<?php

class AboutController extends Controller{
    
    
    public function actionRun(){
        
        $h1 = 'Page about';
        $title = 'Управление страницей обо мне';
        $buttons = parent::initMain();
        $this -> view -> vars = compact('title','buttons');
        $this -> view -> render('video',compact('h1'));
        
        
    }
    
    
    
    
    
}