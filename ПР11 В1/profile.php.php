<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Отримуємо email із кукі
$cookie_email = isset($_COOKIE['email']) ? $_COOKIE['email'] : "немає даних";

echo "<h1>Профіль користувача</h1>";
echo "<p>Ім'я: $username</p>";
echo "<p>Email: $email</p>";
echo "<p>Ваш email запам'ятали: $cookie_email</p>";
?>

<form method="post" action="logout.php">
    <button type="submit">Вийти</button>
</form>
