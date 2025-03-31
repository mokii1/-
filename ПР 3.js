// 1. Створити масив чисел довільної довжини
let numbers = [5, 12, 8, 21, 7, 3, 17];

// 2. Обчислити середнє арифметичне значення елементів масиву
let sum = numbers.reduce((acc, num) => acc + num, 0); // Знаходимо суму
let average = sum / numbers.length; // Обчислюємо середнє арифметичне

// 3. Визначити максимальне та мінімальне значення в масиві
let maxValue = Math.max(...numbers); // Максимальне значення
let minValue = Math.min(...numbers); // Мінімальне значення

// 4. Відсортувати масив у порядку зростання
let sortedNumbers = [...numbers].sort((a, b) => a - b); // Копія масиву для сортування

// 5. Вивести результати
console.log(`Масив чисел: ${numbers}`);
console.log(`Середнє арифметичне: ${average}`);
console.log(`Максимальне значення: ${maxValue}`);
console.log(`Мінімальне значення: ${minValue}`);
console.log(`Відсортований масив: ${sortedNumbers}`);
