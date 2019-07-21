<?php

// Complete the staircase function below.
function staircase($n) {
    $stair='';
    for($i=$n;$i>0;$i--)
    {
        $stair.='#';
       // echo $stair."</br>";
        echo str_pad($stair, $n, ' ',STR_PAD_LEFT)."</br>";;  
    }    
}

staircase(6);

?>