<?php

// 1. Выведите числа от 0 до 9
echo "Задание №1 <br><br>";

for($i; $i < 10; $i++) {
    echo "$i ";
}
echo "<br><br>";
// 2. Выведите 10 случайных чисел от 1 до 10
echo "Задание №2 <br><br>";

for($i = 0; $i < 10; $i++){
    $numbers = rand(0, 10);
    echo $numbers;
}
echo "<br><br>";

// 3. Создайте массив $items из 10 случайных целых значений от 0 до 9
echo "Задание №3 <br><br>";

$items = [];
for($i = 0; $i < 10; $i++){
    $numbers = rand(0, 9);
    $items[] = $numbers;
}

var_dump($items);
echo "<br><br>";

// 4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"
echo "Задание №4 <br><br>";
$numbers = [];
while(array_sum($numbers) < 100){
    $numbers[] =  rand(1, 9);
}
echo "Длина массива numbers = ".count($numbers);

echo "<br><br>";
// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}
echo "Задание №5 <br><br>";

for($i = 0; $i < count($numbers); $i++){
    if(($numbers[$i]) % 2 != 0) {
        $evenNumbers[] = $numbers[$i];
    } elseif(($numbers[$i]) % 2 == 0) {
        $oddNumbers[] = $numbers[$i];
    }
}
echo "Общая сумма массива numbers = ".array_sum($numbers);
echo "<br>";
echo "Из нее часть, которая приходится на четные числа = ". array_sum($oddNumbers);
echo "<br>";
echo "И часть из нечетных чисел = ". array_sum($evenNumbers);

