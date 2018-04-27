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

$username = $_POST['username'];
$password = md5($_POST['password']);
$money = 1000;

if ($mysqli->query("INSERT INTO user (username, password, money) VALUES('".$username."', '".$password."', ".$money.")"))
{
    $_SESSION['user_id']=$mysqli->insert_id;
    echo $mysqli->insert_id;
    $mysqli->close();
    header('Location:/profile.php');
}
