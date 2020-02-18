<?php

    $num1=10;
    // Variables asign in php

    for($i=1; $i<$num1; $i++){
        echo $i;
    }

    // for loop in php

    if($num1==10){
        echo 'positive';
    }else{
        echo 'negative';
    }
    
    // if else statement in php

    $Name='Yeasin';

    function globalName(){
        global $Name;
        echo $Name;
    }
    globalName();
    // function using global method for accessed globaly assigend variable in php


    function localname(){
         $name='shanto';
        echo $name;
    }
    localname();
    // function using  local variable in php

    $num2 = 6;


    
    // Operators 

  //Addition
  echo $num1 + $num2; //14

  //Subtraction
  echo $num1 - $num2; //2

  //Multiplication
  echo $num1 * $num2; //48

  //Division
   echo $num1 / $num2;


//    Assignment Operators
    $x = 50;
    $x += 100;
    echo $x;

?>