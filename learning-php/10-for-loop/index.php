<?php

/* FOR
for(variable counter, condition, updating counter){
	// BLOQUE DE INSTRUCCIONES
}
 */

/*
$result = 0;

for($i = 0; $i <= 100; $i++){
	$result += $i;
	echo "<p>$result</p>";
}

echo "<h1>The result is: $result</h1>";
*/

// Example multiplication table

if(isset($_GET['number'])){
	$number = (int)$_GET['number'];
}else{
	$number = 1;
}

echo "<h1>Multiplication table of the number $number</h1>";


for($counter = 1; $counter <= 10; $counter++){
	
	if($number == 45){
		echo "These prohibited operations cannot be displayed";
		break;
	}
	
	echo "$number x $counter = ".($number*$counter)."<br/>";
}

