<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 60;

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
        <h1>Himalayan Rocket Stove</h1>
        <h2>Saving trees and warming people with ultra efficient wood stoves</h2>
            
        <p>Help us save trees, save backs, reduce greenhouse emissions and keep Himalayan children, nuns and monks warm this winter!

The Himalayan Rocket Stove is a simple, effective and efficient method for burning wood. This method is clean and the impact on the environment is minimal. Best of all this technology already exists and has been proven to work, but until now, has not been adapted to Himalayan conditions.

We are at this moment able to offer a single unit that will heat a room, heat water, and serve as a large cooktop simultaneously.</p>
                
<p>What is a Himalayan Rocket Stove?
Most heating and cooking in the Himalayas is done on basic wood combustion stoves which consume large amounts of wood and where most of the heat exits via the chimney and is lost, creating lots of smoke and CO2 emissions. 

The efficiency rating of these basic combustion stoves is around 15%, which means that 85% of the energy generated in the combustion process is lost. 

A 'Rocket Stove' is an innovative design that uses small sticks and wood in a combustion process that is highly efficient, burning cleanly at high temperatures releasing large amounts of heat energy that can be effectively used in multiple ways.</p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1463543337/deforestation-400_gmtxjq.jpg" alt="Your Image">
      <p>The Himalayan Rocket Stove will revolutionise heating and cooking in the Himalayas by providing highly efficient stove technology. We aim to stem the tragic loss of trees & intense deforestation that is a result of ever-growing demand on wood for heating and cooking, due to increasing population.

These days telecommunication is part of everyday life for the average Himalayan family. Mobile phone technology allows people to stay connected to each other in ways that was previously impossible. Our stretch goal is to develop a phone charging and LED lighting kit that will work directly from the heat of the stove. In remote regions where the power supply is unreliable and often non-existent throughout the winter months this will be invaluable. 

Based on fuel consumption figures, each Himalayan Rocket Stove in the field saves 1 mature tree from being felled each and every year of operation. Our stoves are built to last at least 7 years of continuous operation and longer with servicing. </p>
        <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1463543958/forest-and-wood-400_jibat7.jpg" alt="Your Image">     
      <p>What is this project actually funding?
We have been fortunate to receive a grant from a charitable trust that recognised the valuable contribution this project offers the Himalayan region.

This means we will be able to go into production later this year with our first viable prototype for field assessment. 

We will do this in India, creating local employment at all stages of the process, from manufacture to distribution to sales and service. 

Four groups have been identified as the most in need and least able to afford efficient heating solutions so we will donate stoves funded by this project to these groups. 

Funds raised via this campaign will go directly towards getting Himalayan Rocket Stoves out to schools, nunneries and needy monasteries throughout the Himalayan region, as well as to low income families.</p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1463104829/rocket-design-1_nvfnhf.jpg" alt="Your Image">
   <p>What makes the Himalayan Rocket Stove special?
The Himalayan Rocket Stove in its final form combines four features into one unit, with many associated benefits.

1. Cooking Surface
2. Room Heating
3. Water Heating
4. Phone Charging and Lighting (optional extras - based on reaching our stretch goals)

Our design will appeal to villagers in the Himalayas as it easily fits into the space currently allocated to their traditional style of stove, and yet offers greatly improved efficiency that will reduce their fuel demand by a factor of 4 to 5 times.

We will integrate a water jacket into the design that will allow for water to be heated and drawn off on demand, or left in the heater to act as a heat bank that will radiate into the room after the fire has gone out. 

Small thermo-electric generator (TEG) modules will generate small amounts of current, sufficient to charge a mobile phone and power LED lights fixed to the stove.</p>
<a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
