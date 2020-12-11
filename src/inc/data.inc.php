<?php
$leftMenu = array(
    array('link'=>'Домой', 'href'=>'index.html'),
    array('link'=>'О нас', 'href'=>'about.html'),
    array('link'=>'Контакты', 'href'=>'contact.html'),
    array('link'=>'Таблица умножения', 'href'=>'table.html'),
    array('link'=>'Калькулятор', 'href'=>'calc.html')
  );
  setlocale(LC_ALL, "ukraine"); 
  $day = strftime('%d'); 
  $mon = strftime('%B'); 
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $year = strftime('%Y'); 

?>