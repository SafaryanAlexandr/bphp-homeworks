<?php
require "form.html";
$test = $_POST["login"];
if(!preg_match("/\w/",$test)) {
    echo ("Логин $test содержит недопустимый символ!");
}