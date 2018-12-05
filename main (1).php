 <?php
// include('login.php'); // Includes Login Script
//
//       if(isset($_SESSION['login_user'])){
//           header("location: t.php");
//}
  ?> 
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="footer1.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="script/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="header">
<div class="container">
<div class="row">
<div class="col-sm-2"><a href="#">Home</a></div>
<div class="col-sm-2"><a href="#admin">Admin</a></div>
<div class="col-sm-2"><a href="#candidate" data-toggle="modal" data-target="#login-modal">Candidate</a>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
                <div class="loginmodal-container">
                    <font face="verdana"><h1><b>LOGIN</b></h1></font><br>
                  <form action="" method="post">
                       <input type="text" name="username" id="name" placeholder="Username">
                       <input type="password" name="password" id="password" placeholder="Password">
                       <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                    
		  </form>
				  
                    
                  <div class="login-help">
                    <b><a href="candidate.htm">Register</a>
					
					 <a href="#">Forgot Password</a></b>
                  </div>
                </div>
            </div>
          </div>
</div>
		 <!----login modal---->
<div class="col-sm-2"><a href="#voter" data-toggle="modal" data-target="#login-modal1">Voter</a>
<div class="modal fade" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
                    <div class="loginmodal1-container">
                    <font face="verdana"><h1><b>LOGIN</b></h1></font><br>
                  <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodall-submit" value="Login">
                  <!--<span>//<?php //echo $error; ?></span> -->
				  </form>
                    
                  <div class="login1-help">
                    <b><a href="voterrreg.htm">Register</a>
			
					 <a href="#">Forgot Password</a></b>
                  </div>
                </div>
            </div>
          </div>
</div>
<div class="col-sm-2"><a href="#">About</a></div>
<div class="col-sm-2"><a href="#">Contact</a></div>
</div>
</div>
</div>
<div class="container" style="max-width:1100px;margin-top:35px;margin-bottom:35px">
<div class="panel-body"><h1><b>VOTING</b></h1></div>
</div>
<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img src="v1.png" style="width:100%">
  
</div>

<div class="mySlides ">
  <div class="numbertext">2 / 3</div>
  <img src="p5.jpg" style="width:100%">
  
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="v3.jpg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="container" style="max-width:1030px;margin-top:35px;margin-bottom:35px">
<div class="panel-body">
<font face="verdana"  color="#3498DB"><h2><b><center>OUR SERVICES</center></b></h2></font>
<div class="row">
  <div class="column" style="background-color:#aaa;">
  <br>
   <center><img src="v6.png" height="100" width="100"></center>
  <center><h3><b>ONLINE ELECTIONS</b></h3> <p><font face="verdana" size="4">Ensures only authorised <br>voters can vote,once.</font></p></center>
  </div>
  <div class="column" style="background-color:#bbb;">
   <br>
   <center><img src="v7.png" height="95" width="95"></center>
  <center><h3><b>AUTOMATED BALLOT COUNTS</b></h3> <p><font face="verdana" size="4">Gives accurate and <br>transparent results.</font></p></center>
  </div>
  </div>
  </div>
</div>
</div>

	<!-----security panel------>
	<div class="container" style="max-width:1030px;margin-top:35px;margin-bottom:35px">
<div class="panel-body">
<div class="row">
  <div class="column1" style="background-color:#aaa;">
  <font face="verdana"  color="black"><h2><b><center><u>SECURE AND TRUSTWORTHY</u></center></b></h2></font><br>
  <div class="col-md-4"><img src="lock.png" height="100" width="100" hspace="90"><br> <center><h3><b>Secure</b></h3><p><font face="verdana" size="4">Enjoy complete security <br>and privacy while voting .</font></p> </div>
<div class="col-md-4"><img src="avatar.png" height="100" width="100" hspace="90"><br><center><h3><b>Anonymous</b></h3><p><font face="verdana" size="4">We simply do not track who<br>&nbsp votes for what; only who<br> votes, and what the vote is.</font></p> </div>
<div class="col-md-4"><img src="hand.jpg" height="100" width="100" hspace="90"><br><center><h3><b>Private</b></h3><p><font face="verdana" size="4">We do not use or share <br> voter's email addresses for<br> any purposes outside of<br> your election.</font></p> </div>
  </div>
  </div>
</div>
</div>
<footer class="footer row mt-5">
	<div class="container mt-5">
		<div class="row ">
			<div class="col-md-12 mt-5 text-center">
                <h4>Start Making All Vote Matter</h4>
				<h5>NEED ANY HELP? WE WOULD LOVE TO HEAR FROM YOU</h5>
				<h6>Contact Us At</h6>
				<p class="social-icons-header">
					 		<a href="facebook.com"><i class="fa fa-facebook "></i></a>
					 		<a href="facebook.com"><i class="fa fa-twitter"></i></a>
					 		<a href="facebook.com"><i class="fa fa-instagram"></i></a>
					 		<a href="facebook.com"><i class="fa fa-linkedin"></i></a>	
					 </p>
			</div>
			
		</div>
	</div>
</footer>
</body>
</html>
