<!DOCTYPE html>
<html>
<head>
<title>Insert Page page</title>
</head>
<body>
<center>
<?php
$conn = mysqli_connect("localhost", "root", "", "patient");
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
$name = $_REQUEST['organization'];
$contact =  $_REQUEST['contact'];
$email =  $_REQUEST['email'];
$phno =  $_REQUEST['phone'];
$location =  $_REQUEST['location'];
$password =  $_REQUEST['password'];
$sql = "INSERT INTO credentialsa (OrganizationName,ContactPerson,EmailAddress,PhoneNo,Location,Password) VALUES ('$name','$contact','$email','$phno','$location','$password')";
if(mysqli_query($conn, $sql)){
    header('Location: signIn.php');
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>
</center>
</body>
</html>