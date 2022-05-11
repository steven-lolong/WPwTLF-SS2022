<?php
include "./connection.php";

$sql = "UPDATE `wpwlf`.`user` SET `loginid` = 'steel_tu' WHERE (`iduser` = '2')";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>