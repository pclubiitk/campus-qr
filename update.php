<?php
	session_start();
	$DBUSER = "root";
	$DBPASS = "";
	$DBNAME = "smart";
	
	$conn = mysqli_connect('localhost', $DBUSER, $DBPASS, $DBNAME);
	
	if (mysqli_connect_errno())	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$username = $_SESSION['Username'];
	$id = $_POST['id'];
	
	$res = mysqli_query($conn,"SELECT * FROM tag WHERE id='$id'");	

	if($row = mysqli_fetch_array($res))
	{
		echo "You have already liked this."
		header("wall.php"); /* Redirect browser */
		mysqli_close($conn);
		exit();
	}
	$result = mysqli_query($conn,"SELECT * FROM library WHERE id='$id'");
	$row = mysqli_fetch_array($result);
	$hits = $row['hits'];
	$hits = $hits + 1;
	mysqli_query($conn,"UPDATE library SET hits='$hits' WHERE id='$id'");
	mysqli_query($conn,"INSERT INTO tag (id, tag) VALUES ($id, $username)");

	mysqli_close($conn);
?>