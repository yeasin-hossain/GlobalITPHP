<?php

    // if electricity bill up to 200 units, the bill will 3 BDT per unit.else 5 BDT per unit.



function elBill($unit){

    if($unit>=100 || $unit<100){
        echo $unit*5;
    }elseif($unit>=200){
        echo $unit*3;
    }
}

elBill(1000);



// problem solved using ternary operator

function ternary($unit){

    echo ($unit>=100 || $unit<100) ? $unit*5 : ($unit>200) ? $unit*3 : '';
}

ternary(50);

?>

