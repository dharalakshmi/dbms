
<?php include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;

        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfMUIUoUms0cVzCWik73P_90LPre9psi-du8_Aq5A2_KbjmH84ARwzWf4IFlrJWv7zcVY&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
        }

        .container {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        input, textarea {
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
        header {
  background-color: #f1f1f1;
  color: black;
  padding: 20px;
}
nav {
  text-align: right;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: teal;
  text-decoration: none;
}
    </style>
    <script>
        function validateForm() {
            var dueDateInput = document.getElementById('due_date');
            var amountInput = document.getElementById('amount_needed');

            // Validation for project due date
            var currentDate = new Date();
            var selectedDate = new Date(dueDateInput.value);

            if (selectedDate <= currentDate) {
                alert('Please select a future date for the project due date.');
                return false;
            }

            // Validation for amount needed (should contain only digits)
            if (!/^\d+$/.test(amountInput.value)) {
                alert('Please enter a valid amount needed with digits only.');
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <header>
        <nav>
      <ul>
        <li><a href="check1.html">Log Out</a></li>
      </ul>
    </nav>
  </header> 
    <div class="container">
        <h1>Project Page</h1>
        <form id="developerForm" method="POST" action="function.php" onsubmit="return validateForm()">
            <label for="title">Project Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter Project Title" required>

            <label for="due_date">Project Due Date:</label>
            <input type="date" id="due_date" name="due_date" required>

            <label for="discription">discription:</label>
            <textarea id="discription" name="discription" placeholder="Enter Project Description" rows="4" required></textarea>

            <label for="amount_needed">Amount Needed:</label>
            <input type="number" id="amount_needed" name="amount_needed" placeholder="Enter Amount Needed" required>


            <?php
                // Auto-generate Project ID (You can use your own logic to generate it)
                $p_no = uniqid('project_', true);
                
                echo '<input type="hidden" id="p_no" name="p_no" value="' . htmlspecialchars($p_no) . '" readonly>';
            ?>

            <button type="submit" name="submit">Submit</button>
             </div>
        </form>
</body>
</html>

    
