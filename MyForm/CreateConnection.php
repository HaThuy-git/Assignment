<?php  
	$servername = "localhost";
	$port = "8889"; //MySQL port
	$username = "root"; //user name to login to MySQL
	$password = "root"; //password to login to MySQ
	$dbname = "GWCourses"; //name of the database in MySQL

	//connect to MySQL database
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	//test if connect sucessfully
	//echo "done";
?>