<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    // Зберігаємо ім'я та email у сесію
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    
    // Зберігаємо email у кукі на 7 днів
    setcookie('email', $email, time() + (7 * 24 * 60 * 60), "/");
    
    // Переадресація на profile.php
    header("Location: profile.php");
    exit();
}
?>

<form method="post" action="register.php">
    <label for="username">Ім'я:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Реєстрація</button>
</form>
