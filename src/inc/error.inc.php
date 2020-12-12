<?php
function myError($no, $msg, $file, $line){
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $msg in $file:$line</br>";
    switch ($no) {
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $msg; 
            
        }
        error_log("$str", 3, "error.log");
}

?>