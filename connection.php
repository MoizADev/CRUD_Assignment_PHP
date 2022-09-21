<?php

$connectionString = new mysqli('localhost','root','root','phpcrud');
if (!$connectionString){
    die(mysqli_error($connectionString));
}

?>