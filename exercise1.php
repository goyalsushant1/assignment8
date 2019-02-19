<?php
$array = array(1,2,3,4,5,6,7);
foreach($array as $value)
{
    if($value==1 || $value==6)
    {
        echo $value.' ';
    }
}
?>