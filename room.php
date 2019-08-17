<?php

    $roomname = $_GET['roomname'];

    // connect to database 
    include("db.php");
    
    $sql = "SELECT * FROM room WHERE roomname='$roomname';";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        if(mysqli_num_rows($result) == 0)
        {
            $mess = "Roomname does not exist";
            echo '<script language="javascript">';
            echo 'alert("'.$mess.'");';
            echo 'window.location="https://localhost/ChatRoom";';
            echo '</script>';
        }
        else
        {

        }
    }
    else
    {
        echo "Error= ".mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/icon.png">
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
<!-- Custom styles for this template -->
<link href="css/product.css" rel="stylesheet">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.animate{
    height:350px;
    overflow-y: scroll;
    margin-left:10px;
    width:715px;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body style="background-image:url('img/bg.jpg');">

<br><br>

<div>
<a href="https://localhost/ChatRoom/#"><h3 style="float:right; color:white; background-color:gray; margin-top:4px; text-align:center;" class="btn btn-default"">Home</h3></a>
<h2 style="color:white;">Room Name: <?php echo $roomname ; ?></h2>
</div>

<div class="container">
    <div class="animate">
        
    </div>
</div>

<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add Message"><br>
<button class="btn btn-default" style="color:white; background-color:green;" name="submitmsg" id="submitmsg">Send</button>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript">

    // check for new mssages
    setInterval(runFunction,1000);
    function runFunction()
    {
      $.post("mess.php", { room: '<?php echo $roomname ?>' },
      function(data,status)
      {
        document.getElementsByClassName('animate')[0].innerHTML = data;
      }
      
      )
    }



    var input = document.getElementById("usermsg");
    input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("submitmsg").click();
    }
    });


    
    $("#submitmsg").click(function(){

        var clientmsg = $("#usermsg").val();
        $.post("postmsg.php", { text: clientmsg , roomchat: '<?php echo $roomname ?>' , ip: '<?php echo  $_SERVER['REMOTE_ADDR'] ?>' },
        function(data,status)
        {
            document.getElementsByClassName('animate')[0].innerHTML = data;
        });
        $("#usermsg").val("");
        return False;
    });
</script>


</body>
</html>
