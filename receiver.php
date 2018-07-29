<?php
	$total_harga = $_GET['total_harga'];
?>	
	<!---->
	<div class="content customized_col" style="margin-bottom:7em;">	
		<div class="container">
		<div class=" register">
		  <form name = "form_receiver" method = "GET" action = "cart.php"> 
			 <input type="hidden" name="total_harga" value="<?php echo "$total_harga";?>">
			 <input type="hidden" name="cartact" value="confirmbuy_2">
			 <div class="col-md-5 register-top-grid">
				<h2 id="h2_alamatpnr">Alamat Penerima</h2>
				 <div>
					<span>Nama Penerima</span>
					<input type="text" name = "text_recname" <?php if (isset($_GET['depan']) && $_GET['depan'] != "") {$depan = $_GET['depan']; echo "value=\"$depan\"";}	?>> 
				 </div>
				 <div>
					 <span>Provinsi</span>
					 <input type="text" name = "text_recprov" <?php if (isset($_GET['provinsi']) && $_GET['provinsi'] != "") {$provinsi = $_GET['provinsi']; echo "value=\"$provinsi\"";}?>> 
				 </div>
				  <div>
					 <span>Kota</span>
					 <input type="text" name = "text_reckota" <?php if (isset($_GET['alamat']) && $_GET['alamat'] != "") {$alamat = $_GET['alamat']; echo "value=\"$alamat\"";}?>> 
				 </div>
				 <div>
					<span>Alamat Rumah</span>
					<textarea name = "text_recalamat" rows="5" cols="10" style="width:100%;"<?php if (isset($_GET['telpon']) && $_GET['telpon'] != "") {$telpon = $_GET['telpon']; echo "value=\"$telpon\"";}?>></textarea>
				 </div>
				  <div>
						<span>Telepon</span>
						<input type="text" name = "text_rectelpon">
				 </div>
				 </div>
				 <div class="col-md-1 register-bottom-grid">
						
				 </div>
				  <div class="col-md-7 register-top-grid" id="right-cont-register">
					<h2>Daftar Pesanan</h2>
					<table class="table">
							<thead>
								<tr>
									<th>Detail Item</th>
									<th>Nama Item</th>
									<th>Harga Satuan (Rp)</th>
									<th>Jumlah</th>
									<th>Total per Item (Rp)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										$totalharga = 0;
										foreach($_SESSION as $name => $value){
											
											if ($name != 'total' && $name != 'id_customer' && $_SESSION['total'] > 0){
												$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING (id_jenis) WHERE id_jenis = $name";
												$query = mysql_query($ssql);
											
												while($record = mysql_fetch_array($query)){
													$foto = $record['gambar'];
													$nama = $record['keterangan_jenis'];
													$harga = $record['harga'];
													$jenis = $record['keterangan_jenis'];
													$subtotal = $harga * $value;
													$totalharga += $subtotal;
													$harga = number_format ("$harga","0",",",".");
													$subtotal = number_format ("$subtotal","0",",",".");
													
													echo "<tr>";
													echo "<td>";
													echo "<img src=\"/ecomerce/admin/$foto\" style = \"width:80px;height:80px;\"/>";
													echo "</td>";
													echo "<td>";
													echo "$nama<br/>";
													echo "<h5 style = \"color:#9e9e9e; font-size:0.7em;\">$jenis</h5>";
													echo "</td>";
													echo "<td>";
													echo "$harga";
													echo "</td>";
													echo "<td>";
													echo $value;
													echo "</td>";
													echo "<td>";
													echo $subtotal;
													echo "</td>";
													echo "</tr>";
												}
											}else if ($_SESSION['total'] <= 0 || (isset($_SESSION['id_customer']) && $_SESSION['total'] <= 0)){
												echo "<tr>";
												echo "<td>";
												echo "KERANJANG ANDA KOSONG";
												echo "</td>";
												echo "</tr>";
											}						
										}
										echo "<tr>";
											for ($a = 0; $a < 3; $a++){
												echo "<td>";
												echo "</td>";
											}
											echo "<td>";
											echo "TOTAL";
											echo "</td>";
											echo "<td>";
											$str_totalharga = number_format ("$totalharga","0",",",".");
											echo "<h4>Rp <strong>$str_totalharga</strong></h4>";
											echo "</td>";
										echo "</tr>"
									?>
								</tr>
							</tbody>
						</table>
					<div>
						<input type="submit" value="konfirmasi" class="gobuy">
					</div>
					 <input type = "hidden" name = "action" value = "register">
				  </div>
			</form>
		</div>
	</div>
	</div>
