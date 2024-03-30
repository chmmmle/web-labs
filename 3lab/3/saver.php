<?php

function redirectToHome()
{
    header("Location: index.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$userEmail = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$categoryFolder = "./categories/$category";
mkdir($categoryFolder, 0777, true);
$fileName = "$categoryFolder/$title.txt";
$content = "$userEmail\n$title\n$description";
file_put_contents($fileName, $content);

redirectToHome();
?>
