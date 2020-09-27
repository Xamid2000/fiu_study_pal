<?php
include "conf.php";
$table = $_GET['table'];
$panther_id = $_GET['id'];
$school = $_GET['school'];
$major = $_GET['major'];
$sql = "INSERT INTO users (panther_id, school, major, status, location)
VALUES ('$panther_id', '$school', '$major', 1, $table)";

if (mysqli_query($con, $sql)){
 //echo 1;
  header("Location: text.php");
} else {
  echo 0;
}
?>