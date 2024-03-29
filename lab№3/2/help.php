<?php
session_start();

if (isset($_SESSION["surname"], $_SESSION["name"], $_SESSION["age"])) {

    echo "Фамилия: " . $_SESSION["surname"] . "<br>";
    echo "Имя: " . $_SESSION["name"] . "<br>";
    echo "Возраст: " . $_SESSION["age"] . "<br>";
} else {
    echo "Данные не найдены в сессии.";
if(isset($_SESSION['userData'])) {
    echo '<ul>';
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>';
}
else echo "Не найдено!";
?>
