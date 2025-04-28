<?php
session_start();

// Очищення сесії
session_unset();
session_destroy();

// Видалення кукі email
setcookie('email', '', time() - 3600, "/");

// Повернення на index.php
header("Location: index.php");
exit();
?>
