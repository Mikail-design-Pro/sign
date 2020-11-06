<?php
    
    include_once 'verification.php';

    $first = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO tabshop (user, mdp) VALUES('$first','$pass');";

    mysqli_query($conn,$sql);


    header("location:principale.php?verification=success");

?>