<?php

    //  ===========  FOR loops ==============

    /*
    
    for(initialize; condition; increment){
        //code executed
    }
    
    */

    for($x = 1 ; $x < 10 ; $x++){
        echo "Number " . $x . "<br>";
    }


    echo "<br>";
    echo "<br>";


    // =========== While loop ============

    $number = 1;
    while($number <= 10){
        echo "Number is ${number} <br>";
        $number++;
    }

    echo "<br>";
    echo "<br>";


    // ========== do while loop ==============

    $y = 1;
    do{
        echo "your number is ${y} <br>";
        $y++;
    }while($y <=10);

    echo "<br>";
    echo "<br>";


    // =========== foreach loop =============

    $names = ['Buddhika', "Madusanka", "Wimukthi", "Bandara"];
    foreach($names as $name){
        echo "Name ${name} <br>";
    }

    echo "<br>";
    echo "<br>";

    $array_values = ['Matale', "Kandy", "Polonnaruwa", "Anuradhapure"];
    foreach($array_values as $index => $value){
        echo "${index} - ${value} <br>";
    }

    echo "<br>";
    echo "<br>";

    $person_details = [
        "name" => "Buddhika Madusanka",
        "email" => "buddhikamadusanka2000@gmail.com",
        "phone Number" => "0762285559"
    ];

    foreach($person_details as $key => $value){
        echo "${key} => ${value} <br>";
    }

?>