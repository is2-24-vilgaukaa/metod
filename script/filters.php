<?php 
/*КОЛ-ВО КОМНАТ*/
if(isset($_POST['roomBtn'])) { 
$room = $_POST["room"];

if ($room == "atelier") {
$sql = "SELECT * FROM `apartments` WHERE title = 'Студия'";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else if ($room == "one") {
$sql = "SELECT * FROM `apartments` WHERE title = '1 комнат. кв.'";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else if ($room == "two") {
$sql = "SELECT * FROM `apartments` WHERE title = '2 комнат. кв.'";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else {
$sql = "SELECT * FROM `apartments` WHERE title = '3 комнат. кв.' or title = '4 комнат. кв.' or title = '5 комнат. кв.'";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}}

/*ПЛОЩАДЬ*/
if(isset($_POST['squareRoomBtn'])) { 
$squareRoom = $_POST["squareRoom"]; 

if ($squareRoom == "25-40") {
$sql = "SELECT * FROM `apartments` WHERE square <= 40";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else if ($squareRoom == "40-55") {
$sql = "SELECT * FROM `apartments` WHERE square <= 55 and square > 40";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else {
$sql = "SELECT * FROM `apartments` WHERE square > 55 ";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}
}

/*СТОИМОСТЬ*/
if(isset($_POST['priceApartmentsBtn'])) { 
$priceApartments = $_POST["priceApartments"]; 

if ($priceApartments == "expensive") {
$sql = "SELECT * FROM `apartments` ORDER BY id DESC";
if ($res = $link->query($sql)) {
foreach($res as $row) { 
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}

else {
$sql = "SELECT * FROM `apartments`";
if ($res = $link->query($sql)) {
foreach($res as $row) {
$title = $row['title']; 
$square = $row['square'];
$price = $row['price'];
$img = $row['img'];
print("<a class='lake' href = '#' alt='$title $square кв.м | Стоимость: $price'><img src='$img'></a>");
}}}
}

/*ОЧИСТИТЬ*/
if(isset($_POST['clear'])) { 
print("");}
?>