
<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 58;

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
        <h1>Bat & Breakfast - Save our Home, Build a Community</h1>
        <h2>Help Save Local Wildlife, Help Save Our Home</h2>
            <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1691101554/khtrfez5s6xf3ffdgisi.jpg" alt="Your Image">
        <p>Our unique new home is infested by bats, and we need help! Through a series of misfortunate events, we now have a large Victorian home, with waterfront views, access to the state park, and a gigantic army of over 1000 BATS!

We're looking for your support so that we can:

Salvage the home and make it livable again for our family
Save the bats, by excluding them (alive) once their pups are mature
Giving the bats an alternative home - by building colony size bat houses in the forest
Create a space for hospitality - a rentable suite you can come experience
Our Vision
Peace with the ecology of our region. The bats have dedicated houses in Hoypus Hill Park, and our home grows to become a place you can come and visit (after a lot of cleanup and remodeling). The whole area is a conservationist's paradise, you can forage for berries, mushrooms, and many things from the sea. Come see the bat houses, learn about their natural history, and have fun with vampire themed paraphernalia!

Our Story
Being born and growing up in the PNW, we have been coming to Whidbey Island our entire lives. We are Tom & Mackenzie, recently moved from the busy streets of South King County to the place our family has been camping & fishing for half a century, beautiful Deception Pass on Whidbey Island. It took us over a decade for the stars to align, to have our first child and to move into a real house.
</p>
<p>In 2023, after years of saving, we put down an offer for a house - a beautiful house with a lot of character, in an absolutely lyrical neighborhood. It has easy access to hiking trails, the marina, with water views and incredible wildlife. We felt truly blessed to move into this wonderful neighborhood. The people, the place, it all felt like the perfect fit! </p>
        <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1691103633/ozokfvrdxpmnsyfkutol.jpg" alt="Your Image">
      <p>While we really would appreciate your charity, we want to be able to reciprocate. Instead of just raising funds without giving back does not sit well with who we are. We want to build something foundational, make it about the community, and create something of lasting value.

One place we have gotten some help is from the Department of Fish and Wildlife. Instead of just kicking the bats out, we would like to find a way to build bat houses in Hoypus Hill, a sub-section of Deception Pass State Park. </p>
        
       <p>Most bat houses are as small as a bird house. However for large colonies like they have in Florida required giant bat mansions. We are working with the DFW to figure out designs, size, placement, and permitting with the park.

What we need first - will be materials and labor! We are hoping to find volunteers and contributors who can help us put these together, and then we'll get the park service to put them up. High school shop class, boy scouts, girl scouts, whomever, please contact us!</p>
        <a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
