<?php

// ----------------------------конфигурация-------------------------- //
$adminemail="esetnod1111@gmail.com";  // e-mail админа
$email="esetnod1111@gmail.com"; // почта пользователя по умолчанию
$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды
$backurl="spasibo.html";  // На какую страничку переходит после отправки письма
//---------------------------------------------------------------------- //


// Принимаем данные с формы
$name=$_POST['name'];
$email=$_POST['email'];
$text=$_POST['text'];

$msg="
Дополнительный вопрос о товаре Little Times
Имя: $name
Электронный адрес: $email
Вопрос: $text
";

// Отправляем письмо админу
mail("$adminemail", "$date $time Дополнительный вопрос о товаре Little Times
от $name", "$msg");

// Выводим сообщение пользователю
print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 0);
//--></script>";

exit;



