<?php
session_start();

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $number = $_POST["number"];

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form method="post">
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
