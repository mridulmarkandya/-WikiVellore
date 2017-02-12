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
	background-image: url('image/reaching.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>Reaching</title>
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
    	<h1><a href="#nogo">Reaching Vellore</a></h1>
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
		<h2>Transportation and Reaching </h2>
			<p>The Vellore municipality maintains 104.332 km (64.829 mi) of roads. It has 50.259 km (31.229 mi) concrete roads, 6.243 km (3.879 mi) kutcha roads and 47.88 km (29.75 mi) bituminous road. The National Highways passing through Vellore are NH 46 (Bangalore - Chennai road), NH 234 (Mangalore to Viluppuram) and NH 4 from Ranipet to Chennai and the Cuddalore-Chittoor. Vellore is connected with major cities in the states of Tamil Nadu, Andhra Pradesh and Karnataka. Bus service is available to Chennai, Coimbatore, Bangalore, Tirupathi, Salem, Chittoor, Hosur, Nagercoil, Cuddalore, Kurnool, Trichy, Thiruvannamalai, Viluppuram, Kanyakumari, Arani, Madurai, Tirunelveli, Kanchipuram, Kalpakkam, Pallikonda, Gudiyatham, Dharmapuri, Erode, Tirupur, Palakkad, Krishnagiri, Gingee and other major towns and cities in South India. Vellore is served by a city bus service, which connects the city, suburbs and other places of interest. The bus service extends about 30 km from the city center. There are two bus terminals: the Town Bus Terminus (opposite the fort and near CMC Hospital) and the Central Bus Terminus (Near Green Circle). Other bus terminals are located at Chittor Bus Stand (near VIT Road), Bagayam and Katpadi(Junction bus stop). The bus stands are maintained by the Vellore Municipal Corporation.</p>

<p>Vellore has three main railway stations: Katpadi junction, Vellore Cantonment and Vellore Town. The largest is Vellore-Katpadi Junction, 5 km north of CMC hospital. This is a major railway junction on the Chennai-Bangalore broad-gauge line running to Chennai, Bangalore, Tirupati and Trichy. There are direct rail links to Vijayawada Junction, Tirupati, Bhubaneswar, Nagpur, Bangalore, Bhopal Junction, Mumbai, Mangalore, Tiruchchirapalli, Bilaspur, Korba, Patna, Ernakulam, Trivandrum, Kanniyakumari, Shirdi, Kanpur, Gaya, Dhanbad, Jammu Tawi, Madurai, Bhilai, Gwalior, Chennai Central, Howrah Station, New Delhi Railway Station, Coimbatore, Guwahati, Thiruvananthapuram, Kozhikode, Jaipur and other major cities. More than 150 trains cross the Vellore-Katpadi Junction daily.</p>

<p>Vellore Cantonment is in Suriyakulam on the Viluppuram-Tirupati broad gauge line, 8 km from Katpadi Junction. EMU and passenger trains to Tirupati, Chennai and Arakonnam depart from here. The 150-km broad gauge line was extended to Villupuram in January 2010 and connects Vellore and South Tamil Nadu; however, as of October 2010 it was not serviced by passenger trains. The line was opened for goods trains in June 2010. An EMU from Vellore Cantonment to Chennai Central was introduced on December 22, 2008. Vellore Town Station is in Konavattam on the line connecting Katpadi Junction with Viluppuram Junction via Tiruvannamalai.</p>

<p>The city has an airstrip near Abdullapuram; as of 2010 it was not open to the public and was used for aeronautical training programmes. The nearest international airports are Chennai International Airport (130 km) and Bengaluru International Airport (230 km); the nearest domestic airport is Tirupati Airport (100 km).</p>
	<article></section>
		
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