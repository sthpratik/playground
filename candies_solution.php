<?php
// Complete the candies function below.
    function candies($n,$ratings) {
        
        $choclate_distribution=array(1);

        for($i=1;$i<count($ratings);$i++)
        {   
            if($ratings[$i-1]<$ratings[$i])
                array_push($choclate_distribution,$choclate_distribution[$i-1]+1);
            else
            {                
                $choclate_distribution[$i]=1;             
                if(($choclate_distribution[$i-1]==1) and ($ratings[$i-1]!=$ratings[$i]))
                {
                    for($k=$i;$k>0;$k--)
                    {
                        if(($ratings[$k-1]>$ratings[$k]) and ($choclate_distribution[$k-1]<=$choclate_distribution[$k]))
                           $choclate_distribution[$k-1] +=1;
                        if($ratings[$k-1]<=$ratings[$k]) break;
                    }

                }  
             }
        }
        return array_sum($choclate_distribution);         
    }

    ?>