<?php
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    
    $new_array=array();
    
    for($i=0;$i<count($nums);$i++)
    {
        if(!isset($new_array[$nums[$i]]))
        {
            $new_array[$nums[$i]]=0;  
        }
    }
    
    $nums=array_keys($new_array);
    print($nums);
  //  return $nums;
    
}
}
?>