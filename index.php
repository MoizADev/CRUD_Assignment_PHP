<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="stylesheets/style.css">

</head>
<body>
    <div>
        <nav class="nav-bar">
            <p class="logo">C R U D</p>
            <a class="btn" href="addUser.php">Add User</a>
        </nav>
        <table class="container table table-striped thead-dark">
            <thead class="bg-dark text-white">
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    include 'user.php';
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>