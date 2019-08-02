<?php
$swap=0;
function MergeSort($item)
{
    if (count($item)<=1) return $item;
     else
     {
        $left= array();
        $right=array();
        $middle = (int) ( count($item)/2 );
        $left=array_slice($item,0,$middle);
        $right= array_slice($item,$middle);
        print_r($left);
        echo "\n";

        $left=MergeSort($left);
        print_r($right);
        echo "\n";
        $right=MergeSort($right);
        return merge($left,$right);
    }
}


function merge($left,$right)
{
    $result = array();
    while(count($left)>0||count($right)>0)
    {
        if(count($left)>0 && count($right)>0)
        {
          if ($left[0]>$right[0])
              ++$GLOBALS["swap"];
            if ($left[0]<=$right[0]) {
                $result[]=array_shift($left);
                
            }
            else 
            {
                $result[]=array_shift($right);
                // $GLOBALS["swap"]++;
            }
           
        }
        elseif (count($left) > 0)
        {
            $result[] = array_shift($left);  
           // $GLOBALS["swap"]++;
           
        }
        elseif (count($right) > 0)
        {
            $result[] = array_shift($right);   
           // $GLOBALS["swap"]++;
        }    
    }
    print_r($result);
    return $result;
}
$data=array(7,5,3,1);
$data=MergeSort($data);
print_r($data);
print_r($GLOBALS["swap"]);
?>