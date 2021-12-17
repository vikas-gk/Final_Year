<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rf_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"]))
{
    $select_data=$_POST["select_data"];

    #$sql = "INSERT INTO select_data (data, time) VALUES ('$select_data',NOW())";
	$sql="UPDATE master_table SET Kit_Logout = NOW() WHERE Kit_Name='$select_data'";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
	 }
	 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout Form</title>    
	<link rel="stylesheet" href="select-css.css">
	<link rel="stylesheet" href="demo.css">

</head>

<body>	
	<div>
		<form class="container" method="post" >
		   <h1 style="color:rgba(249, 247, 253, 0.973);">Logout</h1>
			<div style="width:25%; min-width:20em;">
			<label>Select your Kit Name</label>
			<select class="select-css" name="select_data">
				<option>A</option>
				<option>B</option>
				<option>C</option>
				<option>D</option>
				<option>E</option>
				<option>F</option>
				<option>G</option>
				<option>H</option>
				<option selected>-- Please choose an option --</option>
			</select>
			<button type="submit" name="submit" class="btn Submit btn-block" value="Logout">Logout</button>
		</form>
		<a href="index.php" class="button">Log In</a>
	</div>
</div>

</body>
</html>
