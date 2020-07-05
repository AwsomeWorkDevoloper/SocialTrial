<html>
    <head>
        <title>Posts</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    </head>
    <body>
        <div class="topbar">
            <a href="index.php">
                <img class="logo" src="img/logo.jpg" alt="logo">
            </a>
            <ul>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <?php
        include_once 'inc/connect.php';
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query) or die("Couldnt connect to db");
        while($row = mysqli_fetch_assoc($result)){
            echo $row['uid']. " says: ".$row['Post']."<br><br>";
        }
        ?>
        <br>
        <a href="post.php">Update Post</a>
    </body>
</html>