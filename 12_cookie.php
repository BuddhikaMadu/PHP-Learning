<?

// ----------------- Cookies------

/*
Cookies are a mechanism for storing data in the remote browser and thus of identifying return
users. You can set specific data to be stored in the browser, and then retrieve it when the user 
visits the site again.
*/

// Set cookie

setcookie('var_name', "Vale", time() + 86400*3);

if(isset($_COOKIE['name']){
  echo $_COOKIE['name'];
})

?>
