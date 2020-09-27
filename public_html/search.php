<?php 
include "conf.php";
$major = $_GET['major'];
$sql = "select * from users where major = '$major'";
$result = $con->query($sql);
if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
   $geo = $row["location"];
}
if ($geo == 1)
{
    echo 1;
}
elseif($geo == 2)
{
    echo 2;
}
}else {
	echo 0;
}
