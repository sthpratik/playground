<?php
class Solution {

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    
    $carryover=0;

    for($i=count($digits)-1;$i>=0;$i--)
    {
        if($i==(count($digits)-1))
            $digits[$i]+=1;
        else
            $digits[$i]+=$carryover;
        if ($digits[$i]>9) 
        {
            $digits[$i]-=10;
             $carryover=1; 
        }
        else
            $carryover=0;
    }
    if($carryover>0)
        array_unshift($digits,$carryover);
    
    return $digits;
    
}
}
?>