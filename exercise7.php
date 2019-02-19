<?php
$array = [1,2,3,4,5,6,7];
foreach ($array as $values) {
    # code...
    if($values==4 || $values==5) {
        continue;
    }
    else
        echo $values . ' ';
}
?>