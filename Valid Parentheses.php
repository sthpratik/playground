<?php
class Solution {

    /**
     * @param String $s
     * Implmented on the basis of finding that difference on postion of bracket 
     * for start and end should not be even i.e not divisble by 2
     * Here start bracket postion is 0 and end is 1 so difference is 1 so valid
        Input: "()"
        Output: true
     * Same Logic Difference is 1 for start and end postions of bracket
        Input: "()[]{}"
        Output: true
     * In this case its no ending
        Input: "(]"
        Output: false
     * In this case start postion for square bracket is 0 and end is 2 
     * so difference is 2 which is even which is invalid
        Input: "([)]"
        Output: false
     */
    function isValid($s) {
        
        $s=str_split($s);
        $small_bracket_start=array();
        $small_bracket_end=array();
        $curly_bracket_start=array();
        $curly_bracket_end=array();
        $square_bracket_start=array();
        $square_bracket_end=array();
        $status=true;
        
        for($i=0;$i<count($s);$i++) 
        {
            
          switch ($s[$i]) 
          {  
              case '(':
                    array_push($small_bracket_start,$i);
                    break;
              case ')':
                    if(($small_bracket_start[count($small_bracket_start)-1]-$i-1)%2==0)
                        array_pop($small_bracket_start);
                    else  
                        $status=false;
                    break;  
              case '{': 
                    array_push($curly_bracket_start,$i);
                    break;
              case '}':
                    if(($curly_bracket_start[count($curly_bracket_start)-1]-$i-1)%2==0)
                        array_pop($curly_bracket_start);
                    else    
                        $status=false;
                    break;
              case '[':
                    array_push($square_bracket_start,$i);  
                    break;  
              case ']':
                    if(($square_bracket_start[count($square_bracket_start)-1]-$i-1)%2==0)
                        array_pop($square_bracket_start);
                    else 
                        $status=false;
                    break;
          }
            
            if($status==false)
                break;
                                     
        }
        
        if (($status)
            and((count($small_bracket_start)!=count($small_bracket_end))
            or (count($curly_bracket_start)!=count($curly_bracket_end))
            or (count($square_bracket_start)!=count($square_bracket_end)))
            )
        {
            $status=false;           
        }            
       
        return $status;
                      
    }
}
?>