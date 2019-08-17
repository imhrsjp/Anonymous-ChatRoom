<html>
    <head>
        <link rel="icon" href="img/icon.png">
        <title>Claim</title>
    </head>
</html>
<?php

    $room = $_POST['room'];
    if(strlen($room)<3 or strlen($room)>20)
    {
        $mess = "Please Enter name between 3 to 20 characters";
        echo '<script language="javascript">';
        echo 'alert("'.$mess.'");';
        echo 'window.location="https://localhost/ChatRoom";';
        echo '</script>';
    //    include("index.php");
    }
    else if(!ctype_alnum($room))
    {
        $mess = "Please Enter name alphanumeric name only";
        echo '<script language="javascript">';
        echo 'alert("'.$mess.'");';
        echo 'window.location="https://localhost/ChatRoom";';
        echo '</script>';
    //    include("index.php");
    }
    else
    {
        include("db.php");
    }

    // check the name into chatroom databse

    $sql = "SELECT * FROM room WHERE roomname='$room';";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $mess = "Roomname Already exist,Please select another name";
            echo '<script language="javascript">';
            echo 'alert("'.$mess.'");';
            echo 'window.location="https://localhost/ChatRoom";';
            echo '</script>';
        //    include("index.php");
        }

        else
        {
            $sql = "INSERT INTO room(roomname , stime) VALUES('$room',CURRENT_TIMESTAMP);";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                $mess = "Your Room is ready to chat with Anonymous Friends";
                echo '<script language="javascript">';
                echo 'alert("'.$mess.'");';
                echo 'window.location="https://localhost/ChatRoom/room.php?roomname='.$room.'";';
                echo '</script>';
            //    include("room.php");
            }
            else
            {
                echo "Somrthing Going Wrong ,please try again after some time";
            }


        }
    }

    else
    {
        echo "Query not selected";
    }
    
?>