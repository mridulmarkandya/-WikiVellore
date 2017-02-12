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
	background-image: url('image/bg.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>Home</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body bgcolor="#222">

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
    	<h1><a href="#nogo">journey to vellore</a></h1>
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
	<section id="content" class="three-column"><article>
			<h2>About Us</h2>
		</article></section>
		<aside class="sidebar big-sidebar left-sidebar">
			<pre>
	<img src="image/mm.jpg" style="width: 40%; height: 40%;" /><br>
  <font size= 5>Mridul Markandya
 20 year
 VIT University
 14BIT0012
 <a href="https://www.facebook.com/mridul.markandya" style="text-decoration: none"><img src="image/fb.png" style="width: 5%; height: 5%;"/>/mridul.markandya</a>
 <a href="https://plus.google.com/103345303037262432784" style="text-decoration: none"><img src="image/g+.png" style="width: 5%; height: 5%;"/>/mridulmarkandya96</a>
 <a href="https://twitter.com/mridulmarkandya" style="text-decoration: none"><img src="image/twt.jpg" style="width: 5%; height: 5%;"/>@mridulmarkandya</a>
 <a href="https://instagram.com/mridulmarkandya" style="text-decoration: none"><img src="image/insta.png" style="width: 5%; height: 5%;"/>/mridulmarkandya</a>
	</font>
		</pre>
		</aside>
		
	
			<aside class="sidebar right-sidebar big-sidebar ">
					<pre>
    <img src="image/mam.jpg" style="width: 40%; height: 40%;" /><br>
  <font size= 5>Mayur Makhija
 20 year
 VIT University
 14BIT0006
 <a href="https://www.facebook.com/public/Mayur-Makhija" style="text-decoration: none"><img src="image/fb.png" style="width: 3%; height: 3%;"/>/Mayur-Makhija</a>
 <a href="https://plus.google.com/+MayurMakhija" style="text-decoration: none"><img src="image/g+.png" style="width: 3%; height: 3%;"/>/+MayurMakhija</a>
 <a href="https://twitter.com/makhijamayur" style="text-decoration: none"><img src="image/twt.jpg" style="width: 3%; height: 3%;"/>@makhijamayur</a>
 <a href="https://instagram.com/mayurmakhija" style="text-decoration: none"><img src="image/insta.png" style="width: 3%; height: 3%;"/>/mayurmakhija</a>
					</font>
				</pre>
			</aside>
	</div>    
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