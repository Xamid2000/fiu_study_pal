<?php
$table = $_GET['table'];
echo "table " . $_GET['table']
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="div_login">
        <h1>Panther ID:</h1>
        <div id="message"></div>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="e.g. 123456" required />
        </div>
        <div>
            <input type="button" value="Submit" name="but_submit" id="but_submit" />
        </div>
        <div id= "sign" hidden><a href="signup.php?table=<?php echo $table;?>">Sign UP</a></div>
    </div>



<script>
$(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
       var table = parseInt(<?php echo $table;?>);
        if( username != ""){
            $.ajax({
                url:'check.php',
                type:'post',
                data:{username:username, table:table},
                success:function(response){
                    if(response == 1){
                        window.location = "text.php";
                    }
                    else if (response == 2)
                    {
                        window.location = "gb.php";
                    }
                    else{
                         document.getElementById("sign").removeAttribute("hidden");
                       alert("Sign up is required");
                    }
                }
            });
        }
    });
});
</script>
</body>
</html>

