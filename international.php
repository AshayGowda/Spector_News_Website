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



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spector - International News</title>
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
                        <a href="national.php"><i class="fas fa-flag-usa" style="color:#2196F3"></i> National</a>
                        <a class="active" href="international.php"><i class="fa fa-globe" style="color:#2196F3"></i> International</a>
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
                            <img src="output-onlinepngtools (37).png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">2 / 3</div>
                            <img src="output-onlinepngtools (40).png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">3 / 3</div>
                            <img src="output-onlinepngtools (38).png" style="width:100%">
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
                                    <img id="image" src="output-onlinepngtools (27).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Highest Profiting Joker Movie</h2>

                            <p>Joaquin Phoenix's Joker inches closer to Marvel's Avengers</p>
                            <a href="readmorei1.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (33).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Abhinandhan statue in Pak Museum</h2>

                            <p>Pakistan Air Force displays Wing Commander Abhinandan</p>
                            <a href="readmorei2.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (44).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>India opted out From RCEP</h2>

                            <p>Why India opted out of the mammoth RCEP</p>
                            <a href="readmorei3.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (39).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Sharukh on Burj Khalifa</h2>

                            <p>Burj Khalifa lights up to wish Shah Rukh Khan</p>
                            <a href="readmorei4.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (26).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Cyber security threats increasing</h2>

                            <p>It’s Time India Govt. Gets Proactive with Cyber Security</p>
                            <a href="readmorei5.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (22).png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Xiaomi brings an app Drawer</h2>

                            <p>India Not a Hindu Rashtra, Say Sikh Organisations</p>
                            <a href="#" class="read-more"> Read More &rarr;</a>
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
                    <div class="sec-title"> Sensex and Nifty</div>
                    <div class="sidebar-widget">
                    <a href="https://www.moneycontrol.com/stocksmarketsindia/"><img src="sensex.jpg" alt="logo" width="320" height="150"></a>

                    </div>
                    <div class="sidebar-widget">

                    <form action="subscribei.php" method="POST" enctype="multipart/form-data">
                            <div class="container" style="background-color:rgba(255, 255, 255, 0.815)">
                                <h2>Subscribe to our Newsletter</h2>

                            </div>

                            <div class="container" style="background-color:rgba(255, 255, 255, 0.815)">
                                <input type="text" placeholder="Name" name="name" required>
                                <input type="email" placeholder="Email address" name="mail" size="42" height="100" required>

                                
                            </div>
                            <div class="container">
                                <p>By signing up, you agree to our Privacy Policy and European users agree to the data transfer policy.</p>
                            </div>
                            <div class="container" style="background-color:rgba(255, 255, 255, 0.815)">
                                <input type="submit" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Politics</div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                <source src="international/trump.mp4" type="video/mp4">
                                <source src="international/trump.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="news">
                        <h2>Donald Trump confirms the death of Islamic State leader Abu Bakr al-Baghdadi
                        </h2>
                        <div class="side-news-data">
                            <p>Fugitive Islamic State leader Abu Bakr al-Baghdadi died "whimpering and crying" in a raid by U.S. special forces in northwest Syria, President Donald Trump announced on Sunday, in a major blow to the jihadist group. Baghdadi
                                killed himself during the raid by detonating a suicide vest after fleeing into a dead-end tunnel, Trump said in a televised address from the White House. He was positively identified by DNA tests 15 minutes after he died,
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                    <source src="israel.mp4" type="video/mp4">
                                    <source src="israel.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="news">
                        <h2>India, Israel proved their friendship over time: PM Modi responds to Yeh Dosti Hum Nahi Todenge tweet by Israel PM
                        </h2>
                        <div class="side-news-data">
                            <p>sraeli embassy in India's greetings on the International Friendship Day drew an equally warm response from Prime Minister Narendra Modi, who tweeted his wishes back to the embassy saying that "India and Israel have proved their
                                friendship over time". PM Modi's tweet on Sunday thanking Israel and its citizens read, "Our relationship is strong and eternal. Wish friendship between our countries grow and bloom even more in the future."
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Science</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (25).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>SpaceX's Mars rocket prototype rattles nerves of nearby residents in Texas flight test
                        </h2>
                        <div class="side-news-data">
                            <p>SpaceX test-launched an early prototype of the company's Mars rocket on Tuesday, rattling the nerves of people living near the Texas site and clearing another key hurdle in billionaire entrepreneur Elon Musk's interplanetary
                                ambitions. The prototype, dubbed Starhopper, slowly rose about 500 feet (152m) off its launch pad in Brownsville, Texas, and propelled itself some 650 feet (198m) eastward onto an adjacent landing platform, completing a
                                seemingly successful low-altitude test of SpaceX's next-generation Raptor engine. The Raptor is designed to power Musk's forthcoming heavy-lift Starship rocket
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="output-onlinepngtools (51).png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>NASA's mission to Mars: Curiosity rover bids farewell to Vera Rubin ridge, clicks a stunning selfie
                        </h2>
                        <div class="side-news-data">
                            <p>After spending more than a year on the twisting ridge on Mars that has been the robotic explorer's home, NASA's Curiosity rover has snapped its last selfie as it moves on to new sights on the Red Planet. After having collected
                                new samples from the Vera Rubin Ridge, the car-sized rover will now descend toward a clay region of Mount Sharp. It will head into the 'clay-bearing unit,' which sits in a trough just south of the ridge.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-section">
            <div class="container">
                <div class="sec-title">Politics</div>
                <div class="row">
                    <div class="column-40">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="output-onlinepngtools (34).png" height="200" width="400">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-60">
                        <div class="news">
                            <h2>RCEP countries committed to work with India to resolve trade deal issues: China
                            </h2>
                            <div class="side-news-data">
                                <p>After spending more than a year on the twisting ridge on Mars that has been the robotic explorer's home, NASA's Curiosity rover has snapped its last selfie as it moves on to new sights on the Red Planet. After having collected
                                    new samples from the Vera Rubin Ridge, the car-sized rover will now descend toward a clay region of Mount Sharp. It will head into the 'clay-bearing unit,' which sits in a trough just south of the ridge.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-40">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (44).png" height="200" width="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-60">
                            <div class="news">
                                <h2>Why China moved ahead of India and what can we learn from our neighbour
                                </h2>
                                <div class="side-news-data">
                                    <p>China became a communist republic in 1949, the same year when India adopted its constitution. Both countries began rebuilding in 1950 - China under Mao Zedong and India under Pandit Jawaharlal Nehru. At that time, India
                                        was the largest economy in Asia notwithstanding almost 200 years of colonial exploitation. China was in the catching up game. Mao Zedong rivalled with Pandit Nehru, who was viewed by the world leaders as a visionary
                                        with strong democratic credentials. Today as China turns 70 - October 1 is the National Day in China -
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="news-section">
                    <div class="container">
                        <div class="sec-title">Other News</div>
                        <div class="row">
                            <div class="column-40">
                                <div class="news">
                                    <div class="news-image">
                                        <div id="container5">
                                            <img id="image" src="prince.png" height="200" width="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-60">
                                <div class="news">
                                    <h2>Prince Charles in India this week, to meet President Kovind
                                    </h2>
                                    <div class="side-news-data">
                                        <p>Britain's Prince Charles will arrive in India on Wednesday on a two-day trip that will have a packed schedule, including a meeting with President Ram Nath Kovind, discussions on issues like climate change and sustainable finance, and a visit to a gurdwara to mark the 550th birth anniversary of Guru Nanak.

                                                This will be the Prince of Wales' 10th official visit and will celebrate enduring British-Indian ties, with a focus on shared global challenges such as sustainability and climate change, the British High Commission here said in a statement.
                                                
                                                Prince Charles will undertake varied engagements in the national capital, including a bilateral meeting with Kovind, the statement said.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column-40">
                                <div class="news">
                                    <div class="news-image">
                                        <div id="container5">
                                            <img id="image" src="google.png" height="200" width="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-60">
                                <div class="news">
                                    <h2>Google wants to help you pronounce words you don't know
                                    </h2>
                                    <div class="side-news-data">
                                        <p>Google will help you practice by getting you to say the word into your phone's microphone, with the search giant picking up on any letters you mix up and correcting you. This feature is available in American English now, and will be launched in Spanish soon.

                                                Google explained its speech recognition tech separates words into small soundbites, then uses machine learning to cross-reference your way of saying it with the pronunciation it expects to hear.
                                                
                                                "For example, if you're practicing how to say 'asterisk,' the speech recognition technology analyzes how you said the word and then it recognizes that the last soundbite was pronounced 'rict' instead of 'uhsk,'" Snir explained. "Based on this, you will receive feedback on how you can improve next time."
                                    </div>
                                </div>
                            </div>                        </div>
                        <div class="row">
                            <div class="column-40">
                                <div class="news">
                                    <div class="news-image">
                                        <div id="container5">
                                            <img id="image" src="car.png" height="200" width="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-60">
                                <div class="news">
                                    <h2>Deadly car bomb blasts rip through bus terminal in Syria
                                    </h2>
                                    <div class="side-news-data">
                                        <p>Several cars and buildings were damaged in the attack, which involved two bomb-laden vehicles, according to Anadolu. 

                                            Meanwhile, the Britain-based Syrian Observatory for Human Rights, a war monitor, said 19 people had died in the blast, 13 of them civilians. The group said 33 people were wounded, some of them seriously.
                                            
                                            Since 2016, Turkey and its Syrian rebel allies have mounted three separate military operations in northern Syria against "terrorist elements", seizing control of the border area, including al-Bab.
                                            
                                            There was no immediate claim of responsibility but the Turkish defence ministry said on Twitter that "inhumane and uncivilised PKK/YPG terrorists continue to target innocent civilians".
                                            
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column-40">
                                <div class="news">
                                    <div class="news-image">
                                        <div id="container5">
                                            <img id="image" src="petrol.png" height="200" width="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-60">
                                <div class="news">
                                    <h2>Iran petrol price hike: Protests erupt over surprise rationing
                                    </h2>
                                    <div class="side-news-data">
                                        <p> Protesters angered by Iran raising subsidized gasoline prices blocked traffic in several cities and clashed occasionally with police Saturday, the day after overnight rallies included an attempted attack on a regional oil depot that saw police and demonstrators exchange gunfire.

                                            The demonstrations, though not as widespread as the economic protests that shook the country nearly two years ago, put new pressure on the government of Iran's relatively moderate President Hassan Rouhani.
                                            
                                            As parliamentary elections loom in February, Rouhani has been trying to pitch Iran on the idea of staying in his landmark 2015 nuclear deal with world powers.
                                    </div>
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