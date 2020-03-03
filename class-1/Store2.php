<?php


$os = ["appple", "banana", "mango", "lichi",'computer','phone','andriod'];
    $data ='mango';
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

    
// $fruits = ['mango', 'apple', 'banana'];
// $data = 'mango';
// $price = 10;

// echo (in_array($data, $fruits)) ? $price > 20 ? 'Added to cart' : 'We have ' . $data . ' but your budget  is '. (20 - $price) . ' BDT short' : 'Not available in our store';


?>