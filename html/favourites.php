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
<h1><span>Избранное</span></h1>
</div>

<form action="" method="post">
<div class="favouritesAppart">
<!--Данные для подключения к бд-->        
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'metod';
$link = mysqli_connect($host, $user, $pass, $name);

/*получаем данные из таблицы Избранное*/
$sql = "SELECT * FROM `favourites`";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$id = $row['id']; 
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];

/*вывод результата*/
print("<p><img src='../picture/icon.png'>
<input type='checkbox' name='check[]' value='$id'/> $title $square | Стоимость: $price</p>");
}}

/*если не выбран товар для удаления*/
if(isset($_POST['delete'])) { 
$check = $_POST['check'];
if(empty($check)) {echo "<script>alert(\"Вы не выбрали товар\");</script>";}   

/*удаление выбранных checbox*/
else {
$N = count($check);
for($i=0; $i < $N; $i++) {
$sql_del = "DELETE FROM `favourites` WHERE id = $check[$i]"; 
if($result = $link->query($sql_del)) {
$new_url = 'favourites.php'; 
header('Location: '.$new_url);}    
}}}
?>
</div>
<button class = "delete" name="delete">Удалить из избранного</button>
</form>

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