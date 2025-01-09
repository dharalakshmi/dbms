<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 52;

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

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Centered Content</title>
</head>
<body>
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
        <h1>Operation Save Paradise: Ikaria Waste Management</h1>
        <h2>Don't let our paradise get buried under trash. Creating a model for managing trash on Greek Islands.</h2>
            
        <p>Every summer, there are hundreds of thousands of PET plastic beverage bottles disposed of in landfills on the Greek island of Ikaria in the East Aegean Sea. I want to set up a recycling system focusing on summer tourism, when most of this plastic pollution occurs. Every bottle that we manage to capture and put back into the EU recycling system is one less bottle thrown into the open-air landfills on the island that tarnish the soil, drinking water, and sea around the island. The main reason recycling doesn't happen here or on other remote islands is cost. It is hard to cover the transportation expense with the plastic purchased from the recycling centers. In other words, no one makes money recycling trash from remote islands.</p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1673323242/wjz4eljlqgolrawcpxvu.jpg" alt="Your Image">
      <p>Help Ikaria Recycle for Real
I've worked to reduce the quantity of plastic waste that ends up in Ikaria's landfills for the past two summers. I have put collection points in place. Every morning during the peak tourist season at sunrise, I get up to load the bottles onto my bicycle.The PET plastic used in water and beverage bottles is one of the key sources of plastic that I am addressing. On the tourstic north side of the island, at Messakti Beach, I have concentrated my efforts. I'm attempting to gather the plastic that isn't placed in the island's already-existing plastic recycling receptacles. My target is the plastic left behind by the summertime tourist flood on beaches and in restaurants, which hardly ever have the chance to have the plastic
 sorted out.</p>
        <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1673323351/llzbx49sjn4gf61bwgkr.jpg" alt="Your Image">     
      <p>Until I find a better solution, I need assistance covering the shipping costs for this 2023 season, which are about 1000 euros every ton according to my best shipping quote, but I am still seeking a transport willing to do it for less. The more funds I raise, the more operations will be possible this summer, and even expanded if I can find a better transport solution.

I would love to expand collection to cans and reusable coffee cups but all this takes time and resources. I also hope to make a map guiding visitors to natural springs found around the island to refill their bottles. The map will also feature coffee shops that can refill your personal coffee container. Along with points that help reduce waste on the island, the map will also guide to better businesses that focus on selling local quality products. I had already created a similar project years ago in France called The Better Bottle Project you can see here on Indiegogo.

In the meantime, I keep collecting these bottles that I fear will eventually erase our piece of paradise that our children will not get to experience. Every donation you make to me helps me buy some time and maintain the hope that we can save this paradise on Ikaria!</p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1673323385/x3vlqwzkmmfisijzf5ze.jpg" alt="Your Image">
   <p>With the help of friends and Ikaria lovers we manually sort all collected plastic to ensure no filthy bottles or similar polymers (PP, PS, and PVC) end up in the delivered plastic. If I can deliver quality bulk PET to my buyer, they will pay me by the ton (about 50,000 bottles). The kind of truck you need to fill a ton of bottles costs a lot to put on the ferry for 10 hours and drive for another 5 hours to the recycling center. The resale value of the plastic does not equal the transport costs of sending the truck.</p>
   <a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
   
</body>
</html>

    
        