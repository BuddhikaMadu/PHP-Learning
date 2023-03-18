<?

  if(isset($_GET['submit'])){
    
    $name = filter_input(INPUT_POST, 'var_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "other_var_name", FILTER_SANITIZE_SPECIAL_CHARS);
  }

?>

<html>
  <head>
    <title>Form </title>
   </head>
  
  <body>
    
    <form action = "<?PHP $_SERVER['PHP_SELF']; ?>" method = "GET">
      
      <ipnut type="text" name= "var_name">
      <input type="text" name = "other_var_name">
        
      <input type="submit" value = "Submit"  name = "submit">
                
    </form>
    
  </body>
