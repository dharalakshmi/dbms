<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fund_submit'])) {
    // Retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $investAmount = isset($_POST['investAmount']) ? $_POST['investAmount'] : '';
    $selected_p_no = isset($_POST['selected_p_no']) ? $_POST['selected_p_no'] : '';

    // Check if a record with the selected_p_no already exists
    $sql = "SELECT * FROM feedback WHERE selected_p_no = '$selected_p_no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Existing record found, update investAmount
        $row = $result->fetch_assoc();
        $newInvestAmount = $row['investAmount'] + $investAmount;

        // Update the record in the feedback table
        $updateSql = "UPDATE feedback SET investAmount = '$newInvestAmount' WHERE selected_p_no = '$selected_p_no'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Data Updated in Feedback Table";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Insert data into the feedback table
        $insertSql = "INSERT INTO feedback (selected_p_no, name, investAmount) 
                VALUES ('$selected_p_no', '$name', '$investAmount')";
        if ($conn->query($insertSql) === TRUE) {
            echo "Data Inserted into Feedback Table";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
