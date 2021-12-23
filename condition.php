<h1>PHP Conditional Statements</h1>
<?php


    $var1 = 40;
    $var2  = 30;

    if($var1 == $var2){
        echo 'The experiment is successfull<br/>';
    }elseif ($var1 < $var2) {
        echo '2nd experiment successfull';
    } else {
        echo 'Fuck OFF🖕';
    }

?>
<h1>The PHP switch Statement</h1>
<?php


$code1 = 'Ahmed';
$code2 = ' Munna';
$num1 = 40;
$num2 =4;
$full_name = $code1 . $code2;

switch ($full_name){
    case 'Ahmed';
    echo 'Ahmed';
    break;
    case 'Ahmed Munna';
    if($num1 == $num2){
        echo 'Ahmed Munna';
    }else{
        echo 'Your Name is Ahmed Munna';
    }
    break;
    default;
    echo 'Please submit your name';

}















?>