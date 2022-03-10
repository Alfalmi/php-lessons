<DOCUTYPE html>
    <html>

    <body>

        <?php
        echo "Hello World <hr />";

        // comment

        #comment

        /*
        Multiline comment block
        Multiline comment block
        Multiline comment block
        Multiline comment block
        Multiline comment block
        */

        // Comments contained inside code blocks
        $x = 10 /* + 5 */ + 20;
        echo $x;
        echo "<hr />";

        ECHO "Text Sample 1<hr />";
        echo "Text Sample 2<hr />";
        ECho "text Sample 3<hr />";

        $car = "volvo";
        echo "My car is a " . $car . "<br>";
        echo "My car is a " . $CAR . "<br>";
        echo "My car is a " . $CAr . "<br>"; 

    // WORD COUNT
echo str_word_count ("Hello world");
echo "<hr />";

//REVESERSE WORDS
echo strrev("Hello world");
echo "<hr />";

//SEARCH FOR TEXT INSIDE A STRING
echo strpos("Hello world!", "world"); // outputs 6
echo "<hr />";

//REPLACE TEXT INSIDE A STRING
echo str_replace("world!", "John", "Hello world!"); // outputs HEllo Dolly!
echo "<hr />";

    
?>
    </body>

    </html>