<?php

   $employe=10;

   function income($hour,$amount){
        global $employe ;
        echo 'employee id number:- ' .$employe .',';
        echo ' salary is:- ' .$hour*$amount .'!';
   }
   income(120,5.60);

   function sum($a,$b){
            $x = $a+$b;
        
        echo 'Sum is:-' .$x;
   }

   sum(10,5);


       $a=111;
       settype($a,'string');
       var_dump($a);



?>