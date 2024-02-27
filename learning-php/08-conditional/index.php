<?php

/*
// CONDICIONAL IF

if(condition){
   instructions 
}else{
   other instructions
}

// OPERADORES DE COMPARACIÓN
==  equal
=== identic
!=  different
<>  different
!== not identic
<   greather than
>   less than
>= greather or que
<= less or que
 
// OPERADORES LOGICOS
&&  AND Y
||  OR  O
!   NOT NO
and, or
*/

// Example 1
$color = "green";
if($color == "red"){
	echo "THE COLOR IS RED";
}else{
	echo "the color IS NOT red";
}
echo "<br>";

// Example 2
$year = 2019;
if($year >= 2019){
	echo "We are in 2019 in advance";
	
}else{
	echo "It's a previous 2019";
}

// Example 3
$name = "David Extremadura";
$city = "Madrid";
$continent = "Asia";
$age = 49;
$legalAge = 18;

if($age >= $legalAge){
	echo "<h1>$name has legal age</h1>";
	
	if($continent == "Europa"){
		echo "<h2>And is from $city</h2>";
	}else{
		echo "Is not european";
	}
}else{
	echo "<h2>$name doesn't have a legal age</h2>";
}

echo "<hr>";

// Example 4
$day = 2;

/*
if($day == 1){
	echo "Monday";
}else{
	if($day == 2){
		echo "Tuesday";
	}else{
		if($day == 3){
			echo "Wednesday";
		}else{
			if($day == 4){
				echo "Thursday";
			}else{
				if($day == 5){
					echo "Friday";
				}else{
					echo "Weekend";
				}
			}
		}
	}
}
*/

if($day == 1){
	echo "MONDAY";
}elseif($day == 2){
	echo "TUESDAY";
}elseif($day==3){
	echo "WEDNESDAY";
}elseif($day==4){
	echo "THURSDAY";
}elseif($day == 5){
	echo "FRIDAY";
}else{
	echo "WEEKEND";
}
echo "<hr/>";

// SWITCH
$day = 1;

switch ($day){
	case 1:
		echo "MONDAY";
		break;
	case 2:
		echo "TUESDAY";
		break;
	case 3:
		echo "WEDNESDAY";
		break;
	case 4:
		echo "THURSDAY";
		break;
	case 5:
		echo "FRIDAY";
		break;
	default:
		echo "WEEKEND";
}

echo "<hr/>";

// Example 5
$age1 = 18;
$age2 = 64;
$officialAge = 17;

if($officialAge >= $age1 && $officialAge <= $age2){
	echo "CAN WORK";
}else{
	echo "CANNOT WORK";
}

echo "<hr>";

$country = "Francia";
if($country == "Mexico" || $country == "España" || $country == "Colombia"){
	echo "Spanish is spoken in this country";
}else{
	echo "no Spanish is spoken";
}

// GOTO
goto executeHere;
echo "<h3>Instruction 1</h3>";
echo "<h3>Instruction 2</h3>";
echo "<h3>Instruction 3</h3>";
echo "<h3>Instruction 4</h3>";

$country = "Francia";
if($country == "Mexico" || $country == "España" || $country == "Colombia"){
	echo "Spanish is spoken in this country";
}else{
	echo "no Spanish is spoken";
}


executeHere:
echo "<h1>I have skipped 4 echos</h1>";