<?php
define('DB_HOST','localhost');
define('DB_NAME','wikivellore');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
function NewUser() {
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['uname'];
	$password = sha1($_POST['pw']);
	$mobile = $_POST['mn'];
	$landline = $_POST['ln'];
	$query = "INSERT INTO users (first_name,last_name,username,password,mobile_number,landline_number,email) VALUES ('$firstname','$lastname','$username','$password','$mobile','$landline','$email')";
	$data = mysql_query($query);
	if($data)
	{
		echo 'User Registered';
		session_start();
		$_SESSION["signin"]=1;
		$_SESSION['username']=$_POST['uname'];
		$_SESSION['firstname']=$_POST['fname'];
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='Home.php'\">");
	}
}
function SignUp()
{
	if(!empty($_POST['uname']))
	{
		$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[uname]'");
		$query2 = mysql_query("SELECT * FROM users WHERE email = '$_POST[email]'");
		if(empty($row = mysql_fetch_array($query)) && empty($row = mysql_fetch_array($query2)))
		{
			NewUser();
		}
		else if(!empty($row = mysql_fetch_array($query))) 
		{
			echo "Sorry, username already taken";
		}
		else if(!empty($row = mysql_fetch_array($query2)))
		{
			echo "Account for the email id already exists";
		}
	}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>