<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 61;

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
        <h1>Wild Soundscape Research</h1>
        <h2>Help us to track changes in wild soundscapes over time to protect the health of natural habitats</h2>
            
        <p>Each and every habitat on earth expresses itself through its own unique acoustic composition known as the soundscape. In wild and intact habitats this unique voice is formed of all the organisms that live in that habitat, be it birds, insects, amphibians, or mammals known as the biophony. The second component of wild soundscapes is all the natural non-biological sound such rushing rivers, waves at the ocean shore, the crash of lighting and wind passing through the landscape, which is called the geophony.</p>
                
<p>The soundscape formed of the biophony, and geophony constantly expresses information about the health of the habitat from which they belong. Changes in biodiversity and vegetation, along with impacts from industry, human noise, and climate change, all resonate in the voice of the wild. This means that by carefully listening to the soundscape an incredibly valuable tool with which to evaluate the health of a habitat across the entire spectrum of life appears. Further, study of the soundscape has exposed changes invisible to the eye, and so the soundscape is powerful indicator of impending threats to habitat and species.  </p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1644228627/jdstmsf3qmafkqmytd0r.png" alt="Your Image">
      <p>Biophonies, along with the wild habitats from which they are produced are under stress. Dr Bernie Krause, a world leading soundscape researcher, has one of the oldest collections of soundscapes in the world. During an interview in 2021, Dr Krause stated that ‘the message is unassailable’, with fully fifty percent of his archive of wild soundscapes, from 1968 to the present, coming from habitats so radically altered that they're either altogether silent or can no longer be heard in their original form.

The falling quietude of the biophony as an expression of life, signals a systemic degradation of the natural world, in line with habitat destruction and biodiversity decline.  So, understanding the conditions required for the biophony to thrive is crucial in perceiving human impact on the natural world, and the needs of the other life around us. Learning to listen to the integrity present in wild soundscapes, to the knowledge they can give us, knowledge specific to the experience of them will allow us to better comprehend and protect the natural world.</p>
        <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1644248690/vprmeibakpkbdsosteqk.jpg" alt="Your Image">     
      <p>All money donated goes directly to fund the Wild Soundscape Research expedition scheduled to run for six weeks this coming May to June 2022. 
Due to the nature of the project the more money that is raised the more habitats we are able to visit. Hitting our goal will enable us to conduct the fieldwork in all target habitats so we can learn as much as possible about how the natural world is changing via the soundscape.
We are looking for £5,000 to cover the fundamental costs in supporting the team as they tirelessly work to record the soundscapes of these spectacular and wild habitats. Including;
Internal Travel Costs
Medical Supplies
Food Rations
Research Permits</p>
<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1644245850/cvnuyszsttyzqsgo92rj.jpg" alt="Your Image">
   <p>This research makes a huge difference and is extremely cost-effective, meaning every penny goes a long way. To me and my team, your support is incredibly valued, as without it the research is just not possible. It is also encouraging that there are others out there who value the natural world and are willing to support research that expands our knowledge and our ability to safeguard it. With your support, we can make a real impact in the conservation of the wild world and its soundscape. From myself and the team, many, many thanks.
I know that we do not always have the means in which to give to many causes important to us. However, you can still support the project by sharing this fundraiser as far and wide as possible, with friends, family and colleagues, which is very much apricated.

You can use the Indiegogo share tools to spread the word far and wide. The more support we can generate the more work we can do, and the better we can work to preserve and learn from the voice of the wild, the soundscape.   </p>
<a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
