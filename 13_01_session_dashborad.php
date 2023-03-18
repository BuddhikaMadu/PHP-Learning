
<?PHP
  session_start();
  
  if(isset($_SESSION['user-name']){
    echo "<h1> WELCON ${$_SESSION['user-name']}";
  }else{
    echo "WELCOME Guess";
  }

?>
