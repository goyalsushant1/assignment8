<?php
$array = array(1,2,3,4,5,6,7);
$length = 0;
while ($length != sizeof($array)):

    echo $array[$length].' ';
    $length++;
    
endwhile;
?>