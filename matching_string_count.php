<?php
// Complete the matchingStrings function below.
function matchingStrings($strings, $queries) {

 
    $stringNo_count=count($strings);
    $queriesNo_count=count($queries);
    $queries_count=array();
    $queries_return_count=array();
    
   //Get Distinct and all the keys
    for($i=0;$i<$queriesNo_count;$i++)
    {
        if (!isset($queries_count[$queries[$i]])) 
          $queries_count[$queries[$i]]=0;
    }

    for($i=0;$i<$stringNo_count;$i++)
    {
        if (
            (isset($queries_count[$strings[$i]])) 
            and (Strlen($strings[$i])<=20)
            and (Strlen($queries_count[$strings[$i]])<=20)
            )
            $queries_count[$strings[$i]]+=1;
    }


    for($i=0;$i<$queriesNo_count;$i++) 
        array_push($queries_return_count,$queries_count[$queries[$i]]);

    return $queries_return_count;

}

?>