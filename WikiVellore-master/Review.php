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
	background-image: url('image/review.jpg');
	background-position: center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
<title>VELLORE</title>
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
			?>
		<h1><a href="#nogo">review</a></h1>
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
	<script src="reviewValidate.js"></script>
    <div id="body">
		
		<section id="content" class="three-column"><article>
		<?php 
			if(isset($_SESSION["signin"]))
			{
				echo"<h3>Please Give Your Review</h3>
			<form id='addCommentForm' method='POST' action='submitReview.php' name='commentForm' onSubmit='return validateComment()'>
				<textarea style='margin: 0px; width: 360px; height: 60px;' name='comment'></textarea><br><pre>
				<br></pre>
				<input name='submit' type='submit' class='button' id='submit' value='SUBMIT' onclick='if(validateComment()) { window.alert('Registration Successful') };'/>";
				define('DB_HOST','localhost');
				define('DB_NAME','wikivellore');
				define('DB_USER','root');
				define('DB_PASSWORD','');
				$con=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
				$reviews = $con->query("SELECT review,username,date FROM review");	//Display the existing review
				if($reviews->num_rows > 0){
					while($row = $reviews->fetch_assoc()){
						echo '<br><br><br>Name: ' . $row["username"]. '<br>Review: ' . $row["review"]. '<br>Added on: ' . $row["date"]. '<br>';
					}
				}
				else {
					echo '<br><br><br>No reviews';
				}
				$con->close();
			}
			else
			{
				echo"<h3><a href='login.html'>Login</a> or <a href='Signup.php'>Sign up</a> to give review.</h3>";
			}
		?>
		
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