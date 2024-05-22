<?php
  // include_once("index_helper.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE~BOOK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <script>
            function update()
            {
                let name=document.getElementById("name").value;
                
                let number=document.getElementById("number").value;
                let email=document.getElementById("email").value;

                alert(name +" "+ number+" " + email);


                let data=name +"_"+ number+"_" + email;

                location.reload();

            }
        </script>


</head>
<body ng-app="myApp">


<ul class="nav justify-content-center">

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#/!">HOME</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#!add">ADD New</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#!edit">EDIT</a>
  </li>

  
</ul>


<div ng-view>

</div>


<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "home.php"
  })
  .when("/edit", {
    templateUrl : "edit.php"
  })
  .when("/add", {
    templateUrl : "addnew.php"
  });
});

</script>
    
</body>
</html>