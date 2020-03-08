<?php
// $first_camel=2;
// $secend_camel=3;



for($i=1; $i<100; $i++){

    echo $first_camel =$i *2;

    for($i=5; $i<100; $i++){
        echo $secend_camel =$i * 3;
    }
    

   
     if($secend_camel == $first_camel){

        break;
        
     }
     
}






?>