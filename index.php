<?php
    // Ahmed munna
    // problem 1
        $var = 56;
        echo 'Your value is: '.$var.'<br/>';

    // problem 2

        $var = "Bangladesh!";
        $var = str_repeat($var,1);
        echo 'Value that you provided looks like in reverse like this: '.$var.'<br/>';

    // problem 3
        $var = "Hello Bangladesh";
        $var = str_replace('Bangladesh','CIT!',$var);
        echo $var.'<br/>';

    // problem 4
       define('pi',3.1416);
       echo 'Constant value of PI is '.pi.'<br/>';
    // problem 5
        $num1 = 54;
        $num2 = 38;
        $sub =$num1-$num2;
        $adt =$num1+$num2;
        echo 'Addition of two values: ('.$adt.')<br>';
        echo 'Multiplication of two values: #'.$num1*$num2.'#<br>';
        echo 'Division of two values:'.$num1/$num2.'<br>';
        echo 'Subtraction of two values: $'.$sub.'<br>';
        
    // problem 6
     
        $var = 43%5;
        echo 'Remainder is'.$var.'<br/>';
    // problem 7

        $gender ='male';
        if($gender='male'){
            echo 'You are a male <br>';
        }else{
            echo 'You are a female <br>';
        }
    // problem 8

        $num = 38;
        if($num%2==0){
            echo $num.' is even'.'<br/>';
        }

    //  problem 9
     
        $num = 1;

        while($num<=10){
            echo $num.'<br/>';
            $num++;
        }
    //  problem 10

        $let = 'b';
        switch ($let) {
            case 'a':
                echo 'Your input is '.$let.'  vowel';
            break;
            case 'e':
                echo 'Your input is'.$let.'  vowel';
            break;
            case 'i':
                echo 'Your input is'.$let.'  vowel';
            break;
            case 'o':
                echo 'Your input is'.$let.'  vowel';
            break;
            case 'u':
                echo 'Your input is'.$let.'  vowel';
            break;
            default:
                echo 'Your input is '.$let.'  consonant';
        }
        echo '<br/>';

    // problem 11
        
        for($x=1;$x<=10;$x++){

            if($x%2==0){
                echo $x;
            }else{
                echo '@';
            }
        }
        echo '<br/>';
    // problem 12
        for($x=1;$x<=10;$x++){
            if($x%2==1){
                echo $x.'<br/>';
            }
        }
    // problem 13
      for($x=1;$x<=10;$x++){
        $mul = 1*$x;
        echo '1 * '.$x.'='.$mul.'<br/>';
      }
    //  problem 14
      function check_number($input){
          if($input < 30){
            echo $input.'is less than 30<br/>';
          }
          if($input > 20){
            echo $input.'is greater than 20<br/>';
          }
          if($input > 10){
            echo $input.'is greater than 10<br/>';
          }
      }
      check_number(25);

      










?>