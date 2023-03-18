<?PHP
  
//   Create an array
$array_name = ['value1', 'value2', 'value3'];
$newArrayName = array('value1', 'value2', 'value3');

// Length of array
echo count($array_name);

// Add items to array
$array_name[] = "value";
array_push($array_name, "value");
array_unshift($array_name, 'value');

// Remove item from array
array_pop($array_name);
array_shift($array_name);

// Slit into 2 chunks
$chunk_name = array_chunk($array_name, 2);

// Merge array
$new_array = array_merge($array_name, $newArrayName);
$array_with_seperator = [...$array_name, ...$newArrayName];

// show two array values with combination. Its need same length arrays
$array_combination = array_combinae($array_name, $newArrayName);

// Array keys
$keys = array_keys($array_name);

// Flipped array
$flipped = array_flipped($array_name);

// Create new array using range function
$numbers = range(1,20);

// Map
$map_name = array_map(function($number){
  return "Numbe ${number}";
}, $numbers);

// Array filter
$filterName = array_filter($numbers, fn($number) => $number < 10);

// This ====> fn(varName) means this is a function

?>
