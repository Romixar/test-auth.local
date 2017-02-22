<?php

include ('lib/connect.php'); //подключаемся к БД
include ('lib/module_global.php'); //подключаем файл с глобальными функциями

 
if($_GET['action'] == "out") out(); // «разавторизируем» пользователя
 
if (login()) //вызываем функцию login, определяющую, авторизирован юзер или нет

{
	$UID = $_SESSION['id']; //если юзер авторизирован, присвоим переменной $UID его id
	$admin = is_admin($UID); //определяем, админ ли юзер

}
else //если пользователь не авторизирован, то проверим, была ли нажата кнопка входа на сайт
{
	if(isset($_POST['log_in'])) 
	{
		$error = enter(); //функция входа на сайт

		if (count($error) == 0) //если нет ошибок, авторизируем юзера
		{
			$UID = $_SESSION['id'];

			$admin = is_admin($UID);
		}
	}
}
include ('template/index.html'); //подключаем файл с формой
