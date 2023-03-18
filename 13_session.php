
<?PHP

//  ------------------ Sessions ------------------

/*
Sessions are a wat to store information (in variables) to be used across multiple pages.
Unlike cookies, sessoins are stored on the server.
*/

  session_start();

  if(isset($_POST['submit']){
    $userName = filter_input(INPUT_GET,'user-name',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST('user-password');
    
    if($userName =='name' && $password == 'password'){
      $_SESSION['username'] = $userName;
      header('Location: php-crash/extras/dashbord.php');
    }else{
      echo "incorrect login";
    }

?>


<html>
  <header>
    <titile>Session </title>
   </header>
  
  <body>
     <form action=<?PHP $_SERVER['PHP_SELF']?> method = "GET">
     <input name = "user-name" type = "text">
     <input name = "user-password" type = "text">
     <input name = "submit" value="Submit" type="submit">
    </form>
                 
  </body>
</html>
  
