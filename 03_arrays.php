<?php

    $array = [1,2,3,4,5,6];
    print_r($array);

    echo "<br>";

    $fruits = array("apple", "orange","grapes","mango");
    print_r($fruits);

    // Associative array

    $number = [
        1 => "buddhika",
        2 => "madusanka",
        4 => "wimukthi"
    ];

    var_dump($number[4]);

    $colorcode = [
        "red" => "#46946",
        "white" => "#000",
        "black" => "#fff"
    ];

    var_dump($colorcode["black"]);


    $person = [
        "first Name" => "Buddhika",
        "last Name" => "Madusanka",
        "gmail" => "Buddhikamadusanka2000@gmail.com"
    ];

    print_r($person);


    echo "<br>";    
    // Multy demontional array

    $personal_details = [
        [
            "name" => "Buddhika Madusanka",
            "gmail" => "buddhikamadusanka2000@gmail.com"
        ],
        [
            "name" => "Chandima Sandamali",
            "gmail" => "chandimasandamali@gmail.com"
        ]
    ];

    echo $personal_details[0]["gmail"];
    echo "<br>";
    echo $personal_details[1]["name"];

?>