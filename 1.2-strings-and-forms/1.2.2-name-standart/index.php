<?php
require "form.html";
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
if(preg_match("/[А-я]/",$firstName)) {
    $firstName = mb_strtolower($firstName);
    $firstName0 = mb_strtoupper(mb_substr($firstName,0,1));
    $firstName = $firstName0 . mb_substr($firstName,1,(mb_strlen($firstName) - 1));
} else {
  $number = 1;
}
if(preg_match("/[А-я]/",$lastName)) {
    $lastName = mb_strtolower($lastName);
    $lastName0 = mb_strtoupper(mb_substr($lastName,0,1));
    $lastName = $lastName0 . mb_substr($lastName,1,(mb_strlen($lastName) - 1));
} else {
  $number = 1;
}
if(preg_match("/[А-я]/",$middleName)) {
    $middleName = mb_strtolower($middleName);
    $middleName0 = mb_strtoupper(mb_substr($middleName,0,1));
    $middleName = $middleName0 . mb_substr($middleName,1,(mb_strlen($middleName) - 1));
} else {
  $number = 1;
}
if ($number === 1) {
  echo "Используйте символы А-я.";
} else {
  $fullName = "$firstName $lastName $middleName<br>";
  echo $fullName;
  $fio = $firstName0 . $lastName0 . $middleName0;
  echo "$fio<br>";
  $surnameAndInitials = $lastName . " " . $firstName0 . ". " .  $middleName0 .".";
  echo $surnameAndInitials;
}