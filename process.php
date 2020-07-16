<?php
$email = filter_input(INPUT_POST, 'email');
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "Midsummer16";
$dbname = "signup";
// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users(email)
values ('$email')";
if ($conn->query($sql)){
echo "Email successfully subscribed";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Email should not be empty";
die();
}
?>




