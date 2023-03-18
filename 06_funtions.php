<?php

    function welcome(){
        echo "Welcome this is a my first PHP programm";
    }

    welcome();

    echo "<br>";


    function printName($name){
        echo "Hi! ${name} !! You are in Buddhika's PHP program now";
    }

    printName("Madusanka");

    echo "<br>";


    function userRegistration($gmail){
        echo "${gmail} is already taken. <br>";
    }

    userRegistration("buddhikamadusanka2000@gmail.com");

    echo "<br>";


    function sum($n1, $n2){
        return $n1 + $n2;
    }

    $result = sum(41,56);
    echo "Result = ${result} <br>";

    $subtract = function($n1, $n2){
        return $n1 - $n2;
    };

    // echo $subtract(59,26);

    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(3,5);

    echo "<br>";

?>