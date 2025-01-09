<?php
include("connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $name = $conn->real_escape_string($_POST["name"]);
    
    $email = $conn->real_escape_string($_POST["email"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $dob = $conn->real_escape_string($_POST["dob"]);
    $address = $conn->real_escape_string($_POST["address"]);
    $country = $conn->real_escape_string($_POST["country"]);
    $gender = $conn->real_escape_string($_POST["gender"]);
    $profession = $conn->real_escape_string($_POST["profession"]);

    // Insert data into the num1 table
    $query = "INSERT INTO num2(name, email, phone, dob, address, country, gender, profession)
            VALUES ('$name', '$email', '$phone', '$dob', '$address', '$country', '$gender', '$profession')";
            $result = mysqli_query($conn, $query);

    if ($result) {
         header('location:developer.php');
    } else {
        echo "Failed to insert data into the database: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>