<?php
session_start();
?>
<html>
<head>
<title>Лабораторна робота №4</title>
</head>
<body>
<p>Сторінка №2</p>
<?php
echo "<p>Ім'я в сесії: {$_SESSION['name']}<br>";
echo "Ім'я в cookie: {$_COOKIE['name']}</p>";
?>
<a href="page.php">Назад на стр. №1</a>
<br>
<a href="index.php">Змінити ім'я</a>
</body>
</html>
