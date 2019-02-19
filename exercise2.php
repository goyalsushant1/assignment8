<?php
$array = array(1,2,3,4,5,6,7);
foreach ($array as $value)
{
    if($value>4)
    {
        break;
    }
    echo $value . ' ';
}
?>