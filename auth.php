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


if ($result = $mysqli->query("SELECT * FROM user where username='".$username."' and password='".$password."'"))
{
    $row = $result->fetch_array();
    $_SESSION['user_id']=$row['id'];
    echo $mysqli->insert_id;
    $mysqli->close();
    //echo "SELECT * FROM user where username='".$username."' and password='".$password."'";
    header('Location: /profile.php?id='.$_SESSION['user_id']);
}{
    echo $result."<br>";
    die($mysqli->error);
}

$mysqli->close();
