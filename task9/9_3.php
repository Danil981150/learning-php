<?php
// инициализация переменных
$lenghtArr = rand(3, 20);
$numbers = [];
$sum = 0;
$sum1 = 0;


// наполнения массива
for($i = 0; $i < $lenghtArr; $i++) {
    $numbers[] = rand(0, 10);
}

// первый способ решения задачи
foreach($numbers as $key => $val) {
    // нахождение нечетных ключей массива
    if($key % 2 != 0) {
        $sum += $val;
    }
}
// вывод решения задачи
echo "Сумма нечетных элементов равно: $sum <br>";


// второй способ решения задачи
for($i = 1; $i < $lenghtArr; $i += 2) {
    $sum1 += $numbers[$i];
}

// вывод решения задачи
echo "Сумма нечетных элементов равно: $sum1";

