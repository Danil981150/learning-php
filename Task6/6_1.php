<?php

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

$title = 'Библиотека программиста';

$red = (bool) rand(0, 1);



?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<style type="text/css">
		.red {
			color: red;
		}
		
		.grey {
			background-color: #ddd;
		}

		body {
			margin: 0 40px;
		}
		p:not(:last-child) {
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<?php
	if ($red) {
		echo "<h1 class='red'>$title</h1>";
	} else {
		echo "<h1>$title</h1>";
	}
	?>
	<div>Авторов на портале <Укажите количество авторов>
	</div>
	<!-- Выведите все книги -->
	<p class="grey">Книга <b><?php echo $library['books'][0]['title'] ?></b>, ее написал <?= $library['authors']['martin_robert@example.com']['name'] . " " . $library['authors']['martin_robert@example.com']['birthYear']?> <a href="#"><?=$library['books'][0]['author'] ?></a> </p>
	<p>Книга <b><?php echo $library['books'][1]['title'] ?></b>, ее написал <?= $library['authors']['john_makkormik@example.com']['name'] . " " . $library['authors']['john_makkormik@example.com']['birthYear']?> <a href="#"><?=$library['books'][1]['author']?></a> </p>
	<p class="grey">Книга <b><?php echo $library['books'][2]['title'] ?></b>, ее написал <?= $library['authors']['martin_robert@example.com']['name'] . " " . $library['authors']['martin_robert@example.com']['birthYear']?> <a href="#"><?=$library['books'][0]['author']?></a> </p>
	<p>Книга <b><?php echo $library['books'][3]['title'] ?></b>, ее написал <?= $library['authors']['martin_fauler@example.com']['name'] . " " . $library['authors']['martin_fauler@example.com']['birthYear']?> <a href="#"><?=$library['books'][3]['author']?> </a></p>

</body>

</html>