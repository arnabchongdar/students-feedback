<?php
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "5TH";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $sql = "INSERT INTO 5log (name, email, password) VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

