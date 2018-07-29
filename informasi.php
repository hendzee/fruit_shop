<?php
	include_once 'config.php';
?>

<?php
	 if (isset($_POST['informasi'])){
		 $informasi = $_POST['informasi'];
		 
		if ($informasi == 'bayar'){
			if (isset($_POST['text_invoice']) && isset($_POST['text_id_customer']) && isset($_POST['text_email']) && isset($_POST['text_tgl_pembayaran']) && isset($_POST['text_bank_pengirim']) && isset($_POST['text_bank_tujuan']) && isset($_POST['text_nomor_rekening']) && isset($_POST['text_atas_nama'])) {
				$invoice=$_POST['text_invoice'];
				$id_customer=$_POST['text_id_customer'];
				$email=$_POST['text_email'];
				$tgl_pembayaran=$_POST['text_tgl_pembayaran'];
				$bank_pengirim=$_POST['text_bank_pengirim'];
				$bank_tujuan=$_POST['text_bank_tujuan'];
				$nomor_rekening=$_POST['text_nomor_rekening'];
				$atas_nama=$_POST['text_atas_nama'];
				$keterangan=$_POST['text_keterangan'];
				
				$ssql = "INSERT INTO informasi_pembayaran VALUES ('$invoice','$id_customer','$email','$tgl_pembayaran','$bank_pengirim','$bank_tujuan','$nomor_rekening','$atas_nama','$keterangan')"; 
				//echo $ssql;
				$query = mysql_query($ssql) or die('failed');
				header ('location: index.php?page=pembayaran');
			}
			else {
				header ('location: index.php?page=pembayaran');
			} 
		}
		else if ($informasi == 'mailbox'){
			if (isset($_POST['text_name']) && isset($_POST['text_email']) && isset($_POST['text_message'])){
				$date = date('Y-m-d h:m:s');
				$name = $_POST['text_name'];
				$email = $_POST['text_email'];
				$message = $_POST['text_message'];
				
				$ssql = "INSERT INTO mailbox(tanggal_masuk, nama_user, email_user, pesan) VALUES('$date', '$name','$email','$message')";
				$query = mysql_query($ssql);
				echo "sukses";
			}
		}
	 }
?>