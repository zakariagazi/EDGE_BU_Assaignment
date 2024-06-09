<?php 

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$join=$_POST['joining_date'];


$server_name="localhost";
$user_name="root";
$password="";
$database_name="edge-1";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

// else{
//     echo "Connected Successfully";
// }


$sq="INSERT INTO instractor( id, name, phone, email, designation, salary, joining_date) 
VALUES ( NULL, '$name', '$phone', '$email', '$designation', '$salary', '$join')";

$result=$conn->query($sq);

if($result){

    header('location:index.php');
}
else{
    echo "Data not inserted";
}


$conn->close();

?>