<?php
$conn = mysqli_connect("localhost", "root", "", "patient");
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
$name=$_REQUEST['name'];
$phone=$_REQUEST['ph'];
$sql = " SELECT * FROM credentialsp WHERE Name='$name' AND Ph='$phone'";
$result=mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}
		body
		{
			background-image:url('pl1.jpg');
			background-repeat:no-repeat;
			background-size:cover;
			color:white;
		}
		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php 
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<td>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<tr><th>Name</th><td><?php echo $rows['Name'];?></td></tr>
				<tr><th>Age</th><td><?php echo $rows['Age'];?></td></tr>
				<tr><th>Blood Group</th><td><?php echo $rows['BloodGroup'];?></td></tr>
				<tr><th>Gender</th><td><?php echo $rows['Sex'];?></td></tr>
                <tr><th>Phone No.</th><td><?php echo $rows['Ph'];?></td></tr>
                <tr><th>Address</th><td><?php echo $rows['Address'];?></td></tr>
                <tr><th>Email Address</th><td><?php echo $rows['EmailAddress'];?></td></tr>
                <tr><th>Guardian Name</th><td><?php echo $rows['GuardianName'];?></td></tr>
                <tr><th>Guardian Age</th><td><?php echo $rows['GuardianAge'];?></td></tr>
                <tr><th>Guardian Phone No.</th><td><?php echo $rows['PhoneNumber'];?></td></tr>
			</td>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
