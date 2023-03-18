
<?

  if(isset($_GET['submit'])){
    echo $_POST['var_name'];
    echo $_POST['other_var_name'];
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
</html>
