<?php




    echo '<pre>';

    print_r ($_SERVER);
    

?>

<h1><?php echo 'YOUR LOCATION: ', ($_SERVER["PHP_SELF"]) ?></h1>

<h1><?php echo 'YOUR SERVER NAME : ', ($_SERVER["SERVER_NAME"]) ?></h1>
<h1><?php echo 'YOUR PATH : ', ($_SERVER["PATH"]) ?></h1>
<h1><?php echo 'YOUR BROWJAR : ', ($_SERVER["HTTP_USER_AGENT"]) ?></h1>
<h1><?php echo 'YOUR IP ADD : ', ($_SERVER["REMOTE_ADDR"]) ?></h1>
