<?php

// rotate Array left
function rotLeft($a, $d) {
    //Complexity O(n) where n is length of array
    $new_array= array();
    for($i=$d;$i<count($a);$i++)
       array_push($new_array,$a[$i]);
    for($i=0;$i<$d;$i++)
        array_push($new_array,$a[$i]);

    return $new_array;
}
?>