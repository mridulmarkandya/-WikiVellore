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
	background-image: url('image/tt.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>Tourism</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
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
    	<h1><a href="#nogo">Tourism</a></h1>
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
		<h2>Tourism</h2>
			<p>Vellore Fort is the most prominent landmark in the city. During British rule, Tipu Sultan's family and the last king of Sri Lanka, Vikrama Rajasinha, were held as royal prisoners in the fort. The fort houses a church, a mosque and a Hindu temple, the latter known for its carvings. The first rebellion against British rule erupted at this fort in 1806, and it witnessed the massacre of the Vijayanagara royal family of Emperor Sriranga Raya. The fortifications consist of a main rampart, broken at irregular intervals by round towers and rectangular projections. The main walls are built of massive granite stones, surrounded by a broad moat fed with water by subterranean pipes from the Suryagunta reservoir.
<br>
Within the fort is the similarly aged Jalakanteswara Temple. It is a noteworthy example of military architecture in South India. The fort houses the Tipu Mahal where Tipu Sultan is believed to have stayed with his family during the war with the British; the graves of Tipu's sons are found at Vellore. It is administered by the Archaeological Survey of India. Vellore Fort has been declared a Monument of National Importance and is a noted tourist attraction.
</p>

<p>Jalakandeswarar Temple, Srilakshmi Golden Temple, and the Wallajapet Dhanvantri Temple and Ponnai Navagraha Kottai Temple are among the temples in Vellore. Sri Lakshmi Temple, popularly known as Golden Temple, is a newly built temple and spiritual park in Thirumalaikodi, Vellore. It is approximately 8 km from the Vellore bus terminus. The temple covers an area of 100 acres and has been constructed by Vellore-based Sri Narayani Peedam headed by Sakthi Amma. It has intricate carvings, hand-made by hundreds of gold artisans specializing in temple architecture. The exterior is laid with gold sheets and plates, with construction reported to have cost Rs.300 crores (US$65 million). About 1,500 kg of gold was used, the largest amount in the world.

<p>
Ratnagiri Murugan Temple is another prominent Hindu temple in the city. Assumption Cathedral and the 150-year-old St. John's Church inside the fort are among the churches in Vellore. The Big Mosque, in the heart of the city, contains the largest Arabic college in India. The city is also houses over 50 mosques some of which are over 100 years old.</p>
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