<?
$dt = time();
$page = $_SERVER["REQUEST_URI"];

$ref = $_SERVER["HTTP_REFERER"];
// $ref = pathinfo($ref, PATHIFO_BASENAME);

$path = "$dt|$path|$ref<br>";

file_put_contents("log/".PATH_LOG, $path, FILE_APPEND);
