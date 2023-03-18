<?php

    /*
    
    < less than
    > greater than
    <= less than or equal
    >= greater than or equal
    == equal to 
    === identical to
    != not equal to 
    !== not identical to 
    
    */


    // ========= If statement

    $age = 1;

    if($age >= 18){
        echo "You are adult person now.";
    }else{
        echo "You are still child.";
    }

    echo "<br>";


    //  ======== If statement with elseif

    $marks = 81;
    
    if($marks >=75){
        echo "Your grade is 'A'. Your greate.";
    }elseif($marks >= 60 && $marks <= 75){
        echo "Your grade is 'B'. You are good";
    }elseif($marks >35 && $marks <= 60){
        echo "Your grade is 'C'. Do more work.";
    }else{
        echo "You are fail. Try your best.";
    } 

    echo "<br>";


    // Switch case statement 
    
    $color =  "black";

    switch($color){
        case "black":
            echo "Your color is black";
            break;
        case "white":
            echo "Your color is white";
            break;
        case "red":
            echo "Your color is red";
            break;
        default:    
            echo "We can't understand what is your color.";
    }

    echo "<br>";


    // ternary operators

    $names = ["buddhika", "madusanka"];
    echo (!empty($names))? "Array is not empty" : "Array is empty";

    echo "<br>";

    $result = (!empty($names))? "Array is not empty" : "Array is empty";
    echo $result;


?>