<?php 
$table = $_GET['table'];
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
</head>
<body>
    <div class="header">
  <img src="fiu-white-logo.png" class="logo">
  <p class = "logo p">Study Pal</p>
    </div>
    <div class = "yellow"></div>
    <div class="overlay"></div>
    
    <form action = "sign2.php" method = post>
    <div class="container">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate txtcl txttxt">Enter Panther ID again</h1>
                    <div class="px-2">
                        
                            <div class="form-group">
                              
                              <input type= "text" name = "table" value = "<?php echo $table;?>" hidden>   
                            <input class="form-control" type="text" id="txt_uname" name="txt_uname" placeholder="e.g. 123456">
                            </div>
                         <input type="submit" class="btn btn-primary btn-lg clbtn" value="Let's go!" name="but_submit" id="but_submit"/>
                    </div>
                </div>
            </div>
        </div>
       </form>

</body>
</html>