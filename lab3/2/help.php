<?php
session_start();

if(isset($_SESSION['userData'])) {
    echo '<ul>';
    foreach ($_SESSION['userData'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    echo '</ul>';
}
else echo "Не найдено!";
?>
