<?php

// Debugging
$name = "Víctor Robles";
var_dump($name);

// Dates
echo date('d-m-Y');
echo "<br/>";
echo time();

// Mathematics
echo "<br/>";
echo "Square root of 10: " . sqrt(10);

echo "<br/>";
echo "Random number between 10 and 40: " . rand(10, 40);

echo "<br/>";
echo "PI number: " . pi();

echo "<br/>";
echo "Round: " . round(7.891234, 1);

// More general functions
echo "<br/>";
echo gettype($name);

// Type checking
echo "<br/>";
if (is_string($name)) {
    echo "This variable is a string";
}

echo "<br/>";
if (!is_float($name)) {
    echo "The variable name is not a number with decimal places.";
}

// Checking if a variable exists
echo "<br/>";
if (isset($name)) {
    echo "Variable exists";
} else {
    echo "Variable does not exist";
}

// Trimming spaces
echo "<br/>";
$frase = "    my content    ";
var_dump(trim($frase));

// Removing variables / indices
$year = 2020;
unset($year);

// Checking if a variable is empty
$texto = " ff  ";

if (empty(trim($texto))) {
    echo "The text variable is empty";
} else {
    echo "The text variable HAS CONTENT";
}
echo "<br/>";

// Counting characters in a string
$cadena = "12345";
echo strlen($cadena);

echo "<br/>";

// Finding a character
$frase = "La vida es bella";
echo strpos($frase, "i32313");
echo "<br/>";

// Replacing words in a string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

// Uppercase and lowercase
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);

?>
