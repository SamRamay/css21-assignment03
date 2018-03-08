<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="jumbotron text-center">
        <h1>Welcome to the CV's Point</h1>
        <h5 class="text-uppercase">enter your data and create  free cv</h5>
    </div>
<div class="container">
    <form action="" method="post" class="form-group">
<div class="form-group">
        <label for="id">Give ID <small>(if already submitted data)</small></label>
        <input type="text" class="form-control" name="id" placeholder="Enter ID..">
    </div>
    <div class="form-group">

    <button type="button" class="form-control btn btn-outline-info"><a href="./sample01.html">Show on Sample 01</a></button>
</div>
    <div class="form-group">

    <button type="button" class="form-control btn btn-outline-info"><a href="./sample03.html">Show on Sample 02</a></button>
</div>
    <div class="form-group">

    <button type="button" class="form-control btn btn-outline-info"><a href="./sample04.html">Show on Sample 03</a></button>
</div>
</form> 

<button class="btn"><a href="./insert_form.php"> Click here to Submit Data</a></button>

</div>
    
</body>
</html>

<?php

$servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "CVs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);






?>