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

    <body>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="column-30">
                            <div class="logo">
                                <a href="spector.html"><img src="images/logo.png" alt="logo" width="220" height="100"></a>
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
                        <a class="active" href="entertainment.php"><i class="fa" style="color:#2196F3">&#xf26c;</i> Entertainment</a></li>
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
                                <img src="output-onlinepngtools (19).png" style="width:100%">
                                <div class="text">Caption Text</div>
                            </div>

                            <div class="mySlides fade2">
                                <div class="numbertext">2 / 3</div>
                                <img src="output-onlinepngtools (6).png" style="width:100%">
                                <div class="text">Caption Two</div>
                            </div>

                            <div class="mySlides fade2">
                                <div class="numbertext">3 / 3</div>
                                <img src="sharukh khan.png" style="width:100%">
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
                                        <img id="image" src="output-onlinepngtools (12).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Bigil's fame</h2>

                                <p>Bigil box office collection to break Baahubali 2 record soon?</p>
                                <a href="readmoree1.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (16).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Sudeep on top</h2>

                                <p>Kiccha Sudeep is playing a pivotal role in Sye Raa Narasimha</p>
                                <a href="readmoree2.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (17).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Arnold's Next Movie</h2>

                                <p>Arnold will be playing the iconic role of the cyborg T-800 in Terminator</p>
                                <a href="readmoree3.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (18).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>War completes 100 crores</h2>

                                <p>'War' a super-hit at BO, enters Rs 100 cr club within 3 days of release</p>
                                <a href="readmoree4.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (7).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>Remembring Shankar Nag</h2>

                                <p>In The Hearts Of Karnataka’s Masses, Shankar Nag Lives On</p>
                                <a href="readmoree5.html" class="read-more"> Read More &rarr;</a>
                            </div>
                        </div>
                        <div class="column-33">
                            <div class="news">
                                <div class="news-image">
                                    <div id="container5">
                                        <img id="image" src="output-onlinepngtools (8).png" height="200" width="220">
                                    </div>
                                </div>
                                <h2>AlluArjun arriving on sankranti</h2>

                                <p>The movie is set to be released on January 2020, to coincide with Sankranthi</p>
                                <a href="readmoree6.html" class="read-more"> Read More &rarr;</a>
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
                        <div class="sec-title"> Movie Rating</div>
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
                                var ratedIndex = -1,
                                    uID = 0;

                                $(document).ready(function() {
                                    resetStarColors();

                                    if (localStorage.getItem('ratedIndex') != null) {
                                        setStars(parseInt(localStorage.getItem('ratedIndex')));
                                        uID = localStorage.getItem('uID');
                                    }

                                    $('.fa-star').on('click', function() {
                                        ratedIndex = parseInt($(this).data('index'));
                                        localStorage.setItem('ratedIndex', ratedIndex);
                                        saveToTheDB();
                                    });

                                    $('.fa-star').mouseover(function() {
                                        resetStarColors();
                                        var currentIndex = parseInt($(this).data('index'));
                                        setStars(currentIndex);
                                    });

                                    $('.fa-star').mouseleave(function() {
                                        resetStarColors();

                                        if (ratedIndex != -1)
                                            setStars(ratedIndex);
                                    });
                                });

                                function saveToTheDB() {
                                    $.ajax({
                                        url: "subscribee.php",
                                        method: "POST",
                                        dataType: 'json',
                                        data: {
                                            save: 1,
                                            uID: uID,
                                            ratedIndex: ratedIndex
                                        },
                                        success: function(r) {
                                            uID = r.id;
                                            localStorage.setItem('uID', uID);
                                        }
                                    });
                                }

                                function setStars(max) {
                                    for (var i = 0; i <= max; i++)
                                        $('.fa-star:eq(' + i + ')').css('color', 'green');
                                }

                                function resetStarColors() {
                                    $('.fa-star').css('color', 'white');
                                }
                            </script>


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
                <div class="sec-title">Movie Trailers</div>
                <div class="row">
                    <div class="column-30">
                        <div class="news">
                            <div class="news-image">
                                <video height="170" autoplay controls loop>
                                <source src="entertainment/grudge.mp4" type="video/mp4">
                                <source src="entertainment/grudge.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                              </video>
                            </div>
                        </div>
                    </div>
                    <div class="news">
                        <h2>The Grudge - Official Trailer
                        </h2>
                        <div class="side-news-data">
                            <p>Watch the Official Trailer from English movie 'The Grudge' starring Andrea Riseborough, Demian Bichir, John Cho, Betty Gilpin and Lin Shaye. 'The Grudge' movie is directed by Nicolas Pesce and produced by Sam Raimi, Rob Tapert
                                and Taka Ichise. To know more about 'The Grudge' trailer watch the video. Check out the latest English trailers, new movie trailers, trending English movie trailers
                        </div>
                        <div class="row">
                            <div class="column-30">
                                <div class="news">
                                    <div class="news-image">
                                        <video height="170" autoplay muted controls loop>
                                    <source src="entertainment/movie1.mp4" type="video/mp4">
                                    <source src="entertainment/.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                                    </div>
                                </div>
                            </div>
                            <div class="column-70">
                                <div class="news">
                                    <h2>Avengers Endgame new trailer with bonus content is trending online. Seen yet?
                                    </h2>
                                    <div class="side-news-data">
                                        <p>Months after the release of Avengers Endgame, Marvel has released a new trailer for the film as it makes its entry to online streaming and home video. The director duo of brothers Joe and Anthony Russo released
                                            the trailer at the ongoing San Diego Comic Con. The upcoming home video of the superhero film is packed with bonus content which includes deleted scenes, additional footage from the making of the film, interviews
                                            with the star-studded cast, funny on-set antics and an inside look into the Stan Lee cameo.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-section">
                        <div class="container">
                            <div class="sec-title">Box office</div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="output-onlinepngtools (20).png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <div class="news">
                                            <h2>Joaquin Phonix's Joker earns $953 million to become most profitable comic film ever
                                            </h2>
                                            <div class="side-news-data">
                                                <p>Joaquin Phoenix's remarkable performance in Joker as Arthur Fleck garnered much praises. The film was well received by audience and the critics alike. Joker also minted big bucks at the box office. In fact,
                                                    according to the latest Forbes reports, the DC film topped Rs 6816.5 crore ( $953 million) worldwide after its fifth week. Joker was made on a budget of Rs 446.1 crore ($62.5 million). The film has catapult
                                                    into the most profitable film in terms of its budget versus the box office collection.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="output-onlinepngtools (10).png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <div class="news">
                                            <h2>Saaho box office collection Day 16: Prabhas film remains steady
                                            </h2>
                                            <div class="side-news-data">
                                                <p>saaho, which was made on a massive budget of Rs 350 crore, is continuing its dream run at the box office even after 16 days since its release. The film stars Prabhas, who has returned to the silver screen
                                                    after the massive success of his last film Baahubali 2: The Conclusion in 2017. Saaho continues to do well at the box office world wide. The film, which was released on August 30, has already minted
                                                    Rs 424 crore. It is expected that the film will touch the Rs 450-crore mark soon.
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-section">
                        <div class="container">
                            <div class="sec-title">New on the big screen</div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="avane.jpg" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>Avane Srimannarayana release date to depend on CG
                                        </h2>
                                        <div class="side-news-data">
                                            <p>Computer graphics have become the deciding factor when it comes to the official release date of Avane Srimannarayana (ASN), says producer Pushkar Mallikarjunaiah, who doesn’t want to keep coming up with various
                                                dates and cause hurdles for other film releases. “Since graphics have been brought in every frame, especially the final reel, it is taking more time than we expected,” says Pushkar, who is hoping to complete
                                                the work in September. “As of today, we are targeting to release it between November 1 and 15,”
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="output-onlinepngtools (11).png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>Darbar motion poster out: Rajinikanth is a kickass cop in new AR Murugadoss film
                                        </h2>
                                        <div class="side-news-data">
                                            <p>After the massive success of Petta, Superstar Rajinikanth is back with yet another commercial entertainer titled Darbar. Directed by AR Murugadoss, the film is bankrolled on a huge scale by Lyca Productions.
                                                Rajinikanth is a pan-Indian star and Lyca is planning to capitalise on it by releasing the film four languages namely, Tamil, Telugu, Malayalam and Hindi. The motion poster of the film was released today
                                                by Kamal Haasan, Mahesh Babu, Mohanlal and Salman Khan in their respective languages. In the motion poster, we see Rajinikanth as a stylish cop who is in the middle of a fight. He looks majestic while seated
                                                on a rolling chair.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-section">
                        <div class="container">
                            <div class="sec-title">New films</div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news-image">
                                        <div id="container5">
                                            <img id="image" src="rrr.png" height="200" width="400">
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>RRR buzz: Ram Charan and Junior NTR to shake their leg for a special folk song
                                        </h2>
                                        <div class="side-news-data">
                                            <p>After canning some high-octane action sequences on Junior NTR in Bulgaria, the team of RRR is busy with the on-going schedule at the Ramoji Film City in Hyderabad. After taking a long break and recovering from
                                                an ankle injury, Ram Charan is back onto the sets of this most-anticipated multi-starrer and he himself confirmed the news on his social handle. The shooting is proceeding in full swing and SS Rajamouli
                                                is sweating it out to make sure that RRR will release as per schedule. Meanwhile, a couple of rumours regarding the film are doing the rounds on the internet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="output-onlinepngtools (15).png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>Salman Khan lends his voice to Dabangg 3 track Yu Karke. Check out audio
                                        </h2>
                                        <div class="side-news-data">
                                            <p>Superstar Salman Khan has gone behind the microphone to sing a song again, this time for his upcoming film Dabangg 3. Salman first sung for his 1999 film Hello Brother, and has since then recorded songs for
                                                films such as Kick and Hero. The Bollywood hunk shared the new song's link on Saturday and wrote: "Dabangg 3 ka naya gaana, Yu Karke, suno humaari yaani ki Chulbul Pandey ki aawaaz mein #YuKarkeSong."
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="gameoft.png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>Over 2 lakh Game of Thrones fans sign petition to remake final season. Here's why
                                        </h2>
                                        <div class="side-news-data">
                                            <p>Over two lakh fans of Game of Thrones across the world have signed an online petition urging HBO to remake the eighth and final season of the epic fantasy series with "competent writers". The petitioner, Dylan
                                                D started the appeal to HBO on Charge.org after the premiere of the penultimate episode of the show, The Bells led to be one of its most divisive chapters. Showrunners David Benioff and DB Weiss have been
                                                under fire for below par script writing and poor portrayal of women in the final season of the HBO series, based on author George RR Martin's book series A Song of Ice and Fire.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-40">
                                    <div class="news">
                                        <div class="news-image">
                                            <div id="container5">
                                                <img id="image" src="sarileru.png" height="200" width="400">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-60">
                                    <div class="news">
                                        <h2>Sarileru Neekevvaru: Director Anil Ravipudi shares a glimpse of the Mahesh Babu starrer's teaser

                                        </h2>
                                        <div class="side-news-data">
                                            <p>The highly anticipated film from the south film industry, Sarileru Neekevvaru will see megastar Mahesh Babu as an Army Officer. The film is slated for a release on the auspicious occasion of Sankranthi. There
                                                is a strong buzz that the makers of the much-awaited film Sarileru Neekevvaru will be changing the film’s release date. The reason for this is that Stylish Star Allu Arjun’s film Ala Vaikunthapurramloo will
                                                also be releasing on the same date, which is 12 January, 2020. </p>
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