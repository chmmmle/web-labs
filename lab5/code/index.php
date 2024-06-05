<?php
// Подключение к серверу MySQL
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);
}

$ads = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $ads[] = $row;
    }
    $result->close();
}

$mysqli->close();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>db</title>
</head>
<body>

<form action="index.php" method="POST">
    <label for="email">email</label>
    <input type="email" name="email" required>

    <label for="categories">Category</label>
    <select name="categories" required>
        <option value="cars">cars</option>
        <option value="cosmetics">cosmetics</option>
    </select><br><br>

    <label for="title">Title</label>
    <input type="text" name="title" required><br><br>

    <label for="description">Description:</label><br>
    <textarea name="text" rows="5" cols="60" required></textarea><br>

    <button type="submit">save</button>
</form>

<div id="table">
    <?php if (!empty($ads)): ?>
        <table>
            <thead>
            <tr>
                <th>email</th>
                <th>title</th>
                <th>category</th>
                <th>description</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ads as $ad): ?>
                <tr>
                    <td><?= $ad['email'] ?></td>
                    <td><?= $ad['title'] ?></td>
                    <td><?= $ad['category'] ?></td>
                    <td><?= $ad['description'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>empty</p>
    <?php endif; ?>
</div>
</body>
</html>