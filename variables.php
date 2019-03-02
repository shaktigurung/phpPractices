<?php
    //single line comment
    #single line commnet
    /*
        multiline comment
    */

    #Variables
    /*
        -Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscroes
        - Case sensitive

    */

    #Data Types
    /*
        Sting, Integers, floats, Booleans, Arrays, Objects, Null, Resource
    */
   $output = 'Hello World variable';
    $num1 = 4;
    $num2 = 10;
    $sum = ($num1 + $num2);

    $string1 = 'Hello';
    $string2 = 'Greetings';
    $greeting = $string1 . ' ' .$string2;
    $greeting2 = "$string1 $string2";
    //constants
    define("GREETING", "Hello Everyone");

    //    echo $output;
//    echo $sum;
    //echo $greeting2;
    echo GREETING;
?>