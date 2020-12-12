<?php
$leftMenu = array(
  array('link'=>'Домой', 'href'=>'index.html'),
  array('link'=>'О нас', 'href'=>'about.html'),
  array('link'=>'Контакты', 'href'=>'contact.html'),
  array('link'=>'Таблица умножения', 'href'=>'table.html'),
  array('link'=>'Калькулятор', 'href'=>'calc.html')
);

  if ( !drawMenu($leftMenu)){
      trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR); //Отлавливаем ошибку
      
  }
?>