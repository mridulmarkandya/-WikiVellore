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
	background-size: 100% 100%;
	background-repeat: no-repeat
}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
}
.zoomin img { 
height: 150px; 
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
	<span class="user" style="color:white"><a href="login.html">Log In</a>/<a href="Signup.html">Sign Up</a></span>
    	<h1><a href="/">gallery</a></h1>
    </header>

    <nav>
    		<ul>
        		<li><a href="Home.html" style="text-decoration: none">Home</a></li>
				<li><a href="history.html" style="text-decoration: none">History</a></li>
				<li><a href="G&C.html" style="text-decoration: none">Geography and Climate</a></li>
				<li>Education</li>
				<li><a href="tourism.html" style="text-decoration: none">Tourism</a></li>
				<li><a href="Reaching.html" style="text-decoration: none">Transport and Reaching Vellore</a></li>
				<li><a href="Review.html" style="text-decoration: none">Review</a></li>
        	</ul>
	
    </nav>

    <div id="body">
		<section id="content" class="gallery">
		<article>
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
			
		</article></section>
		
		 
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