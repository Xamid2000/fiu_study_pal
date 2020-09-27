<?php
include "conf.php";
$uname = $_POST['username'];
$table = $_POST['table'];
if ($uname != ""){

    $sql_query = "SELECT panther_id AS a FROM users WHERE panther_id ='".$uname."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['a'];
  if($count > 0){
    $sql = "SELECT status, location FROM users WHERE panther_id = '".$uname."'";
   $result = $con->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $status = $row["status"];
    $location = $row["location"];
  }
}
    if($status == 0 and $location == 0){
    $sql = "UPDATE users SET status = 1, location = $table WHERE panther_id = '".$uname."'";
    if (mysqli_query($con, $sql)) {
        echo 1;
} 
            }
    elseif ($status == 1 and $location == $table)
    {
    $sql = "UPDATE users SET status = 0, location = 0 WHERE panther_id = '".$uname."'";
    if (mysqli_query($con, $sql)) {
       echo 2;
}  
    }
   }
    else {
  echo 0;

}
}
?>
    

