<?php
$number=1;
$sum = 0;
while($number<=15):
    $sum+=$number;
    echo $number;
    $number++;
endwhile;

echo 'The sum of the numbers is '. $sum;