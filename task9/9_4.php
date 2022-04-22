<?php
//инициализация переменных
$city1 = rand(10, 500);
$city1Radius = rand(5, 200);
$startCity1 = $city1 - $city1Radius;
$endCity1 = $city1 + $city1Radius;
$city2 = rand(500, 1000);
$city2Radius = rand(5, 200);
$startCity2 = $city2 - $city1Radius;
$endCity2 = $city2 + $city1Radius;
$cars = [];

// вывод условия задачи
echo "Центр города 1: $city1. А его радиус: $city1Radius <br>";
echo "Центр города 2: $city2. А его радиус: $city2Radius <br>";
echo "<br>";

// определяем на како км едет машина
for($i = 0; $i < 10; $i++) {
    $cars[] = rand(0, 1000);
}
// выводим для наглядности на каком км едет машина
foreach($cars as $key => $val) {
    echo ($key + 1)." ". $val . "<br>";
}

echo "<br>";

//проводим проверку и выводим решение задачи
foreach($cars as $key => $val) {
    if($val >= $startCity1 && $val <= $endCity1) {
        echo "Машина ".($key+1). " едет по городу на $val км скоростью не более 70 <br>";
    } else {
        echo "Машина ".($key+1). " едет за городом на $val км скоростью не более 90 <br>";
    }
}