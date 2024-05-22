<?php
include_once("connect.php");

    $sql="INSERT INTO `contact_details` (`sr_no`, `name`, `number`, `email`) VALUES (NULL,'".$_POST['name']."','".$_POST['number'] ."','".$_POST['email']."')";

    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "ERROR";
    }

?>
