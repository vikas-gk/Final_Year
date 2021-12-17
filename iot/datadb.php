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

// $query = "INSERT INTO `time` (`now`) VALUES (NOW())";
if(isset($_POST["submit"]))
{
    $select_data=$_POST["select_data"];
    $sql = "INSERT INTO select_data (data, time) VALUES ('$select_data',NOW())";
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
		<a href="htdocs/datasensor/index.php" class="button">Log-In</a>
	</div>
</div>

	<!-- <div>
		<marquee class="cssmarquee" getran behavior="scroll" direction="left" height="50%"  scrollamount="17" style="margin-top:550px">Sahyadri College of Engineering and Management, Mangalore</marquee>  
	</div>
	 -->

</body>
</html>
