<?php
include("connection.php");

if (isset($_POST['submit'])) {
    // Retrieve form data
    $email =  $_POST['email'];
    $password =  $_POST['password'];
   

    // Insert data into the database
    $query = "INSERT INTO login (email,password) 
              VALUES ('$email', '$password')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header('location:selection.html');

    } else {
        echo "Failed to insert data into the database: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>