<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include_once 'config.php';
	include_once 'cart.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mooroodool A Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
	<!--//fonts-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
							});
						});
						</script>
					<link rel="stylesheet" href="css/etalage.css">

			<script src="js/jquery.etalage.min.js"></script>
		<script>
				jQuery(document).ready(function($){

					$('#etalage').etalage({
						thumb_image_width: 300,
						thumb_image_height: 309,
						source_image_width: 800,
						source_image_height: 1000,
						show_hint: true,
						click_callback: function(image_anchor, instance_id){
							alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
						}
					});
				});
		</script>
		<script>
			$(document).ready(function(){
				$('.cont-include').hide().fadeIn(2000);
			});
	</script>
	<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d",
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
		<!---->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" ></a>
				</div>
		<div class="header-right">
			<div class="header-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li <?php if(empty($_GET['page']) || $_GET['page'] == 'home'){echo "class=\"active\"";}?>><a href="index.php?page=home">HOME</a> </li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'product'){echo "class=\"active\"";}?>><a href="index.php?page=product" >GALERY</a></li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'register'){echo "class=\"active\"";}?>><a href="index.php?page=register">REGISTER</a></li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'login'){echo "class=\"active\"";}?>>
							<?php
								include_once 'logout-modal.php';
								if (empty($_SESSION['id_customer'])){
									$modal = "acount.php";
									$ref = "index.php?page=login";
								}else{
									$modal = "data-toggle=\"modal\" data-target=\"#logoutModal\"";
									$ref = "#";
								}
							?>
							<a href="<?php echo $ref;?>"  <?php echo "$modal";?>>LOGIN</a>
						</li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'cara_beli'){echo "class=\"active\"";}?>><a href="index.php?page=cara_beli">CARA BELI</a></li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo "class=\"active\"";}?>><a href="index.php?page=contact">PROFILE</a></li>
						<li <?php if(isset($_GET['page']) && $_GET['page'] == 'pembayaran'){echo "class=\"active\"";}?>><a href="index.php?page=pembayaran">PEMBAYARAN</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>				
		</div>
		<a href = "index.php?page=detailcart" class="cart">
			<img src="images/cart.png">
			<span class="badge"><?php cart()?></span><br/>
		</a>
		<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!---->
	<div class="container">
		<div class="content-top top-product">
		<!--<h5 class="welcome">KOLEKSI KAMI</h5>-->
		<div class="search">
			<form name="form_search" method="GET" action="index.php">
				<input type="text" name="text_search" value="Ketik untuk mencari..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"></input>
				<input type="submit" value=""></input>
				<input type="hidden" name="search" value="search"></input>
				<input type="hidden" name="page" value="product"></input>
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>		
<!---->
	<div class="cont-include">
		<?php
			if (isset($_GET['page'])){
				$page = $_GET['page'];
				switch($page){
					case 'home':
					include_once 'home.php';
					break;
					
					case 'product':
					include_once 'product.php';
					break;
					
					case 'register':
					include_once 'register.php';
					break;
					
					case 'login':
					include_once 'account.php';
					break;
					
					case 'contact':
					include_once 'contact.php';
					break;
					
					case 'single':
					if (isset($_GET['id_detitem'])){
						include_once 'single.php';
					}
					break;
					
					case 'cara_beli':
						include_once 'cara_beli.php';
					break;
					
					case 'pembayaran':
						include_once 'pembayaran.php';
					break;
					
					case 'detailcart':
						include_once 'detailcart.php';
					break;

					case 'receiver':
						include_once 'receiver.php';
					break;
				}
			}
			else {
				include_once 'home.php';
			}
		
		?>
		</div>
	</div>
	<div class="grid-top-in">
				<div class="grid-top">
					<div class="col-md-4 top-grid">
						<h5>ANEKA KRIPIK MALANG</h5>
						<p class="sed">Aneka Kripik Malang Profil Company Aneka Kripik Malang adalah perusahaan produksi makanan ringan nasional menyediakan, juga memenuhi kebutuhan distribusi dan retail dengan berbagai macam produk makanan ringan tradisionil khas Indonesia yang komprehensif. </p>
					</div>
					<div class="col-md-4 top-grid">
						<h5>TOKO KAMI</h5>
							<div class="house">
								<i class="in-house"> </i>
								<div class="add">
								<p>Jl.Sengkaling Indah Banget no.10</p>
									<p>Malng</p>
									<p>Indonesia</p>
									<p>12345</p>
								</div>
							<div class="clearfix"> </div>
							</div>
							<div class="house">
								<i class="in-house in-on"> </i>
								<div class="add">
									<p>+6281312015169</p>
								</div>
							<div class="clearfix"> </div>
							</div>
					</div>
					<div class="col-md-4 top-grid">
						<h5>MEDIA SOSIAL</h5>
						<?php
							$ssql = "SELECT * FROM profil WHERE id_profil=1";
							$query = mysql_query($ssql);
							$facebook="";
							$twitter="";
							$instagram="";
							
							while ($record=mysql_fetch_array($query)){
								$facebook = $record['facebook'];
								$twitter = $record['twitter'];
								$instagram = $record['instagram'];
							}
						?>
						<ul class="social-in">
							<li><a href="<?php echo $facebook;?>"><i> </i></a></li>														
						</ul>
								<ul class="social-in">
									<li><a href="<?php echo $instagram;?>"><i class="instagram"> </i></a></li>
								</ul>
								<ul class="social-in">
									<li><a href="<?php echo $twitter;?>"><i class="twitter"> </i></a></li>
								</ul>
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="footer">
						<div class="container">
							<p class="footer-grid">Copyright &copy; <?php echo date('Y');?> Akema | <a href="login-admin.php" target="_blank">Setting</a></p>
						</div>
						 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
					</div>
				</div>
		</div>

	<!--penutup class container-->
</body>
</html>