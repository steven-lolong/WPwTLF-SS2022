<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: 3-session-logout.php");
}
?>
<html>
  <head>
    <title>Welcome!</title>
  </head>
  <body>
    <h1>Welcome, Gerald</h1>
    <a href="3-session-logout.php">logout</a>
  </body>
</html>