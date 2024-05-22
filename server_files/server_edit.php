<?php
include_once("connect.php");

    $sql="UPDATE `contact_details` SET `name` = '".$_POST['name']."', `email` = '".$_POST['email']."' WHERE `contact_details`.`number` = ".$_POST['number']."";


    echo $_POST['name'] . $_POST['email'] . $_POST['number'];

    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "ERROR";
    }
    else
    {
        echo "Received";
    }

    

?>
