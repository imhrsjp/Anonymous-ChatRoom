<?php

    include("db.php");
    $msg = $_POST['text'];
    $room = $_POST['roomchat'];
    $ip = $_POST['ip'];
    $check ="";
    include("db.php");
    if($msg == $check)
    {
                $mess = "please Enter message";
                echo '<script language="javascript">';
                echo 'alert("'.$mess.'");';
                echo 'window.location="https://localhost/ChatRoom/room.php?roomname='.$room.'";';
                echo '</script>';
    }
    else
    {
    $sql = "INSERT INTO msg(mess,roomname,ip,stime) VALUES('$msg','$room','$ip',CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Ip $ip Says -  $msg";
    }
    }
    mysqli_close($conn);

?>