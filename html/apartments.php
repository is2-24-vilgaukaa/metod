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

<!--Поисковая строка-->
<form action="apartments.php" method="post">
<div class="search"> <br>
<a href="favourites.php"><img src="../picture/star.svg"></a>
<input class="searchInput" name="searchInput" placeholder="Введите запрос..." required>
<button class="searchBut" name="searchBut">Поиск</button><br><br>
</div>
</form>

<!--Результаты поиска-->  
<div class="infosearch">      
<?php
/*подключение к БД*/
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'metod';
$link = mysqli_connect($host, $user, $pass, $name);

/*запрос пользователя*/
if(isset($_POST["searchInput"])) {
$search = $_POST["searchInput"];}
if(isset($_POST['searchBut'])) {

/*поиск запроса в бд*/    
$sql_search = "SELECT * FROM `apartments` 
WHERE `title` LIKE ('%$search%') OR `number_of_rooms` LIKE ('%$search%')";

/*вывод запроса*/ 
if ($res = $link->query($sql_search)) {
print("<span>По запросу ".$search." было найдено: </span> <br>"); 

/*если по запросу ничего не найдено*/
$num = mysqli_num_rows($res);
if($num == 0) {print("<span>0 запросов</span>");}   

/*вывод результата запроса*/
foreach($res as $row) {
$name = $row['title']; 
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$name | $price'><img src='$img'></a>");
}}}?>
</div>

<!--Фильтры-->  
<hr>
<h2><span>Фильтры</span></h2>
<form action="apartments.php" method="post">
<table class="filtrTable">
<tr>
<td><p>По количеству комнат</p></td>    
<td><p>По площади</p></td>  
<td><p>По стоимости</p></td>  
</tr>  
<tr>
<td>
<input type="radio" name="room" value="atelier"><span>Студия</span></input>
<input type="radio" name="room" value="one"><span>1 комнат. кв</span></input>
<input type="radio" name="room" value="two"><span>2 комнат. кв</span></input>
<input type="radio" name="room" value="three"><span>3+ комнат. кв</span></input>
</td>    
<td>
<input type="radio" name ="squareRoom" value="25-40"><span>25-40 м<sup>2</sup></span></input>
<input type="radio" name ="squareRoom" value="40-55"><span>40-55 м<sup>2</sup></span></input>
<input type="radio" name ="squareRoom" value="55"><span>55+ м<sup>2</sup></span></input>
</td>  
<td>
<input type="radio" name ="priceApartments" value="cheaply"><span>От бюджетных к дорогим</span></input>
<input type="radio" name ="priceApartments" value="expensive"><span>От дорогих к бюджетным</span></input>   
</td>  
</tr>   
<tr>
<td>
<button class="filtr" name="roomBtn"><b>Найти</b></button> 
<button class="filtr" name="clear"><b>Очистить</b></button></td>    
<td>
<button class="filtr" name ="squareRoomBtn"><b>Найти</b></button> 
<button class="filtr" name="clear"><b>Очистить</b></button></td>  
<td>
<button class="filtr" name="priceApartmentsBtn"><b>Найти</b></button> 
<button class="filtr" name="clear"><b>Очистить</b></button></td>  
</tr>
</table>

<!--Вывод отсортированных данных из БД--> 
<div class="apartmentsInfo">
<?php include '../script/filters.php';?>
</div>
<form><br>
<hr>

<!--Вывод недвижимости из БД--> 
<form action="" method="post">
<div class="apartmentsInfo">
<?php 
$sql = "SELECT * FROM `apartments` WHERE id = 1 or id = 2 or id = 3";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}?>

<!--Добавить в избранное--> 
<table class="AppTableFavor">
<tr>
<td><button class='favouritesBtn' name='favor1'>Добавить в избранное</button></td>  
<td><button class='favouritesBtn' name='favor2'>Добавить в избранное</button></td>
<td><button class='favouritesBtn' name='favor3'>Добавить в избранное</button></td>  
</tr>
</table>
</div>
</form>

<!--Вывод недвижимости из БД--> 
<form action="" method="post">
<div class="apartmentsInfo">
<?php 
$sql = "SELECT * FROM `apartments` WHERE id = 4 or id = 5 or id = 6";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}?>

<!--Добавить в избранное-->
<table class="AppTableFavor">
<tr>
<td><button class='favouritesBtn' name='favor4'>Добавить в избранное</button></td>  
<td><button class='favouritesBtn' name='favor5'>Добавить в избранное</button></td>
<td><button class='favouritesBtn' name='favor6'>Добавить в избранное</button></td>  
</tr>
</table>
</div>
</form>

<!--Вывод недвижимости из БД--> 
<form action="" method="post">
<div class="apartmentsInfo">
<?php 
$sql = "SELECT * FROM `apartments` WHERE id = 7 or id = 8 or id = 9";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}?>

<!--Добавить в избранное-->
<table class="AppTableFavor">
<tr>
<td><button class='favouritesBtn' name='favor7'>Добавить в избранное</button></td>  
<td><button class='favouritesBtn' name='favor8'>Добавить в избранное</button></td>
<td><button class='favouritesBtn' name='favor9'>Добавить в избранное</button></td>  
</tr>
</table>
</div>
</form>

<!--Подключение сценария-->
<?php include '../script/favourit_script.php';?>

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