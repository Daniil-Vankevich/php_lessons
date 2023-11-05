<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php echo "New page"; ?> </title>
</head>

<body>

	<h1><?php
			echo "Current datatime"; //current data input in page
			?>
	</h1>

	<?php
	$name = 'GeekBrains user';
	echo "hello, $name!";
	?>
	<p> <?php
			define('MY_NAME', 'Daniil');
			echo MY_NAME;
			?>
	</p>

	<div>
		<?php
		define('MY_CONST', 100);
		echo MY_CONST;
		?>
	</div>

	<?php
	$a = 69;
	echo "$a";
	?>
	<br>
	<?
	$a = (bool) $a;
	echo '$a';
	?>
	<br>
	<?
	$a = (int) $a;
	print($a);
	?>
	<br>

	<?php

	// include 'newincludes.php';

	?>

	<!-- ............................................ -->

	<?php

	$login = 'dan2002';
	echo "Привет, '$login'";
	?>
	<br>
	<?
	echo "Салями, \"$login\"..........";

	echo "Салями, \$login";

	?>

	<!-- .............function isset............................... -->
	<br>
	<?php
	$user_login = 'strongAndHigh';
	if (isset($user_login))
		echo "Variable is true, $user_login";
	else
		echo "Variable is not true (it's false)";
	?>

	<br>
	<!-- .............function empty............................... -->
	<?php
	$user_pass = "1223456";
	if (empty($user_pass))
		echo "Sring is empty";
	else
		echo "This string is not empty";
	?>

	<!-- .............function gettype............................... -->
	<?php
	//$gettype = gettype(123456789.5);
	echo $gettype;
	?>

	<!-- .............условное ветвление вычитание из вещественного числа целого..................... -->
	<br>

	<?php
	$num_test = 71;

	$check = (float) ($num_test / 2) - (int) ($num_test / 2);

	if ($check) {
		echo "Number is odd";
	} else {
		echo "Numver is even";
	}
	?>

	<br>
	<!-- .............округление............................... -->

	<?php
	$frger = floor(69.569869752782);
	echo $frger;
	?>



	<!-- Объекты и классы.................... -->

	<?php

	include 'newincludes.php';

	$rabbit1 = new Rabbit;
	$rabbit1->x = 13;
	$rabbit1->y = 9;
	echo $rabbit1->x;
	?>
	<br>
	<?php
	echo $rabbit1->y;

	unset($rabbit1);
	echo $rabbit1->y;
	echo $rabbit1->x;
	?>
	<br>

	<?php

	echo Rabbit::$num;

	?>

	<br>

	<!-- Переопределение переменных и ссылка объектов на одну и ту же область памяти -->

	<?php

	$first = $second = 2;
	$first = 5;
	echo $first;
	echo $second;

	?>

	<br>
	<br>

	<?php
	$rabbit3 = new Rabbit;
	$rabbit3->x = 69;
	$rabbit3->y = 69;

	$rabbit4 = $rabbit3;
	$rabbit4->x = 77;
	$rabbit4->y = 77;
	echo $rabbit3->x . '<br>' . $rabbit3->y;
	?>

	<br>
	<br>

	<?php
	echo "x: {$rabbit3->x}, y: {$rabbit3->y}"
	?>

	<!-- Переменные также можно делать ссылками, если использовать знак амперсанта -->

	<br>

	<?php
	$daniil = 21;
	$newnameismylife = &$daniil;
	$newnameismylife = 22;
	echo $daniil;
	?>

	<!-- клонирование объектов используя ключевое слово "clone" -->

	<br>
	<br>

	<?php
	$rabbit5 = new Rabbit;
	$rabbit5->z = 3;
	$rabbit5->w = 5;

	$rabbit6 = clone $rabbit5;
	$rabbit6->z = 7;
	$rabbit6->w = 8;

	echo " z: {$rabbit6->z}, w: {$rabbit6->w}";
	?>
	<br>

	<!-- задача: расстояние между двумя точками -->

	<?
	echo " z: {$rabbit5->z}, w: {$rabbit5->w}";
	?>
	<br>
	<br>
	<?
	$result = sqrt(pow(($rabbit6->z - $rabbit5->z), 2) + pow(($rabbit6->w - $rabbit5->w), 2));

	echo $result;
	?>

	<br>
	<br>

	<?php

	if (define('NUMBERIC', 69)) {

		echo "Constant NUMBERIC is created now and have a value 69";
	} else {
		echo "Morgenstern";
	};

	?>

	<br>
	<?
	if (define('NUMBERIC', 69)) {

		echo "Constant NUMBERIC is created now and have a value 69";
	} else {
		echo "Morgenstern";
	}

	?>


	<!-- использование функции constant для присвоения динамического имени переменной -->

	<br>
	<br>
	<?php

	$numConst = mt_rand(1, 5);
	$nameConst = "VALUE($numConst)";
	define($nameConst, $numConst);
	echo constant($nameConst);

	?>
	<br>

	<?php
	echo 'ИМЯ ФАЙЛА ' . __fILE__ . '<br>';
	echo 'СТРОКА ' . __LINE__ . '<br>';
	?>

	<br>
	<br>
	<br>

	<?php
	class ConstAge
	{
		const AGE = "string";
	}
	if (defined('ConstAge::AGE')) {
		echo "Constant is defined";
	} else {
		echo "Constant is undefined!";
	}
	?>

	<br>
	<br>
	<br>

	<?php
	$rabbit10 = new Rabbit;
	$rabbit10->x = 5;
	$rabbit10->y = 5;
	echo $rabbit10->x;
	?>
	<br>
	<?
	echo $rabbit10->y;
	?>

	<br>
	<br>
	<br>

	<?php
	$num5 = 8;
	$num5 = $num5 . '+7';
	echo "Выводим на экран число " . $num5 . " другой текст ";
	?>

	<br>
	<br>
	<br>

	<?php
	$num6 = 6;
	$num6 .= '+9';
	echo "Выводим на экран число " . $num6 . " другой текст ";
	?>

	<br>
	<br>
	<br>

	<?php
	$num6 = 9;
	$num6 .= '+3';
	echo "Выводим на экран число ", $num6, " другой текст ";
	?>

	<!-- использование арифметических операторов -->
	<br>
	<br>
	<br>

	<?php

	if (50 % 2) {

		echo "не четное число";
	} else {
		echo "число четное";
	}

	?>

	<!-- Условный оператор if -->
	<br>
	<br>
	<br>

	<?php
	$character = "PHP";
	if ($character == "JavaScript") {
	?>
		<h1>Язык программирования JavaScript</h1>
	<?php
	} elseif ($character == "PHP") {
	?>
		<h1>Язык программирования PHP</h1>
	<?php
	} elseif ($character == "C++") {
	?>
		<h1>Язык программирования C++</h1>
	<?php
	} else {
	?>
		<h1>I dont know what is language, mann</h1>
	<?php
	}
	?>

	<!-- тернарный оператор х ? у : z -->
	<br>
	<br>
	<br>

	<?php

	$x = 77;

	$x5 = ($x < 0) ? $x : -$x;

	echo $x5;
	?>

	<br>

	<?

	$is_user_logged_in = true;
	$title = $is_user_logged_in ? "Logout" : "Login";
	echo $title;
	?>

	<!-- Использование метки goto для перехода между кодом  -->

	<br>

	<?php

	$cats = 0;
	last:
	$cat = 5;
	$cat = $cat ?? 1;
	echo $cat;
	$cats++;
	if ($cats > 6) {
		goto end;
	}



	goto last;
	end:
	?>


	<!-- Switch Case конструкция  -->

	<br>
	<br>
	<br>

	<?php

	$newConstruct = 'php';

	switch ($newConstruct) {
		case 'php':
	?>
			<h1> Язык PHP </h1>
		<?php
			break;
		case 'js':
		?>
			<h1>Язык JavaScript</h1>
		<?php
			break;
		case 'C#':
		?>
			<h1>Язык C#</h1>
		<?php
			break;
		default:
		?>
			<h1>Неизвестный человечку язычок</h1>
	<?php
			break;
	}

	?>

	<!-- Switch Case конструкция  -->

	<br>
	<br>
	<br>

	<?php
	$numCase = 800;
	switch (true) {
		case ($numCase > 0 && $numCase <= 100):
			echo "$numCase меньше 100 и больше 0";
			break;
		case ($numCase > 700 && $numCase <= 780):
			echo "$numCase меньше 780 и больше 700";
			break;
		default:
			echo "$numCase вне диапазона значений";
			break;
	}
	?>

