<?php
// Функции по работе с массивами дан уже знакомый вам массив авторов и книг

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];


// 1. Используя подходящую встроенную функцию, извлеките из массива и выведите первого автора в библиотеке
$firstAuthor = array_shift($library['authors']);
var_dump($firstAuthor);


// 2. Используя подходящую встроенную функцию, выберите и выведите последнюю книгу
$lastBook = array_pop($library['books']);
var_dump($lastBook);


// 3. Используя подходящую встроенную функцию, получите массив содержащий список email всех авторов
$emails = array_keys($library['authors']);

var_dump($emails);
// 3. Используя подходящую встроенную функцию, определите, есть ли среди этих email 'martin_fauler@example.com'
$hasMartinFauler = array_key_exists('martin_fauler@example.com', $library['authors']);
var_dump($hasMartinFauler);


// 4. Используя подходящую встроенную функцию, определите, есть ли среди этих email 'vasya@example.com'
$hasVasyaPupkin = in_array('vasya@example.com', $library['authors']);
var_dump($hasVasyaPupkin);


// 5. Используя подходящую встроенную функцию, добавьте в библиотеку еще одну книгу Мартина Фаулера
$arr = ['title' => 'Предметно-ориентированные языки программирования',
'author' => 'martin_fauler@example.com',
'year' => 2017,
];
array_push($library['books'], $arr);
var_dump($library);


// 6. Используя подходящую встроенную функцию, добавьте в библиотеку на первую полку еще одну книгу Мартина Фаулера
$firstBook = ['titke' => 'NoSQL. Новая методология разработки нереляционных баз данных', 'author' => 'martin_fauler@example.com',
'year' => 2013];
array_unshift($library['books'], $firstBook);
var_dump($library);
