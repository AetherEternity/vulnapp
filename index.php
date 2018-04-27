<?php
session_start([
    'cookie_lifetime' => 86400*30,
]);
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

</head>
<body>
<div class="row vertical-align">
    <div class="col-sm-2"><img src="https://www.iconexperience.com/_img/g_collection_png/standard/512x512/central_bank.png" width="50px" height="50px"></div>
    <div class="col-sm-8"><h3>Secure online banking</h3></div><!--
    --><div class="col-sm-2">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registerModal">Регистрация</button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#authModal">Вход</button>
    </div>
</div>
<br>
<br>
<br>
<div class="row vertical-align">
    <div class="col-sm-4"><div style="background-color: aquamarine; height: 300px">Курс валют</div></div>
    <div class="col-sm-4"><div style="background-color: bisque; height: 300px">Новости<br><!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#newsModal">Создать новость</button>--><br><br><a href="news.php?id=1">Новости временно доступны тут</a></div></div>
    <div class="col-sm-4"><div style="background-color: darkgray; height: 300px">Акции</div></div>
</div>

<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Регистрация</h4>
            </div>
            <div class="modal-body">
                <form id="register_form" action="registration.php" method="POST">
                    <div class="form-group">
                        <label for="username">Name:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="authModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Аутентификация</h4>
            </div>
            <div class="modal-body">
                <form id="register_form" action="auth.php" method="POST">
                    <div class="form-group">
                        <label for="username">Name:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="newsModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Написать статью</h4>
            </div>
            <div class="modal-body">
                <form id="register_form" action="createnews.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <input type="text" class="form-control" id="text" name="text">
                    </div>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>

    </div>
</div>

</body>
</html>
