<?php
    // Indexed array
    //  ==> 1st Rulse
    $var = ["one","Two","Three","Four"];

    var_dump ($var);

    //  ==> 2nd Rulse

    $var2 = array("one","Two","Three");

    var_dump ($var2);
    echo '<br/>',count($var2);

    
    foreach($var2 as $num){
        echo '<br/> The number is: ', $num;
    }


    // PHP Associative Arrays


    $ex1 = [
        "Bangla" => 50,
        "English" => 54,
        "Math" => 70,
        "Science" => 90,
    ];

    foreach($ex1 as $sub => $marks){
        echo '<br/> Suject: ', $sub, '<br/> Marks: ', $marks, "<br/><br/><br/><br/><br/>";
    }

    // PHP Multidimensional Arrays

    $ex2 = [
             [  'Bangla' , '50','Good',
                'English' , '50','Good',
                'Math' , '50','Good',
                'Science' , '50','Good',
             ],


            [  'Bangla' , '50','Good',
                'English' , '50','Good',
                'Math' , '50','Good',
                'Science' , '50','Good',
            ],


            [   'Bangla' , '50','Good',
                'English' , '50','Good',
                'Math' , '50','Good',
                'Science' , '50','Good',
            ]
    ];

    

    foreach($ex2 as $iner_ex){
        foreach($iner_ex as $subj){
            echo $subj,' ';
            
        }
        echo '<br/>';
    }
    
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';


// PHP Sorting Arrays
$ass2 = ["Name","Ahmed","Munna"];

sort($ass2);

foreach($ass2 as $nam){
    echo $nam, '<br>';
}
echo '<br/>';
echo '<br/>';

$ass2 = [3,5,1];

rsort($ass2);

foreach($ass2 as $nam){
    echo $nam, '<br>';
}

echo '<br/>';
echo '<br/>';

$ass = [
    "Munna" => 20,
    "Ahmed" => 35,
    "laboni" => 10
];

ksort($ass);
krsort($ass);

foreach($ass as $name => $roll){
    echo 'Name: ',$name, ' Roll: ',$roll, '<br/>';
}

echo '<br/>';
echo '<br/>';

$ass = [
    "Munna" => 20,
    "Ahmed" => 35,
    "laboni" => 30
];

asort($ass);
arsort($ass);

foreach($ass as $name => $roll){
    echo 'Name: ',$name, ' Roll: ',$roll, '<br/>';
}








    
?>