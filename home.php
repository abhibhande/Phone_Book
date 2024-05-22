<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

    <style>
        .phonebook-list{
            width: 700px;
            margin: auto;
            margin-top: 10px;
        }
        .list-group{
            margin-top: 10px;
        }
    </style>

<body>
 
<?php

//we get data here from display.php file which is present on local server
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://localhost/UNSTOP_INTERN/server_files/display.php");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $row=curl_exec($ch);
    curl_close($ch);

    $data=explode("_",$row);
        
?>


<!-- This structure is taken from bootstrap and using for loop for displaying data-->
<div class="phonebook-list">

    <?php
    $i=0;
    while($i < count($data) - 1)
    echo'   
        <div class="list-group">
            <div class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">'.$data[$i++].'</h5>
                </div>
                <p class="mb-1">'.$data[$i++].'</p>
                <small>'.$data[$i++].'</small>
            </div>

        </div>';

        ?>


</div>
    
    
</body>
</html>


