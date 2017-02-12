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
	background-image: url('image/locked.jpg');
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
    	<h1><a href="#nogo">Signup</a></h1>
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
		<section id="content" class="three-column"><article >
		
		<form name="registration" onSubmit="return formValidation();" action="register.php" method="POST"><pre>
		<h2>Create an account</h2>
		<h5>* Indicates required field<br><br></h5>
		
		
<font size=5>		
<input class="registration" name="fname" type="text" pattern="[A-Za-z]{1,25}" required title="Should be an alphabetical string of maximum 25 characters" value placeholder= "First Name*" style="margin: 0px; width: 240px; height: auto;">   <input class="registration" name="lname" type="text" pattern="[A-Za-z]{1,25}" required title="Should be an alphabetical string of maximum 25 characters" value placeholder= "Last Name*" style="margin: 0px; width: 240px; height: auto;">

<input class="registration" name="email" pattern="[A-Za-z0-9.!@#%&*-_+=:;'/?<>]{1,}[@]{1}[a-z]{1,}[.]{1}[a-z.]{1,}" required title="Invalid email" type="text" value placeholder="Email ID*" style="margin: 0px; width: 525px; height: auto;">

<input class="registration" name="uname" pattern="[A-Za-z0-9]{5,25}" required title="Must be an alphanumeric string of 5-25 characters" type="text" value placeholder= "Username*" name="user" style="margin: 0px; width: 525px; height: auto;">

<input class="registration" name="pw" type="password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{5,15}" required title="Invalid Password, password must contain 5 to 15 characters which contain at least one numeric digit and a special character" value placeholder="Password*" style="margin: 0px; width: 525px; height: auto;">

<input class="registration" name="rpw" type="password" value placeholder= "Re-Enter Password*" style="margin: 0px; width: 525px; height: auto;">

Contact Details 

<input class="registration" name="mn" type="text" pattern="[0-9]{10}" required title="Mobile number must be a numeric string of 10 digits" value placeholder= "Mobile Number*" style="margin: 0px; width: 240px; height: auto;">   <input class="registration" name="ln" pattern="[0-9]{4}[-]{1}[0-9]{7}" title="Enter valid phone number(XXXX-XXXXXXX)" type="text" value placeholder= "Landline Number" style="margin: 0px; width: 240px; height: auto;">

		   <input name="submit" type="submit" class="button" id="submit" value="Sign Up" style="align: center;" />
		</font></pre></form>
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