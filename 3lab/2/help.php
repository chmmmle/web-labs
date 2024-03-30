<?php
session_start();

if (isset($_SESSION["surname"], $_SESSION["name"], $_SESSION["age"])) {

    echo "Фамилия: " . $_SESSION["surname"] . "<br>";
    echo "Имя: " . $_SESSION["name"] . "<br>";
    echo "Возраст: " . $_SESSION["age"] . "<br>";
} else {
    echo "Данные не найдены в сессии.";
}
?>
