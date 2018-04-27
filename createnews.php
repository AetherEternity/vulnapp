<?php
session_start([
    'cookie_lifetime' => 86400*30,
]);

$mysqli = new mysqli("localhost","root", "root", "bank2");
if($mysqli->connect_error)
{
    die("Ошибка подключения".$mysqli->connect_errno."-".$mysqli->connect_error);
}/*else{
    echo "Connect OK";
}*/

$title = $_POST['title'];
$text = $_POST['text'];

if ($mysqli->query("INSERT INTO news (title, text) VALUES('".$title."', '".$text."')"))
{
    $mysqli->close();
    header('Location:/index.php');
}{
echo "INSERT INTO news (title, text) VALUES('".$title."', '".$text."')<br>";    
die($mysqli->error);
}
