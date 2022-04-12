<?php
// Функции по работе со строками

// 1. Уберите слеши "/" в начале и в конце строки, если они есть
$url = '/some/path/to/page/';
// if(str_starts_with($url, '/') && str_ends_with($url, '/')){
//     $newUrl = trim($url, '/');
//     echo $newUrl;
// }
echo trim($url, '/');

// 2. Уберите из строки все запятые и точки, а пробелы замените на тире
$line = 'Good news, everyone.';
$search = [',', '.', ' '];
$replace = ['', '', '-'];
$newLine = str_replace($search, $replace, $line);
echo $newLine;

// 3. Посчитайте и выведите длину строки переменной $line
$length = 0;
var_dump(strlen($length));


// 4. Найдите на какой позиции находится запятая в строке $line и выведите это значение
$position = strpos($line,',');
var_dump($position);


// 5. Вырежьте из строки $line подстроку после запятой до предпоследнего символа с конца
$stringComma = strpos($line, ', ') + 1;
$resultLine = substr($line, $stringComma, -2);
var_dump($resultLine);
