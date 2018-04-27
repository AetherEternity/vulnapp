<?php
session_start([
    'cookie_lifetime' => 86400*30,
]);

$id = $_REQUEST['id'];
//echo $id;
$mysqli = new mysqli("localhost","root", "root", "bank2");
if($mysqli->connect_error)
{
    die("Ошибка подключения".$mysqli->connect_errno."-".$mysqli->connect_error);
}

echo "SELECT * FROM news where id=".$id."<br><br>";

if($result=$mysqli->query("SELECT * FROM news where id=".$id))
{
    $row=$result->fetch_array();
    $title=$row['title'];
    $text=$row['text'];
}else{
    die($mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Secure Banking</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .vertical-align {
            display: flex;
            align-items: center;
        }
    </style>
    <script>
        $(function() {
            $("#cur_url").html(document.location.href);
        }
    </script>

</head>
<body>
<div class="row vertical-align">
    <div class="col-sm-2"><img src="https://www.iconexperience.com/_img/g_collection_png/standard/512x512/central_bank.png" width="50px" height="50px"></div>
    <div class="col-sm-8"><h3>Secure online banking news</h3></div>
</div>



<br>
<br>
<div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label  for="username"><?php echo $title; ?></label>
        </div>
    </form>

    <form class="form-horizontal">
        <div class="form-group">
            <p><?php echo $text; ?></p>
        </div>
    </form>

    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username"><a href=<?php echo '"news.php?id='.((int)$id+1).'"'; ?>>К следующей статье</a></label>
        </div>
    </form>

</div>

<!-- <h5>Current URL: <div id="cur_url"></div></h5> -->
</body>
</html>
