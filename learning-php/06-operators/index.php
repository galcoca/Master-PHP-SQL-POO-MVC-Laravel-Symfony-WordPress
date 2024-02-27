<?php

// Operadores aritméticos
$number1 = 65;
$number2 = 33;

echo 'Sum: '.($number1+$number2).'<br/>';
echo 'Rest: '.($number1-$number2).'<br/>';
echo 'Multiplication: '.($number1*$number2).'<br/>';
echo 'Division: '.($number1/$number2).'<br/>';
echo 'Module: '.($number1%$number2);

$year = 2019;

// $year = $year + 1;
$year++;

// $year = $year - 1;
$year--;

// $year = 1 + $year;
++$year;

// $year = 1 - $year;
--$year;

echo "<h1>$year</h1>";

// Operadores de asignación
$age = 55;

echo $age.'<br>';

// $age = $age + 5;
echo ($age/=5);
