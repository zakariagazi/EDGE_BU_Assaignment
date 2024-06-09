<?php
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$join=$_POST['joining_date'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "edge-1";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE instractor SET name='$name', phone='$phone', email='$email', designation='$designation',salary='$salary',joining_date='$join' WHERE id=$id";
$result=$conn->query($sql);

if ($result) {
    header("Location:index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


exit();
?>
