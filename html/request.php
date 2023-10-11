<html>
<head>
<meta charset="utf-8">       
<link rel="icon" href="../picture/logo.svg"> 
<title>Метод</title>
<!--Подключение стилей-->
<link rel ="stylesheet" href="../style/style.css">
<!--Подключение шрифта-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body>
<!--Шапка-->   
<header>
<div class="header">
<a href="../index.php" class="logo"><img src="../picture/logo.svg" alt="метод"></a>
<div class="header-right">
<a href="aboutUs.html">О нас</a>
<a href="apartments.php">Квартиры</a>
<a href="mortgage.html">Ипотека</a>
<a href="services.php">Риелторские услуги</a>
</div></div><br>

<!--Заголовок-описание-->
<div class="main-heading">
<h1><span>Недавно выбранные услуги</span></h1>
</div>

<div class="dignities">
<!--Данные для подключения к бд-->        
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'metod';
$link = mysqli_connect($host, $user, $pass, $name);

/*выводим заявки на услуги из БД*/
$sql = "SELECT * FROM `user_requests`";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$name = $row['name']; 
$services = $row['services']; 
print("<p>$name - $services</p>");
}}
?>
</div>

<!--Заголовок-описание-->
<div class="main-heading">
<h1><span>Недавно заданные вопросы</span></h1>
</div>

<div class="dignities">
<?php
/*выводим заявки на консультацию из БД*/
$sql = "SELECT * FROM `questions`";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$name = $row['name']; 
$questions = $row['questions']; 
print("<p>$name - $questions</p>");
}}
?>
</div>

<!--Подвал-->
<div class="footer"><br>
<table class="footerTable">
<tr>
<td><br>
<p>Номер телефона: +7 (900) 088-79-85</p>
<p>Почта: metod@gmail.com</p>
<img src="../picture/tg.svg">
<img src="../picture/tw.svg">
<img src="../picture/vk.svg">
</td> 
<td>
<h2>ООО Метод</h2>
<a href="../index.php"><img src="../picture/footerlogo.svg"></a>  
</td>
<td>
<p>Покупка недвижимости</p>
<p>Риелторские услуги</p>
<p>Оформление ипотеки</p>
<p>Подробнее о компании</p>
</td>
</tr>
</table></div>
</body>
</html>