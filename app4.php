<?php

include_once 'functions.php';

$site_url= get_option('site_url');
$lang= get_option('languagei');
$color= get_option('color');
$background= get_option('background');
$fontsize= get_option('font-size');
 
?>



<html>
    <head>
        <title>SQLITE 3 -- Test</title>
    </head>   
    <body>
        <div style="color: <?php echo $color; ?>; background: <?php echo $background; ?>; font-size: <?php echo $fontsize ; ?> pt">Faradars</div>
        <?php echo "$site_url";?>
        <?php echo $fontsize; ?>


             
    </body>
</html>

