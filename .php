<?php
// Определение массива строк с текстом
let texts = [
    "Это первая строка",
    "Здесь есть более длинная строка",
    "Еще одна короткая строка",
    "Самая длинная строка будет эта"
];

// Нахождение самой длинной строки в массиве
let longestString = "";
for (let text of texts) {
    if (text.length > longestString.length) {
        longestString = text;
    }
}

// Вывод самой длинной строки
console.log("Самая длинная строка: " + longestString);
?>