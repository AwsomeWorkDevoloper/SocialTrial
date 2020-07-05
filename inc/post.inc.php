<?php
session_start();

if(isset($_POST['pstBtn'])){
   include_once 'connect.php';

    $user = $_SESSION["User"];
    $post = $_POST['pstTxt'];
    
    $query = "UPDATE users SET Post = '$post' WHERE uid = '$user'";
    $result = mysqli_query($conn, $query) or die("Couldnt Post");
    $row = mysqli_fetch_assoc($result);
    header("Location: ../posts.php?postednew");
}

