<?php
// $gods = array( [
//         { name: "utsab", age: 20 },
//         { name: "shrestha", age: 20 },
//       ]);
$gods=array();
 $gods[]="Utsab";
 $gods[]="Shrestha";
 $gods[]="pockey";
//  print_r($gods);
$searchString=strtolower($_GET['search']); //strlower converts uppercase letter to lowercase
$hint=''; //empty string variable hint variable sanga assign hunxa
$len=strlen($searchString); //strlen return number of bytes
if($len==0){
      '';
      exit(0); //string input nahuda exit hunxa
}
foreach($gods as $god){//foreach le array ma matra kaam garxa r array ma vayeko each element ma loop lagxa
      if($searchString==strtolower(substr($god,0,$len))){
           // $hint .=$god.","; //. le concat garxa
            $hint =$hint.$god.",";
      }
}
echo $hint //hint varibale ma assign vareko string print garxa
      ?>

 <!-- Assignment
https://google.com/search?q= -->