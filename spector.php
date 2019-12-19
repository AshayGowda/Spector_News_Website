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


$sql = "INSERT INTO subscribe VALUES ('$name','$mail')";



if(mysqli_query($con,$sql))
{
	echo "";
}
else
{
	echo "";
}



$conn = new mysqli('localhost', 'id11661404_root1', 'spector', 'd11661404_spector');

if (isset($_POST['save'])) {
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;

    if (!$uID) {
        $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
        $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
    } else
        $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

    exit(json_encode(array('id' => $uID)));
}

$sql = $conn->query("SELECT id FROM stars");
$numR = $sql->num_rows;

$sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
$rData = $sql->fetch_array();
$total = $rData['total'];

$avg = $total / $numR;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spector - News</title>
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
                        <a class="active" href="spector.php"><i class="fa fa-fw fa-home" style="color:#2196F3"></i> Home</a>
                        <a href="national.php"><i class="fas fa-flag-usa" style="color:#2196F3"></i> National</a>
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
    <div class="content ptb-25">
        <div class="container">
            <div class="row">
                <div class="column-60">
                    <div class="main-headline">
                        <div class="slideshow-container" style="z-index: 5000;">

                            <div class="mySlides fade">
                                <div class="numbertext">1 / 3</div>
                                <img src="ind.png" style="width:100%">
                                <div class="text"></div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="main.png" style="width:100%">
                                <div class="text">
                                    <div class="headline">Impeachment is too important to leave to Congress</div>
                                </div>
                            </div>

                            <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="trump.jpg" style="width:100%">
                                <div class="text">
                                    <div class="headline">A lawless president won’t be constrained by establishment politics alone.</div>
                                </div>
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                    </div>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>

                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            if (n > slides.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = slides.length
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                        }
                    </script>
                </div>
                <div class="column-40">
                    <div class="side-headline">
                        <!--SIDE NEWS 01-->
                        <div class="sidenews">
                            <div class="row">
                                <div class="column-40">
                                    <div class="side-news-image">
                                        <div id="container5">
                                            <img id="image" src="bjp.png" width="160" height="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="column-60">
                                    <div class="side-news-data">
                                        <h2>Assembly Elections 2019: BJP’s Pseudo-Nationalist Crutches</h2>
                                        <p>BJP’s deafening silence on the economic crisis was matched by its reliance on Kashmir, militarism and caste politics.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <!--SIDE NEWS 02-->
                        <div class="sidenews">
                            <div class="row">
                                <div class="column-40">
                                    <div class="side-news-image">
                                        <div id="container5">
                                            <img id="image" src="side.png" width="160" height="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="column-60">
                                    <div class="side-news-data">
                                        <h2>The 4 words that will decide impeachment</h2>
                                        <p>Ezra Klein and Gene Healy discuss the meaning of "high crimes and misdemeanors" on a new podcast, Impeachment, Explained. By Ezra Klein</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <!--SIDE NEWS 03-->
                        <div class="sidenews">
                            <div class="row">
                                <div class="column-40">
                                    <div class="side-news-image">
                                        <div id="container5">
                                            <img id="image" src="sidenews3.png" width="160" height="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="column-60">
                                    <div class="side-news-data">
                                        <h2>Impeachment is too important to leave to Congress</h2>
                                        <p>A lawless president won’t be constrained by establishment politics alone. By Matthew Yglesias</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
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
                                        <img id="image" src="modi.png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>India's GDP Lost !</h2>
                                <p>DP growth rate has been rising concerns over econmic progress</p>
                                <a href="readmore.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="salman.png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Salman's Marriage?</h2>

                                <p>Roomers of salman's Marriage spreading across bollywood</p>
                                <a href="#" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="virat.png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Best Captain Ever</h2>

                                <p>Virat Kohli peerless with Test record as captain vs South Africa</p>
                                <a href="#" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="msd.png">
                                    </div>
                                </div>
                                <h2>MSD Returns</h2>

                                <p>MSD to return for India Bangladesh Series</p>
                                <a href="#" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="riots.png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Riots in India</h2>

                                <p>Riots in India are decreasing but becoming more intense</p>
                                <a href="#" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="amit.png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>India Hindu Rashtra</h2>

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
                        <div class="sec-title"> Rate Us</div>
                        <div class="sidebar-widget">

                                    <div align="center" style="background: #000; padding: 50px;color:white;">
                                            <i class="fa fa-star fa-2x" data-index="0"></i>
                                            <i class="fa fa-star fa-2x" data-index="1"></i>
                                            <i class="fa fa-star fa-2x" data-index="2"></i>
                                            <i class="fa fa-star fa-2x" data-index="3"></i>
                                            <i class="fa fa-star fa-2x" data-index="4"></i>
                                            <br><br>
                                            <?php echo round($avg,2) ?>
                                        </div>

                                        <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
                                        <script>
                                            var ratedIndex = -1, uID = 0;

                                            $(document).ready(function () {
                                                resetStarColors();

                                                if (localStorage.getItem('ratedIndex') != null) {
                                                    setStars(parseInt(localStorage.getItem('ratedIndex')));
                                                    uID = localStorage.getItem('uID');
                                                }

                                                $('.fa-star').on('click', function () {
                                                ratedIndex = parseInt($(this).data('index'));
                                                localStorage.setItem('ratedIndex', ratedIndex);
                                                saveToTheDB();
                                                });

                                                $('.fa-star').mouseover(function () {
                                                    resetStarColors();
                                                    var currentIndex = parseInt($(this).data('index'));
                                                    setStars(currentIndex);
                                                });

                                                $('.fa-star').mouseleave(function () {
                                                    resetStarColors();

                                                    if (ratedIndex != -1)
                                                        setStars(ratedIndex);
                                                });
                                            });

                                            function saveToTheDB() {
                                                $.ajax({
                                                url: "subscribe.php",
                                                method: "POST",
                                                dataType: 'json',
                                                data: {
                                                    save: 1,
                                                    uID: uID,
                                                    ratedIndex: ratedIndex
                                                }, success: function (r) {
                                                        uID = r.id;
                                                        localStorage.setItem('uID', uID);
                                                }
                                                });
                                            }

                                            function setStars(max) {
                                                for (var i=0; i <= max; i++)
                                                    $('.fa-star:eq('+i+')').css('color', 'green');
                                            }

                                            function resetStarColors() {
                                                $('.fa-star').css('color', 'white');
                                            }
                                        </script>


                                    </div>


                        </div>
                        
                        <div class="sidebar-widget">

                            <form action="subscribe.php" method="POST" enctype="multipart/form-data">
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
                <div class="sec-title">National</div>
                <div class="row">
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="shaa.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Shah's Stratergy</h2>

                        </div>
                    </div>
                    <div class="column-20 ">
                        <div class="news ">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="dkshivakumar.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>DK is Back</h2>

                        </div>
                    </div>
                    <div class="column-20 ">
                        <div class="news ">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="images.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>New Map For J&K</h2>

                        </div>
                    </div>
                    <div class="column-20 ">
                        <div class="news ">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="Uddhav-Thackeray.png" height=" 200 " width="220 ">
                                </div>
                            </div>
                            <h2>ShivSena & BJP Fight </h2>

                        </div>
                    </div>
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="WINjpg.png" height="200 " width="220 ">
                                </div>
                            </div>
                            <h2>India got ICC Test Championship</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-section">
            <div class="container">
                <div class="sec-title">International</div>
                <div class="row">
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="download.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>"Jai" Sri Ram</h2>

                        </div>
                    </div>
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="billgates.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Billgates Beats Jeff Bezos</h2>

                        </div>
                    </div>
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="SAVE_20191110_165522.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>Abu Bakr killed in US raid</h2>

                        </div>
                    </div>
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="media-handler.png" height="200" width="220 ">
                                </div>
                            </div>
                            <h2>BRICS is all about Geo Politics</h2>

                        </div>
                    </div>
                    <div class="column-20">
                        <div class="news">
                            <div class="news-image">
                                <div id="container5">
                                    <img id="image" src="nobel.png" height="200" width="220">
                                </div>
                            </div>
                            <h2>The Nobel Couple Fighting Poverty</h2>

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