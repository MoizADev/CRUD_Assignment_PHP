<?php
include './connection.php';

$sql_Query = 'select * from user';
$result = mysqli_query($connectionString,$sql_Query);

if ($result){
    while($entry = mysqli_fetch_assoc($result)){
        $email=$entry['email'];
        $name=$entry['name'];
        $id=$entry['user_id'];
        $phone = $entry['mobile'];
        echo "<tr><td>".$id."</td>
                <td>".$name."</td>
                <td>".$email."</td>
                <td>".$phone."</td>
                <td>
                    <a href='updateUser.php?updateID=".$id."' class='btn text-white' style='background-color: #536DFE'>Update</a>
                    <a href='deleteUser.php?delID=".$id."' class='btn btn-danger'>Delete</a>
                </td>
              </tr>";
    }
}

?>