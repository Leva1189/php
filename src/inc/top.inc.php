<?php
/* 
* Получаем текущий час в виде строки от 00 до 23 
* и приводим строку к целому числу от 0 до 23 
*/ 
$hour = (int)strftime('%H'); 
$welcome = '';

if ($hour > 0 && $hour < 6){
   $welcome = "Доброй ночи";
}elseif ($hour >= 6 && $hour < 12){
   $welcome = "Доброе утро";
}elseif ($hour >= 12 && $hour < 18){
   $welcome = "Добрый день";
}elseif ($hour >= 18 && $hour < 23){
   $welcome = "Добрый вечер";
}else{
  $welcome = "Доброй ночи";
}



setlocale(LC_ALL, "ukraine"); 
$day = strftime('%d'); 
$mon = strftime('%B'); 
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y'); 
?>

<img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>