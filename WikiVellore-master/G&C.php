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
	background-image: url('image/gandc.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>G&C</title>
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
    	<h1><a href="#nogo">Geography and Climate</a></h1>
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
		<h2>Geography & Climate</h2>
			<p>Vellore is at 12.92<sup>o</sup>N 79.13<sup>o</sup>E, 220m above the mean sea level. The city has a semi-arid climate with high temperatures throughout the year and relatively low rainfall. It is in Vellore district of the South Indian state, Tamil Nadu, 135 km (84 mi) west of the state capital Chennai. Vellore lies in the Eastern Ghats region and Palar river basin. The topography is almost plain with slopes from west to east. There are no notable mineral resources. Black loam soil is found in parts of Vellore Taluk. The other type of soil in the city is chiefly gravelly, stony and sandy of the red variety.</p>

<p>Vellore experiences hot and dry weather throughout the year. The temperature ranges from a maximum of 43.5<sup>o</sup>C (110.3<sup>o</sup>F) to a minimum of 18.4<sup>o</sup>C (65.1<sup>o</sup>F). Like the rest of the state, April to June are the hottest months and December to January are the coldest. Vellore receives 996.7 mm (39.24 in) of rainfall every year. The southwest monsoon, with an onset in June and lasting up to August, brings scanty rainfall. The bulk of the rainfall is received during the northeast monsoon in October, November and December. The humidity ranges from 40%-63% during summer and 67%-86% during winter.</p>
<br>
<table border="2" align="center" style="margin:auto; width:100%; border-collapse: collapse;">
	<h4 align="center">Climate data for Vellore</h4>
	<tr style="background:grey">
		<th>Month</th>
		<td>Jan</td>
		<td>Feb</td>
		<td>Mar</td>
		<td>Apr</td>
		<td>May</td>
		<td>Jun</td>
		<td>July</td>
		<td>Aug</td>
		<td>Sep</td>
		<td>Oct</td>
		<td>Nov</td>
		<td>Dec</td>
	</tr>
	<tr>
		<th style="background:#FF4422">Record High </th>
		<td>35.3</td>
		<td>39.8</td>
		<td>42.8</td>
		<td>44.4</td>
		<td>5.0</td>
		<td>44.3</td>
		<td>40.9</td>
		<td>39.4</td>
		<td>39.6</td>
		<td>39.2</td>
		<td>35.8</td>
		<td>35.0</td>
	</tr>
	<tr>
		<th style="background:#1818FF">Record Low</th>
		<td>10.2</td>
		<td>12.0</td>
		<td>12.1</td>
		<td>13.8</td>
		<td>18.1</td>
		<td>19.6</td>
		<td>18.8</td>
		<td>18.7</td>
		<td>18.7</td>
		<td>15.6</td>
		<td>12.1</td>
		<td>11.0</td>
	</tr>
	<tr>
		<th style="background-color:#FFFFBB">Average Perciptation</th>
		<td>9.0</td>
		<td>7.1</td>
		<td>5.9</td>
		<td>21.8</td>
		<td>83.9</td>
		<td>71.2</td>
		<td>117.0</td>
		<td>124.9</td>
		<td>149.6</td>
		<td>176.9</td>
		<td>155.2</td>
		<td>78.6</td>
	</tr>
</table>	
		<article></section>
			<aside class="sidebar small-sidebar right-sidebar">
				
		<div class="clear"></div>
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