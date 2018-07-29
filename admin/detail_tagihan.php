<div class="shell">
	
	<!-- Small Nav -->
	<div class="small-nav">
		<a href="index.php?container=pesanan">Pesanan</a>
		<span>&gt;</span>
		Detail Tagihan
	</div>
	<!-- End Small Nav -->
	<br />
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Box -->
			<div class="box">
				<!-- Box Head -->
				<div class="box-head">
					<h2 class="left">Customer / Pembeli</h2>
				</div>
				<!-- End Box Head -->	
				
						<!-- Table -->
				<div class="table">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>ID Customer</th>
							<th>Nama Customer</th>
							<th>Provinsi</th>
							<th>Kota</th>
							<th>Alamat</th>
							<th>Telpon / Email</th>
						</tr>
						<?php
							$id_customer = "";
							$id_transaksi = $_GET['id_transaksi'];
							$ssql = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
							$query = mysql_query ($ssql);
							
							if ($record = mysql_fetch_array($query)){
								$id_customer = $record['id_customer'];
							}
							
							$ssql = "SELECT * FROM customer WHERE id_customer='$id_customer'";
							$query = mysql_query ($ssql) or die('error');
							$rowclass = 0;
							
							while ($record = mysql_fetch_array($query)){
								
								if ($rowclass > 1){
									$rowclass = 0;
								}
								
								if ($rowclass > 0){
									$rclass = "odd";
								}
								else {
									$rclass = "xodd";
								}
								
								echo "<tr class=\"$rclass\">";
								echo "<td>".$record['id_customer']."</td>";
								echo "<td>".$record['nama_depan']."</td>";
								echo "<td>".$record['provinsi']."</td>";
								echo "<td>".$record['kota']."</td>";
								echo "<td>".$record['alamat']."</td>";
								echo "<td>".$record['email']." / ".$record['telpon']."</td>";
								echo "<tr>";
								
								$rowclass += 1;
							}
						?>
					</table>
				</div>
				<!-- Table -->
				
				<!-- Box Head -->
				<div class="box-head">
					<h2 class="left">Tujuan</h2>
				</div>
				<!-- End Box Head -->	
				
				<!-- Table -->
				<div class="table">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>ID Transaksi</th>
							<th>Nama Penerima</th>
							<th>Provinsi Tujuan</th>
							<th>Kota Tujuan</th>
							<th>Alamat Tujuan</th>
							<th>Email atau Telpon</th>
						</tr>
						<?php
							$id_transaksi = $_GET['id_transaksi'];
							$ssql = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
							$query = mysql_query ($ssql);
							$rowclass = 0;
							
							while ($record = mysql_fetch_array($query)){
								
								if ($rowclass > 1){
									$rowclass = 0;
								}
								
								if ($rowclass > 0){
									$rclass = "odd";
								}
								else {
									$rclass = "xodd";
								}
								
								echo "<tr class=\"$rclass\">";
								echo "<td>".$record['id_transaksi']."</td>";
								echo "<td>".$record['nama_penerima']."</td>";
								echo "<td>".$record['provinsi_penerima']."pcs</td>";
								echo "<td>".$record['kota_penerima']."pcs</td>";
								echo "<td>".$record['alamat_penerima']."pcs</td>";
								echo "<td>".$record['email_telpon']."</td>";
								echo "<tr>";
								
								$rowclass += 1;
							}
						?>
					</table>
				</div>
				<!-- Table -->
				
				<!-- Box Head -->
				<div class="box-head">
					<h2 class="left">Pembayaran</h2>
				</div>
				<!-- End Box Head -->
				
				<!-- Table -->
				<div class="table">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>invoice</th>
							<th>id customer</th>
							<th>email</th>
							<th>tanggal pembayaran</th>
							<th>bank pengirim</th>
							<th>bank tujuan</th>
							<th>nomor rekening</th>
							<th>atas nama</th>
						</tr>
						<?php
							$id_transaksi = $_GET['id_transaksi'];
							$ssql = "SELECT * FROM informasi_pembayaran WHERE invoice='$id_transaksi'";
							$query = mysql_query ($ssql);
							$rowclass = 0;
							
							while ($record = mysql_fetch_array($query)){
								
								if ($rowclass > 1){
									$rowclass = 0;
								}
								
								if ($rowclass > 0){
									$rclass = "odd";
								}
								else {
									$rclass = "xodd";
								}
								
								echo "<tr class=\"$rclass\">";
								echo "<td>".$record['invoice']."</td>";
								echo "<td>".$record['id_customer']."</td>";
								echo "<td>".$record['email']."</td>";
								echo "<td>".$record['tgl_pembayaran']."pcs</td>";
								echo "<td>".$record['bank_pengirim']."</td>";
								echo "<td>".$record['bank_tujuan']."</td>";
								echo "<td>".$record['nomor_rekening']."</td>";
								echo "<td>".$record['atas_nama']."</td>";
								echo "<tr>";
								
								$rowclass += 1;
							}
						?>
					</table>
				</div>
				<!-- Table -->
				
				<!-- Box Head -->
				<div class="box-head">
					<h2 class="left">Detail Pembelian</h2>
				</div>
				<!-- End Box Head -->	
				
				<!-- Table -->
				<div class="table">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>gambar</th>
							<th>nama</th>
							<th>harga/pcs</th>
							<th>jumlah item</th>
							<th>total harga/item</th>
						</tr>
						<?php
							$id_transaksi = $_GET['id_transaksi'];
							$ssql = "SELECT * FROM detail_transaksi INNER JOIN detail_kripik USING (id_jenis) WHERE id_transaksi='$id_transaksi'";
							$query = mysql_query ($ssql);
							$rowclass = 0;
							
							while ($record = mysql_fetch_array($query)){
								
								if ($rowclass > 1){
									$rowclass = 0;
								}
								
								if ($rowclass > 0){
									$rclass = "odd";
								}
								else {
									$rclass = "xodd";
								}
								
								echo "<tr class=\"$rclass\">";
								echo "<td style=\"width:20%;\"><img src=\"/ecomerce/admin/".$record['gambar']."\" style=\"width:50%;\"></td>" ;
								echo "<td>".$record['id_jenis']."</td>";
								echo "<td>Rp.".$record['harga']."</td>";
								echo "<td>".$record['jumlah_item']."pcs</td>";
								echo "<td>".$record['total_per_item']."</td>";
								echo "<tr>";
								
								$rowclass += 1;
							}
						?>
					</table>
				</div>
				<!-- Table -->
				
			</div>
			<!-- End Box -->

		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Box -->
			<div class="box">
				
				<!-- Box Head -->
				<div class="box-head">
					<h2>Update</h2>
				</div>
				<!-- End Box Head-->
				
				<div class="box-content">					
					<!-- Sort -->
					<form method="POST" action="actmenu.php">
						<table>
							<tbody>
								<tr>
									<td>
										<select name="sel_status">
											<option name="sel_status" value="menunggu">menunggu</option>
											<option name="sel_status" value="kirim">kirim</option>
											<option name="sel_status" value="uang kurang">uang kurang</option>
											<option name="sel_status" value="uang lebih">uang lebih</option>
											<option name="sel_status" value="sukses">sukses</option>
										</select>
									</td>
								</tr>
								<tr><td><h2>Komentar</h2></td></tr>
								<tr>
									<td><textarea name="text_komentar" cols="25" rows="5"></textarea></td>
								</tr>
								<tr>
									<input type="hidden" name="id_transaksi" value=<?php echo "\"$id_transaksi\"";?>>
									<td><button type="submit" name="actmenu" value="update-status">Update</button></td>
								</tr>
							</tbody>
						</table>
					</form>
					<!-- End Sort -->
					
				</div>
			</div>
			<!-- End Box -->
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>			
	</div>
	<!-- Main -->
</div>