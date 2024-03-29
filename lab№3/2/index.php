<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $surname = $_POST["surname"];
if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $number = $_POST["number"];

    $_SESSION["surname"] = $surname;
    $_SESSION["name"] = $name;
    $_SESSION["age"] = $age;
    $userData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'number' => $number
    ];

    $_SESSION['userData'] = $userData;

    header("Location: help.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<form method="post">
    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname" required><br><br>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="age">Возраст:</label>
    <input type="number" id="age" name="age" required><br><br>

    <input type="submit" value="Отправить">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="age">Age:</label><br>
    <input type="text" id="age" name="age"><br>

    <label for="salary">Salary:</label><br>
    <input type="text" id="salary" name="salary"><br>

    <label for="number">Number:</label><br>
    <input type="text" id="number" name="number"><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
