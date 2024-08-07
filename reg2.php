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
$name = $_REQUEST['hospitalName'];
$email =  $_REQUEST['email'];
$phno =  $_REQUEST['phoneNumber'];
$password =  $_REQUEST['password'];
$openHours = $_REQUEST['openHours'];
$add =  $_REQUEST['address'];
$em =  $_REQUEST['emergencyResponseTime'];
$beds =  $_REQUEST['bedsAvailable'];
$blood =  $_REQUEST['bloodBank'];
$organ =  $_REQUEST['organBank'];
$sql = "INSERT INTO credentialsh (Password,HospitalName,PhoneNo,EmailAddress,Address,NoofBeds,EmergencyResponseTime, BloodBankPresence,OrganBankPresence, OpenHours) VALUES ('$password','$name','$phno','$email','$add',$beds,$em,'$blood','$organ','$openHours')";
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