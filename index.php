<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<title>LHC WALL</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="sample.css">
</head>
<body id="big_wrapper">
<header id="top">
	<img id="top_logo"src="logo.png"> 

	<?php
		session_start();
		if(isset($_SESSION["Username"]))
			echo '<div id="go_wall" onclick="location.href="ftp_logout.php";">logout</div>';
		else
			echo '<div id="go_wall" onclick="location.href="login.php";">login</div>';
	?>

<div id="logo">
</div>
</header>
<div id="sub_wrapper">
<div id="text">
<h1>P.K.Kelkar library</h1>
<p>This is the place where students discover and pursue their love for academics. Who knows how many stories these walls of the library hide? Sure it has seen many relationships develop here! Share what you know and what you did when you were here! Post your favourite memory of this place!</p>
</div> 
<div id="pic"> </div>

<div id="textarea">
<div id="go_wall" onclick="location.href='wall.php';">Check out the wall!</div>
</div>
<div id="comments">

<?php
	
	$DBUSER = "root";
	$DBPASS = "";
	$DBNAME = "smart";
	
	
	$conn = mysqli_connect('localhost', $DBUSER, $DBPASS, $DBNAME);
	
	if (mysqli_connect_errno())	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	$result = mysqli_query($conn,"SELECT * FROM library ORDER BY hits DESC");

	$counter = 0;
	while($row = mysqli_fetch_array($result))
	{
		if($counter < 2){
			echo '<h3 id="1st comment">'.$row['text'].'</h3>';
			echo '<p id="names"><em>'.$row['user'].'</em></p>';
			$counter = $counter + 1;
		}
	}

?>

</div>


</body>

</html>


<!--
	echo '<h3 id="1st comment">'.$row['text'].'</h3>';
		echo '<p id="names"><em>'.$row['user'].'</em></p>';
	
	-->