<!DOCTYPE html>
<html>
<head>
	<title> student from</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<h2> Student  Admission Form</h2>
		<form action="process.php" method="POST">
			<table>
				<tr>
					<td>Frist Name :</td>
					<td><input type="text" name="fname" placeholder="Frist Name" required></td>
					<td>Last Name :</td>
					<td><input type="text" name="lname" placeholder="Last Name" required></td>
				</tr>
				<tr>
					<td>Gender :</td>
					<td><input type="radio" name="gender" value="Male"><span> Male</span>
						<input type="radio" name="gender" value="Female"><span>Female</span>
					</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="Email" name="email" placeholder="Email addrress"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Cencel">
					</td>
				</tr>
			</table>
			
		</form>
		
	</div>
</body>
</html>