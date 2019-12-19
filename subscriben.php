<?php


$servername = "localhost";
$username = "id11661404_root1";
$password = "spector";
$dbname = "d11661404_spector";

$con = mysqli_connect($servername,$username,$password,$dbname);

$dbcon = mysqli_select_db($con,$dbname);
global $name;
global $mail;


if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
}


$sql = "INSERT INTO  subscribe (name,mail) VALUES ('$name','$mail')";



if(mysqli_query($con,$sql))
{
	echo "";
}
else
{
	echo "";
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spector - National News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="symbol.png" type="image/gif" sizes="20x20">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="column-30">
                        <div class="logo">
                            <a href="spector.html"><img src="logo.png" alt="logo" width="220" height="100"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header" id="myHeader" style="z-index: 10000;">
            <nav>
                <div class="container">
                <div class="navbar">
                        <a href="spector.php"><i class="fa fa-fw fa-home" style="color:#2196F3"></i> Home</a>
                        <a class="active" href="national.php"><i class="fas fa-flag-usa" style="color:#2196F3"></i> National</a>
                        <a href="international.php"><i class="fa fa-globe" style="color:#2196F3"></i> International</a>
                        <a href="entertainment.php"><i class="fa" style="color:#2196F3">&#xf26c;</i> Entertainment</a></li>
                        <a href="sports.php"><i class="fas fa-running" style="color:#2196F3"></i> Sports</a>
                        <a href="contact.html"><i class="fa fa-fw fa-envelope" style="color:#2196F3"></i> Contact</a>
                        <a href="index.php"><i class="fa fa-fw fa-user" style="color:#2196F3"></i> News form</a>

                    </div>
                    <script>
                        window.onscroll = function() {
                            myFunction()
                        };

                        var header = document.getElementById("myHeader");
                        var sticky = header.offsetTop;

                        function myFunction() {
                            if (window.pageYOffset > sticky) {
                                header.classList.add("sticky");
                            } else {
                                header.classList.remove("sticky");
                            }
                        }
                    </script>
            </nav>
            </div>
            <!--NEWS-->
            <div class="breaking-news">
                <div class="container">
                    <div class="row" style="z-index: 5000;">
                        <div class="column-20">
                            <div class="update-left"> UPDATES </div>
                        </div>
                        <div class="column-80">
                            <div class="update-right">
                                <marquee>NEW DELHI: The ‘surgical strikes’ by the Indian Special Forces resulting in “massive casualties” in Pakistan have placed both the neighbours firmly in the zone of war. </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="container ptb-25">
        <div class="row">
            <div class="column-100">
                <div class="main-headline" style="height: 500px;">
                    <div class="slideshow-container2">

                        <div class="mySlides fade2">
                            <div class="numbertext">1 / 3</div>
                            <img src="output-onlinepngtools (45).png" style="width:100%">
                            <div class="text">
                                <div class="headline">Impeachment is too important to leave to Congress</div>
                            </div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">2 / 3</div>
                            <img src="output-onlinepngtools (54).png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">3 / 3</div>
                            <img src="output-onlinepngtools (52).png" style="width:100%">
                            <div class="text">Caption Three</div>
                        </div>

                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot2"></span>
                        <span class="dot2"></span>
                        <span class="dot2"></span>
                    </div>
                </div>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot2");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active2", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active2";
                        setTimeout(showSlides, 3000);
                    }
                </script>
            </div>
        </div>
    </div>


    <div class="container ptb-25">
        <div class="row">
            <div class="column-70">
                <div class="sec-title"> News on trending</div>
                <div class="row">
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (53).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>ISRO tries again</h2>

                            <p>Will try again to safely land a vehicle on moon: Sivan</p>
                            <a href="readmoren1.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (49).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Freerides Scheme</h2>

                            <p>Arvind Kejriwal's 'free rides for women' scheme</p>
                            <a href="readmoren2.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (48).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Pollution at Peek</h2>

                            <p>the air quality of Delhi and NCR region dropped to Hazardous level.</p>
                            <a href="readmoren3.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (47).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Ayodhya For Hindus</h2>

                            <p> Court has awarded the disputed site in Ayodhya for construction of a temple</p>
                            <a href="readmoren4.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (41).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Milatary action</h2>

                            <p>1 terrorist dies in encounter with security forces in Bandipora</p>
                            <a href="readmoren5.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (42).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>150 years of Gandhi</h2>

                            <p>Mahatma Gandhi's dream of open defecation free India coming true</p>
                            <a href="readmoren6.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="column-30">
                <!--Side barrr-->
                <div class="sidebar">
                    <div class="sec-title"> Category</div>
                    <div class="sidebar-widget">
                    <ul>
                            <li><a href="national.php">National</a></li>
                            <li><a href="international.php">International</a></li>
                            <li><a href="entertainment.php">Entertainment</a></li>
                            <li><a href="sports.php">Sports</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="sec-title"> GDP Growth</div>
                    <div class="sidebar-widget">
                    <a href="https://www.moneycontrol.com/stocksmarketsindia/"><img src="sensex.jpg" alt="logo" width="320" height="150"></a>

                    </div>
                    
                    <div class="sidebar-widget">
                            <p style="  border: 1px solid black;
                            outline: #333 solid 1px;
                            margin: auto;  
                            padding: 90px 30px;
                            text-align: center;">
                            <?php
                                    $sql = "SELECT name, mail FROM  subscribe";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc ();
                                        while($row !=NULL){
                                            $row1=$row;
                                            $row = $result->fetch_assoc ();
                                        }
                                        echo "Hi ". $row1["name"]. "you have subscribed<br><br><br>";
                                        echo "You will recieve a mail to ". $row1["mail"];}
                                    else{
                                        echo "0 results";
                                    
                                    }
                                    $con->close();
                                  ?>
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Highlights</div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                <source src="modi.mp4" type="video/mp4">
                                <source src="modi.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="side-news-data">
                        <div class="news">
                            <h2>News that would make India proud: PM Modi hails historic 98% turnout in J&K BDC polls</h2>
                            <div class="side-news-data">
                                <p>Prime Minister Narendra Modi on Friday praised the 98 per cent turnout in Jammu and Kashmir Block Development Council (BDC) elections held on October 24. He said this is the kind of news that makes India proud. "For the
                                    first time since 1947, Block Development Council elections were held in Jammu, Kashmir, Leh and Ladakh on the 24th." "I am delighted to share that the BDC polls in Jammu, Kashmir, Leh and Ladakh were conducted in a
                                    very peaceful manner. There was no violence. .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                    <source src="national3.mp4" type="video/mp4">
                                    <source src="national3.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="news">
                        <h2>Three years after demonetisation: Lot of sound and fury signifying nothing</h2>
                        <div class="side-news-data">
                            <p>Cash is back in full circulation in the country, India is yet to become a cashless economy, black money circulation remains unchecked and counterfeiting of notes has not stopped yet. Rings a bell? These were some of the key
                                goals outlined by the Narendra Modi-led government with respect to note bandi, the desi term coined for demonetisation. When Prime Minister Narendra Modi announced demonetisation on November 8, 2016, the exercise was aimed
                                at primarily at cracking down on black money hoarders, eliminating fake currency, curbing terror funding and ultimately making the economy more transparent..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Regional</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (31).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>Windows, Doors Worth Rs. 73 Lakh: Jagan Reddy's Home Plan Draws Flak</h2>
                        <div class="side-news-data">
                            <p>Mohan Reddy's home in Guntur district is expected to get windows and doors worth Rs. 73 lakh. The installation of the expensive, high-security additions were cleared by his government in an order last month. Telugu Desam Party
                                (TDP) chief and Mr Reddy's bitter rival N Chandrababu Naidu has raised questions over the amount of money spent on the Chief Minister's home and office block. "YSR Jagan's government has allotted a whopping Rs., 73 lakhs
                                to fix windows for his house! Now that's one super expensive view at the expense of state exchequer! This comes at a time when AP is grappling with fiscal mess caused by mismanagement in the last 5 months. Truly cringe-worthy!"
                                Mr Naidu tweeted on Wednesday.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (46).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>Footage shows moment when 2 trains collided in Hyderabad, coaches jumped up in air | Watch</h2>
                        <div class="side-news-data">
                            <p>CTV footage of the deadly train accident on Monday near Hyderabad shows the moment when two moving trains collided head-on near the Kacheguda Railway station in Hyderabad. The Lingampalli-Falaknuma multi-modal transport system
                                (MMTS) overshot the signal and collided with the Kurnool-Secunderabad Hundry Intercity Express (17028) at 10.41 am. In the footage, the passenger train can be seen moving towards the oncoming train when it hits it head
                                on and some of the coaches jump because of the impactMoments later, passengers seated in the Intercity Express can be seen running out of the mangled coaches and climbing up walls to get away from the accident site. Sixteen
                                people were left injured in the accident, including a driver who was trapped in his badly mangled cabin for eight hours..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Technology and weather</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (43).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>Cyclone Bulbul Kills 13 in Karnataka</h2>
                        <div class="side-news-data">
                            <p>Scattered light to moderate rain is likely in Northeast India, while light to moderate rain with one or two heavy spells may lash Kerala. Scattered light to moderate rain may occur over Tamil Nadu and in one or two parts of
                                South Interior Karnataka and Coastal Karnataka. Light rain is likely in a few parts of Jammu and Kashmir. Isolated rains are likely in West Rajasthan, Saurashtra, Kutch and Rayalaseema. Any information taken from here should
                                be credited to skymetweather.com Moderate to heavy rain lashed Kerala while scattered light to moderate rains were seen in Tamil Nadu, Andaman and Nicobar Islands. Isolated rains were observed in South Coastal Karnataka
                                while light rain with a few moderate spells occurred over Northeast India. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (36).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>Exclusive: Jio set-top box is real, comes free with JioFiber connection and offers tens of channels</h2>
                        <div class="side-news-data">
                            <p>Similar to some other Jio products, there is a lot of confusion around the Jio set-top box. There is no clarity on the plans or pricing of the service, and that could mean two things: either the company is still unclear of
                                its future plans for the set-top box or it is running quietly running a test run of the service. Earlier we have seen that Jio rarely talks about the pilot run of its services. The same is true for the Jio set-top box that
                                is real and is actually reaching consumers for wider testing purposes. There are a couple of media reports on the web claiming that the service is available to many users and offers more than </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Business and Other News</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (23).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <h2>MARKET WRAP: Sensex up 21 pts, Nifty holds 11,900; private banks rally All that happened in the markets today</h2>
                    <div class="side-news-data">
                        <p>Post logging record highs during the previous week, markets consolidated on Monday as concerns over India's economic growth dented sentiment, while no fresh triggers kept indices range-bound. Additionally, fresh escalation of violence
                            in Hong Kong coupled with uncertainty over whether the United States and China could end their damaging trade war kept investors on the sidelines. Buying in financial counters and select index heavyweights in the fag end of
                            the session, helped the benchmark S&P BSE Sensex to close in the positive territory. The Sensex ended 21.47 points, or 0.05 per cent, higher at 40,345 levels. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (32).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>600 personnel deployed at JNU protest but students not lathicharged: Police</h2>
                        <div class="side-news-data">
                            <p>More than 600 security personnel were deployed to handle the protest on Monday by the Jawaharlal Nehru Students ' Union (JNUSU) against the varsity administration's recent decisions, but the "students were not lathicharged",
                                officials said. Thousands of JNU students clashed with the police as their protest over a steep fee hike escalated, leaving HRD Minister Ramesh Pokhriyal ''Nishank '' stranded for over six hours at the venue of the varsity
                                's convocation. The students of the varsity, which has seen several such agitations in the recent years, were protesting outside the All India Council of Technical Education (AICTE) premises, the venue for the varsity's
                                the third convocation, which was addressed by Vice President M Venkaiah Naidu. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column-40">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (41).png" height="200" width="400">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-60">
                        <div class="news">
                            <h2>Rajasthan: Military exercise of Indian Army to commence near Pak border in Barmer</h2>
                            <div class="side-news-data">
                                <p>The Indian Army will undertake a massive military exercise starting November 13 to November 18 near Pakistan border in Barmer district of Rajasthan. The military exercise will be undertaken by the Sudarshan Chakra Corps
                                    of the Southern Army. According to sources, more than 40,000 troops will be participating in the exercise to hone their combat skills and validate their deep-strike capabilities in the deserted area. The exercise aims
                                    to validate the battle readiness The exercise is being conducted under simulated battlefield conditions aimed at implementing surveillance and the mechanisms to validate the operational plans. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-40">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="infosys.png" height="200" width="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-60">
                            <div class="news">
                                <h2>Another whistleblower complaint against Infosys CEO Salil Parekh</h2>
                                <div class="side-news-data">
                                    <p>nother whistleblower from global software major Infosys accused its Chief Executive Officer (CEO) Salil Parekh of committing misdeeds and urged the Chairman and the board of directors to act against him on his volatile
                                        complaints. "Though it is a year and 8 months since Parekh joined the company, he operates from Mumbai in violation of the condition that the CEO has to be based in Bengaluru and not Mumbai. What is stopping the
                                        board to insist on his movement to Bengaluru," said the whistleblower in an unsigned and undated letter to Infosys Chairman and co-founder Nandan Nilekani and Independent Directors on the Board.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
        <div class="container ptb-25">
            <div class="row">
                <div class="column-30 ">
                    <div class="footer-logo ">
                        <img src="logo.png " alt=" " class="responsive-image ">
                    </div>
                    <ul class="footer-social ">
                        <li>
                            <a href="# "><img src="youtube.png " alt=" "></a>
                        </li>
                        <li>
                            <a href="# "><img src="facebook.png " alt=" "></a>
                        </li>
                        <li>
                            <a href="# "><img src="instagram.png " alt=" "></a>
                        </li>
                        <li>
                            <a href="# "><img src="twitter.png " alt=" "></a>
                        </li>
                    </ul>
                    <address>
                        Civil Station, No.13, Rhenius St, Richmond Town, Bengaluru, Karnataka 560025
                    </address>
                </div>
                <div class="column-20 ">
                    <div class="sec-title "> Category</div>
                    <ul class="footer-category ">
                        <li><a href="national.php ">National</a></li>
                        <li><a href="international.php ">International</a></li>
                        <li><a href="entertainment.php ">Entertainment</a></li>
                        <li><a href="sports.php ">Sports</a></li>
                        <li><a href="contact.html ">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <a href="spector.php">Spector</a> News Website &copy;
        </div>
    </footer>
</body>

</html>
