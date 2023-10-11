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
<h1><span>Список услуг</span></h1>
<p>Метод находит к каждому клиенту особый подход: мы предоставляем максимальную 
информационную поддержку и прилагаем все усилия для того, чтобы вы высоко оценили уровень наших услуг</p>
<a href="request.php"><button class="request">Посмотреть отправленные заявки</button></a>
</div><br>

<!--Риелторские услуги и их описание-->
<table class="servicesTable">   
<tr>
<td><img src="../picture/img1.jpg"></td>
<td>
<h3>Продажа недвижимости</h3>    
<p>Выбирая нас вы гарантированно получаете покупателя за 24-90 дней. 
Все рекламные расходы по привлечению покупателей компания берёт на себя.
Профессиональный фотограф бесплатно сделает качественные снимки вашего объекта, а
комиссия риелтора оплачивается только после сделки</p>
<a href="#consultation"><button>Подать заявку на консультацию</button></a>
</td>    
</tr>    

<tr>
<td>
<h3>Инвестирование</h3>    
<p>Инвестирование в недвижимость - одно из самых прибыльных вложений средств в любое время.
Обращаясь к нам, вы получаете уникальную возможность вложить деньги в ликвидные объекты 
недвижимости и получить наибольшую прибыль</p>
<a href="#consultation"><button>Подать заявку на консультацию</button></a>
</td>    
<td><img src="../picture/img2.jpg"></td>    
</tr> 

<tr>
<td><img src="../picture/img3.jpg"></td>
<td>
<h3>Консультативные услуги</h3>    
<p>"ООО Метод" предлагает услуги индивидуальных консультаций. Вы можете отдельно задать волнующие вас вопросы юристу, 
специалисту по недвижимости, ипотечному брокеру, страховому брокеру. 
Их компетентные ответы помогут вам в решении всех задач по продаже, покупке, аренде или обмену недвижимости</p>
<a href="#consultation"><button>Подать заявку на консультацию</button></a>
</td>    
</tr>  
</table>

<!--Выплывающий заголовок-->
<div class="box"><h1 class="aboutUsH1">Что представляют собой риелторские услуги?</h1></div>

<!--Текст, описывающий важность риелторских услуг-->
<p class="servicesP">В общий перечень услуг риелтора чаще всего входят следующие виды услуг:
проведение различного рода консультаций, подбор недвижимости для клиента или поиск покупателя на объект,
организация просмотра недвижимости и помощь в переговорах сторон. Также риелтор оказать помощь в
решении финансовых вопросов и оформлении документов, которые необходимы при сделке.
Обращаясь за риелторскими услугами вы гарантированно получаете:</p>

<!--Преимущества (изображения)-->
<div class="plusServices">
<img src="../picture/plus1.svg">    
<img src="../picture/plus2.svg">  
<img src="../picture/plus3.svg">  
</div>

<!--Текст, описывающий важность риелторских услуг-->
<p class="servicesP">Одной из самых важных и ответственных составляющих всех сделок с недвижимостью является их юридическое
сопровождение.Для того чтобы избежать всевозможных рисков при проведении операций по купле-продаже, аренде, дарению, 
наследованию, следует учитывать множество факторов, знать все тонкости правовой стороны вопроса. Поэтому обращение к 
компетентным специалистам является обязательным условием успешного проведения сделки. Наша компания предоставляет 
полный пакет юридического сопровождения по операциям с недвижимостью, грамотно и ответственно подходя ко 
всем поставленным задачам.</p>

<!--Форма для пользователя-->
<div class ="footer">
<div class ="contacts"> <br>
<a name = "consultation"><h2>Для бесплатной консультации оставьте свои контактные данные</h2></a>
<form action="services.php" method="post">  
<input name ="name" type="text" placeholder="Имя" required pattern="[a-zA-Zа-яА-Я]+"> <br>
<input name = "phone" type="text" placeholder="Телефон" required pattern="[0-9]+"><br>
<input name = "email" type="text" placeholder="Email" required pattern="[a-zA-Zа-яА-Я0-9.@]+"><br>
<select name="services">
<option>Выберите услугу</option>
<option>Продажа недвижимости</option>
<option>Обмен недвижимости</option>
<option>Поиск и покупка недвижимости</option>
<option>Сопровождение сделок</option>
<option>Инвестирование в недвижимость</option>
</select><br>
<button name = "request"><b>Оставить запрос</b></button> 
</form><br><br></div>

<!--Данные для подключения к бд-->        
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'metod';
$link = mysqli_connect($host, $user, $pass, $name); 

/*получаем данные пользователя*/
if(isset($_POST['request'])) {    
$name =  $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$services = $_POST["services"];

/*вводим данные в БД*/
$sql_courses = "INSERT INTO `user_requests` (name, phone, email, services) 
VALUES ('$name', '$phone', '$email', '$services')";

/*сообщение об отправки формы*/
if($link->query($sql_courses)) {      
echo "<script>alert(\"Ваша заявка принята. Ваш запрос будет рассмотрен в течение нескольких дней\");</script>";}
$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';}
?>

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