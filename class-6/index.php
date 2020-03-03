<?php

// function primeNumber($number){

    
    

//     if( $number % $number == 0 ){
//         for($num=1; $num<=9; $num++ ) {

//             echo $pprime = $number % $num . '<br>';             
//          }

        
//     }else
//     echo $number . ' Not Prime';
// }

// primeNumber(5);


function primeCheck($number){ 
	if ($number == 1) 
	return 0; 
	for ($i = 2; $i <= $number/2; $i++){ 
		if ($number % $i == 0) 
			return 0; 
	} 
	return 1; 
} 

// Driver Code 
$number = 5; 
$flag = primeCheck($number); 
if ($flag == 1) 
	echo "Prime"; 
else
	echo "Not Prime"
?> 




