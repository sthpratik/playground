<?php
class Solution {

/**
 * @param String $paragraph
 * @param String[] $banned
 * @return String
 */
function mostCommonWord($paragraph, $banned) {

    $most_common="";
    $repeat_count=0;    
    $distinct_word=array();
    
    //Clear the unwanted text
    $paragraph=strtolower($paragraph);
    $paragraph = preg_replace("/[^a-z0-9\s]/", " ", $paragraph);
    
    //Convert String to Array
    $paragraph=explode(" ",$paragraph);
    
    //Remove banned words
    foreach($paragraph as $key=>$value)
        if (in_array($value,$banned))
            unset($paragraph[$key]);
    
     
     foreach($paragraph as $key=>$word)
    { 
         if($word!="")
         {
             if (!isset($distinct_word[$word]))
                    $distinct_word[$word]=1;
                else
                    $distinct_word[$word]++; 
            if ($distinct_word[$word]>$repeat_count)
            {
                $most_common=$word;
                $repeat_count=$distinct_word[$word];                          
            }  
         }
        unset($paragraph[$key]);

    }

    return $most_common;
    
}
}

?>