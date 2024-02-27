<?php

/* 
 Show an HTML table with the multiplication tables from 1 to 10.
 */

echo "<table border='1'> <tr>"; // table start

echo "<tr>"; // start row 1
	for($theHeader = 1; $theHeader <= 10; $theHeader++){
		echo "<td>Tabla del $theHeader</td>";
	}
echo "</tr>"; // end of row 1

echo "<tr>"; // start row 1 and columns
for($i = 1; $i <= 10; $i++){
	echo "<td>"; 
		
		for($x = 1; $x <= 10; $x++){
			echo "$i x $x = ".($i*$x)."<br>";
		}
	
	echo "</td>";
}
echo "</tr>"; // end row 2 of columns


echo "</table>"; // end of table

