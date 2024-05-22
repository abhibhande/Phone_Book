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
    while($i < count($data) - 1){

        $num=$i+1;
        $name=$i;


    echo '  
        <div class="list-group">
            <div class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">'.$data[$i++].'</h5>
                <small><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal'.$data[$num].'">
                EDIT
              </button></small>
                </div>
                <p class="mb-1">'.$data[$i++].'</p>
                <small>'.$data[$i++].'</small>
            </div>

        </div>
     
        <div class="modal fade" id="exampleModal'.$data[$num].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                <input type="text" id="name" class="form-control" name="name" 
                placeholder="Name">
                <label for="floatingInput">Enter Name</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="'.$data[$name].'" name="number" 
                placeholder="Number" value="'.$data[$num].'" readonly>
                <label for="floatingInput">Number Should Be Available</label>
                </div>
                
                <input type="hidden" value="'.$data[$num].'" id="number"/>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" name="email" 
                placeholder="Email">
                <label for="floatingInput">Enter email</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="SaveChanges" class="btn btn-primary" onclick="update()"  >Save changes</button>
            </div>
            </div>
        </div>
        </div>
        ';
    }

        ?>


</div>
    
    
</body>
</html>


