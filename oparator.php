<h1>Arithmatic oparators</h1>
<?php 
    // Arithmatic oparator

    $nam1 = 40;
    $nam2 = 20;

    $result = $nam1 + $nam1;

    echo 'The additional(+) result is: ', $result,'<br/>';

    $result =  $nam1 - $nam2;
    
    echo 'The Subtraction(-) result is: ', $result,'<br/>';

    $result = $nam1 * $nam2;

    echo 'The multiplication(*) result is: ', $result,'<br/>';

    $result = $nam1 / $nam2;

    echo 'The divition(/) result is: ', $result,'<br/>';

    $result = $nam1 % $nam2;

    echo 'The modulus(%) result is: ', $result,'<br/>';

    $nam1 = 5;
    $nam2 = 2;

    $result = $nam1 ** $nam2;

    echo 'The exponentiation(5**2) result is: ', $result,'<br/>';

?>
<h1>PHP Comparison Operators</h1>

<?php

    $num1 = 30;
    $num2 = 40;

   $result = $num1 == $num2; //false

   echo 'The equal(30 == 40) result is: ', $result, '<br/>'; 

    $num1 = '40';
    $result = $num1 === $num2; //false

   echo 'The Identical(40 === "40") result is: ', $result, '<br/>';

   $result = $num1 != $num2; //false

   echo 'The Not equal(40 != 40) result is: ', $result, '<br/>';

   $result = $num1 !== $num2; //true

   echo 'The not identical(40 !== "40") result is: ', $result, '<br/>';

   $result = $num1 <> $num2; // it will work !=== but it is (!===) not any oparator

   echo 'The Not equal(40 <> 40)', $result, '<br/>'; 

   $num1 = 30;
   $num2 = 20;
   
   $result = $num1 > $num2;//$num1 >= $num2 //true

   echo 'The greater then(30 > 20) result is: ', $result, '<br/>';

   $result = $num2 < $num1; //$num1 <= $num2

   echo 'The Less(20 < 30) result is: ', $result, '<br/>';



   $result = $num1 <=> $num2; //$num1 <=> $num2

   echo 'The Spaceship(30 <=> 20) result is: ', $result, '<br/>';

   $result = $num2 <=> $num1; //$num1 <=> $num2

   echo 'The Spaceship(20 <=> 30) result is: ', $result, '<br/>';

   $num2 = 30;

   $result = $num1 <=> $num2; //$num1 <=> $num2

   echo 'The Spaceship(20 <=> 30) result is: ', $result, '<br/>';



?>
<h1>PHP Logical Operators</h1>

<?php

 $var1 = 20;
 $var2 = 30;

 if($var1 == 20 and $var2 == 30){

     echo 'Yes $var1 and $var2 Both are equal'.'<br/>';
 }else{
     echo 'Fuck You Man'.'<br/>';
 }

 if($var1 == 20 and $var2 == 10){

     echo 'Yes $var1 and $var2 Both are equal'.'<br/>';
 }else{
     echo 'Fuck You Man'.'<br/>';
 }

 if($var1 == 20 or $var2 == 10){ //  or / ||

    echo 'Yes $var1 or $var2 equal'.'<br/>';
}else{
    echo 'Fuck You Man'.'<br/>';
}
if($var1 == 20 xor $var2 == 10){

    echo 'Yes only one right'.'<br/>';
}else{
    echo 'Fuck You Man'.'<br/>';
}
if($var1 !== 10){

    echo 'Yes 10 not equal 20'.'<br/>';
}else{
    echo 'Fuck You Man'.'<br/>';
}


?>
<h1>PHP Conditional Assignment Operators</h1>

<?php

//  Ternary oparator

$var = 310;

echo $var == 30 ? 'Yes that is true' : 'NO that is false ';
   
$var = NULL;

$var2 = 20;
$result = $var ?? $var2;

echo $result;



?>
