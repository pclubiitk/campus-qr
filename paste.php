<?php
	session_start();
	if($_SESSION["view"]==11)
	{
		$DBUSER = "root";
		$DBPASS = "";
		$DBNAME = "smart";
		$string = $_POST['text'];
		
		$conn = mysqli_connect('localhost', $DBUSER, $DBPASS, $DBNAME);
		
		if (mysqli_connect_errno())	{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//$db=new PDO("mysql:host=localhost;dbname=$DBNAME", $DBUSER, $DBPASS);
		
		$usern = $_SESSION["Username"];
		$today = date("Y-m-d H:i:s");
		
		mysqli_query($conn,"INSERT INTO library (text,dtime,user,hits) VALUES ('$string', '$today', '$usern', 0)");
		include 'wall.php';
	}
	else{
		echo "Please Login to post to the wall";
		include 'index.php';
	}
	//echo "<p align='center'><b>pasted on ur wall</b></p>";
?>