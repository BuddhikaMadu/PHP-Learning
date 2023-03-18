<?php

// ------------- PHP datatypes ---------------

/*
    * String - series of characters surrounded by quotes
    * integer - whole numbers
    * float - decimal numbers
    * boolean - true or false
    * array - soecuak variable, which can hold more than one value 
    * object  - a class
    * Null -  empty variable 
    * resource -  special variable thath holds a resourse

*/


//  -------------- Variable Rules --------------

/*

    - variable must be prefixed with $
    - variables must start with a letter or ther uderscore charactter 
    - variable can't start with a number
    - variable can only contain alpha-numeric characters and underscores(A-z , 0-9 and _)
    - variables are case-sensitive($name and $NAME are two different variables)

*/


$name = "Buddhika";
$age = 22 ;
$where = "Matale";

echo $name . "is a ". $age ." years old man and he is live in ". $where. ".";
echo "<br>";

echo "${name} is a ${age} old man and he is live in ${where}.";
echo "<br>";

$x = '5' + '5';
var_dump($x);

echo 10-5;
echo "<br>";

echo 5*6;
echo "<br>";

echo 8-2;
echo "<br>";


define('name', "Buddhika");
echo name;


?>