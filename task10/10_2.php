<?php
// Исправьте типовые ошибки

// 1. Использование констант вместо строк
define("TODAY_IS_MONDAY", false);

// 2. Указание констант вместо ключей в ассоциативных массивах 
$data  = [
    "FIRST_KEY" => 1,
];
echo $data["FIRST_KEY"];

// 3. Использование переменных, которые еще не объявлены
$x = rand(1, 4);
$a = 0;

if ($x > 2) {
    echo $a;
}

// 4. Переопределение значений в суперглобальных переменных
if (($x > 2) && $_GET['show_info'] == 'y') {
    echo 'done';
}

?>
// 5. Попытка обрамить условием большую часть html кода, чем это нужно
<div class="some-div-class">
    <a href="#" class="some-a-class"> <?= ($x > 2) ? "На главную" : "О компании" ?></a>
</div>

// 6. Вывод тегов оператором echo
<?php if ($x > 2) {?>
    <p>Hello World</p>
<?php }?>
<?php
// 7. Ошибки, связанные с применением bool
$value = (bool) rand(0, 1);
if ($value) {
    echo '>';
}

// 8. Ошибки, связанные с применением bool
$result = $x > 2;

// 9 Занесение в переменную одного типа значения другого типа
$a = true;
if ($x > 2) {
    $b = 0;
} else {
    $c = 'ok';
}
