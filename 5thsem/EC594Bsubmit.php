<?php
    $hostname = "localhost";
    $username = "root";
    $password = "Arnab@1997";
    $database = "5TH";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $grade1=$_POST['grade1'];
    $grade2=$_POST['grade2'];
    $grade3=$_POST['grade3'];
    $grade4=$_POST['grade4'];
    $grade5=$_POST['grade5'];
    $grade6=$_POST['grade6'];
    $grade7=$_POST['grade7'];
    $grade8=$_POST['grade8'];

    $sql = "INSERT INTO EC594B (grade1,grade2,grade3,grade4,grade5,grade6,grade7,grade8) VALUES ('$grade1','$grade2','$grade3','$grade4','$grade5','$grade6','$grade7','$grade8')";

    if (mysqli_query($conn, $sql)) {
        header("location:HU501feedback.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

