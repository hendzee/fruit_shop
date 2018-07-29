<?php
	include_once 'config.php';
?>
<?php
	
	function add_jenis($text_jenis){
			$keterangan_jenis = $text_jenis;
			$rand_number = rand(0,50);
			$id_jenis = "k00$rand_number";
			
			$ssql = "SELECT * FROM jenis_kripik WHERE id_jenis = '$id_jenis'";
			$query = mysql_query($ssql);
			$res = mysql_num_rows($query);
			
			while ($res > 0){
				$rand_number = rand(0,50);
				$id_jenis = "k00$rand_number";
			
				$ssql = "SELECT * FROM jenis_kripik WHERE id_jenis = '$id_jenis'";
				$query = mysql_query($ssql);
				$res = mysql_num_rows($query);
			}
			
			$ssql = "INSERT INTO jenis_kripik VALUES('$id_jenis','$keterangan_jenis')";
			echo $ssql;
			$query = mysql_query($ssql);
			
			return $id_jenis;
	}
	
	if (isset($_POST['actmenu'])){
		$actmenu = $_POST['actmenu'];
		
		switch ($actmenu){
			
			case 'simpan-item':
			$text_jenis =  $_POST['text_jenis'];
			$berat =  $_POST['text_berat'];
			$jumlah = $_POST['text_jumlah'];
			$harga =  $_POST['text_harga'];
			$tgl_kadaluarsa =  $_POST['text_tgl_kadaluarsa'];
			$keterangan =  $_POST['text_keterangan'];
			$lokasi_file =  $_FILES['file_gambar']['tmp_name'];
			$nama_file = $_FILES['file_gambar']['name'];
			$folder = "images/$nama_file";
			
			$id_jenis = add_jenis($text_jenis);
			$ssql="";
			if (move_uploaded_file($lokasi_file,"$folder")){
				$ssql = "INSERT INTO detail_kripik (id_jenis,berat,jumlah,harga,tgl_kadaluarsa,keterangan,gambar) VALUES ('$id_jenis','$berat','$jumlah','$harga','$tgl_kadaluarsa','$keterangan','$folder')";
				
			}else{
				$folder = "images/no_image.png";
				$ssql = "INSERT INTO detail_kripik (id_jenis,berat,jumlah,harga,tgl_kadaluarsa,keterangan,gambar) VALUES ('$id_jenis','$berat','$jumlah','$harga','$tgl_kadaluarsa','$keterangan','$folder')";
			}
			$query = mysql_query ($ssql);
			header ('location:index.php');
			break;
			
			case'simpan-jenis':
			$keterangan_jenis = $_POST['text_jenis'];
			$rand_number = rand(0,50);
			$id_jenis = "k00$rand_number";
			
			$ssql = "SELECT * FROM jenis_kripik WHERE id_jenis = '$id_jenis'";
			$query = mysql_query($ssql);
			$res = mysql_num_rows($query);
			
			while ($res > 0){
				$rand_number = rand(0,50);
				$id_jenis = "k00$rand_number";
			
				$ssql = "SELECT * FROM jenis_kripik WHERE id_jenis = '$id_jenis'";
				$query = mysql_query($ssql);
				$res = mysql_num_rows($query);
			}
			
			$ssql = "INSERT INTO jenis_kripik VALUES('$id_jenis','$keterangan_jenis')";
			echo $ssql;
			$query = mysql_query($ssql);
			
			header('location:index.php?container=manage_jenis');
			break;
			
			case'update-jenis':
			$keterangan_jenis = $_POST['text_jenis'];
			$id_jenis = $_POST['id_jenis'];
			
			$ssql = "UPDATE jenis_kripik SET keterangan_jenis='$keterangan_jenis' WHERE id_jenis='$id_jenis'";
			$query = mysql_query($ssql);
			header('location:index.php?container=manage_jenis');
			break;
			
			case 'update-item':
			$id_jenis = $_POST['id_jenis'];
			echo $id_jenis;
			$text_name =  $_POST['text_name'];
			$berat =  $_POST['text_berat'];
			$jumlah = $_POST['text_jumlah'];
			$harga =  $_POST['text_harga'];
			$tgl_kadaluarsa =  $_POST['text_tgl_kadaluarsa'];
			$keterangan =  $_POST['text_keterangan'];
			$lokasi_file =  $_FILES['file_gambar']['tmp_name'];
			$nama_file = $_FILES['file_gambar']['name'];
			$folder = "images/$nama_file";
			
			if (move_uploaded_file($lokasi_file,"$folder")){
				$ssql = "UPDATE jenis_kripik SET keterangan_jenis = '$text_name'  WHERE id_jenis='$id_jenis'";
				$query = mysql_query ($ssql);
				$ssql = "UPDATE detail_kripik SET id_jenis='$id_jenis',berat='$berat',jumlah='$jumlah',harga='$harga',tgl_kadaluarsa='$tgl_kadaluarsa',keterangan='$keterangan',gambar='$folder' WHERE id_jenis='$id_jenis'";
				echo $ssql;
				$query = mysql_query ($ssql);
				header ('location:index.php?container=tampil_item');
			}else{
				$ssql = "UPDATE jenis_kripik SET keterangan_jenis = '$text_name'  WHERE id_jenis='$id_jenis'";
				$query = mysql_query ($ssql);
				$ssql = "UPDATE detail_kripik SET id_jenis='$id_jenis',berat='$berat',jumlah='$jumlah',harga='$harga',tgl_kadaluarsa='$tgl_kadaluarsa',keterangan='$keterangan'";
				echo $ssql;
				$query = mysql_query ($ssql);
				header ('location:index.php?container=tampil_item');
			}
			break;
			
			case'batal-update':
			header ('location:index.php?container=tampil_item');
			break;
			
			case 'update-status':
			$id_transaksi = $_POST['id_transaksi'];
			$ssql = "UPDATE transaksi SET status='".$_POST['sel_status']."',keterangan='".$_POST['text_komentar']."' WHERE id_transaksi='".$_POST['id_transaksi']."'";
			$query = mysql_query($ssql);
			header ('location:index.php?container=pesanan');
			break;
			
		}
	}
	elseif (isset($_GET['actmenu'])){
		
		$actmenu = $_GET['actmenu'];
		
		switch ($actmenu){
			
			case 'hapus':
			
			$ssql = "DELETE FROM detail_kripik WHERE id_jenis ='". $_GET['id_jenis']."'";
			$query = mysql_query ($ssql);
			$ssql = "DELETE FROM jenis_kripik WHERE id_jenis ='". $_GET['id_jenis']."'";
			$query = mysql_query ($ssql);
			header ('location:index.php');
			break;
			
			case 'hapus-jenis':
			$ssql = "DELETE FROM jenis_kripik WHERE id_jenis ='". $_GET['id_jenis']."'";
			$query = mysql_query ($ssql);
			header ('location:index.php?container=manage_jenis');
			break;
			
			case 'hapus_customer':
			$ssql = "DELETE FROM customer WHERE id_customer ='". $_GET['id_customer']."'";
			$query = mysql_query ($ssql);
			header ('location:index.php?container=customer');
			
			case 'set_ban':
			$ban_1 = $_GET['selban_1'];
			$ban_2 = $_GET['selban_2'];
			$ban_3 = $_GET['selban_3'];
			
			$ssql = "UPDATE banner SET ban_1='$ban_1', ban_2='$ban_2',ban_3='$ban_3' WHERE id_banner='b1'";
			$query = mysql_query($ssql);
			header ('location:index.php?container=halaman');
			break;
			
			case 'edit_deskripsi':
			$text = $_GET['edit_deskripsi'];
			$ssql = "UPDATE profil SET deskripsi='$text' WHERE id_profil=1";
			$query = mysql_query($ssql);
			header ('location:index.php?container=halaman');
			break;
			
			case 'set_profil':
			$tex_bbm = $_GET['text_bbm'];
			$text_telepon = $_GET['text_telepon'];
			$text_email = $_GET['text_email'];
			$text_facebook = $_GET['text_facebook'];
			$text_twitter = $_GET['text_twitter'];
			$text_intagram = $_GET['text_instagram'];
			
			$ssql = "UPDATE profil SET bbm='$tex_bbm',telepon='$text_telepon',email='$text_email',facebook='$text_facebook',twitter='$text_twitter',instagram='$text_intagram' WHERE id_profil=1";
			$query = mysql_query($ssql);
			header ('location:index.php?container=halaman');
			break;
			
			case 'edit_lokasi':
			$text_alamat = $_GET['text_alamat'];
			$text_maps = $_GET['text_maps'];
			$ssql = "UPDATE profil SET alamat='$text_alamat', maps='$text_maps' WHERE id_profil=1";
			$query = mysql_query($ssql);
			header ('location:index.php?container=halaman');
			break;
		}
	}
?>