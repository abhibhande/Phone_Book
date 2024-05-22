<?php
include_once("connect.php");

$sql="select * from contact_details";

$result=mysqli_query($conn,$sql);

// print_r($result);

if($result)
{
    while($row=mysqli_fetch_array($result))
    {
        print_r($row['name'].'_'.$row['number'].'_'.$row['email'].'_');
    }
    
}
else{
    echo "error";
}

?>