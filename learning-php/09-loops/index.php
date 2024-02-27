<?php

/* WHILE LOOP

Control structure that iterates or repeats the execution of a series of instructions as many times as necessary, based on a condition. as many times as necessary, based on a condition.
 
 while(condition){
	instructions
    other instruction
 } 
 
 */

$number = 0;

while($number <= 100){
	echo $number;
	
	if($number != 100){
		echo ", ";
	}
	
	$number++;
}

echo "<hr/>";

// Example

if(isset($_GET['number'])){
	$number = (int)$_GET['number'];
}else{
	$number = 1;
}

echo "<h1>Multiplication table of the number $number</h1>";

$counter = 1;
while($counter <= 10){
	echo "$number x $counter = ".($number*$counter)."<br/>";
	$counter++;
}

echo "<hr/>";

/* DO WHILE
do{
	// BLOQUE DE INSTRUCCIONES
}while(condition);
 */

$age = 17;
$counter = 1;

do{
	echo "You have access to private premises $counter <br/>";
	$counter++;
}while($age >= 18 && $counter <= 10);
