<?php

$conn = mysqli_connect("localhost", "root", "", "patient");
if($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$sql = "SELECT ID FROM credentialsp WHERE Name='$name' AND Ph='$phone'";
$result = mysqli_query($conn, $sql);
if($result && mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_assoc($result);
    $patient_id = $row['ID'];
    $sql_file = "SELECT Name FROM prevhist WHERE ID='$patient_id'";
    $result_file = mysqli_query($conn, $sql_file);

    if($result_file && mysqli_num_rows($result_file) > 0) {
        $row_file = mysqli_fetch_assoc($result_file);
        $filename = $row_file['Name'];
        $filepath = 'uploads/' . $filename;
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            readfile($filepath);
            exit;
        } else {
            echo "File not found";
        }
    } else {
        echo "No file found for this patient";
    }
} else {
    echo "Patient not found";
}
mysqli_close($conn);
?>
