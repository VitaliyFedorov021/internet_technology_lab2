<?php
require_once __DIR__."/vendor/autoload.php";
require_once  __DIR__."/DbAccess.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "script.js"></script>
    <title>LB2</title>
</head>
<body>
<?php
$db = new DbAccess();
?>
<form action="" method="post">
    Сообщения от 
    <select name="client">
        <?php
        $db->getClient();
        ?>
    </select>
    <input type="submit" value="OK"><br>
</form>
<br>
<?php
    if (isset($_POST["client"])) {
    $db->getMessages($_POST["client"]);
}
?>
<br>
<form action="" method="post">
    Общий входящий и исходящий трафик: 
    <input type="submit" value="ОК" name="traffic"><br>
</form>
<br>
<?php
if (isset($_POST["traffic"])) {
    $db->getTraffic();
}
?>
<br>
<form action="" method="post">
    Список клиентов с отрицательным балансом счета:
    <input type="submit" value="ОК" name="balance"><br>
</form>
<br>
<?php
if (isset($_POST["balance"])) {
    $db->getBalance();
}
?>
<div id="get"></div><br>
<button onclick="Set()">Сохранить</button>
<button onclick="Get()">Загрузить</button>
</body>
</html>
                                                                                                                                                                                                             <?php
require_once __DIR__."/vendor/autoload.php";
require_once  __DIR__."/DbAccess.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "script.js"></script>
    <title>LB2</title>
</head>
<body>
<?php
$db = new DbAccess();
?>
<form action="" method="post">
    Сообщения от 
    <select name="client">
        <?php
        $db->getClient();
        ?>
    </select>
    <input type="submit" value="OK"><br>
</form>
<br>
<?php
    if (isset($_POST["client"])) {
    $db->getMessages($_POST["client"]);
}
?>
<br>
<form action="" method="post">
    Общий входящий и исходящий трафик: 
    <input type="submit" value="ОК" name="traffic"><br>
</form>
<br>
<?php
if (isset($_POST["traffic"])) {
    $db->getTraffic();
}
?>
<br>
<form action="" method="post">
    Список клиентов с отрицательным балансом счета:
    <input type="submit" value="ОК" name="balance"><br>
</form>
<br>
<?php
if (isset($_POST["balance"])) {
    $db->getBalance();
}
?>
<div id="get"></div><br>
<button onclick="Set()">Сохранить</button>
<button onclick="Get()">Загрузить</button>
</body>
</html>
