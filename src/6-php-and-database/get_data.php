<?php
include "./connection.php";

$sql = "SELECT * FROM wpwlf.user";

// run sql syntax and get information 
$data = $conn->query($sql);
?>
<html>
  <head></head>
  <body>
    <h1>Get Data</h1>
    <table>
      <tr>
        <th>Login ID</th>
        <th>Name</th>
        <th>Password</th>
      </tr>
      <?php if($data->num_rows > 0){ 
        while($row = $data->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $row["loginid"]; ?></td>
          <td><?php echo $row["surname"] . " " . $row["lastname"]; ?></td>
          <td><?php echo $row["password"]; ?></td>
        </tr>
        <?php } 
      } ?>
    </table>
  </body>
</html>
<?php
$conn->close();
?>
