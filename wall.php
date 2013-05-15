<!DOCTYPE html>
<html>
  <head>
    <title>LHC WALL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta >
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
	    <!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

			<link rel="stylesheet" href="pro.css">
		<link rel="stylesheet" href="style.css">
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
		</script>
		
		<script type="text/javascript" src="isotope.js"></script>
		
		<script type="text/javascript">
		
		$(document).ready(function(){
			var $container = $('#content');
			$container.isotope({
			filter: '*',
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
	   		}
			});

		$('#nav a').click(function(){
				var selector = $(this).attr('data-filter');
				$container.isotope({ 
				filter: selector,
				animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false,
			}
			});
  			return false;
		});

		});

		function hitcounter(id)	{
			$.post("update.php", { id: id } );
			//alert(id);
		}
	</script>


	</head>
	
	<body>
		<div id="content">
		<?php
			
		$DBUSER = "root";
		$DBPASS = "";
		$DBNAME = "smart";
		
		
		$conn = mysqli_connect('localhost', $DBUSER, $DBPASS, $DBNAME);
		
		if (mysqli_connect_errno())	{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}


		$result = mysqli_query($conn,"SELECT * FROM library ORDER BY hits DESC");

		while($row = mysqli_fetch_array($result))
		{
			echo '<div class="box cat1" id="'.$row['id'].'" onclick="hitcounter(this.id)">';
			echo '<div class="hits">'.$row['hits'].'</div>';
			echo '<div class="box-text">'.$row['text'].'</div>';
			echo '<div class="username">'.$row['user'].'</div>';
			echo '<div class="date">'.$row['dtime'].'</div>';
			echo '</div>';
		}
		
		?>
		</div>
	</body>
	<div  id="footer">
	<footer>
		<form class="form-horizontal" action="paste.php" method="POST" align="center">
		<div class="control-group">
		    <div class="controls">
		    	<textarea class="input-xlarge" rows="3" name="text" id="text"></textarea>
		    </div>
	  	</div>
		<div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn btn-primary">Paste</button>
		    </div>
		  	</div>
		</form>
	</footer>
</div>
</html>