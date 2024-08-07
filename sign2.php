<?php
$conn = mysqli_connect("localhost", "root", "", "patient");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['Email'];
$password = $_POST['password'];
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$sql = "SELECT * FROM credentialsh WHERE EmailAddress='$username' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    header("Location: hospitals.php");
} else {
echo "Invalid username or password";
}
}
mysqli_close($conn);
?>