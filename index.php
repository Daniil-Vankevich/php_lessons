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

	unset ($rabbit1);
	echo $rabbit1->y;
	echo $rabbit1->x;
	?>
	<br>

	<?php 
	
	echo Rabbit:: $num;

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
		echo $rabbit3->x . '<br>' . $rabbit3->y ;
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
			$rabbit6-> z = 7;
			$rabbit6-> w = 8;

			echo " z: {$rabbit6-> z}, w: {$rabbit6-> w}";
			?>
			<br>
			
			<!-- задача: расстояние между двумя точками -->
			
			<?
			echo " z: {$rabbit5-> z}, w: {$rabbit5-> w}";
			?>
			<br>
			<br>
			<?
			$result = sqrt(pow(($rabbit6-> z - $rabbit5-> z), 2) + pow(($rabbit6-> w - $rabbit5-> w), 2));

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
		} 
		else {
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
			class ConstAge {
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
			$rabbit10 -> x = 5;
			$rabbit10 -> y = 5;
			echo $rabbit10 -> x;
			?>
			<br>
			<?
			echo $rabbit10 -> y;
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



</body>

</html>