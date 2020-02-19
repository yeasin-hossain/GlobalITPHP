<?php 



function largeNumber($num1,$num2,$num3){

    if($num1>$num2 && $num1>$num3){
        echo $num1;
    }elseif($num2>$num1 && $num2>$num3){
        echo $num2;
    }elseif($num3>$num1 && $num3>$num2){
        echo $num3;
    }

}

largeNumber(1000,225,8885);






?>