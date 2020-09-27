<?php 
$table=$_GET['table'];
$id = $_GET['id'];
$snum = $_GET['school'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Panthers!</title>
     <link rel="stylesheet" href="some.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="header">
  <img src="fiu-white-logo.png" class="logo">
  <p class = "logo p">Study Pal</p>
    </div>
    <div class = "yellow"></div>
    <div class="overlay"></div>
    <?php if($snum == 1)
    {
    ?>
        <div>
    <p class="text-justify pt mt">Please choose your major</p>
    <a href="sign_up.php?table=<?php echo $table; ?>&id=<?php echo $id; ?>&school=College of Engineering and Computing&major=Mechanical Engineering"><img src="me_logo_txt (1).PNG"  class="img-thumbnail imgw mt"></a>
    <a href="sign_up.php?table=<?php echo $table; ?>&id=<?php echo $id; ?>&school=College of Engineering and Computing&major=Electrical Engineering"><img src="ee_logo_txt.png"  class="img-thumbnail imgw mt"></a>
    </div>
    <?php
    }
    else
    {
        ?>
         <div>
    <p class="text-justify pt mt">Please choose your major</p>
    <a href="sign_up.php?table=<?php echo $table; ?>&id=<?php echo $id; ?>&school=School of International Public Affairs&major=International Business"><img src="ib_logo_txt.png"  class="img-thumbnail imgw mt"></a>
    <a href="sign_up.php?table=<?php echo $table; ?>&id=<?php echo $id; ?>&school=School of International Public Affairs&major=Economics"><img src="econ_logo_txt.png"  class="img-thumbnail imgw mt"></a>
    </div>
        <?php
    }
        

    ?>
</body>
</html>