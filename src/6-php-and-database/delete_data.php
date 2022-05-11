<?php
include "./connection.php";

$sql = "DELETE FROM `wpwlf`.`user` WHERE (`iduser` = '2')";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>