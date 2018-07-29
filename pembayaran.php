	<!---->
	<div class="content customized_col">	
		<div class="container">
			<div class=" register">
				<?php
					if (isset($_GET['login-inf'])){
						echo"<div class=\"login-inf\">";
						echo"<h3>KAMU HARUS LOGIN DULU</h3>";
						echo"</div>";
					}
					else if (isset($_GET['empty-cart'])){
						echo"<div class=\"login-inf\">";
						echo"<h3>KERANJANG KOSONG</h3>";
						echo"</div>";
					}
				?>
		  	  <form name = "form_pembayaran" method = "POST" action = "informasi.php"> 
				 <div class="col-md-12 register-top-grid" id="top_pembayaran">
					<h3>Tabel Transaksi</h3>
					 <div>
						<table class="table">
							<thead>
								<tr>
									<th>Invoice</th>
									<th>Total Item</th>
									<th>Total Harga</th>
									<th>Tanggal Transaksi</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Pembatalan Pembelian</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
										if (isset($_SESSION['id_customer'])){
											$ssql = "SELECT * FROM transaksi WHERE id_customer ='".$_SESSION['id_customer']."' AND status !='sukses'";
											$query = mysql_query($ssql);
											$res = mysql_num_rows($query);
											
											if ($res < 1){
												echo "<tr>";
												echo "<td>";
												echo "TIDAK ADA TRANSAKSI ";
												echo "</td>";
												echo "</tr>";
											}
											else {
												while ($record = mysql_fetch_array($query)){
													$id_transaksi = $record['id_transaksi'];
													echo "<tr>";
													echo "<td>";
													echo $record['id_transaksi'];
													echo "</td>";
													echo "<td>";
													echo $record['total_item'];
													echo "</td>";
													echo "<td>";
													$total_finharga = $record['total_harga'];
													$total_finharga = number_format($total_finharga,"0",",",".");
													echo $total_finharga;
													echo "</td>";
													echo "<td>";
													echo $record['tgl_transaksi'];
													echo "</td>";
													echo "<td>";
													echo $record['status'];
													echo "</td>";
													echo "<td>";
													$keterangan = $record['keterangan'];
													//$keterangan = number_format ($keterangan,"0",",",".");
													echo $keterangan;
													echo "</td>";
													$ssql_cek = "SELECT * FROM transaksi where id_customer='".$_SESSION['id_customer']."' AND status='menunggu'";
													$query_cek = mysql_query($ssql_cek);
													$result = mysql_num_rows($query_cek);
													if ($result > 0){
														echo "<td><a href=\"cart.php?cartact=batal_beli&id_transaksi=$id_transaksi\" style=\"color:#f00;\">Batalkan Pembelian</a></td>";
													}else {
														echo "<td><p style=\"color:#eee;\">Pembelian tidak dapat dibatalkan</p></td>";
													}
													echo "</tr>";											
												}	
											}
										}
									?>
								</tr>
							</tbody>
						</table>
					 </div>
				</div>
				<div class="clearfix"> </div>
					 <div class="col-md-7" id="trans-tabel">
						<h3>Form Konfirmasi Pembayaran</h3>
						<table class="table" id="table-pembayaran">
							<tbody>
								<tr>
									<td>Invoice</td>
									<td><input type="text" name="text_invoice" placeholder="masukan id transaksi" required ></td>
								</tr>
								<tr>
									<td>Member ID</td>
									<td><input type="text" name="text_id_customer" placeholder="masukan id" required ></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td><input type="text" name="text_email" placeholder="example@mail.com" required ></td>
								</tr>
									<tr>
									<td>Tanggal Pembayaran</td>
									<td><input type="text" name="text_tgl_pembayaran" placeholder="dd-mm-yyy" class="input-text demo_ranged" id="inputField" required ></td>
								</tr>
									<tr>
									<td>Bank Pengirim</td>
									<td><input type="text" name="text_bank_pengirim" placeholder="bank pengirim" required ></td>
								</tr>
									<tr>
									<td>Bank Tujuan</td>
									<td>
										<select name= "text_bank_tujuan">
											<option name= "text_bank_tujuan" value="BCA ( 540012113 ) - PT. hendzphone">BCA ( 540012113 ) - PT. hendzphone</option>
											<option name= "text_bank_tujuan" value="MANDIRI ( 311210045 ) - PT. hendzphone">MANDIRI ( 311210045 ) - PT. hendzphone</option>
											<option name="text_bank_tujuan" value="BRI ( 3112154001 ) - PT. hendzphone">CIMB-NIAGA ( 3112154001 ) - PT. hendzphone</option>
										</select>
									</td>
								</tr>
									<tr>
									<td>Nomor Rekening</td>
									<td><input type="text" name="text_nomor_rekening" placeholder="masukan nomor rekening" required ></td>
								</tr>
								<tr>
									<td>Atas Nama</td>
									<td><input type="text" name="text_atas_nama" placeholder="nama pengirim" required ></td>
								</tr>
								<tr>
									<td>Keterangan</td>
									<td><textarea name="text_keterangan"></textarea></td>
								</tr>
							</tbody>
						</table>
						<input type="hidden" name="informasi" value="bayar">
						<input type="submit" class="btn btn-success btn-pembayaran" name="btn_submit" value="Kirim"/>
						<input type="reset" class="btn btn-danger btn-pembayaran" name="btn_submit" value="Reset"/>
					 </div>
					 <div class="col-md-5" id="payment-rule">
					 <h3 style="color:#fff; margin-bottom:25px;">Bank Penerima</h3>
					<table class="table">
							<thead>
								<th>BANK</th>
								<th>No.Rekening</th>
								<th>Atas Nama</th>
							</thead>
							<tbody>
								<tr>
									<td><img src="images/bank_bca.png"/></td>
									<td>540012113</td>
									<td>PT.hendzphone</td>
								</tr>
								<tr>
									<td><img src="images/bank_mandiri.png"/></td>
									<td>540012113</td>
									<td>PT.hendzphone</td>
								</tr>
								<tr>
									<td><img src="images/bank_bri.png"/></td>
									<td>540012113</td>
									<td>PT.hendzphone</td>
								</tr>
							</tbody>
						</table>	
				</div>
					 <div class="clearfix"> </div>
				</form>
			</div>
			<div class="footer-register">
					 
			</div>
		</div>
	</div>