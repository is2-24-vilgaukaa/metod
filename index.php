<html>
<head>
<meta charset="UTF-8">
<link rel="icon" href="picture/logo.svg"> 
<title>Метод</title>
<!--Подключение стилей-->
<link rel="stylesheet" href="style/style.css">
<!--Подключение шрифта-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<!--Подключение скрипта-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<!--Шапка-->   
<header>
<div class="header">
<a href="index.php" class="logo"><img src="picture/logo.svg" alt="нефритовый дворец"></a>
<div class="header-right">
<a href="html/aboutUs.html">О нас</a>
<a href="html/apartments.php">Квартиры</a>
<a href="html/mortgage.html">Ипотека</a>
<a href="html/services.php">Риелторские услуги</a>
</div></div>

<!--Лого и описание-->
<div class="main-heading"><br>
<h1><span>Метод</span></h1>
<p>Лучший сервис недвижимости в Челябинске по количеству объявлений о продаже и аренде квартир</p><br>
</div>

<!--Изображение-->
<div class="container_slider_css">
<img class="photo_slider_css" src="picture/sliderimg1.jpg" alt="">
<img class="photo_slider_css" src="picture/sliderimg2.jpg" alt="">
<img class="photo_slider_css" src="picture/sliderimg3.jpg" alt="">
<img class="photo_slider_css" src="picture/sliderimg1.jpg" alt="">
</div><br>
    
<!--Выплывающий заголовок-->
<div class="box"><h1 class="aboutUsH1">Об организации</h1></div><br>

<div class="infoBlock">
<p>«ООО Метод» на рынке недвижимости по праву занимает одно
из лидирующих мест среди риелторских компаний Челябинска. На нашем официальном сайте в продаже 
квартиры в новых домах и ЖК, строительство которых выполнено с учетом современных требований к комфортному проживанию.</p>

<p>Лучшая в городе локация, благоустройство двора и общественной территории.
Дизайнерские места общественного пользования — лобби, лифтовые холлы.</p> 

<p>«ООО Метод» предлагает жилье нового формата в Челябинске. Уникальные планировки,
отличные локации, выгодные условия покупки. Индивидуальные консультации и сопровождение ипотечного менеджера.</p>
</div><br>

<!--Выплывающий заголовок-->
<div class="box"><h1 class="aboutUsH1">Недвижимость</h1></div><br>

<!--Информация о покупке и аренде квартиры-->
<div class="shares">
<table class="infoApartments">
<tr><td><img src="picture/sharesimg1.jpg"></td>  
<td>
<h3>Покупка квартиры</h3>
<p>Вы можете приобрести любую квартиру на ваш вкус, от студии до 3-ех комнатной квартиры.
При необходимости, мы поможет оформить ипотеку через наших партнеров</p>
<a href="html/apartments.php"><button>Ознакомиться с выбором</button></a>
</td></tr>  
<tr><td>
<h3>Аренда квартиры</h3>
<p>Мы являемся посредниками между клиентом и арендодателем и следим,
чтобы ни одна из сторон не нарушала обговоренные соглашения</p>
<a href="html/apartments.php"><button>Ознакомиться с выбором</button></a>
</td><td><img src="picture/sharesimg2.jpg"></td>   
</tr></table></div><br><br>

<!--Форма для пользователя-->
<div class="footer">
<div class="contacts"> <br>
<h2>Остались вопросы? Тогда вы можете оставить запрос</h2>  
<form action="index.php" method="post">  
<input name ="name" type="text" placeholder="Имя" required pattern="[a-zA-Zа-яА-Я]+"> <br>
<input name = "phone" type="text" placeholder="Телефон" required pattern="[0-9]+"><br>
<input name = "email" type="text" placeholder="Email" required pattern="[a-zA-Zа-яА-Я0-9.@]+"><br>
<select name = "questions">
<option>Выберите ваш вопрос</option>
<option>Как купить квартиру?</option>
<option>Как оформить ипотеку?</option>
<option>Как правильно продать квартиру?</option>
<option>Другое</option>
</select><br>
<button name = "questionsBtn"><b>Оставить запрос</b></button></form><br><br>

<!--Данные для подключения к бд-->        
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'metod';
$link = mysqli_connect($host, $user, $pass, $name); 

/*получаем данные пользователя*/
if(isset($_POST['questionsBtn'])) {    
$name =  $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$questions = $_POST["questions"];

/*вводим данные в БД*/
$sql_questions = "INSERT INTO `questions` (name, phone, email, questions) 
VALUES ('$name', '$phone', '$email', '$questions')";

/*сообщение об отправки формы*/
if($link->query($sql_questions)) {      
echo "<script>alert(\"Ваш вопрос принят и будет рассмотрен в течение нескольких дней\");</script>";}
$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';}
?>
</div><br>

<!--Подвал-->
<table class="footerTable">
<tr>
<td><br>
<p>Номер телефона: +7 (900) 088-79-85</p>
<p>Почта: metod@gmail.com</p>
<img src="picture/tg.svg">
<img src="picture/tw.svg">
<img src="picture/vk.svg">
</td> 
<td>
<h2>ООО Метод</h2>
<a href="index.php"><img src="picture/footerlogo.svg"></a>  
</td>
<td>
<p>Покупка недвижимости</p>
<p>Риелторские услуги</p>
<p>Оформление ипотеки</p>
<p>Подробнее о компании</p>
</td>
</tr>
</table>
</div>

</body>
</html>