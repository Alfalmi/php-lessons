<DOCTYPE html>
    <html>

    <body>
        <h2> PHP Arithmetic Operators </h2>
        <!-- Used to Compare Two Values -->


        <?php
        
        $x = 50;
        $y = 20;

        //ADDITION
        echo $x + $y;
        echo "<hr />";

        //SUBTRACTION
        echo $x - $y;

        //MULTIPLICATION
        echo $x * $y;

        //DIVISION
        echo $x / $y;
        echo "<hr />";

        //MODULUS
        echo $x % $y;
              

?>

<h2> PHP Assignment Operators</h2>
<!--Used with numeric values to write values to a variable -->

<?php

    // The left operand is assigment the value on the right
    $x = 20;
    echo $x;

    ?>

    <h2> Comparison Operators </h2>
    <!-- Used to compare two values {number to a string} -->

    <?php

    //Equal
    $x = 300;
    $y = "300";
    var_dump($x != $y);

   //Identical
   $x = 300;
   $y = "300";
   var_dump($x == $y);

    ?>

    </body>

    </html>