<?php
 include 'connection.php';
 if (isset($_GET['delID'])){
     $id = $_GET['delID'];

     $sqlQuery = 'Delete from user where user_id='.$id;
     $result = mysqli_query($connectionString,$sqlQuery);

     if ($result){
         header('location:index.php');
     }

 }

?>