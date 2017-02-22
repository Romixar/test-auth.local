<?php

class DB{
    
    public $dbh;
    
    public static $host = 'localhost';
    public static $user = 'root';
    public static $pass = '';
    public static $db_name = 'psicholog-ludmila';
    
    
    public function __construct(){
        
        $this -> dbh = new PDO('mysql:host='.self::$host.';dbname='.self::$db_name,self::$user, self::$pass);
		
		if(!$this -> dbh) die('Отсутствует подключение к базе данных (((');
		
		//debug(get_called_class());// получаем имя класс, вызвывающего этот объект DB
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}










