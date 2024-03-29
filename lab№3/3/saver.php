<?php

function ToHome()
{
    header("Location: index.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    ToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$category_folder = "./categories/$category";
mkdir($category_folder, 0777, true);
$file_name = "$category_folder/$title.txt";
$content = "$email\n$title\n$description";
file_put_contents($file_name, $content);
ToHome();
?>

