<?php
session_start();
$host = "localhost"; /* Host name */
$user = "id14969673_users_db"; /* User */
$password = "Xamid123456789$"; /* Password */
$dbname = "id14969673_users"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>