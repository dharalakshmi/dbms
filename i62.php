<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 62;

// Prepared statement to fetch investAmount
$stmt = $conn->prepare("SELECT investAmount FROM feedback WHERE selected_p_no = ?");
$stmt->bind_param("i", $selected_p_no);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$investAmount = $row['investAmount'];

// Close statement and connection
$stmt->close();
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;

    margin: 0;
}

.container{
    text-align: center;
     max-width: 70%;
}

.container p {
    font-size: 18px;
    line-height: 1.5;
    color: #333;
    margin-bottom: 20px;
}

.container img {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
}
button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-botom:10px;

        }

        button:hover {
            background-color: #2980b9;
        }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Centered Content</title>
</head>
<body>
    <div class="container">
        <h1>Money raised: <?php echo $investAmount; ?></h1>
        <h1>Interactive Habitat</h1>
        <h2>Conserving natures amazing animals through interactive education!</h2>
            
        <p>As part of our mission here at The National Reptile Zoo, we want to continue to inspire a passion for nature in our visitors and encourage them to become more engaged with the natural world around them. 

For the past decade, our existing Tropical Walk-through Exhibit has engaged and fascinated members of the public as they interact with our free roaming lizards and tortoise. Visitors walk away from this exhibit with a new found respect and appreciation for the animal world, and with a better understanding of the conservation of our environment.

But after ten years, its time to re-build and make it bigger! This is where you come in...

Unfortunately for us conservation is not free, we receive no funding from any government body and it is through your generosity and interest that we have been able to continue, we need your help in funding a new dome exhibit, giving our scaly friends a fantastic new habitat, flooded with natural light, filled with live tropical plants, and three times the size of their existing home!

Not only that, but you're also helping to educate future generations about the plight of endangered species in the wild, helping to conserve what we love.</p>
<img src="https://images.ctfassets.net/cnu0m8re1exe/c175AfE5netP1i6bvd5tc/84a983d021f09be04717afa9374b4473/red_panda_lead.jpg?fm=jpg&fl=progressive&w=660&h=433&fit=fill" alt="Your Image">
      <p>We have started construction of a Geodesic Dome, created with sustainable timber which will be covered in transparent polycarbonate. This polycarbonate allows penetration of essential UV rays which up to now, we have been providing by way of artificial light. Without these rays, reptiles cannot metabolise calcium in their system, eventually leading to death. 

Within this dome, we will recreate a tropical rain forest, complete with misting system (recreating natural rainfall), supplementary heating system, and bio-active forest floor. Just what every reptile wants to make them feel at home!

Of course, we want you to enjoy this exhibit too, along with the rest of the zoo! That's why we're going to give our contributors a little something back. Anyone contributing over €200 will receive a years family membership. If you contribute over €500, we will give you ten years membership! And if you're a major contributor, we'll give you VIP lifetime membership!!</p>
        <img src="https://images.ctfassets.net/cnu0m8re1exe/eq7DY2PfXi48W6hyxUnn6/3b7d2574bdbb1bfeddada21dd2b1ffa1/leatherback.jpg?fm=jpg&fl=progressive&w=660&h=433&fit=pad" alt="Your Image">     
      <p>Sometimes people just don't have the funds to contribute, but that doesn't mean you can't help;

Get the word out and make some noise about our campaign. Link us on Facebook, Tweet about the campaign, tell everybody!

And don't forget to use  Indiegogo share tools to spread the word.

Now lets build an amazing habitat!</p>

   <a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
