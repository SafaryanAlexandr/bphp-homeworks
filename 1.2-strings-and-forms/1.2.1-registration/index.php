<?php
require "form.html";
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
$code = $_POST["code"];

if(!preg_match("/\w/",$login)) {
    echo "Логин $login содержит недопустимый символ!<br>";
}
if(!preg_match("/\d{8,15}/",$password)) {
    echo "Пароль должен быть от 8 до 15 символов!<br>";
}
if(!preg_match("/\w{1}@\w.\w/",$email)) {
    echo"Почта должна быть формата почта@домен.доменнаязона.<br>";
}
if(!preg_match("/\w+/",$name)) {
    echo "Введите ИМЯ <br>";
}
if(!preg_match("/\w+/",$lastName)) {
    echo "Введите ФАМИЛИЮ <br>";
}
if(!preg_match("/\w+/",$middleName)) {
    echo "Введите ОТЧЕСТВО <br>";
}

if (!$code === "nd82jaake") {
  echo "Кодовое слово не верное!!! <br>";
}