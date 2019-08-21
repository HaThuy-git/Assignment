<!DOCTYPE html>
<html>
<head>
	<title>Register your course!</title>
</head>
<body>
	<h1>Register your course</h1>
	<form action ="DoRegister.php" method="post">
		<table width="50%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtName"></td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<select name="Course">
						<option value="C#">C#</option>
						<option value="Java">Java</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Nam
					<input type="radio" name="gender" value="Female">Nu
				</td>
			</tr>
			<tr>
				<td>Date of birth</td>
				<td><input type="date" name="dob"/></td>
			</tr>
			<tr>
				<td>Favorites</td>
				<td>
					<input type="checkbox" name="book" value="book">Books
					<input type="checkbox" name="car" value="car">Cars

				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Register"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>