<?php
$id = $_GET['delid'];

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "edge-1";

$conn = new mysqli($server_name, $user_name, $password, $database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM instractor WHERE id=$id";
$result=$conn->query($sql);
if ($result) {
    header("Location:index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


exit();
?>
