<?php
header("Refresh: 1");
$num = 4235423;
echo "The number is :{$num} <br>";
// $arr = array($num);

$check = strrev(34);

//conversion
echo "(int)  = " .gettype((int)$check);
echo "<br>";


//only int  ==== intval()
$string = "123abc";
$integer = intval($string);
echo 'intval()  =  ' .$integer;
echo "<br>";


//only float ===  floatval()
$string = "123.23a42b8";
$integer = floatval($string); // $integer becomes 123
echo 'floatval() = ' .$integer;
echo "<br>";

//convert specific type ===  settype()
$str1 = "2134";
settype($str1, "int");
settype($str1, "double");
echo gettype($str1);
echo "<br>";


//format string ===  sprintf()
$line = "My age is %d %f %s";
$age = 23;
$correct = sprintf($line, $age, $age,$age);
echo $correct . '<br>';






?>