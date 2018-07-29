<html>
	<head>
		<title>Mooroodool A Ecommerce Category Flat Bootstarp Responsive Website Template | Account :: w3layouts</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Mooroodool Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
	</head>
	<body class="register-success">
		<div class="reg-suc-cont customized_col">
			<img src="images/reg-success.png">
			<div>
				<h3>USER ID ANDA: </h3>
			</div>
			<div>
				<?php
					if (isset($_GET['new_id'])){
						$new_id = $_GET['new_id'];
						$new_id = strtoupper($new_id);
						echo "<h3 id=\"reg-suc-id\">$new_id</h3>";
					}
				?>
			</div>
			<div>
				<p>
					* Catat Nomor ID anda untuk bisa LOGIN.
				</p>
			</div>
			<div class="reg-suc-btn">
				<a href="index.php?page=home"><h3>HOME</h3></a>
			</div>
			<div class="reg-suc-btn">
				<a href="index.php?page=login"><h3>LOGIN</h3></a>
			</div>
		</div>
			<div class="footer-register">
					 <p class="footer-grid">Copyright &copy; <?php echo date('Y');?> Akema</p>
			</div>
	</body>
</html>