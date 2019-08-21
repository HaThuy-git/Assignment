<!DOCTYPE html>
<html>
<head>
	<title>Thank you</title>
</head>
<body>
	<h1>Thank you for registering the course</h1>
	<?php 
		include "CreateConnection.php";
	 	$name = $_POST["txtName"];
	 	$course = $_POST["Course"];
	 	$gender = $_POST["gender"];
	 	$dob = $_POST["dob"];

	 	$fav_book =$_POST["book"];
		$fav_car = $_POST["car"];
		$fav = $fav_book . "," . $fav_car;

		$stmt =  $conn->prepare("INSERT INTO RegisterCourse(studentname, course, dob,gender,fav) VALUES (?,?,?,?,?)");
		$stmt->bind_param("sssss",$name,$course,$dob,
						$gender,$fav);
		$stmt->execute();
		$conn->close();
	?>
	<h3>Here is your information</h3>
	<ul>
		<li><?php echo $name;  ?></li>
		<li><?php echo $course  ?></li>
		<li><?php echo $fav  ?></li>
		<li><?php echo $dob  ?></li>
	</ul>
</body>
</html>