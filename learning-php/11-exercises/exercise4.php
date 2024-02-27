<?php

/* 
Exercise 4. Collect two numbers by url(GET parameters) and do all the basic calculator operations(addition, subtraction, multiplication and division). 
  basic calculator operations (addition, subtraction, multiplication and division) on those two numbers.
  of these two numbers.
 */

if(isset($_GET['number1']) && isset($_GET['number2'])){
	
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];

	echo "<h1>Calculator</h1>";
	echo "Sum: ".($number1+$number2)." <br/>";
	echo "Rest: ".($number1-$number2)." <br/>";
	echo "Multiplication: ".($number1*$number2)." <br/>";
	echo "Division: ".($number1/$number2);
	
}else{
	echo "<h1>Enter the values correctly by URL</h1>";
}

