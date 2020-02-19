<?php 
    /*

        my customer ask for fruit with his budget, if fruit 
        available in the shop then show welcome and cart,else show how much money need to add.
        it's totaly static application.
    */


    //customar requirment 
$fruitName='banana';

    // I am using the switch technology looking for my data

switch($fruitName){
    //if data true, then the function will check the price of fruit. if able to buy then show cart, else subtraction for how much money need.
    case 'apple':
        echo 'Your Apple is available!     ';
        function fruitPrice($price){
            if(20<=$price){
                echo 'please add to cart ';
            }else{
                echo 20-$price .'$ need! ';
            }
        }
        //all case are same
    break;

    case 'orange':
        echo 'Your Orange is available!    ';
        function fruitPrice($price){
            if(20<=$price){
                echo 'please add to cart ';
            }else{
                echo 20-$price .'$ need! ';
            }
        }
    break;


    case 'malta':
        echo 'Your Malta is available!    ';
        function fruitPrice($price){
            if(20<=$price){
                echo 'please add to cart ';
            }else{
                echo 20-$price .'$ need! ';
            }
        }
    break;


    case 'mango':
        echo 'Your Bango is available!     ';
        function fruitPrice($price){
            if(20<=$price){
                echo 'please add to cart ';
            }else{
                echo 20-$price .'$ need! ';
            }
        }
    break;


    case 'banana':
        echo 'Your Banana is available!    ';
        function fruitPrice($price){
            if(20<=$price){
                echo 'please add to cart ';
            }else{
                echo 20-$price .'$ need! ';
            }
        }
    break;
    default:
        echo 'Sorry! not Available'; 
}

fruitPrice(25);

?>