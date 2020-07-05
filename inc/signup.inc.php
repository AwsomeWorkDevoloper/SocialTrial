<?php
if(isset($_POST['signupBtn'])){
   include_once 'connect.php';

    $user = $_POST['userSign'];
    $email = $_POST['emailSign'];
    $pwd = $_POST['pwdSign'];
    
    $query = "INSERT INTO `users` (`uid`, `email`, `pwd`) VALUES ('$user', '$email', '$pwd')";
    $result = mysqli_query($conn, $query) or die("Couldnt sign up");
    header("Location: ../index.php?signup=success");
}
