<?php
// Функции empty и isset
// Результат каждой проверки выведите с помощью функции var_dump()

// 1. Проверьте существует ли переменная $a и не пустая ли она $a
$a = 0;
if (isset($a)) {
    echo "\$a существует";
}
echo "<br>";
if (empty($a)) {
    echo "\$a равняется 0, false или не определена";
} else {
    echo "\$a не пустой <br>";
}
echo "<br>";

// 2. Проверьте существует ли переменная $b и не пустая ли она $b
$b = false;
if (isset($b)) {
    echo "\$b существует";
}
echo "<br>";
if (empty($b)) {
    echo "\$b равняется 0, false или не определена";
} else {
    echo "\$b не пустой <br>";
}
echo "<br>";

// 3. Проверьте существует ли переменная $c и не пустая ли она $c
$c = null;
if (isset($c)) {
    echo "\$c существует";
} else {
    echo "\$c не существует";
}
echo "<br>";
if (empty($c)) {
    echo "\$c равняется 0, false или не определена";
} else {
    echo "\$c не пустой <br>";
}
echo "<br>";



// 4. Проверьте существует ли переменная $d и не пустая ли она $d
$d = [];
if (isset($d)) {
    echo "\$d существует";
} else {
    echo "\$d не существует";
}
echo "<br>";
if (empty($d)) {
    echo "\$d равняется 0, false или не определена ";
} else {
    echo "\$d не пустой <br>";
}
echo "<br>";

// 5. Проверьте каждый элемент массива $items существует ли он и не пустой ли он
$items = [
    [],
    1,
    null,
    'Привет',
    ''
];

foreach ($items as $val) {
    if (isset($val)) {
        echo "\$val существует <br>";
    } else {
        echo "\$val не существует <br>";
    }

    if (empty($val)) {
        echo "\$val равняется 0, false или не определена <br>";
    } else {
        echo "\$val не пустой <br>";
    }
}
