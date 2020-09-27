
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="header">
  <img src="fiu-white-logo.png" class="logo">
  <p class = "logo p">Study Pal</p>
    </div>
    <div class = "yellow"></div>
    <div class="overlay"></div>
    
        <div class="container zzz">
            <div class="row text-white">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate txtcl txttxt">What major are you searching</h1>
                    <div class="px-2">
                        
                            <div class="form-group">
                              
                                 
                            <input class="form-control" type="text" id="src" name="src" placeholder="Computer Engineering">
                            </div>
                         <input type="button" class="btn btn-primary btn-lg clbtn" value="Search" name="but_submit" id="but_submit"/>
                    </div>
                </div>
            </div>
        </div>
<div class = "div">
<div class = "ppppp"><a href = "https://goo.gl/maps/Q5TJ81omBmiuHXeG9"><p class = "bbb" id ="a" hidden>Hey!</p></a></div>
<div class = "bbbbb" ><a href = "https://goo.gl/maps/WaAAtjNhCSBu5vBL9"><p class = "bbb" id= "b" hidden>Hey!</p></a></div>
<img src="fiu-mmc-map-2016.png" class = "aaa">
</div>
<script>
$(document).ready(function(){
    $("#but_submit").click(function(){
        var major = $("#src").val().trim();
        if( major != ""){
            $.ajax({
                url:'search.php',
                type:'get',
                data:{major:major},
                success:function(response){
                    if(response == 1){
                        alert("GEO 1");
                         document.getElementById("a").removeAttribute("hidden");
                    }
                    else if (response == 2)
                    {
                        alert("GEO 2");
                         document.getElementById("b").removeAttribute("hidden");
                    }

                    else{
                       alert("no match");
                       window.location = "index.php";
                    }
                }
            });
        }
    });
});
</script>
</body>
</html>
