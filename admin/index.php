<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include_once 'config.php';
	if (!isset($_SESSION['user'])){
		exit();
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<a href="#"><img src="images/logo.png"/></a>
			<div id="top-navigation">
				Welcome <a href="#"><strong><?php echo $_SESSION['user'];?></strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="<?php echo "index.php?container=tampil_item";?> "<?php if (isset($_GET['container']) && $_GET['container'] == 'tampil_item' || !isset($_GET['container'])){echo "class=\"active\"";}?>><span>Atur Item</span></a></li>
			    <li><a href="<?php echo "index.php?container=tambah_item";?> "<?php if (isset($_GET['container']) && $_GET['container'] == 'tambah_item'){echo "class=\"active\"";}?>><span>Tambah Item</span></a></li>
				<li><a href="<?php echo "index.php?container=pesanan";?> "<?php if (isset($_GET['container']) && ($_GET['container'] == 'pesanan' || $_GET['container'] == 'detail_tagihan')){echo "class=\"active\"";}?>><span>Pesanan</span></a></li>
				<li><a href="<?php echo "index.php?container=history";?> "<?php if (isset($_GET['container']) && $_GET['container'] == 'history'){echo "class=\"active\"";}?>><span>History</span></a></li>
				<li><a href="<?php echo "index.php?container=customer";?> "<?php if (isset($_GET['container']) && $_GET['container'] == 'customer'){echo "class=\"active\"";}?>><span>Customer</span></a></li>
				<li><a href="<?php echo "index.php?container=halaman";?> "<?php if (isset($_GET['container']) && $_GET['container'] == 'halaman'){echo "class=\"active\"";}?>><span>Halaman</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container" style="margin-bottom:5em;">
	<?php
		if (isset ($_GET['container'])){
			$container = $_GET['container'];
			
			switch ($container){
				case 'tampil_item':
				include_once 'tampil_item.php';
				break;
				
				case 'tambah_item':
				include_once 'tambah_item.php';
				break;
				
				case 'manage_jenis':
				include_once 'manage_jenis.php';
				break;
				
				case 'edit_item':
				include_once 'edit_item.php';
				break;
				
				case 'pesanan':
				include_once 'pesanan.php';
				break;
				
				case 'detail_tagihan':
				include_once 'detail_tagihan.php';
				break;
				
				case 'history':
				include_once 'history.php';
				break;
				
				case 'customer':
				include_once 'customer.php';
				break;
				
				case 'halaman':
				include_once 'halaman.php';
				break;
				
			}
		}
		elseif (!isset ($_GET['container'])) {
			include_once 'tampil_item.php';
		}
	?>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date('Y');?> - CompanyName</span>
		<span class="right">
			Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">Virginia Hendras Prawira</a>
		</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>