<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  font-family: sans-serif;
  background-color:#f1f1f1;
}

.container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
        }
.form-container {
  width: 500px;
  
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
}

h1 {
  text-align: center;
  font-size: 2em;
}

.form-group {
  margin-bottom: 1em;
}

label {
  display: block;
  margin-bottom: 0.5em;
}

input,
select {
  width: 100%;
  border: 1px solid #ccc;
  padding: 0.5em;
}

input:invalid,
select:invalid {
  border: 1px solid red;
}

.error {
  color: red;
}
.submit-button {
  background-color: #007bff;
  color: #fff;
  border: 1px solid #007bff;
  padding: 0.5em 1em;
  font-size: 1.2em;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #0069d9;
}
.form-group input[type="text"],
.form-group input[type="tel"],
.form-group input[type="url"],
.form-group input[type="email"],
.form-group select
{
width:100%;
display:inline-block;
margin-right:2%;
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
.invest_form {
            width: 48%;
            margin-left: 20px;
        }

        .invest_form img {
            width: 100%;
            height: auto;
        }
.info-boxes {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 20px 0;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.box {
  padding: 20px;
  
  flex: 1;
}

.box h2 {
  margin-bottom: 10px;
}
.info-boxes ul li{
  list-style-type:none;

}
ul a{
  text-decoration: none;
   color:teal;
}
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Investing</title>
  
</head>
<body>
  <header>
    <img src="secure-shares-logo.png" alt="Secure Shares Logo">
    <nav>
      <ul>
        <li><a href="#">Start Investing</a></li>
        <li><a href="#">Learn</a></li>
        <li><a href="#">Earn Bonus Shares</a></li>
        <li><a href="image.html">Raise Capital</a></li>
        <li><a href="user_page.php">Log In</a></li>
        <li><a href="login.php">Sign Up</a></li>
      </ul>
    </nav>
  </header> 
  <h1>Start Investing</h1>
 <div class="container">
  <div class="form_container">
  <form action="investors.php" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="first_name">First Name</label>
      <input type="text" name="first_name" id="first_name" required>
    </div>

    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" name="last_name" id="last_name" required>
    </div>

    <div class="form-group">
      <label for="company_name">Company Name</label>
      <input type="text" name="company_name" id="company_name" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
      <label for="phone_number">Phone Number</label>
      <input type="tel" name="phone_number" id="phone_number" required>
    </div>

    <div class="form-group">
      <label for="website_url">Website URL</label>
      <input type="url" name="website_url" id="website_url" pattern="https?://.+" required>
    </div>

    <div class="form-group">
      <label for="previously_raised">How much has the company previously raised?</label>
      <select name="previously_raised" id="previously_raised" required>
        
        <option value="0-100k">0-100k</option>
        <option value="100k-500k">100k-500k</option>
        <option value="500k-1m">500k-1m</option>
        <option value="1m+">1m+</option>
      </select>
    </div>

    <div class="form-group">
      <label for="incorporated_in_us">Are you incorporated in the US?</label>
      <select name="incorporated_in_us" id="incorporated_in_us" required>
        
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>

    <div class="form-group">
      <label for="executive_team_location">Where is your executive team primarily based?</label>
      <select name="executive_team_location" id="executive_team_location" required>
        
        <option value="us">United States</option>
        <option value="canada">Canada</option>
        <option value="uk">United Kingdom</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="raise_timeframe">When are you looking to raise?</label>
      <select name="raise_timeframe" id="raise_timeframe" required>
        
        <option value="next_3_months">Next 3 Months</option>
        <option value="3_6_months">3-6 Months</option>
        <option value="6_12_months">6-12 Months</option>
        <option value="12_m+">12 Months or More</option>
       </select>
       <input type="submit" name="investor_submit" value="Submit">
    </div>

</form>
</div>
<div class="invest_form">
            <img src="https://img.freepik.com/free-vector/crowdfunding-concept-financial-support-new-business-project-investment-into-innovative-start-up-isolated-vector-illustration-cartoon-style_613284-1142.jpg?w=2000" alt="Investment Image">
        </div>
    </div>
<div class="info-boxes">
      <div class="box">
        <h2>Get To Know Us</h2>
        <ul>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="box">
        <h2>Let's Work Together</h2>
        <ul>
          <li><a href="#">Raise Capital</a></li>
          <li><a href="#">Refer a Founder, Earn $10k</a></li>
          <li><a href="#">Success Stories</a></li>
          <li><a href="#">Partnerships</a></li>
        </ul>
      </div>
      <div class="box">
        <h2>Need Help</h2>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Help Center</a></li>
        </ul>
      </div>
    </div>

<script>
function validateForm() {
  // Validate first name
  const firstName = document.getElementById('first_name');
  if (!firstName.value) {
    firstName.setCustomValidity('Please enter your first name.');
    return false;
  }

  // Validate last name
  const lastName = document.getElementById('last_name');
  if (!lastName.value) {
    lastName.setCustomValidity('Please enter your last name.');
    return false;
  }

  // Validate company name
  const companyName = document.getElementById('company_name');
  if (!companyName.value) {
    companyName.setCustomValidity('Please enter your company name.');
    return false;
  }

  // Validate email
  const email = document.getElementById('email');
  if (!email.value) {
    email.setCustomValidity('Please enter your email address.');
    return false;
  }

  if (!/^[^@]+@[^@]+\.[^@]+$/.test(email.value)) {
    email.setCustomValidity('Please enter a valid email address.');
    return false;
  }

  // Validate phone number
  const phoneNumber = document.getElementById('phone_number');
  if (!phoneNumber.value) {
    phoneNumber.setCustomValidity('Please enter your phone number.');
    return false;
  }

  if (!/^\+?\d{10,12}$/.test(phoneNumber.value)) {
    phoneNumber.setCustomValidity('Please enter a valid phone number.');
    return false;
  }

  // Validate website URL
  const websiteUrl = document.getElementById('website_url');
  if (!websiteUrl.value) {
    websiteUrl.setCustomValidity('Please enter your website URL.');
    return false;
  }

  if (!/https?://.+/i.test(websiteUrl.value)) {
    websiteUrl.setCustomValidity('Please enter a valid website URL.');
    return false;
  }

  // Validate previously raised
  const previouslyRaised = document.getElementById('previously_raised');
  if (!previouslyRaised.value) {
    previouslyRaised.setCustomValidity('Please select how much the company has previously raised.');
    return false;
  }

  // Validate incorporated in US
  const incorporatedInUS = document.getElementById('incorporated_in_us');
  if (!incorporatedInUS.value) {
    incorporatedInUS.setCustomValidity('Please select whether or not the company is incorporated in the US.');
    return false;
  }

  // Validate executive team location
  const executiveTeamLocation = document.getElementById('executive_team_location');
  if (!executiveTeamLocation.value) {
    executiveTeamLocation.setCustomValidity('Please select where the company\'s executive team is primarily based.');
    return false;
  }

  // Validate raise timeframe
  const raiseTimeframe = document.getElementById('raise_timeframe');
  if (!raiseTimeframe.value) {
    raiseTimeframe.setCustomValidity('Please select when the company is looking to raise.');
    return false;
  }

  // If all validation checks pass, return true
  return true;
}

// Add an event listener to the form's submit button
document.querySelector('form').addEventListener('submit', validateForm);
</script>
</body>
</html>
<?php
  if(isset($_POST['investor_submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $website_url = $_POST['website_url'];
    $previously_raised = $_POST['previously_raised'];
    $incorporated_in_us = $_POST['incorporated_in_us'];
    $executive_team_location = $_POST['executive_team_location'];
    $raise_timeframe = $_POST['raise_timeframe'];

    $query = "INSERT INTO investors(first_name,last_name,company_name,email,phone_number,website_url,previously_raised,incorporated_in_us,executive_team_location,raise_timeframe) VALUES('$first_name','$last_name','$company_name','$email','$phone_number',' $website_url','$previously_raised',' $incorporated_in_us','$executive_team_location','$raise_timeframe')";
    $data = mysqli_query($conn,$query);
    if($data){
      echo "Data Inserted into Database";
    }
    else{
      echo "Failed";
    }
  }
?>