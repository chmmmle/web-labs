<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["text"])) {
        $text = $_POST["text"];
        $word_count = str_word_count($text);
        $char_count = strlen($text);
        echo "<h2>Счетчик:</h2>";
        echo "<p>Кол-во слов:$word_count</p>";
        echo "<p>Кол-во символов:$char_count</p>";
    }
}
?>
</body>
</html>
