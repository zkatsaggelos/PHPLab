<!DOCTYPE html>
    <html>
<head>
    <body>
<p>
    <?php
        echo "Hello World";
    ?>
    <?php

        $myage = 17;

        if($myage > 16 && $myage < 18){
            echo "You can buy specs";
        }
    else if($myage > 18 && $myage <21){
        echo "You can buy mugs";
    }
    else {
        echo "You can buy sausage rolls";
    }
 ?>
</p>
</body>
    </html>