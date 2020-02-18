<?php

                /* 
                
                                    Today we learn 

*What is PHP
    Once upon a time developer called personal Home page, but actually PHP is a server-side scripting language.
*How to run 
    without server you can't run PHP, so you should use a private server by using  XAMPP. in your Computer.
*How to declare a Variable  
    Variable are used as "containers" in which we store information.A PHP variable starts with a dollar sign ($), which is followed by the name of the variable. Rules for PHP variables:
    - A variable name must start with a letter or an underscore
    - A variable name cannot start with a number
    - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variable names are case-sensitive ($name and $NAME would be two different variables) 

                
                */


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
         $name='Shanto';
        echo $name;
    }
    localname();
    // function using  local variable in php




    $num2 = 6;
    
    // Operators 

    // Assignment Operator      =The left operand gets set to the value of the expression on the right ,+=, -= ,*= ,/= ,%=
    // Arithmetic Operators     +Addition, -Subtraction, *Multiplication, /Division, %Modulus, **Exponentiation 
    // Comparison operators     ==	Equal, ===	Identical,!= Not equal,!==	Not identical,>	Greater than,< Less than,>=	Greater than or equal to,<=	Less than or equal to,<=> Spaceship
    // Logical Operators        !,|| ,&& ,xor, or,and
    // Increment/Decrement operators  ++$x Pre-increment,$x++ Post-increment,--$x Pre-decrement,$x-- Post-decrement
    // String operators         . Concatenation,.= Concatenation assignment
    // Array operators          + Union,== Equality,===	Identity,!=	Inequality,<> Inequality,!== Non-identity
    // Conditional assignment operators  ?:	Ternary, ?? Null coalescing

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