<!-- Функции получения инфы из файла и добавление в вфайл  -->

<h2>Запись информации в файл</h2>

<?php 
$writeFile = file_get_contents('check.txt');
$writeFile .= "\nВот какую интересную экскурсию нам провели в музее А.П. Чехова!";
file_put_contents('check1' . '.txt', $writeFile);
// echo $writeFile;
?>
<br>
<?
$writeNewFile = file_get_contents('check1.txt');
echo $writeNewFile;
?>
<br>
<?
//$date = date("Y-m-d-H-i-s") . '.txt';
//file_put_contents($date, $writeNewFile);
?>
<br>
<?
//$writeFileDate = file_get_contents('2023-11-05-15-51-09.txt');
//echo $writeFileDate;
?>

	<!-- Циклы, простое число  -->

	<br>
	<br>

	<?php 
	
	$i = 0;

	while ($i <= 10) {
		$i++;
		if ($i == 6) {
			continue;
		}
		if ($i > 10) {
			break;
		}
		echo "$i<br>";
	}
	
	?>

	<br>
	<br>

	<?php
	$wer = 19;
	$rew = 2;
	$rez = $wer % $rew;
	echo $rez;
	?>

	<!-- Циклы, простое число  -->

	<br>
	<br>

	<?php 

	for($i = 2; $i < 10; $i++) {
		for($j = 2; $j < $i; $j++) {
			if (($i % $j) != 0) {
				continue;
			} else {
				$flag = true;
				break;
			}
		}
		if (!$flag) {
			echo "$i";
		}  
		$flag = false;
	}
	
	?>

</body>

</html>