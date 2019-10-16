<?php
date_default_timezone_set("Europe/Moscow");
$time = date("H");
$weekday = date("N");
switch ($weekday) {
    case 0: $day = "Воскресенье"; break;
    case 1: $day = "Понедельник"; break;
    case 2: $day = "Вторник"; break;
    case 3: $day = "Среда"; break;
    case 4: $day = "Четверг"; break;
    case 5: $day = "Пятница"; break;
    case 6: $day= "Суббота"; break;
}
if ($time < 6) {
    $textTime = "Доброй ночи!";
    $image = 'img/moon.jpg';
} elseif ($time < 11) {
    $textTime = "Доброе утро!";
    $image = 'img/s.jpg';;
} elseif ($time < 18) {
    $textTime = "Добрый день!";
    $image = 'img/day.jpg';
} elseif ($time < 23) {
    $textTime = "Добрый вечер!";
    $image = 'img/evening.jpg';
} else {
    $textTime = "Доброй ночи!";
    $image = 'img/moon.jpg';
}
$text = "$textTime \n Сегодня $day";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?= $text; ?></h1>
        </div>
    </div>
</body>
</html>