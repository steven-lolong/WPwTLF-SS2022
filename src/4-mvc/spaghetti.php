<?php 
session_start();
// act as persistence 
$uName = "gerald";
// this is hash of "007" using md5;
$uPass = "9e94b15ed312fa42232fd87a55db0d39"; 

if(isset($_SESSION['login']) && ($_SESSION['login'] == true)){
  if(isset($_POST['logout'])){
    session_destroy();
    header('Location: #');
  }else{
  ?>
<html>
  <head>
    <title>Welcome</title>
  </head>
  <body>
  <h2>Welcome</h2>
  <form action="#" method="post" target="_self">
    <fieldset>
      <legend>User</legend>
      <input type="hidden" name="logout">
      <input type="submit" value="Logout">
    </fieldset>
  </form>
  </body>
</html> 
<?php
  }
}else{
  if(isset($_POST["uName"]) && isset($_POST["uPassw"])){
    if(($_POST["uName"] == $uName) && (md5($_POST["uPassw"]) == $uPass)){
      $_SESSION['login'] = true;
      header("Location: #");
    }
  }
  ?>

<html>
  <head>
    <title>Login</title>
  </head>
  <body>
  <h2>The Witcher</h2>
  <form action="#" method="post" target="_self">
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

<?php 
}
?>