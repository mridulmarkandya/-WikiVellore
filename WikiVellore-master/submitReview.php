<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','wikivellore');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysql_select_db(DB_NAME,$con);
function submit() {
	$review = $_POST['comment'];
	$user = $_SESSION['username'];
	date_default_timezone_set("Asia/Kolkata");
	$dt = date("d/m/Y h:i:sa");
	$query = "INSERT INTO review (review,username,date) VALUES ('$review','$user','$dt')";
	$data = mysql_query($query);
	if($data)
	{
		echo 'Review submitted';
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='Review.php'\">");
	}
}

if(isset($_POST['submit']))
{
	submit();
}
?>