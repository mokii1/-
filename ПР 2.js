// 1. Запитуємо вік користувача через prompt()
let age = prompt("Будь ласка, введіть ваш вік:");

// Перетворюємо введене значення у число
age = Number(age);

// 2. Використовуємо умовну конструкцію if...else для виведення відповідного повідомлення
if (age < 18) {
    alert("Вам заборонено вхід");
} else if (age >= 18 && age <= 65) {
    alert("Ласкаво просимо!");
} else if (age > 65) {
    alert("Будь ласка, будьте обережні!");
} else {
    alert("Введіть коректний вік!");
}
