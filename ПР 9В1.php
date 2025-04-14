<?php

// Масив користувачів
$users = [
    ['name' => 'Anna', 'age' => 25, 'email' => 'anna@example.com'],
    ['name' => 'Bob', 'age' => 17, 'email' => 'bob@example.com'],
    ['name' => 'Catherine', 'age' => 30, 'email' => 'catherine@example.com'],
    ['name' => 'Daniel', 'age' => 19, 'email' => 'daniel@example.com'],
    ['name' => 'Eve', 'age' => 16, 'email' => 'eve@example.com'],
    ['name' => 'Frank', 'age' => 20, 'email' => 'frank@example.com'],
    ['name' => 'Grace', 'age' => 18, 'email' => 'grace@example.com'],
    ['name' => 'Hannah', 'age' => 27, 'email' => 'hannah@example.com'],
    ['name' => 'Ian', 'age' => 21, 'email' => 'ian@example.com'],
    ['name' => 'Jack', 'age' => 22, 'email' => 'jack@example.com']
];

// Функція для фільтрації користувачів (18+)
function filterAdults(array $users): array {
    return array_filter($users, function ($user) {
        return $user['age'] >= 18;
    });
}

// Callback для порівняння довжини імен
function compareByNameLength($a, $b): int {
    return strlen($a['name']) <=> strlen($b['name']);
}

// Фільтрація та сортування
$adultUsers = filterAdults($users);
usort($adultUsers, 'compareByNameLength');

// Виведення у HTML-таблиці
echo "<table border='1' style='border-collapse: collapse; width: 50%; text-align: left;'>";
echo "<tr><th>Name</th><th>Age</th><th>Email</th></tr>";
foreach ($adultUsers as $user) {
    echo "<tr>";
    echo "<td>{$user['name']}</td>";
    echo "<td>{$user['age']}</td>";
    echo "<td>{$user['email']}</td>";
    echo "</tr>";
}
echo "</table>";

// Клас атрибута (тільки для PHP 8+)
if (PHP_VERSION_ID >= 80000) { // Перевірка версії PHP
    #[Attribute]
    class OnlyAdults {
        public function __construct() {
            error_log("Фільтрація викликана " . date('Y-m-d H:i:s'));
        }
    }

    // Функція з атрибутом
    #[OnlyAdults]
    function filterAdultsWithLogging(array $users): array {
        return array_filter($users, function ($user) {
            return $user['age'] >= 18;
        });
    }
}

?>
