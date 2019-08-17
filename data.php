<?php
    include("db.php");
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mess = $_POST['mess'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contact(uname,email,mess,phone,stime) VALUES('$name','$mail','$mess','$phone',CURRENT_TIMESTAMP);";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
                $mess = "Your Message Submitted";
                echo '<script language="javascript">';
                echo 'alert("'.$mess.'");';
                echo 'window.location="https://localhost/ChatRoom/contact.php";';
                echo '</script>';
    }


?>