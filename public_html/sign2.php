<?php 
$table = $_POST['table'];
$pid = $_POST['txt_uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Panthers!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="some.css">
</head>
<body>
<div class="header">
    <img src="fiu-white-logo.png" class="logo">
  <p class = "logo p">Study Pal</p>
    </div>
    <div class = "yellow"></div>
     <div>
    <p class="text-justify pt mt">Please choose your school</p>
    <a href="sign3.php?table=<?php echo $table; ?>&id=<?php echo $pid; ?>&school=1"><img src="college_eng_logo.png"  class="img-thumbnail imgw mt"></a>
    <a href="sign3.php?table=<?php echo $table; ?>&id=<?php echo $pid; ?>&school=2"><img src="sipa_logo.png"  class="img-thumbnail imgw mt"></a>
    </div>
</script>
</body>
</html>
