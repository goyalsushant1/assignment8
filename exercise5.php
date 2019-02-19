<?php
$start_pos = 1;
$end_pos = 10;
for($i=$start_pos; $i<=$end_pos;$i++)
{
    if($i==$end_pos)
    {
        echo $i;
    }
    else
    {
        echo $i . '-';
    }
}
?>