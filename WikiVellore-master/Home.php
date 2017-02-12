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
	margin: 0;
	text-align:center;
	background-color: #333;
	background-image: url('image/bg.jpg');
	background-repeat: no-repeat;
	background-size:100% 100%;
	
}
</style>
<title>Home</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body onload="startTime()">
<div id="container" class="width">

    <header>
		
		<?php
			if(isset($_SESSION["signin"]))
			{	
					echo "<span class='user' style='color:white'>". $_SESSION['firstname'] ."&nbsp&nbsp&nbsp<a href='logout.php'>Log Out</a></span>";
			}
			else
			{
				echo "<span class='user' style='color:white'><a href='login.html'>Log In</a>&nbsp|&nbsp<a href='Signup.php'>Sign Up</a></span>";
			}
		?>
    	<h1><a href="#nogo">journey to vellore</a></h1>
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
		<h2>Vellore</h2>
			<p>Vellore is a city and the administrative headquarters of Vellore District in the South Indian state of Tamil Nadu. Located on the banks of Palar River in the north-eastern part of Tamil Nadu and has been ruled, at different times, by the Pallavas, Medieval Cholas, Later Cholas, Vijayanagar Empire, Rashtrakutas, Carnatic kingdom, and the British. Vellore has four zones (totally 60 wards) which covers an area of 87.915 km<sup>2</sup> and has a population of 423,425 based on 2001 census.It is located about 145 kilometres (90 mi) west of the state capital Chennai and about 211 kilometres (131 mi) east of Karnataka capital Bengaluru. Vellore is administered by a Vellore Municipal Corporation under a mayor. Vellore is part of Vellore (State Assembly Constituency) and Vellore (Lok Sabha constituency).<br>
			Vellore is the base of two of India's top ten educational institutions, Christian Medical College & Hospital and VIT University. It is also a major centre for medical tourism in India.<br></p>
			<p>Vellore region is the top exporter of finished leather goods in the country. Vellore leather accounts for more than 37% of the country's export of leather and leather-related products. Vellore is also home to several manufacturing and automobile companies such as Bharat Heavy Electricals Limited, MRF Limited, TVS-Brakes India, Tamil Nadu Industrial Explosives Limited, Greaves Cotton, ArcelorMittal Dhamm Processing, SAME Deutz-Fahr (Italy), Mitsubishi Heavy Industries (Japan) and KRAMSKI (Germany).<br></p>
			<p>Vellore Fort, Government Museum, Science Park, Vainu Bappu Observatory, Amirthi Zoological Park, Religious places such as Jalakandeswarar Temple, Srilakshmi Golden Temple, Big Mosque and St. John's Church and Yelagiri Hill station are the among top tourist attractions in and around Vellore.</p>
		</article></section>
	</div>    
   <footer>
        <div class="footer-content">
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; VELLORE Diaries</p>
			<script src="clock.js"></script>
			<div id="txt" class="clock"></div>
         </div>
    </footer>
</div>
</body>
</html>