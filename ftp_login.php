<!DOCTYPE html>
<html>
  <head>
    <title>Smart Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>   
<?php          
	session_start();
	$ftp_server = "webhome.cc.iitk.ac.in";
	$ftp_user = $_POST['Username'];
	$ftp_pass = $_POST['Password'];

	$_SESSION['Username']=$ftp_user;
	$_SESSION['Password']=$ftp_pass;
	// set up a connection or die
	$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 

	// try to login
	if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {
		$_SESSION['view']=11;
	    include 'index.php';
	} 
	else {
	    echo "Your Username & Password isn't a valid combination to take to the Wall";
		ftp_close($conn_id);  
	}
	
?>
</html>

