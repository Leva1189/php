<?php
//function_Table start
function drawTable($cols = 10, $rows = 10, $color = "yellow"){
  echo "<table border='1'>";
  for($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
      for($td=1; $td<=$cols; $td++){
        if($tr == 1 || $td == 1){
          echo "<th style='background:$color'>" . $tr*$td . "</th>";
        }else{
          echo "<td>" . $tr*$td . "</td>";
        }
      }
    echo "</tr>";  
  }
echo "</table>";   
}
//function_Table finish

//Меню
function drawMenu($menu, $vertical = true){
  if(!is_array($menu))
    return false;
    $style = "";
    if(!$vertical){
      $style = " style='display:inline; margin-right:15px'";
    }
    echo "<ul>";
   //var_dump($menu);
    foreach($menu as $item){
      echo "<li$style>";
        echo "<a href='$item[href]'>{$item['link']}</a>";
      echo "</li$style>";
    }
  echo "</ul>"; 

  return true;
  }


//Меню - finish





?>