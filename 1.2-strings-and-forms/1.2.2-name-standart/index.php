<?php
require "form.html";
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
if(preg_match("/[A-z]/",$firstName)) {
    $firstName = ucfirst($firstName);
} else {
  $number = 1;
}
if(preg_match("/[A-z]/",$lastName)) {
    $lastName = ucfirst($lastName);
} else {
  $number = 1;
}
if(preg_match("/[A-z]/",$middleName)) {
    $middleName = ucfirst($middleName);
} else {
  $number = 1;
}
if ($number === 1) {
  echo "Используйте символы A-z.";
} else {
  $fullName = "$firstName $lastName $middleName<br>";
  echo $fullName;
  $fio = $firstName{0} . $lastName{0}. $middleName{0};
  echo "$fio<br>";
  $surnameAndInitials = $lastName . " " . $firstName{0} . ". " .  $middleName{0} .".";
   echo $surnameAndInitials;
}