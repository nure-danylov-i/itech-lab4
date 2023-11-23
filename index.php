<!DOCTYPE html>
<?php session_start();
session_destroy();
setcookie('name', '', 1);?>
<html>
<head>
<title>Лабораторна робота №4</title>
</head>
<body>
<form action="page.php" method="post">
    <label for="name">Ім'я користувача:</label>
    <br>
    <input type="text" name="name" id="name">
    <button type="submit">Увійти</button>
</body>
</html>
