<?php

class ContactsController extends Controller{
    
    
    public function actionRun(){
        
        $h1 = 'Page of Contacts';
        $title = 'Управление страницей контакты';
        $buttons = parent::initMain();
        $this -> view -> vars = compact('title','buttons');
        $this -> view -> render('contacts',compact('h1'));
        
        
    }
    
    
    
    
    
}