<?php
    session_start();
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "ECE";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }
    
    
    $email=$_POST["name"];
    $password=$_POST["password"];
    
    $flag=0;
    while ($row=mysqli_fetch_array($result)) {
        
        if($email==$row['name'] && $password==$row['password']){
            echo "Successfully logged in";
            echo "<br/>";
            echo "Hello ".$row['name']."<br/>";
            $flag=1;
            //setcookie("name",$row['name']);
            $_SESSION['name']=$row['name'];
            echo"<a href='dashboard.php'>click here</a>";
            break;
        }
    }
    if($flag==0){
        echo "user not registered";
    }

    mysqli_close($conn);
    
?>

