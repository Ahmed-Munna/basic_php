<?php



    // $str = 'In T-h_is tutorial you will learn php regular colo expressions colorrrrrr 032 Tutorial in bangla, Bangla.You can colou learn 2567 how to use regular Color expression colourrrr in php to+ find? complex 74 colour search on huge text with 907 phpppp preg_match and preg_match_all tutoriallllllll in Bangla.'; 



    // $exp = preg_match_all("/[^a-f1-9]/i",$str, $array);
    // $exp = preg_match_all("/\W/",$str, $array);

    // $exp = preg_match_all("/\D/",$str, $array); all count without number
    // $exp = preg_match_all("/./",$str, $array);
    // $exp = preg_match_all("/\w/",$str, $array);
    // $exp = preg_match_all("/\d/",$str, $array);Number
    // $exp = preg_match_all("/\s/",$str, $array);
    // $exp = preg_match_all("/\S/",$str, $array); all select without  space
    // $exp = preg_match_all("/\W/",$str, $array);
    // $exp = preg_match_all("/colou?r*/i",$str, $array); * দিয়ে বোঝায় r আর থাকলেও ওই খান থেকে কাউন্ট করতে হবে।
    // $exp = preg_match_all("/colou?r+/i",$str, $array); + দারা বোঝায় আর থাকলে তবেই গননা হবে
    // $exp = preg_match_all("/colou?r{1,2}/i",$str, $array);
    // $exp = preg_match_all("/to\+/i",$str, $array);
    // $exp = preg_match_all("/^in/i",$str, $array); start
    // $exp = preg_match_all("/bangla\.$/im",$str, $array);
    // if($exp){
    //     echo '<pre>';
    //     print_r($array);
    //     echo '</pre>';
    // }else{
    //     echo "The string is not founded";
    // }


    // HTML color code validation

        // $col = '+88-01629780976';

        // $exp = preg_match_all("/#?([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})/g",$col,$arr);

        // $exp = preg_match_all("/(\+88)?-?01[1-9]\d{8}/");

        // if($arr){
        //     echo '<pre>';
        //     print_r ($exp);
        //     echo '</pre>';
        // }else{
        //     echo 'Color code not validate';
        // }


            $str = 'we leaving in Bangladesh. Bangladesh is a very samll country';
            
        //   echo  preg_replace("/Bangladesh/","Babugunj",$str);

          echo preg_replace("/^we/i","Babugunj",$str);
            




















?>