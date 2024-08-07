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
	$phone = $_REQUEST['Phone'];
        $first_name =  $_REQUEST['first_name'];
	    $password =  $_REQUEST['pass'];
        $sql = "INSERT INTO credentialsp (Ph,Name,Password) VALUES ('$phone','$first_name','$password')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo nl2br("\n$first_name\n $phone\n "
                . "$password");
            $id = $conn->insert_id;
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
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
                echo "File uploaded successfully";
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
