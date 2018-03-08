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
    <div class="container">
        <h1 class="text-center" style="margin-top: 50px">Insert Your Data</h1>
        <form method="post">
            <h2>Personal Info</h2>
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" class="form-control" name="f_name" required>
            </div>
            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" class="form-control" name="l_name" required>
            </div>
            <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                    <label for="phone">Phone #:</label>
                    <input type="text" class="form-control" name="mobile" required>
            </div>
            <div class="form-group">
                    <label for="linkedin">Linked In URL:</label>
                    <input type="text" class="form-control" name="linkedin" required>
            </div>
            <h2>Experience</h2>

            <div class="form-group">
                    <label for="job">Job Title:</label>
                    <input type="text" class="form-control" name="job_title" required>
                </div>
            <div class="form-group">
                    <label for="date1">Date From:</label>
                    <input type="date" class="form-control" name="job_date_from" required>
            </div>
            <div class="form-group">
                    <label for="date2">Date To:</label>
                    <input type="date" class="form-control" name="job_date_to" required>
            </div>
            <div>
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="4" name="job_desc" required></textarea>
            </div>

            <h2>Education:</h2>

            <div class="form-group">
                    <label for="degree">Degree:</label>
                    <input type="text" class="form-control" name="degree" required>
                </div>
            <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="text" class="form-control" name="deg_year" required>
            </div>
            <div class="form-group">
                    <label for="school">School:</label>
                    <input type="text" class="form-control" name="school" required>
            </div>
            <div>
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="4" name="deg_desc" required></textarea>
            </div>

            <div class="form-group">
                    <label for="objectives">Objectives:</label>
                    <input type="text" class="form-control" name="objectives" required>
            </div>
            <div class="form-group">
                    <label for="skills">Skills:  <small>(seperate with commas)</small></label>
                    <input type="text" class="form-control" name="Skills" required>
            </div>
            <div class="form-group">
                    <label for="leadership">Leadership: <small>(optional)</small> </label>
                    <input type="text" class="form-control" name="leadership">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" name="submit"></input>
            </div>
            </form>


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

if (isset($_POST['submit']))
	{
                
                $f_name = $_POST['f_name'];
                $l_name = $_POST['l_name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $linkedin = $_POST['linkedin'];
                $job_title = $_POST['job_title'];
                $job_date_from = $_POST['job_date_from'];
                $job_date_to = $_POST['job_date_to'];
                $job_desc = $_POST['job_desc'];
                $degree = $_POST['degree'];
                $deg_year = $_POST['deg_year'];
                $school = $_POST['school'];
                $deg_desc = $_POST['deg_desc'];
                $objectives = $_POST['objectives'];
                $Skills = $_POST['Skills'];
                $leadership = $_POST['leadership'];


                $sql = "INSERT INTO user_data (
                f_name, l_name, email,
                mobile, linkedin, job_title,
                job_date_from, job_date_to, job_desc,
                degree, deg_year, school,
                deg_desc, objectives, Skills)
VALUES (
        '$f_name', '$l_name', '$email',
        '$mobile', '$linkedin', '$job_title',
        '$job_date_from', '$job_date_to', '$job_desc',
        '$degree', '$deg_year', '$school',
        '$deg_desc', '$objectives', '$Skills'
)";

if ($conn->query($sql) === TRUE) {
        echo "<script>alert ('Product Inserted Successfully :)')</script>";
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
                
                



        }

?>
