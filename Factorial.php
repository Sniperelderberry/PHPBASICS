<?php

function factorial($num){
    if($num == 0){
        return 1;
    } else{
        return $num * factorial($num - 1);
    }
}

$number = 7;
$result = factorial($number);
echo "The factorial of $number is $result";
?>



