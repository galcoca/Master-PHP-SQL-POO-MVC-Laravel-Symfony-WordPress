<?php

/* 
Exercise 3. Write a program that prints on the screen the squares (a number multiplied by itself) of the first 40 natural numbers.
 (a number multiplied by itself) of the first 40 natural numbers.
 PS: Use while loop.
 */

/*
$counter = 0;
while($counter <= 40){
	$square = $counter*$counter;
	echo "<h3>The square of $counter is $square</h3>";
	
	$counter++;
}
 */

for($counter = 0; $counter <= 40; $counter++){
	$square = $counter*$counter;
	echo "<h3>The square of $counter is $square</h3>";
}



