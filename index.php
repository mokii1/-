<?php
// Завдання 1
$name = "Тарас";
$age = "25";
$is_student = "студент";
echo "name: $name, age: $age, is_student: $is_student.\n";

// Завдання 2
$array = range(1, 5);
$sum = array_sum($array);
echo "Сума елементів масиву: $sum.\n";

// Завдання 3
$associative_array = [
    "name" => "Тарас",
    "email" => "shevchenkooo@example.com",
    "phone" => "123-456-789"
];
echo "<ul>";
foreach ($associative_array as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";

// Завдання 4
$age = 20; // Приклад значення віку
if ($age > 18) {
    echo "Вік більше 18.\n";
} else {
    echo "Вік 18 або менше.\n";
}

// Завдання 5
$grade = 85; // Приклад оцінки
if ($grade >= 90 && $grade <= 100) {
    echo "Оцінка: Відмінно.\n";
} elseif ($grade >= 70 && $grade <= 89) {
    echo "Оцінка: Добре.\n";
} elseif ($grade >= 50 && $grade <= 69) {
    echo "Оцінка: Задовільно.\n";
} else {
    echo "Оцінка: Незадовільно.\n";
}
?>
