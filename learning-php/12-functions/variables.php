<?php

/* 
Local variables: These are defined within a function and cannot be used outside of the function. They are only available inside the function, unless we use a return statement.
 *  
Global variables: These are declared outside of a function and are available both inside and outside of functions.
 */

// Global variable
$phrase = "Neither geniuses are so genius, nor mediocre people so mediocre";

echo $phrase;

function helloWorld(){
	global $phrase;
	echo "<h1>$phrase</h1>";

	$year = 2019;
	echo "<h1>$year</h1>";

	return $year;
}

echo helloWorld();

// Variable functions

function goodMorning(){
	return "<h1>Hello! Good morning :)</h1>";
}

function goodAfternoon(){
	return "<h1>Hey!! How was lunch??</h1>";
}

function goodNight(){
	return "<h1>Are you going to sleep already? Good night!!</h1>";
}

$schedule = "Night";

$myFunction = "buenas".$schedule;

?>
