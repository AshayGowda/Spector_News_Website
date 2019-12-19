<!DOCTYPE html>
<html lang="en">

<head>
	<title>Spector - News Form</title>
	<link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/symbol.png" type="image/gif" sizes="20x20">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
	<style >
    .button {
  background-color: #333;
  border: none;
  color: white;
  padding: 7px 14px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 1px;
  cursor: pointer;
  
}
.button:hover {
  background-color: #000;
  color: white;
}
   #content{
   	width: 50%;
   	margin: 20px auto;
       border: 4px solid gray;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
    font-family: "Arial";
    font-size: 11px;
    color: gray;
   }
   #img_div:after{
   	content: "";
   	display: block;
    clear: both;
    font-family: "Arial";
    font-size: 11px;
    color: gray;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>

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
    </header>


<?php

  
  $msg = "";

  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);
    $db = mysqli_connect("localhost", "id11661404_root", "spector", "id11661404_photos");  
  
  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	
  	

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  
?>

<div id="content">
<?php
$db = mysqli_connect("localhost", "root", "", "photos");
$sql = "SELECT * FROM images";
$result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="index.php" enctype="multipart/form-data">
     <div class="container" >
            <h2 align="center">News Form</h2>
        </div>
    
  	<input type="hidden" name="size" value="1000000">
      <div class="container" >
  	<div>
      <center><input class="button" type="file" name="image"></center>
  	</div>
  	<div>
      <center><textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Tell us about the above image....."></textarea></center>
  	</div>
    </div>
    <div class="container">
    <center><button class="button" type="submit" name="upload">POST</button></center>
  	</div>
  </form>
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