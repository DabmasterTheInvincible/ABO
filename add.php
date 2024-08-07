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
        
        $ID =  $_REQUEST['id'];
	$password =  $_REQUEST['pass'];
    $ph=$_REQUEST['ph'];
    $pat=$_REQUEST['pat'];
        $sql = "INSERT INTO credentialsh VALUES ('$ID','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$ID\n "
                . "$password");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    </center>
</body>
 </html>
