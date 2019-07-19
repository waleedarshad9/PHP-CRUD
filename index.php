<?php
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
    $firstname =  $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $CreateSql = "INSERT INTO crud (first_name, last_name, email, gender, age) VALUES ('$firstname','$lastname','$email','$gender','$age')";

    $res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
    if($res){
        $smsg = "Successfully inserted data, Insert New data.";
    }else{
        $fmsg = "Data not inserted, please try again later.";
    }

}


?>


<html>
<head>
    <title>Simple CRUD Application - CREATE</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <link rel="stylesheet" href="styles.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
            <h2>Create Operation in CRUD Application</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" id="input1" placeholder="First Name" />
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lname"  class="form-control" id="input1" placeholder="Last Name" />
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" />
                </div>
            </div>

            <div class="form-group" class="radio">
                <label for="input1" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <label>
                        <input type="radio" name="gender" id="optionsRadios1" value="male" checked> Male
                    </label>
                    <label>
                        <input type="radio" name="gender" id="optionsRadios1" value="female"> Female
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <select name="age" class="form-control">
                        <option>Select Your Age</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
        </form>
    </div>
</div>
</body>
</html>
