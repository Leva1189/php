<?php
/*
    echo "Hello". " ". "world". " ". "!". "\n";
    echo strftime('%d-%B-%Y, %A '). "\n";
    print strftime('%d-%B-%Y, %A '). " ". "Yes";
    require_once ("info.php");


$name = "John  Вася";

$len1 = strlen($name); // 5 (подсчет в байтах)
$len2 = mb_strlen($name); // подсчет по символу
//$pos = $len - 1;
echo "$len1 $len2";
//echo $name{$pos};
// $go = $len{ strlen($name)-1};
// echo $go;
*/

// $x=2;
// $x++;

// $a=2;
// ++$a;

// echo $x++."<br>";
// echo $a;


require_once ("index.html");
//require_once ("demo/for.php");
//require_once ("demo/while.php");

/*
//прорисовуем таблицу
$cols = 10;
$rows = 10;
$color = "blue";

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

*/