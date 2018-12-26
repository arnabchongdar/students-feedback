<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "ADMIN";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }
    
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        
        if($email==$row['email'] && $name==$row['name']){
            echo "<h1 align=center>Successfully logged in</h1>";
            echo "<br/>";
            echo 'Hello '.$row['name'].'<br/>';
            $flag=1;
            //setcookie("name",$row['name']);
            $_SESSION['name']=$row['name'];
            echo"<h2 align=center><a href='project_dashboard.php'>click here to go to dashboard</a></h2>";
            break;
        }
    }
    if($flag==0){
        echo "user not registered";
    }

    mysqli_close($conn);
    
?>


