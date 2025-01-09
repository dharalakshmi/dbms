<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title =  $_POST['title'];
    $due_date =  $_POST['due_date'];
    $discription =  $_POST['discription'];
    $amount_needed = $_POST['amount_needed'];
    $p_no =  $_POST['p_no'];

    // Insert data into the database
    $sql = "INSERT INTO developer (title, due_date, discription,amount_needed, p_no) 
              VALUES ('$title', '$due_date', '$discription','$amount_needed', '$p_no')";
if ($conn->query($sql) == TRUE) {
    $result = mysqli_query($conn, "SELECT * FROM developer ORDER BY p_no DESC");

        // Display the retrieved data from the developer table
        echo '<html><head></head><body><table border="2">
            <tr>
                <th>Project Title</th>
                <th>Project Due Date</th>
                <th>Description</th>
                <th>Amount_needed</th>
            
            </tr>';
        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['title'] . '</td>';
            echo '<td>' . $res['due_date'] . '</td>';
            echo '<td>' . $res['discription'] . '</td>';
            echo '<td>' . $res['amount_needed'] . '</td>';
           
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