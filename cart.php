<?php
	include_once 'config.php';
	
		function cart(){
				
		if ($_SESSION['total'] > 0){
			echo $_SESSION['total'];
		}
		else {
			echo 0;
		}
	}
	
	function buy($total_harga, $namapnr, $provinsi, $kota, $alamat, $telpon){
		
		//membuat id transaksi
		$id_customer = $_SESSION['id_customer'];
		$total_item = $_SESSION['total'];
		$totalharga = $total_harga;
		$tgl_transaksi = date("Y-m-d h:m:s");
		$status = "menunggu";
		$keterangan = $totalharga;
		
		$id_transaksi = rand(0,1000);
		$ssql = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
		$query = mysql_query($ssql);
		
		$res = mysql_num_rows($query);
		
		while ($res > 0){
			$ssql = "SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'";
			$query = mysql_query($ssql);
			$res = mysql_num_rows($query);
			
			$id_transaksi = rand(0,1000);
		}
		
		$ssql = "INSERT INTO transaksi VALUES('$id_transaksi', '$id_customer', '$total_item', '$totalharga', '$tgl_transaksi', '$status', '$keterangan',  '$namapnr', '$provinsi', '$kota', '$alamat', '$telpon')";
		$query = mysql_query($ssql);
		
		foreach($_SESSION as $name => $value){
			if (($name != 'total' && $name != 'id_customer') && $_SESSION['total'] > 0){
				$ssql = "SELECT * FROM detail_kripik WHERE id_jenis = $name";
				$query = mysql_query($ssql);
				
				while($record = mysql_fetch_array($query)){
					$harga = $record['harga'];
				}
				$subtotal = $harga * $value;
				
				$ssql = "INSERT INTO detail_transaksi VALUES ('$id_transaksi', $name, '$value', '$subtotal')";
				$query = mysql_query($ssql);
			}
		}
	}
	
	if (!isset ($_SESSION['total']) || ($_SESSION['total']) <= 0){
		$_SESSION['total'] = 0;
	}
	
	if (isset($_GET['cartact'])){
		$cartact = $_GET['cartact'];
		
		switch($cartact){
			case 'add':
					$temp = $_SESSION['\''.$_GET['id'].'\''];
					$temp+=1;
					$_SESSION['\''.$_GET['id'].'\''] = $temp;
					$_SESSION['total'] += 1;
		
					header ('location:index.php');
			break;
			
			case 'addprod':
					$temp = $_SESSION['\''.$_GET['id'].'\''];
					$temp+=1;
					$_SESSION['\''.$_GET['id'].'\''] = $temp;
					$_SESSION['total'] += 1;
					$topage = $_GET['topage'];
					header ("location:index.php?page=product&topage=$topage");
			break;
			
			case 'addcart':
					$_SESSION[$_GET['name']] += 1;
					$_SESSION['total'] += 1;
					header ('location:index.php?page=detailcart');
			break;
			
			case "mincart":
					if ($_GET['value'] == 1){
						unset($_SESSION[$_GET['name']]);
					}else{
						$_SESSION[$_GET['name']] -= 1;
					}	
					$_SESSION['total'] -= 1;	
					header ('location:index.php?page=detailcart');
			break;
			
			case 'delcart':
					$_SESSION['total'] -= $_GET['value'];
					unset($_SESSION[$_GET['name']]);
					header ('location:index.php?page=detailcart');
			break;
			
			case 'confirmbuy':
					if (isset($_SESSION['id_customer'])){
						if ($_SESSION['total'] <= 0){
							header('location:index.php?page=detailcart&empty-cart=true');
						}
						else{
							$ssql = "SELECT * FROM transaksi WHERE id_customer ='".$_SESSION['id_customer']."'";
							$query = mysql_query($ssql);
							$status = "";
							while ($record = mysql_fetch_array($query)){
								$status = $record['status'];
							}
							
							if ($status == 'menunggu' || $status == 'kirim' || $status == 'uang kurang' || $status == 'uang lebih'){
								echo header('location:index.php?page=detailcart&pending-transaction=true');
							}
							else{
									$total_harga = $_GET['totalharga'];
									//$namapnr = $_GET['text_namapnr'];
									//$alamat = $_GET['text_alamat'];
									//$alamat = $_GET['text_telpon'];
									//buy($total_harga, $namapnr, $alamat);
									//header ('location:pembayaran.php');
									header ("location:index.php?page=receiver&total_harga=$total_harga");
							}
						}
					}
					else{
						header('location:index.php?page=detailcart&login-inf=true');
					}
			break;
			
			case 'confirmbuy_2':
				$total_harga = $_GET['total_harga'];
				$namapnr = $_GET['text_recname'];
				$provinsi = $_GET['text_recprov'];
				$kota = $_GET['text_reckota'];
				$alamat = $_GET['text_recalamat'];
				$telpon = $_GET['text_rectelpon'];
				buy($total_harga, $namapnr, $provinsi, $kota, $alamat, $telpon);
				header ('location:index.php?page=pembayaran');
			break;
			
			case 'batal_beli':
			$ssql = "DELETE FROM transaksi WHERE id_transaksi = '".$_GET['id_transaksi']."'";
			$query = mysql_query($ssql);
			$ssql = "DELETE FROM detail_transaksi WHERE id_transaksi = '".$_GET['id_transaksi']."'";
			$query = mysql_query($ssql);
			header ('location:index.php?page=pembayaran');
			break;
		}
	}
?>