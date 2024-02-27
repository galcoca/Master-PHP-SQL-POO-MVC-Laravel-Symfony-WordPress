<?php

/* 
FUNCTIONS: 
A function is a set of instructions grouped together under a specific name
and that can be reused only by invoking the function as many times as we want.
we want.

function myFunctionName($parameter){
	// BLOCK / SET OF INSTRUCTIONS
}
 
myFunctionName($my_parameter);
myFunctionName($my_parameter);
*/

// Example 1
function showNames(){
	echo "Víctor Robles <br/>";
	echo "Antonio Robles <br/>";
	echo "Miguel Robles <br/>";
	echo "Jesus Robles <br/>";
	echo "<hr/>";
}

// Call Function
/*
showNames();
showNames();
showNames();
 */


// Example 2
function table($number){
	echo "<h3> Multiplication table of the number: $number </h3>";
	
	for($i = 1; $i <= 10; $i++){
		$operation = $number*$i;
		echo "$number x $i = $operation <br/>";
	}
}

/*
if(isset($_GET['number'])){
	table($_GET['number']);
	table(2);
	table(9);
}else{
	echo "No number to show the table";
}
*/

/*
for($i = 0; $i <= 10; $i++){
	table($i);
}
 */

// Example 3

function calculator($number1, $number2, $bold = false){
	
	// Conjunto de instrucciones a ejecutar
	$sum = $number1 + $number2;
	$rest = $number1 - $number2;
	$multi = $number1 * $number2;
	$division = $number1 / $number2;
	
	$textString = "";
	
	if($bold){
		$textString .= "<h1>";
	}
	
	$textString .= "Sum: $sum <br/>";
	$textString .= "Rest: $rest <br/>";
	$textString .= "Multiplication: $multi <br/>";
	$textString .= "Division: $division <br/>";
	
	if($bold){
		$textString .= "</h1>";
	}
	
	$textString .= "<hr/>";
	
	return $textString;
}

echo calculator(10, 20, true);

// Example 4

function getFirstname($firstname){
	$text = "The first name is: $firstname";
	return $text;
}

function getLastname($lastname){
	$text = "The last name is: $lastname";
	return $text;
}

function returnName($firstname, $lastname){
	$text = getFirstname($firstname)
			 ."<br/>".
			 getLastname($lastname);
	
	return $text;
}

echo returnName("Victor", "Robles");
// echo getFirstname("Paco");

