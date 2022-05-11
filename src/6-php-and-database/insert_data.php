<?php
include "./connection.php";

$sql = "INSERT INTO `wpwlf`.`user` (`surname`, `lastname`, `loginid`, `password`) VALUES ('steven', 'lolong', 'steel1', md5('008'))";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>