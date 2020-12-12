<?php
 
 const ERR_ON_DRAW_MENU = "Sorry ....!";
 //Своя ф-ция ошибок
 
  setlocale(LC_ALL, "ukraine"); 
  $day = strftime('%d'); 
  $mon = strftime('%B'); 
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $year = strftime('%Y'); 

?>