<?php
session_start();
if (isset($_POST['name']))
{
    setcookie('name', htmlspecialchars($_POST['name']));
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
}
?>
<html>
<head>
<title>Лабораторна робота №2</title>
</head>
<body>
<?php
echo "<p>Ім'я в сесії: {$_SESSION['name']}<br>";
echo "Ім'я в cookie: {$_COOKIE['name']}</p>";
?>
<a href="page2.php">Сторінка №2</a>
<br>
<a href="index.php">Змінити ім'я</a>
</body>
</html>
