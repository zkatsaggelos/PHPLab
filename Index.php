<!DOCTYPE html>
    <html>
<head>
    <body>
<p>
    <?php
        echo "Hello World";
    ?>

    <?php

        $myage = 24;

        if($myage > 16 && $myage < 18){
        print "You can buy specs";
        }
    else if($myage > 18 && $myage <21){
        print "You can buy mugs";
    }
    else {
        print "You can buy sausage rolls";
    }


    ?>
</p>
</body>
    </html>