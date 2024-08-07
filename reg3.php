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
$name = $_REQUEST['Name'];
$phno =  $_REQUEST['phoneNumber'];
$phoneg = $_REQUEST['phoneNumberg'];
$gname =  $_REQUEST['GName'];
$ageg =  $_REQUEST['ageG'];
$age = $_REQUEST['age'];
$blood =  $_REQUEST['bloodGroup'];
$gender = $_REQUEST['gender'];
$address =  $_REQUEST['address'];
$password =  $_REQUEST['password'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO credentialsp (Ph,Name,Password,EmailAddress,Age,BloodGroup,Sex,Address,GuardianName,GuardianAge,PhoneNumber) VALUES ('$phno','$name','$password','$email',$age,'$blood','$gender','$address','$gname',$ageg,'$phoneg')";
if(!mysqli_query($conn, $sql)){
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
    }
$id = $conn->insert_id;
if(isset($_POST['sub']))
{
$filename=$_FILES['f']['name'];
$destination='uploads/'.$filename;
$extension=pathinfo($filename,PATHINFO_EXTENSION);
$file=$_FILES['f']['tmp_name'];
$size=$_FILES['f']['size'];
if(!in_array($extension,['pdf']))
{
echo "Your file extension must be .pdf";
}
elseif($_FILES['f']['size']>4000000)
{
echo "File too large";
}
else
{if(move_uploaded_file($file,$destination))
{
$sql="INSERT INTO prevhist(ID,Name,Size,Downloads) VALUES($id,'$filename',$size,0)";
if(mysqli_query($conn, $sql))
{
header('Location: signIn.php');
}
}
else
{
echo "Failed to upload file.";
}
}

}
mysqli_close($conn);
?>
</center>
</body>
</html>