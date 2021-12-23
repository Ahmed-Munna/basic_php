<center><h1>PHP Loops</h1></center>
<?php


// while loop
// $var1 = 1;

// while($var1<=10){

//     echo 'The result is: ', $var1.'<br/><br/>';
//     $var1++;

// }

// $var2 = 1;

// while($var2 <= 100){
//     if($var2%2 == 0 and $var2 % 5 == 0){
//         echo 'The result is: ', $var2, '<br/>';
//     }
//     $var2++;
// }

// $var3 = 1;

// while($var3 <= 100){
//     if($var3 % 3 == 0 and $var3 % 5 == 0){
//         echo '<br/>The result is: ', $var3, '<br/>';
//     }
//     $var3++;
// }

// $var1 = 1;

// while($var1 <= 50):

// if($var1 % 2 == 0){

//     echo 'The result is: ', $var1, '<br/>';
// }

// $var1++;

// endwhile;


// Do while loop

// $num = 50;

// do{
//     echo 'This is your result: ', $num ,'<br/>';
//     $num++;
// }while ($num <= 20);


// // for loop

// for($var = 1; $var <= 20; $var++){
//     if($var % 2 == 0){
//         echo 'The Result is: ', $var, '<br/>';
//     }
// }

// // foreach

// $exampals = ['Bangla', 'English', 'Math', 'Science'];

// foreach($exampals as $varr){
//     echo $varr, '<br/>';
// }

// $name = [
//     'Bangla' => 24,
//     'English' => 35,
//     'Math' => 50,
//     'Science' =>75,
// ];

// foreach($name as $sub => $number){
//     echo 'Subject: ', $sub, ' Marks: ', $number, '<br/>';
// }


for($x = 10; $x > 0; --$x){
    
    for($y = 10; $y > $x;  --$y){
        echo $x,'*';
    }
    echo '<br>';
}


for ($a = 1; $a <= 10; $a++){
    if($a == 5){
        break;
    }
    echo $a;
    echo "<br/>";
}

for ($a = 1; $a <= 10; $a++){
    if($a == 5){

        continue;
    }
    echo $a;
    echo "<br/>";
}

?>