<?php
// include "conf.php";
// $table = 1;
// $count = 1;
// $uname = '6214109';
//   if($count > 0){
//     $sql = "SELECT status, location FROM users WHERE panther_id = '".$uname."'";
//   $result = $con->query($sql);
//     if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//     $status = $row["status"];
//     $location = $row["location"];
//   }
// }
//     if($status == 0 and $location == 0){
//     $sql = "UPDATE users SET status = 1, location = $table WHERE panther_id = '".$uname."'";
//     if (mysqli_query($con, $sql)) {
//         echo 1;
// } 
//             }
//     elseif ($status == 1 and $location == $table)
//     {
//     $sql = "UPDATE users SET status = 0, location = 0 WHERE panther_id = '".$uname."'";
//     if (mysqli_query($con, $sql)) {
//       echo 2;
// }  
//     }
//   }
//     else {
//   echo 0;

// }
// include "conf.php";
// $table = 1;
// $panther_id = '6214109';
// $school = 'test';
// $major = 'pest';
// $sql = "INSERT INTO users (panther_id, school, major, status, location)
// VALUES ('$panther_id', '$school', '$major', 1, $table)";

// if ($con->query($sql) === TRUE) {
//   echo 1;
// } else {
//   echo 0;
// }
include "conf.php";
$array[] = array();
$major = 'Computer Engineering';
$sql = "select * from users where major = '$major'";
$result = $con->query($sql);
if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
   $geo = $row["location"];
   $array[] = $geo;
}
for ($x = 0; $x <= count($array[]); $x++) {
  echo $array[x];
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


?>




<!--<?php-->
<!--$table = $_GET['table'];-->
<!--echo "table " . $_GET['table']-->
<!--?>-->
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--  <link rel="stylesheet" href="styles.css">-->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--    <div id="div_signup">-->
<!--        <h1>Panther ID:</h1>-->
<!--        <div>-->
<!--            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="e.g. 123456" required />-->
<!--        </div>-->
<!--         <h1>school:</h1>-->
<!--        <div>-->
<!--            <input type="text" class="textbox" id="school" name="school" placeholder="Engineering" required />-->
<!--        </div>-->
<!--         <h1>major:</h1>-->
<!--        <div>-->
<!--            <input type="text" class="textbox" id="major" name="major" placeholder="Computer Enigineering" required />-->
<!--        </div>-->
<!--        <div>-->
<!--            <input type="button" value="Sign_up" name="but_submit" id="but_submit" />-->
<!--        </div>-->
        
<!--    </div>-->



<!--<script>-->
<!--$(document).ready(function(){-->
<!--    $("#but_submit").click(function(){-->
      // document.getElementById("sign").removeAttribute("hidden"); 
<!--    var panther_id = $("#txt_uname").val().trim();-->
<!--     var school = $("#school").val().trim();-->
<!--      var major = $("#major").val().trim();-->
<!--       var table = parseInt(<?php echo $table;?>);-->
<!--        if( panther_id != ""){-->
<!--            $.ajax({-->
<!--                url:'sign_up.php',-->
<!--                type:'post',-->
<!--                data:{panther_id:panther_id, school:school, major:major, table:table},-->
<!--                success:function(response){-->
<!--                    if(response == 1){-->
<!--                        window.location = "text.php";-->
<!--                    }-->
<!--                    else-->
<!--                    {-->
<!--                        alert("Can you sign up again?");-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        }-->
<!--    });-->
<!--});-->
<!--</script>-->
<!--</body>-->
<!--</html>-->