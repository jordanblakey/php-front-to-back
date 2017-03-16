<?php
    print 'Hello World!';
    echo 'This is an echo statement.';

    // Single line comment
    # Also a single line comment
    /* Multi-line
    comment */

    #VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscores are allowed
        - Case sensitive
    */

    #DATA TYPES

    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */


    $output = 'Hello World';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $string3 = 'They\'re here.';
    $string4 = "They're here.";

    $greeting = $string1 . ' ' . $string2 . '!';
    $greeting2 = "$string1 $string2";

    $float1 = 4.4;
    $bool1 = true;

    // This is a constant
    define('GREETING', 'Hello Everyone');
    // Make constant case-insensitive by adding a true bool as the 3rd param.
    define('GREETING2', 'Hello Everyone', true);

    echo $output;
    echo $num1;
    echo $num2;
    echo $sum;

    echo $string1;
    echo $string2;
    echo $string3;
    echo $string4;
    echo $greeting;
    echo $greeting2;

    echo $float1;
    echo $bool1;

    echo GREETING;

?>
