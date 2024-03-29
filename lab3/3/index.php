<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.8, maximum-scale=1.8, minimum-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gold Apple</title>
</head>
<body>
    <div id="form">
        <form action="saver.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <label for="category">Category:</label>
            <select name="category" required>
                <?php
//TASK3
                $directoryPath = "./categories/";
                if (is_dir($directoryPath))
                {
                    $subdirectories = array_filter(glob($directoryPath . '*'), 'is_dir');
                    foreach ($subdirectories as $subdirectory)
                    {
                    $name = basename($subdirectory);
                    echo "<option value="$name">$name</option>";
                    }
                }
