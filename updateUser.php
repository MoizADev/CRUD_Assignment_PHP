<?php
include 'connection.php';
$id = $_GET['updateID'];

if (isset($_POST['cancel'])){
    header('location:index.php');
}


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $password = $_POST['password'];
    $sqlQuery = "update user set name='$name',email='$email',password='$password',mobile='$mobile' where user_id=$id";
    $result = mysqli_query($connectionString,$sqlQuery);
    if ($result){
        header('location:index.php');
    }
    else{
        echo 'Error white updating.';
    }

}

if (isset($_GET['updateID'])){
    $sqlQuery = 'select * from user where user_id='.$id;
    $result = mysqli_query($connectionString,$sqlQuery);

    if ($result){
        $userEntry = mysqli_fetch_assoc($result);
        $name =  $userEntry['name'];
        $email =  $userEntry['email'];
        $mobile =  $userEntry['mobile'];
        $password =  $userEntry['password'];

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <nav class="nav-bar">
        <p class="logo">C R U D</p>
    </nav>
    <div class="userFormContainer">
        <img class="asset" src="assets/undraw_portfolio_update_re_jqnp.svg" alt="contact png">
        <form class="py-5 my-5" method="post">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Full Name" value="<?php echo $name; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email; ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $mobile; ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>" required>
                    <div class="input-group-addon">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>

            <div class="text-end">
                <button type="submit" name="submit" class="btn btn-dark">Update</button>
                <button type="submit" name="cancel" class="btn text-white" style="background-color: #536DFE">Cancel</button>
            </div>

        </form>
    </div>

</div>
</body>
</html>