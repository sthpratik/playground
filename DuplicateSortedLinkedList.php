<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        
        $unique_data[$head->val]=0;
        $data=$head->next;
        $main_node=new ListNode($head->val);
       
        

        $node=&$main_node;  
        while($data->next!=null)
        {
            if((!isset($unique_data[$data->val]) ) and (isset($data->val))
              )
            {
               
                $unique_data[$data->val]=0;
                $node->next=new ListNode($data->val);
                $node=&$node->next;
            }
            
             $data=$data->next;
        }
        if((!isset($unique_data[$data->val]))and (isset($data->val)))
        {
            $node->next=new ListNode($data->val);
        }

         return $main_node;
        
    }
}

?>