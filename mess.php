<?php
    $room = $_POST['room'];
    include("db.php");
    $sql = "SELECT mess,stime,ip FROM msg WHERE roomname='$room'";
    $res = "";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $res = $res . '<div class="container">';
            $res = $res . $row['ip'];
            $res = $res . ' says : <p>'.'-> '.$row['mess'].'</p>';
            $res = $res . '<span class="time-right">'. $row['stime'].'</span></div>';
        }
    }
    echo $res;

?>