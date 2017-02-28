<!DOCTYPE html>
    <html>
<head>
    <body>
<p>
    <?php
        echo "Hello World";
    ?>
</p>
<p>
    <?php

        $myage = 25;

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
<p>
    <?php
    $numberOfPuppies = 3;

    switch($numberOfPuppies){
        case 1:
            echo "1 sad puppy";
            break;
        case 2:
            echo "2 happy puppies";
            break;
        case 3:
            echo "3 puppies is a crowd";
            break;
        default:
            echo "All the puppies have gone home";
   }

    ?>
</p>

</body>
    </html>