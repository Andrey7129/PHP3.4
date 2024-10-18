<?php

// Задание: Работа с функциями и их особенностями в PHP 

// Задание 1: Определение простой функции и возвращаемые значения  
// Инструкция: Создайте функцию  multiply , которая принимает два числа  
// в качестве параметров, умножает их и возвращает результат.  
//  Подсказка: Функции определяются с помощью ключевого слова  function . 
// Для возвращения результата используется  return 
//  function multiply(__________) {      ________ $a * $b;  
//  }  -->
//  Пример вызова: echo multiply(3, 4); // Ожидаемый результат: 12 

function multiply($a, $b) {
    return $a * $b;
}
echo multiply(3, 4); // Ожидаемый результат: 12

// Задание 2: Область видимости переменных 
// Инструкция: 
// Создайте переменную  $globalVar  с числом 50 за пределами функции. Внутри функции 
// sumGlobal  создайте локальную переменную  $localVar  со значением 100 и сложите ее с $globalVar
//  Выведите результат. 
// Подсказка:Для доступа к глобальной переменной внутри функции используйте ключевое слово global . 

$globalVar = 50;
function sumGlobal() {
    global $globalVar;
    $localVar = 100;
    return $globalVar + $localVar;
}
//Пример вызова:
echo sumGlobal(); // Ожидаемый результат: 150

// Задание 3: Рекурсия 
// Инструкция: Напишите рекурсивную функцию  factorial , которая вычисляет факториал числа. 
// Факториал числа  n  — это произведение всех чисел от 1 до  n . 
// Подсказка: 
// Рекурсия — это вызов функции внутри самой себя. Не забудьте добавить условие для остановки рекурсии.   

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
    }
echo factorial(5); // Ожидаемый результат: 120

// Задание 4: Анонимные функции 
// Инструкция:Создайте анонимную функцию, которая принимает строку и выводит её в верхнем регистре. 
// Передайте эту функцию в качестве аргумента для функции  array_map  для обработки массива строк. 
// Подсказка: Анонимные функции можно определить без имени, используя  function . 
// Функция  array_map принимает анонимную функцию и массив для обработки. 

$array = ["apple", "banana", "cherry"];

$result = array_map(function($array) {
return strtoupper($array);
}, $array);
print_r($result); // Ожидаемый результат: ["APPLE", "BANANA", "CHERRY"] 

// Задание 5: Стрелочные функции 
// Инструкция: Напишите стрелочную функцию, которая принимает два числа и возвращает их сумму. 
// Подсказка:Стрелочные функции — это сокращённая форма анонимных функций, записываемая с помощью fn . 

$sum = fn($a, $b) => $a + $b;
echo $sum(3, 4); // Ожидаемый результат: 7


// Задание 6: Замыкания / Closure 
// Инструкция: 
// Создайте функцию  counter , которая возвращает замыкание. Замыкание должно увеличивать счётчик 
// на 1 при каждом вызове.   
// Подсказка: Замыкание сохраняет доступ к переменным, объявленным в его внешней области. 

function counter() {
    $count = 0;

    return function() use (&$count) {
        $count++;
        return $count;
    };
    }
    $myCounter = counter();
    echo $myCounter(); // Ожидаемый результат: 1
    echo $myCounter(); // Ожидаемый результат: 2

// Задание 7: Генераторы и оператор yield 
// Инструкция: 
// Напишите генератор, который возвращает числа от 1 до 5 с помощью оператора  yield . 
// Подсказка: 
// Генераторы используют оператор  yield  вместо  return  для возврата значений по одному за раз. 

function generateNumbers() {
    for ($i = 0; $i < 5; yield $i) {
        ++$i;
    }
}
$generator = generateNumbers();
foreach ($generator as $number) {
    echo $number. " "; // Ожидаемый результат: 1 2 3 4 5
}

// Задание 8: Использование встроенных функций 
// Инструкция: 
// Используя встроенные функции PHP, найдите минимальное и максимальное значения в массиве чисел. 
// Подсказка: 
// Используйте функции  min()  и  max()  для поиска минимальных и максимальных значений. 
// $array = [3, 7, 2, 8, 4, 10, 1];  
  
$array = [3, 7, 2, 8, 4, 10, 1];
$minValue = min($array);
$maxValue = max($array);
echo "Минимум: " , $minValue; "\n";// Ожидаемый результат: Минимум: 1
echo "Максимум: " , $maxValue; "\n"; // Ожидаемый результат: Максимум: 10
echo "<br>";



// $minValue = ______($array);  
// $maxValue = ______($array);  
  
// echo "Минимум: " . ______ . "\n"; // Ожидаемый результат: Минимум: 1 echo "Максимум: " . ______ . "\n"; // Ожидаемый результат: Максимум: 10 
?>