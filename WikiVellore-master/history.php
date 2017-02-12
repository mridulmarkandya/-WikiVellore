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
	background-repeat: no-repeat;
	background-image: url('image/hh.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>History</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<div id="container" class="width">

    <header>
		<?php
			if(isset($_SESSION["signin"])) {
				echo "<span class='user' style='color:white'>". $_SESSION['firstname'] ."&nbsp&nbsp&nbsp<a href='logout.php'>Log Out</a></span>";
			}
			else {
				echo "<span class='user' style='color:white'><a href='login.html'>Log In</a>&nbsp|&nbsp<a href='Signup.php'>Sign Up</a></span>";
			}
		?>
    	<h1><a href="#nogo">History</a></h1>
    </header>

    <nav>
    		<ul>
        		<li><a href="Home.php" style="text-decoration: none">Home</a></li>
				<li><a href="history.php" style="text-decoration: none">History</a></li>
				<li><a href="G&C.php" style="text-decoration: none">Geography and Climate</a></li>
				<li><a href="Education.php">Education</a></li>
				<li><a href="tourism.php" style="text-decoration: none">Tourism</a></li>
				<li><a href="Reaching.php" style="text-decoration: none">Transport and Reaching Vellore</a></li>
				<li><a href="Review.php" style="text-decoration: none">Review</a></li>
        	</ul>
	
    </nav>

    <div id="body">
		<aside class="sidebar small-sidebar left-sidebar">
			<ul>	
				<li>
					<a href="gallery.php"><h4>Gallery</h4></a>
					<ul>
                       
					</ul>
				</li>
				<li class="bg">
				<h4>About us</h4>
					<ul>
						<li class="text">
							<p style="margin: 0;">Website Developed by Mayur Makhija and Mridul Markandya of 2<sup>nd</sup> year, Information Technology Branch in VIT University.<a href="about.php" class="readmore">Read More &raquo;</a></p>
						</li>
					</ul>
				</li>
			</ul>
		</aside>
		<section id="content" class="three-column"><article>
		<h2>History</h2>
			<p>The recorded history of Vellore dates back to the ninth century, as seen from a Chola inscriptions in the Annamalaiyar Temple in Tiruvannamalai. Further inscriptions made before ninth century indicate the rule of Pallava kings, whose capital was Kanchipuram.<br>
The Chola Kings ruled over the region from 850 to 1280. After the rule of Cholas, it came under the Rashtrakutas, the later Cholas, Reddy's and Vijayanagar kings. The Vellore Fort was built during the time of Chinna Bommi reddy, a subordinate of Vijayanagar kings Sadasivaraya and Srirangaraya during the third quarter of the 16th century.<br>
During the 17th century, Vellore came under the dominion of the Nawab of the Carnatic. As the Mughal empire came to an end, the Nawab lost control of the town, with confusion and chaos ensuing after 1753. Subsequently, there were periods of Hindu and Muslim stewardship of the region. The poligars were opposing British rule but were subdued. During the first half of the 19th century, the town came under British rule.<br></p>
		</article></section>
			
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