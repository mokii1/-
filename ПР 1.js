// 1. Оголошення змінних з різними типами даних
let integer = 10; // ціле число
let float = 3.14; // дійсне число
let string = "Hello, World!"; // рядок
let booleanValue = true; // булеве значення

// Виведення початкових значень і типів
console.log(`integer: ${integer}, тип: ${typeof integer}`);
console.log(`float: ${float}, тип: ${typeof float}`);
console.log(`string: "${string}", тип: ${typeof string}`);
console.log(`booleanValue: ${booleanValue}, тип: ${typeof booleanValue}`);

// 2. Зміна значень та перевірка типів
integer = "42"; // змінюємо тип на рядок
console.log(`integer: "${integer}", тип: ${typeof integer}`);

float = false; // змінюємо тип на булеве значення
console.log(`float: ${float}, тип: ${typeof float}`);

// 3. Перетворення значень між типами
let concatenation = integer + string; // конкатенація числа (як рядка) та рядка
console.log(`concatenation: "${concatenation}", тип: ${typeof concatenation}`);

let booleanToNumber = Number(booleanValue); // true перетворюється у 1
console.log(`booleanToNumber: ${booleanToNumber}, тип: ${typeof booleanToNumber}`);

let stringToNumber = Number(integer); // рядок "42" перетворюється у число 42
console.log(`stringToNumber: ${stringToNumber}, тип: ${typeof stringToNumber}`);

// 4. Створення об'єкта з різними типами даних
let myObject = {
    integerProperty: 100,
    floatProperty: 2.71,
    stringProperty: "Object String",
    booleanProperty: false
};

// Виведення об'єкта у вигляді JSON
console.log("Об'єкт у вигляді JSON:");
console.log(JSON.stringify(myObject, null, 4));
