	<!---->
	<div class="content customized_col">	
		<div class="container">
			<div class="detailcart">
				<?php
					if (isset($_GET['login-inf'])){
						echo"<div class=\"login-inf\">";
						echo"<h5>KAMU HARUS LOGIN DULU</h5>";
						echo"</div>";
					}
					else if (isset($_GET['empty-cart'])){
						echo"<div class=\"login-inf\">";
						echo"<h5>KERANJANG KOSONG</h5>";
						echo"</div>";
					}
					else if (isset($_GET['pending-transaction'])){
						echo"<div class=\"login-inf\">";
						echo"<h5>ADA PROSES TRANSAKSI YANG BELUM SELESAI. CEK DI HALAMAN PEMBAYARAN ANDA</h5>";
						echo"</div>";
					}
				?>
		  	  <form method="GET" action="cart.php"> 
				 <div class="col-md-10 register-top-grid">
					 <div>
						<table class="table">
							<thead>
								<tr>
									<th>Detail Item</th>
									<th>Nama Item</th>
									<th>Harga Satuan (Rp)</th>
									<th>Jumlah</th>
									<th>Total per Item (Rp)</th>
									<th>Item + 1</th>
									<th>Item - 1</th>
									<th>Hapus Semua</th>
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
													echo "<td><a href=\"cart.php?cartact=addcart&name=$name\"> <img src=\"images/inccart.png\"></a></td>";
													echo "<td><a href=\"cart.php?cartact=mincart&name=$name&value=$value\"><img src=\"images/deccart.png\"></a></td>";
													echo "<td><a href=\"cart.php?cartact=delcart&name=$name&value=$value\"><img src=\"images/delcart.png\"></a></td>";
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
					 </div>
					<input type="hidden" name="cartact" value="confirmbuy">
					<input type="hidden" name="totalharga" <?php echo "value=\"$totalharga\"";?>>
					 <input type="submit" value="konfirmasi">
					 </div>
					 <div class="col-md-2 register-top-grid">
						 <div>
						</div>
					 </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
			<div class="footer-register" style="margin-bottom:10em;">
					
			</div>
		</div>
		</div>