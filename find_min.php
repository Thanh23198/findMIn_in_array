<?php
$number=array(1,2,3,-4);
function findMin($number){
     $min=$number[0];
     $index=0;
     for($i=1;$i<count($number);$i++){
         if($number[$i]<$min){
             $min=$number[$i];
             $index=$i;
         }
     }
     return $index;

}
 echo findMin($number);
