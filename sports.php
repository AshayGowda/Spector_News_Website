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
    <title>Spector - Sports News</title>
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
                        <a href="international.php"><i class="fa fa-globe" style="color:#2196F3"></i> International</a>
                        <a href="entertainment.php"><i class="fa" style="color:#2196F3">&#xf26c;</i> Entertainment</a></li>
                        <a class="active" href="sports.php"><i class="fas fa-running" style="color:#2196F3"></i> Sports</a>
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
                            <img src="ronaldo.png" style="width:100%">
                            <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">2 / 3</div>
                            <img src="rohith.png" style="width:100%">
                            <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides fade2">
                            <div class="numbertext">3 / 3</div>
                            <img src="fedrer.png" style="width:100%">
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
                                    <img id="image" src="sewag.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Sehwag on Rohit</h2>

                            <p>Virender Sehwag Praises Rohit Sharma's Debut as Test Opener</p>
                            <a href="readmores1.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="indiabangla.png" height="200" width="220">
                                </div>
                            </div><h2>Rohit Praises Jadeja</h2>

                            <p>Jadeja has proved himself in limited chances of Asia Cup

                                </p>
                            <a href="readmores2.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="kabbaddi.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>BW are Champions</h2>

                            <p>Pro Kabaddi 2019: The Bengal Warriors success story</p>
                            <a href="readmores3.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="virat2.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Virat On Fire</h2>

                            <p>Virat Kohli Scores 7th Test Double-Century </p>
                            <a href="readmores4.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="hockey.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Final Hockey Team</h2>

                            <p>Indian teams for hockey Olympic Qualifiers announced</p>
                            <a href="readmores5.html" class="read-more"> Read More &rarr;</a>
                        </div>
                    </div>
                    <div class="column-33">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="jockovick1.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Djokovic VS Thiem</h2>

                            <p>ATP Final London Preview: Djokovic VS Thiem</p>
                            <a href="readmores6.html" class="read-more"> Read More &rarr;</a>
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
                    <div class="sec-title"> Live score</div>
                    <div class="sidebar-widget">
                        <p style="  border: 1px solid black;
                        outline: #333 solid 1px;
                        margin: auto;  
                        padding: 70px 30px;
                        text-align: center;">
                        <?php
                            $content=file_get_contents("http://cricscore-api.appspot.com/csa");
                            $array = json_decode($content,true);
                            //echo $array[0]['id'];
                            $u=$array[0]['id'];
                            echo '<br/>';
                            $content=file_get_contents("http://cricscore-api.appspot.com/csa?id=$u");
                            //echo $content;
                            $array = json_decode($content,true);
                            //print_r($array);
                            //echo '<br/>';
                            echo $array[0]['de'];
                            $u=$array[0]['de'];
                        ?>
                            </p>
                        </p>

                    </div>
                    <div class="sidebar-widget">

                    <form action="subscribes.php" method="POST" enctype="multipart/form-data">
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
            <div class="sec-title">Highlights</div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                <source src="movie.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="news">
                        <h2>Rohit Sharma's pep-talk got us motivated to win 3rd T20I: Shreyas Iyer after series win vs Bangladesh
                        </h2>
                        <div class="side-news-data">
                            <p>India batsman Shreyas Iyer revealed that skipper Rohit Sharma's pep-talk to all team-mates proved as a motivation to win the Nagpur T20I against Bangladesh on Sunday. Iyer admitted that India was feeling the pressure in the
                                third T20I before turning things around. Deepak Chahar picked up 6 wickets for just 7 runs while Shivam Dube scalped 3 after Shreyas Iyer and KL Rahul hit quickfire fifties to guide India to a 30 run victory in Nagpur thereby
                                sealing a 2-1 series victory over Bangladesh. Delhi Capitals skipper was pleased with his own effort as he registered his maiden half-century off just 27 balls and accelerated India's innings when the hosts were in trouble.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-30">
                    <div class="news">
                        <div class="news-image">
                            <video height="170" autoplay muted controls loop>
                                    <source src="ronaldo.mp4" type="video/mp4">
                                    <source src="ronaldo.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                        </div>
                    </div>
                </div>
                <div class="column-70">
                    <div class="news">
                        <h2>Juventus's Dybala sinks AC Milan as angry Cristiano Ronaldo substituted
                        </h2>
                        <div class="side-news-data">
                            <p>Juventus stayed top of Serie A with a 1-0 win over AC Milan thanks to Paulo Dybala's fine strike on Sunday after Cristiano Ronaldo was substituted for the second game in a row and walked straight down the tunnel, clearly unhappy
                                at the decision. Ronaldo's replacement Dybala scored in the 77th minute with a goal the Portuguese would have been proud of. After a quick exchange of passes, the Argentine twisted past Alessio Romagnoli and beat Gianluigi
                                Donnarumma with a right foot shot. Ronaldo was taken off in the 55th minute, his earliest substitution since he joined Juve at the start of last season and the first time he has been replaced twice in succession.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Cricket</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="englandteam.png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>England beat New Zealand in super over to win T20 series 3-2
                        </h2>
                        <div class="side-news-data">
                            <p>In a repeat of July's World Cup final, the scores were tied at the end of a wildly unpredictable game in Auckland. New Zealand plundered 146-5 from 11 overs, and it took Chris Jordan hitting 12 off the final three deliveries
                                to take the game to a super over. Jonny Bairstow, who earlier struck 47 off 18 balls, and captain Eoin Morgan scored 17 off England's six deliveries, before Jordan limited New Zealand to eight. It was a remarkable finish
                                to a rain-delayed game that contained a staggering 29 sixes in 24 overs.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="southafrica.png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>India vs Australia Highlights, World Cup 2019: IND beat AUS by 36 runs
                        </h2>
                        <div class="side-news-data">
                            <p>What a dominant win for India! Virat Kohli's men have moved to the third spot on the 10-team points table with 2 wins from as many games. This should be special, considering it's only their 4th World Cup win over Australia
                                in 12 meetings. Shikhar Dhawan hit his thrid World Cup hundred and Virat Kohli chipped in with a 82. Hardik Pandya and MS Dhoni came with quickfire knocks to help India post 352. Australia lost the match in their first
                                10 overs wherein David Warner and Aaron Finch played a bit too slow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="container">
            <div class="sec-title">Football</div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="messie1.png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>La Liga: Real Madrid and Barcelona win big to extend their lead
                        </h2>
                        <div class="side-news-data">
                            <p>After a rare bad foul that led to a yellow card and a Celta Vigo goal, Lionel Messi made up for his error with two perfectly struck free kicks to claim a hat trick and lead Barcelona to another victory. It was the 34th Spanish
                                league treble for Messi, tying former Real Madrid star Cristiano Ronaldo for the most in the competition. Messi's hat trick gave Barcelona a 4-1 win over Celta on Saturday, ending the team's two-game winless sequence and
                                leaving it joint top with Real Madrid, which routed Eibar 4-0 with two goals by Karim Benzema
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column-40">
                    <div class="news">
                        <div class="news-image">
                            <div id="container5">
                                <img id="image" src="jamieverdy.png" height="200" width="400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-60">
                    <div class="news">
                        <h2>Chelsea claim sixth straight win, Leicester jump to second spot
                        </h2>
                        <div class="side-news-data">
                            <p>Chelsea notched a sixth successive Premier League win as they beat Crystal Palace 2-0, while Leicester City beat Arsenal 2-0 to move into second place on Saturday. Stuttering Tottenham Hotspur's winless run continued as they
                                were held to a draw at home to Sheffield United, leaving last year's Champions League runners-up languishing in 12th place. Leaders Liverpool take on champions Manchester City at Anfield on Sunday in the biggest game of
                                the season so far. At Turf Moor, Burnley crushed West Ham United 3-0 to pile the pressure on Hammers boss Manuel Pellegrini, but Everton's Marco Silva finally found some cheer as his side won 2-1 at Southampton. writing
                                and poor portrayal of women in the final season of the HBO series, based on author George RR Martin's book series A Song of Ice and Fire.
                        </div>
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