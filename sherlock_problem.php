<?php
// Complete the isValid function below.
function isValid($s) {

    $values="YES";
    $NoOfUniqueAlphabets=0;
    $differenceCount=0;
    $minimum=0;
    $maximum=1;
    //Complexity constant as there's fixed no of alphabets and doesn't depend on n     
    $alphabet=range('a','z');
    $alphabet_count=array_fill_keys($alphabet,0);
    $input=str_split($s);


      //Complexity O(n) where n is max length of the string
    for($i=0;$i<count($input);$i++)
    {
        $alphabet_count[$input[$i]]=$alphabet_count[$input[$i]]+1;

        if ($maximum<$alphabet_count[$input[$i]])
            $maximum=$alphabet_count[$input[$i]]; 
        else 
            $minimum=$alphabet_count[$input[$i]];    
    
    }


    if(($maximum-$minimum)>1)
        $values="NO";
    else
    {
       
        foreach($alphabet_count as $key=>$value)
        {
           if($value>0)
           {
                $NoOfUniqueAlphabets++;
                if($value<$minimum)
                    $minimum=$value;
                if (($value!=$maximum))
                    $differenceCount++;     
           }
        }


       //If there's only one difference  it can be removed
       if
        (
            (($NoOfUniqueAlphabets-$differenceCount)>1 or ($maximum-$minimum)>1 )
            and($differenceCount>1)
            
        )
          $values="NO"; 

          
    }

       return $values;


}
?>