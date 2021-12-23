<?php


    function name(){
        return 'Hello World <br>';
    }

    echo name();

    function user($name = "👨‍🎓", $pas = "❗"){
        return "Your Name is: $name <br>
                Your Password: $pas <br>
        ";
    }


echo user();


function loop(){
    for($i=1; $i<=10; $i++){
        echo "The result is: $i <br/>";
    }
}

echo loop();


?>