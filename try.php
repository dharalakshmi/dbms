<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      text-align: center;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
</style>
</head>
<body>
    <div class="container">
        <h1>Enter Your Investment</h1>
        <form id="investmentForm" method="post" action="try.php">
            <input type="text" id="name" name="name" placeholder="Your Name" required><br>
            <input type="number" name="investAmount" id="investAmount" placeholder="Amount to Invest" required><br>

            <?php
            // Fetch p_no values from the developer table (you might need to adjust this query based on your actual schema)
            $query = "SELECT p_no FROM developer";
            $result = mysqli_query($conn, $query);

            // Check if there are rows
            if (mysqli_num_rows($result) > 0) {
                echo '<label for="p_no">Select Project:</label>';
                echo '<select id="p_no" name="p_no" required>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['p_no'] . '">' . $row['p_no'] . '</option>';
                }
                echo '</select>';
            } else {
                echo '<p>No projects available</p>';
            }

            ?>

            <input type="submit" name="investsubmit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php
include("connection.php");

if (isset($_POST['investsubmit'])) {
    // Validate and sanitize inputs
    $name = $_POST['name'];
    $investAmount = $_POST['investAmount'];
    $p_no = $_POST['p_no'];

    // Insert data into the feedback table
    $query = "INSERT INTO feedback (name, investAmount, p_no) VALUES ('$name', '$investAmount', '$p_no')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted into Database";
    } else {
        echo "Failed to insert data into the database: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
