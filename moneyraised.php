<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SUM query on a column (e.g., assuming a column named 'amount' in a table named 'transactions')
$sql = "SELECT SUM(investAmount) AS totalAmount FROM feedback";
$result = $conn->query($sql);

// Fetch the result
$row = $result->fetch_assoc();
$totalAmount = $row['totalAmount'];

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Result</title>
</head>
<body>
    <h2>Sum Result</h2>

    <?php
    // Display the result
    echo "<p>Total Amount: $totalAmount</p>";
    ?>
</body>
</html>