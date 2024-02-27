<?php

/* 
Exercise 5. To make a program that shows all the numbers between two numbers
  that arrive to us by the URL($_GET)
 */

if(isset($_GET['number1']) && isset($_GET['number2'])){
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	
	if($number1 < $number2 ){
		for($i = $number1; $i <= $number2; $i++){
			echo "<h4>$i</h4>";
		}
	}else{
		echo "<h1>The number 1 must be less than the number 2.</h1>";
	}
	
}else{
	echo "<h1>The GET parameters do not exist</h1>";
}
