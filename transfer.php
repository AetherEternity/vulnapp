<?php
session_start([
    'cookie_lifetime' => 86400*30,
]);
if(!isset($_SESSION['user_id']))
{
    header('Location: index.php');
}

$mysqli = new mysqli("localhost","root", "root", "bank2");
if($mysqli->connect_error)
{
    die("Ошибка подключения".$mysqli->connect_errno."-".$mysqli->connect_error);
}

$from=$_SESSION['user_id'];
$to=$_GET['to'];
$amount=$_GET['amount'];

if($mysqli->query("UPDATE user SET money=money-".$amount." WHERE id=".$from))
{
    if($mysqli->query("UPDATE user SET money=money+".$amount." WHERE id=".$to))
    {
        echo "Success";
    }
}

$mysqli->close();
header('Location:/profile.php');
