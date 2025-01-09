<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      
      text-align: center;
      margin: 0;
      padding: 0;
       background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-zYJykgK53gMWFmuzHOSw2l4aSZ7uqTc5hSBBPjgyIoMvtv68bse5ljkeJL0EzS--ybQ&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;;
  
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top:150px;
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
            background-color: #3498db;
       color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
       font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2980b9;
        }    
  </style>
</head>
<body>
  <div class="container">
    <h1>Enter Your Investment</h1>
     <form id="investmentForm" method="post" action="process_fund.php">
            <input type="hidden" name="selected_p_no" value="<?php echo $_POST['p_no']; ?>">
            <input type="text" id="name" name="name" placeholder="Your Name" required><br>
            <input type="number" name="investAmount" id="investAmount" placeholder="Amount to Invest" required><br>
            <input type="submit" name="fund_submit" value="Fund">
        </form>
  </div>
</body>
</html>


