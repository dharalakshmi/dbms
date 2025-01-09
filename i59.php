<?php
// Include database connection file
include("connection.php");

// Retrieve selected_p_no from the URL
$selected_p_no = isset($_GET['selected_p_no']) ? $_GET['selected_p_no'] : 59;

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
        <h1>Rwandan Wildlife Filmmaking Course</h1>
        <h2>Ravenswood Media has created a filmmaking course for national park rangers, trackers and guides.</h2>
            <img src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/y9ycszfymtaikjsseccf" alt="Your Image">
        <p> I am an Academy Award nominated filmmaker who has devoted his career to environmental and conservation films. It is important to me to pass on my filmmaking skills to the next generation of wildlife conservationists. I taught basic filmmaking to eight students at the Red Rocks compound in Musanze, Rwanda. The students were all involved in a variety of conservation roles. The classes began with simple tasks; setting up the tripod, mounting lenses, audio recording, among other functions. The students learned how an interview is conducted and how to develop interview questions. We made expeditions to natural areas to practice filming on the robust populations of Rwandan wildlife. I arranged Zoom meetings between the class and representatives of the US National Park Service, National Geographic, and a wildlife health expert. 

    The course was free. The students applied to the course by writing a short essay on how they hoped to incorporate the training in their profession. The class was divided into three groups. Each group chose a topic to demonstrate what they had learned from the class.</p>
                <img src="https://c0.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/zfqovxcaqhcgndxzzccc" alt="Your Image">
    <p>I brought basic production equipment; cameras, microphones, audio recorders, tripods and miscellaneous gear, necessary to produce short films that meet a professional standard. I left behind an Apple laptop with an editing app to allow the students to continue their learning experience. When back in the US, I met the students weekly to guide them through the editing process through Zoom screen share. The Red Rocks compound has become a go-to media center for the next generation of conservationists to and exchange ideas on how to use media for their professional goals. </p>

      <p>We need funding to purchase filmmaking equipment for use by the rangers, trackers and guides who want to further their conservation goals through media. Funding is also required to support student projects by subsidizing transportation and lodging costs as they fan out across Rwanda filming wildlife. I intend to return in 2023 to teach a new batch of conservationists basic filmmaking skills.</p>
        <img src="https://c2.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/wavpnyh47crqt0v44erh" alt="Your Image">

 <p>The students produced their first film, One Health Rwanda, (view video in extras). The film relates how human, animal and ecosystem health are all connected. More than simply a wildlife documentary, it is a relevant message about the role conservation plays in people’s lives. The students are now working on their second film, Rwandan Birds. The goal is to one day produce and screen conservation films in the communities that surround the national parks. The films will speak to the communities in their language, Kinyarwanda, and encourage community involvement in conservation issues. 

    The filmmaking class at Red Rocks is a “proof-of-concept” and, ideally, will serve as a model for wildlife filmmaking classes for conservation professionals in other parts of the world. Your support can help provide basic media skills as a new tool for wildlife managers. Any contribution, whether money or equipment, will be extremely useful. Please share the campaign with your friends and colleagues.</p>
        
      <a href="check2.html">
        <button>Invest</button>
    </a>
  </div>  
</body>
</html>
