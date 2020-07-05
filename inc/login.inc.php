<?php
session_start();

if(isset($_POST['loginBtn'])){
   include_once 'connect.php';

    $user = $_POST['userLgn'];
    $pwd = $_POST['pwdLgn'];
    
    $query = "SELECT pwd FROM users WHERE uid='$user'";
    $result = mysqli_query($conn, $query) or die("Couldnt login");
    $row = mysqli_fetch_assoc($result);
    
    if ($pwd == $row['pwd']){
        echo "Login success";
        header("Location: ../posts.php?lgn=success");
        $_SESSION["User"] = $user;
    }
    else{
        header("Location: ../login.php?lgn=fail");
        echo "Invalid user or password";
    }
}

