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

<p>
    <?php

    $myArray = array("do","re","mi");

    echo $myArray[0];

    $myArray[1] = "la";

    unset($myArray[2]);

    ?>


</p>

<p>
    <?php
    $length = strlen("zoe");
    print $length;
    ?>

</p>


<p>
    <?php
    $myname = "Zoe";

    $partial = substr($myname, 0, 2);
    print $partial;

    $uppercase = strtoupper($myname);
    print $uppercase;

    $lowercase = strtolower($uppercase);
    print $lowercase;


?>
</p>

<p>
    <?php
    $round= round(M_PI);
    print $round;
  ?>
</p>
<p>
<?php
$round_decimal = round(M_PI, 4);
print $round_decimal;
?>
</p>


<p>
    <?php
    for($i = 1; $i < 10; $i++)
    {
    echo "<p> Hi </p>";
}
?>
</p>


</body>
    </html>