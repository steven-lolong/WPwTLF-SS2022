<?php 
session_start();
$privatePage = "./3-session-private-page";
if(isset($_SESSION['login']) && ($_SESSION['login'] == true)){
  header('Location: ' . $privatePage);
}

if(!isset($_SESSION['notifyLogin'])) {
  $_SESSION['notifyLogin'] = "";
}
?>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
  <h2>The Witcher</h2>
  <h4 style="color: red;"><?php echo (isset($_SESSION['notifyLogin']) ? $_SESSION['notifyLogin'] : ""); ?> </h4>
  <form action="3-session-process-login.php" method="post" target="_self">
    <fieldset>
      <legend>Login</legend>
      <label for="uNameId">Username:</label>
      <input type="text" id="uNameId" name="uName"><br><br>
      <label for="passwId">Password:</label>
      <input type="password" id="passwId" name="uPassw"><br>
      <input type="submit" value="Login">
    </fieldset>
  </form>
  </body>
</html>