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
  <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <form class="form-horizontal" action="ftp_login.php" method="POST">
      <div class="control-group">
        <label class="control-label" for="inputUser">Username</label>
        <div class="controls">
          <input type="text" name="Username" id="Username" placeholder="Username">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" name="Password" id="Password" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
            <input type="checkbox"> Remember me
          </label>
          <button type="submit" class="btn btn-success">Sign in</button>
        </div>
      </div>
  </form>


  </body>
</html>

