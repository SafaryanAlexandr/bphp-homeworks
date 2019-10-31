<?php
require "form.html";
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
$codeTest = $_POST["code"];
$code = "nd82jaake";
$reply;
$number = 0;

if(!preg_match("/\w+/",$login)) {
    $reply = "Логин $login содержит недопустимый символ!<br>";
    $number++;
}
if(!preg_match("/\d{8,15}/",$password)) {
    $reply = $reply . "Пароль должен содержать только цифры от 8 до 15 символов.<br>";
    $number++;
}
if(!preg_match("/\w+@\w+.\w+/",$email)) {
    $reply = $reply . "Почта должна быть формата почта@домен.доменнаязона.<br>";
    $number++;

}
if(!preg_match("/\w+/",$name)) {
    $reply = $reply . "Введите ИМЯ <br>";
    $number++;
}
if(!preg_match("/\w+/",$lastName)) {
    $reply = $reply . "Введите ФАМИЛИЮ <br>";
    $number++;
}
if(!preg_match("/\w+/",$middleName)) {
    $reply = $reply . "Введите ОТЧЕСТВО <br>";
    $number++;
}

if ($code !== $codeTest) {
  $reply = $reply . "Кодовое слово не верное!!! <br>";
  $number++;
}
if ($number === 0) {
  $reply = "Форма отправлена";
}
echo $reply;