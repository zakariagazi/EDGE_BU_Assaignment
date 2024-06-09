<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database_name="edge-1";

$conn= new mysqli($server_name,$user_name,$password,$database_name);

if($conn->connect_error){
    die("Connection fail".$conn->connect_error);
}

$sql = "SELECT * FROM instractor";
$result = $conn->query($sql);


$conn->close();
?>


<html>
	<head>
		<title>data</title>
		<link rel="stylesheet" href="style.css">
		<style>
			span a{
					text-decoration: none;
					text-align: center;
					background-color: #04AA6D;
					color: white;
					padding: 8px 12px;
					border-radius: 5px;
}
.align_button{
	margin-left: 45%;
}
		</style>
	</head>
	<body>
		<h1 align="center">Instractor List</h1>
		<table>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Designation</th>
				<th>Salary</th>
				<th>joining_date</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{ 
				$id=$row["id"];
				echo "<tr>";
					echo "<td>". $row["name"]."</td>";
					echo "<td>". $row["phone"]."</td>";
					echo "<td>". $row["email"]."</td>";
					echo "<td>". $row["designation"]."</td>";
					echo "<td>". $row["salary"]."</td>";
					echo "<td>". $row["joining_date"]."</td>";
					echo "<td>"."<a href='update.php?editid=$id'>Edit</a>"."</td>";
					echo "<td>"."<a href='delete.php?delid=$id'>Delete</a>"."</td>";
					echo "</tr>";
			}
		}
		else echo "0 results";
		?>
			
		</table>
		<span class="align_button">
		<a href="form.php">Add New Instractor</a>
		</span>
	</body>
</html>

