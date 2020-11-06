<form method="post">
    <input type="text" name="nhap" placeholder="nhapso">
    <input type="submit" value="check">
<?php
if($SERVER['REQUEST_METHOD']=$_POST){
    $number=$_POST["nhap"];
}
function findMin($number){
    $min=$number[0];
     for($i=0;$i<count($number);$i++){
         if($number[$i]<$min){
             $min=$number[$i];
         }
     }
     return $min;
}
 echo findMin($number);
