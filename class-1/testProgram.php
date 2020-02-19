<?php


$os = array("appple", "banana", "mango", "lichi",'computer','phone','andriod');
    $data ='computer';
    $data = strtolower($data);
    
    if (in_array($data, $os)) {
        echo  "your favorite " .$data .' is available </br>';

        function pricelist($price){
            global $data;
            if(20<=$price){
                echo '<h3> please add to cart your favorite </h3> '.$data;
            }else{
                echo 'your need more ' .(20 - $price).' credit!';
            }
        }

    }else{
        echo $data .'  Not avialable in our store!';
    }

    pricelist(20);


?>