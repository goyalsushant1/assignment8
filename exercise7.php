<?php
$array = [1,2,3,4,5,6,7];
for($i=0;$i<sizeof($array);$i++) {
    # code...
    if($array[$i]==4 || $array[$i]==5) {
        continue;
    }
    if($i==(sizeof($array)-1)){
        echo $array[$i];
    }
    else
        echo $array[$i] . ', ';
}
?>