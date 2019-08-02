<?php

// Complete the makeAnagram function below.
function makeAnagram($a, $b) 
{
    //Complexity constant as there's fixed no of alphabets and doesn't depend on n   
    $alphabet=range('a','z');
    $alphabet_count1=array_fill_keys($alphabet,0);
    $alphabet_count2=$alphabet_count1;
    $count=0;

    //Complexity O(n) 
    $string1=str_split($a);
    //Complexity O(n) 
    $string2=str_split($b);

    $minimum=min(count($string1),count($string2));
    $maximum=max(count($string1),count($string2));


    //Complexity O(n) where n is max length of the string
    for($i=0;$i<$minimum;$i++)
    {
        $alphabet_count1[$string1[$i]]=$alphabet_count1[$string1[$i]]+1;
        $alphabet_count2[$string2[$i]]=$alphabet_count2[$string2[$i]]+1;
    }

    for($i=$minimum;$i<$maximum;$i++)
    {
        if(count($string1)>$minimum)
            $alphabet_count1[$string1[$i]]=$alphabet_count1[$string1[$i]]+1;
        else
            $alphabet_count2[$string2[$i]]=$alphabet_count2[$string2[$i]]+1;
    }

    //Complexity is  constant because of fix no of variable i.e 26 loop
    foreach($alphabet_count1 as $key=>$value)
        $count+=abs($alphabet_count1[$key]-$alphabet_count2[$key]);


    return $count;

}?>