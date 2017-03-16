<?php
    // Array Types: Indexed, Associative, Multi-dimensional


    // INDEXED ARRAYS
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);

    // Declare initial array
    $cars = ['Honda', 'Toyota', 'Ford'];
    // This will append
    $cars[3] = 'Chevy';
    // This will append
    $cars[] = 'BMW';

    echo $people[1];

    // echo $people[3]
    // echo $ids[2]
    echo $cars[4];
    echo count($cars);
    print_r($cars);
    var_dump($cars);

    // ASSOCIATIVE ARRAYS
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $ids = [];
    echo $people['Brad'];
    echo $ids[22];
    $people['Jill'] = 42;
    echo $people['Jill'];
    print_r($people);
    var_dump($people);

    // MULTIDIMENSIONAL ARRAYS
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 20, 10),
        array('Ford', 20, 10)
    );

    echo $cars[1][0];

?>
