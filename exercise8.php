<?php

function factorial($number)
{
    # code...
    if($number==0 || $number==1){
        return 1;
    }
    while($number!=0){
    return $number*factorial($number-1);
    }
}

echo 'The factorial of 5 is '.factorial(5);