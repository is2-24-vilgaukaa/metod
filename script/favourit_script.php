<!--Добавление в избранное-->
<?php
/*1*/
if(isset($_POST['favor1'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 1";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*2*/
if(isset($_POST['favor2'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 2";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*3*/
if(isset($_POST['favor3'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 3";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*4*/
if(isset($_POST['favor4'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 4";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*5*/
if(isset($_POST['favor5'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 5";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*6*/
if(isset($_POST['favor6'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 6";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*7*/
if(isset($_POST['favor7'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 7";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*8*/
if(isset($_POST['favor8'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 8";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}

/*9*/
if(isset($_POST['favor9'])) {
$sql = "SELECT * FROM `apartments` WHERE id = 9";
if ($res = $link->query($sql)) {

foreach($res as $row) {
$title = $row['title'];
$square = $row['square'];
$price = $row['price'];

$sql_basket = "INSERT INTO `favourites` (title, square, price) VALUES ('$title', '$square', '$price')";
if($link->query($sql_basket)) {
echo "<script>alert(\"Товар добавлен в избранное\");</script>";}

$page = $_SERVER['REQUEST_URI'];
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
}}}
?>