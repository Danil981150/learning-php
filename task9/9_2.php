<pre>
<?php
// инициализация переменных
$values = [];
$index = 0;
// заполняем массив случайными числами
for ($i = 0; $i < 10; $i++) {
    $values[] = rand(0, 100);
}
// инициализируем переменную min
$min = $values[0];
// выводим массив 
var_dump($values);

foreach($values as $key => $val) {
    // сравниваем каждое значение массива с найденным минимальным значением
    if($min > $val) {
        $min = $val; // присваеваем в переменную min найденное минимальное значение
        $index = $key; // присваем в index ключ минимального значения
    }
}
// выводим решение задачи
 echo "Минимальное число $min на позиции $index";
