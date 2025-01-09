<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 57;

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
        <h1>WYLD PLANET</h1>
        <h2>Where your love for music saves our planet's damaged natural biodiversity</h2>
            <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1701889241/vtnq1fmw3dm1i5muwaed.png" alt="Your Image">
        <p>In collaboration with exceptional music stars, we create our "FOR THE PLANET" digital music experiences. These fully immersive, performance-based experiences redefine the way music content is experienced online.  Our "Virtual World Engine" immerses live performances into beautifully recreated, photo-realistic avatars of chosen natural ecosystems to bring music and nature together like never before. 

With a minimum of 4 "FOR THE PLANET" concerts every year, we target the world of music lovers to come together to help stop biodiversity loss.Our core objective is to STOP BIODIVERSITY LOSS and help restore Earth's critically damaged ecosystems.  Imagine sitting back, relaxing and watching your favourite music stars on your device of choice. The best part of it all? Your fun, joy and excitement define your contribution towards the PROTECTION, CONSERVATION and RESTORATION of natural biodiversity worldwide. The more fun you have, the more significant your contribution to the cause. 

With a minimum of 4 "FOR THE PLANET" concerts per year, we aim to bring the world together to help us in our war on biodiversity loss.The revenue generated from our music experiences is divided as follows: 

BIODIVERSITY CONSERVATION AND ECOSYSTEM RESTORATION: 75%
OPERATIONAL COSTS: 25%
We partner with leading experts to set in motion long-term ecosystem restoration initiatives that are focused on restoring our natural biodiversity. Our primary aim is to fund these chosen partnerships to ensure long-term, sustainable fund flow to ensure the desired nature-based outcomes.At WYLD PLANET, we focus on three strategic directions:</p>
        <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1690208669/gaixsokf5g2ggpurqg4x.png" alt="Your Image">
      <p>Join us now, whether out of love for our planet, a passion for great music, or purely as an investment in our shared future. We want you to be proud of your role at WYLD PLANET. We need you to be a part of our "WarOnBiodiversityLoss". We must come together, be better and do more to leave a sustainable planet for future generations. 

JOIN US NOW! BECOME A MEMBER TODAY. TOGETHER, WE CAN MAKE A DIFFERENCE. </p>
        
       <p>Our team has over 150 years of combined experience creating and executing music and entertainment projects worldwide. We have great networks within the business and have successfully worked across the live, public and private domains, creating fabulous experiences at every step of the way. We're passionate about creating a global community of music lovers who also care about protecting the Earth's biodiversity.We found consistent, reliable funding to be the biggest challenge faced by the world of biodiversity and ecosystem conservation. We aim to create a long-term, sustainable, easily accessible fund by selling our music experiences deployed to support urgent conservation and restoration initiatives in critically damaged natural ecosystems worldwide.</p>
        <p>Launching in Q1 2024, our first project, The Caribbean Coral Ark, aims to conserve and restore decimated coral reefs and allied marine ecosystems across the Caribbean Islands' biodiversity hotspot. Discussions are underway for a comprehensive freshwater ecosystem restoration initiative in the Western Ghats biodiversity hotspot and an extensive habitat restoration project within the Sundaland Biodiversity hotspot to extend forest cover and protect legacy critically endangered wildlife species.</p>
    <a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
