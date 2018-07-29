<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/admin-style.css">    
  </head>

  <body>
	<form action="admin-proses.php" method="POST">
		<div class="wrap">
			<div class="avatar">
			<img src="images/secure.png">
			</div>
			<input type="text" name="text_user" placeholder="username" required>
			<div class="bar">
				<i></i>
			</div>
			<input type="password" name="text_pass" placeholder="password" required>
			<a href="" class="forgot_link">forgot ?</a>
			<button>Sign in</button>
		</div>
		<script src="js/admin-index.js"></script>
	</form>
  </body>
</html>
