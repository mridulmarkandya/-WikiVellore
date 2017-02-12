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
	background-image: url('image/edu.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>Education</title>
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
		
    	<h1><a href="#nogo">Education</a></h1>
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
		
		<section id="content" class="three-column"><article >
		<h2>Education in Vellore</h2>	<br>
		<p>Vellore is considered a prominent destination for medical and technological education in India.	It has a state-government university, a private technological university, one government and one private medical school and several engineering and arts and science colleges.
</p>
<p>
The country's first stem-cell translational research centre was established in Vellore in December 2005. The central government's biotechnology department selected the Christian Medical College (CMC) as the first in a series of centers, since it already had world-class clinical hematology and biochemistry departments. The college has made a breakthrough which attracted the attention of the country's medical and scientific community: the Centre for Stem Cell Research at the Christian Medical College succeeded in reprogramming cells from adult mice to make them function like stem cells found in the human embryo. The agricultural research station at Virinjipuram is in the Northeastern Zone of Tamil Nadu. It is one of 32 research stations of Tamil Nadu Agricultural University (TNAU). The Government of India-sponsored National Watershed Development Project for Rainfed Areas (NWDPRA) scheme has been in operation since October 1997, with the main objective being trials of conservation measures conducted in water and soil of 18 watersheds in the Vellore and Tiruvannamalai districts.
</p>
<p>
Thiruvalluvar University was split off from the University of Madras, previously in the Vellore Fort campus. Nearly all the government-run arts and science colleges in Vellore, Tiruvannamalai, Villupuram and Cuddalore districts are affiliated with Thiruvalluvar University. Thanthai Periyar Government Institute of Technology is the only government engineering college in Vellore. 
</p>
<p>
The Vellore Institute of Technology (VIT) has been ranked best private engineering university in India by the magazine India Today.VIT University or VIT, formerly called Vellore Engineering College, is an Indian institute of higher education and a deemed university under Section 3 of the UGC Act. Founded in 1984, as Vellore Engineering College, by Mr. G. Viswanathan, the institution offers 20 undergraduate, 34 postgraduate, four integrated and four research programs. It has campuses both at Vellore and Chennai, Tamil Nadu, India. VIT has ranked as one of best Universities in India.VIT was founded as Vellore Engineering College in July 1984 by Dr. G Viswanathan, a former parliamentarian and minister in the government of Tamil Nadu, with three undergraduate engineering courses in Civil, Mechanical, and Electronics & Communication.
<br>
The college was affiliated with Madras University. In 1999 Vellore Engineering College was awarded the ISO 9002 certificate for three years by Det Norske Veritas (DNV) of the Netherlands, making VEC the first educational institute in India to achieve this recognition. In June 2001 the Union Ministry of Human Resource Development conferred VEC as a deemed university and the college became VIT University.
<br>
website-link : <a href="www.vit.ac.in">www.vit.ac.in</a>

</p>
<p>
Christian Medical College & Hospital (CMCH), one of the largest hospitals in India and Asia, is based out of Vellore. It is a major health care provider for the surrounding districts.Christian Medical College and Hospital, Vellore (CMC Vellore) is an educational and research institute and a tertiary care hospital located at Vellore, Tamil Nadu, India. It is one of the prominent and well known medical destinations in India, having reputations nationally and internationally. It is also one of the top-ranked medical colleges in India. Founded in 1900 by an American missionary, Dr Ida S. Scudder, the institute has made significant achievements in the past like starting the first college of nursing in India (1978), performing the first reconstructive surgery for leprosy in the World (1948), performing the first successful open heart surgery in India (1961), performing the first kidney transplant in India (1971), performing first bone marrow transplantation (1986) in India and performing the first successful ABO incompatible kidney transplant in India (2009).
<br>
The hospital was founded by Ida Sophia Scudder in 1900. Ida Scudder was the daughter of an American missionary couple who were living in India. She was born in 1870 in Tindivanam, which was about 60 miles from the then Madras. As a young girl, she was not interested in pursuing her parents' footsteps into missionary works. The Scudder family went back to the United States of America (USA) in 1878 and then returned to India after a few years. But Ida Scudder had stayed in the USA. In 1890, she had to return to India to take care of her ailing mother.<br>
web-site : <a href="www.cmch-vellore.edu/">www.cmch-vellore.edu/</a>
</p>

		</pre></form>
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