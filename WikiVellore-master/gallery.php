<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
header {
	padding: 90px 0px;
	margin: 0 auto;
	text-align:center;
	background-color: #333;
	background-image: url('image/g.jpg');
	background-position: center;
}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
}
.zoomin img { 
height: auto; 
width: 200px; 
-webkit-transition: all 2s ease; 
-moz-transition: all 2s ease; 
-ms-transition: all 2s ease; 
transition: all 2s ease; 
} 
.zoomin img:hover { 
width: 500px; height: auto; 
} 
</style>
<title>Gallery</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container" class="width">

   <header>
		<?php
			if(isset($_SESSION["signin"]))
			{	
					echo "<span class='user' style='color:white'><a href='logout.php'>Log Out</a></span>";
			}
			else
			{
				echo "<span class='user' style='color:white'><a href='login.html'>Log In</a>/<a href='Signup.php'>Sign Up</a></span>";
			}
		?>
    	<h1><a href="#nogo">gallery</a></h1>
    </header>

    <nav>
    			<ul>
        		<li><a href="Home.php" style="text-decoration: none">Home</a></li>
				<li><a href="history.php" style="text-decoration: none">History</a></li>
				<li><a href="G&C.php" style="text-decoration: none">Geography and Climate</a></li>
				<li><a href="Education.php" style="text-decoration: none">Education</li>
				<li><a href="tourism.php" style="text-decoration: none">Tourism</a></li>
				<li><a href="Reaching.php" style="text-decoration: none">Transport and Reaching Vellore</a></li>
				<li><a href="Review.php" style="text-decoration: none">Review</a></li>
        	</ul>
	
    </nav>

    <div id="body">
		<section id="content" class="three-column">
		<article>
			<h2>Gallery</h2>
		</article></section>
		<aside class="sidebar big-sidebar left-sidebar">
			<h4>Zoom IN</h4>
			<div class="img">
				<div class="zoomin"> <img src="image/g1.jpg"/> </div> 
			</div>
			
			<div class="img">			
				<div class="zoomin"> <img src="image/g2.jpg"/> </div>
            </div>
			
			<div class="img">			
				<div class="zoomin"> 
					<img src="image/g3.jpg"/> </div> 
			</div>
			
			<div class="img">			
				<div class="zoomin"> <img src="image/g4.jpg"/> </div> 
			</div>
			
			<div class="img">
				<div class="zoomin"> <img src="image/g5.jpg"/> </div> 
			</div>
		</aside>
		
		<aside class="sidebar right-sidebar big-sidebar">
			<h4>SlideShow</h4>
			<div class="w3-content" style="max-width:1200px">
				<img class="mySlides" src="image/g1.jpg" style="width:500px">
				<img class="mySlides" src="image/g2.jpg" style="width:500px">
				<img class="mySlides" src="image/g3.jpg" style="width:500px">
				<img class="mySlides" src="image/g4.jpg" style="width:500px">
				<img class="mySlides" src="image/g5.jpg" style="width:500px">
		
				<div class="w3-row-padding w3-section">
					<div class="w3-col s4">
						<img class="demo w3-border w3-hover-shadow" src="image/g1.jpg" style="width:100px" onclick="currentDiv(1)">
						<img class="demo w3-border w3-hover-shadow" src="image/g2.jpg" style="width:100px" onclick="currentDiv(2)">
						<img class="demo w3-border w3-hover-shadow" src="image/g3.jpg" style="width:100px" onclick="currentDiv(3)">
						<img class="demo w3-border w3-hover-shadow" src="image/g4.jpg" style="width:100px" onclick="currentDiv(4)">
						<img class="demo w3-border w3-hover-shadow" src="image/g5.jpg" style="width:100px" onclick="currentDiv(5)">
					</div>
				</div>
			</div>
		</aside>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-border-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-border-red";
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
   <footer>
        <div class="footer-content">
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; VELLORE Diaries</p>
         </div>
    </footer>
</div>
</body>
</html>