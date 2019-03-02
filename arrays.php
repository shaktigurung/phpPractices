<?php
    #Array - variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    //Indexed arrays
    // $people = array('Kevin', 'Jeremy', 'Shara');
    // $ids = array(23, 55, 12);
    // $cars = ['Honda', ' Toyota', 'Ford'];
    // $cars[3] = 'Mitsubishi';
    // $cars[] = 'BMW';

    //Array handy functions
    //echo count($cars); counts the number of items in an array
    //print_r($cars);
   //var_dump($cars);
   
    //echo $people[0];
    //echo $ids[2];
    //echo $cars[4];

    //Associative arrays
    // $people = array('Brad' => 35, 'Josh' => 32, 'William' => 37);
    // $ids = [22 => 'Brad', 44 => 'Josh', 67 => 'William'];

    //echo $people['Brad'];
    //echo $ids[22];
    // $people['Jill'] = 42;
    // print_r($people);
    // var_dump($people);

    //Multi-Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 24, 40),
        array('Ford', 30, 50)
    );
    echo $cars[1][0];
?>