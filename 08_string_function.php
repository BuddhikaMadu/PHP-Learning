<?PHP

$string_variable = "Buddhika Wimukthi";

// Convert all characters to uppercase
echo strtoupper($string_variable);

// Convert all characters to lowercase
echo strtolower($string_variable);

// Uppercase the first character to each word
echo ucwords($string_variable);

//  String replace
echo str_replace("Wimukthi","Madusanka", $string_variable);

//Return portion of a strinf specified by the ofset and length
echo substr($string_variable, 0 , 5); // ($variableName, start_index, end_index)

// Start with
if (str_start_with($string_variable, "string_vale")){
  echo "Yes";
}

// Ends with 
if(str_ends_with($variable_name, "string_value")){
  echo "Yes";
}

$stirng = '<script> alert("message") </script>';
echo htmlspecialchars($variabl_name);



?>
