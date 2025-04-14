<?php
// Виведення повідомлення про успіх або помилки
$successMessage = "";
$errorMessages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Забезпечення захисту від XSS
    function cleanInput($data) {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }

    $name = cleanInput($_POST['name']);
    $email = cleanInput($_POST['email']);
    $message = cleanInput($_POST['message']);

    // Валідація полів
    if (empty($name)) {
        $errorMessages[] = "Поле 'Ім'я' не може бути порожнім.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Невалідна email-адреса.";
    }

    if (strlen($message) < 20) {
        $errorMessages[] = "Повідомлення має містити щонайменше 20 символів.";
    }

    // Виведення результатів
    if (empty($errorMessages)) {
        $successMessage = "Ваше повідомлення було успішно відправлено!";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма зворотного зв’язку</title>
    <style>
        form { width: 300px; margin: auto; }
        .error { color: red; font-size: 14px; }
        .success { color: green; font-size: 14px; }
    </style>
</head>
<body>
    <h2>Форма зворотного зв’язку</h2>
    <?php if ($successMessage): ?>
        <p class="success"><?php echo $successMessage; ?></p>
    <?php endif; ?>
    <?php if ($errorMessages): ?>
        <ul class="error">
            <?php foreach ($errorMessages as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="name">Ім'я:</label><br>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>
        <label for="message">Повідомлення:</label><br>
        <textarea name="message" id="message" rows="5" required></textarea><br><br>
        <button type="submit">Відправити</button>
    </form>
</body>
</html>
