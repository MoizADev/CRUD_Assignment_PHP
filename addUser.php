<?php
include "./connection.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sqlQuery = "insert into user (name,email,password,mobile) values('$name','$email','$password','$phone')";
    $result = mysqli_query($connectionString, $sqlQuery);
    if ($result) {
        header('location:index.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/style.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="./scripts/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="nav-bar">
        <p class="logo">C R U D</p>
    </nav>
    <div class="userFormContainer">
        <img class="asset" src="assets/undraw_work_from_anywhere_re_s2i6.svg" alt="contact png">
        <form class="py-2" method="post" action="/addUser.php">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" required>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" onkeyup="CheckPswd()" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                <small id="pswdError" style="opacity: 0"></small>
            </div>

            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" onkeyup="CheckPswd()" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                <small id="pswdError" style="opacity: 0"></small>
            </div>

            <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>
</html>