<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Signin Template for Bootstrap</title>
    <link href="../../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../Bootstrap/js/ie-emulation-modes-warning.js"></script>
  </head>

<body>
	<div class="container">
	<div class="xs-col-12 lg-col-12">
		<h1>A3:Session Passphrase</h1>
	</div>
	 <form class="form-signin" action="page.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
		
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passw" id="inputPassword" class="form-control" placeholder="Password" required>
        </br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->
 <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Naomi Watabe-Taylor 2015</p>
        </div>
    </footer>

</body>
</html>
	