<?php 



function largeNumber($num1,$num2,$num3){

    if($num1>$num2){
        if($num1>$num3){
            echo $num1;
        }
    }elseif($num2>$num1){
        if($num2>$num3){
            echo $num2;
        }else{
            echo $num3;
        }
    }

}

largeNumber(1000,225,885);






?>