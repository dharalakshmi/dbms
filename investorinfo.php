<?php
include("connection.php");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $name = $_POST["name"];
    
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $profession = $_POST["profession"];

    // Insert data into the num1 table
    $sql = "INSERT INTO num1(name, email, phone, dob, address, country, gender, profession)
            VALUES ('$name', '$email', '$phone', '$dob', '$address', '$country', '$gender', '$profession')";

    if ($conn->query($sql) == TRUE) {
        // Retrieve data from the developer table after insertion into num1
        $result = mysqli_query($conn, "SELECT * FROM developer ORDER BY p_no DESC");

        // Display the retrieved data from the developer table
        echo '<html><head></head><body><table border="2">
            <tr>
                <th>Project Title</th>
                <th>Project Due Date</th>
                <th>Description</th>
                <th>Link</th>
            </tr>';
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['title'] . '</td>';
            echo '<td>' . $res['due_date'] . '</td>';
            echo '<td>' . $res['discription'] . '</td>';
            echo '<td>';
            echo '<form method="POST" action="amount.php">';
            echo '<input type="hidden" name="p_no" value="' . $res['p_no'] . '">';
            echo '<button type="submit" name="fund_submit">Fund</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table></body></html>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
