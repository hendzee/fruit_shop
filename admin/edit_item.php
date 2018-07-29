	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Dashboard</a>
			<span>&gt;</span>
			Current Articles
		</div>
		<!-- End Small Nav -->
		<br />
		<!-- Main -->
		<form enctype="multipart/form-data" method="POST" action="actmenu.php">
			<div id="main">
				<div class="cl">&nbsp;</div>
				
				<!-- Content -->
				<div id="content">
					
					<!-- Box -->
					<div class="box">
						<!-- Box Head -->
						<div class="box-head">
							<h2 class="left">Item Baru</h2>
						</div>
						<!-- End Box Head -->	

						<!-- Table -->
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td><h2 class="sub_definition">Isikan dengan Lengkap</h2></td>
										<td></td>
									</tr>
									<tr>
										<td>Jenis</td>
										<td>
												<?php
													$ssql = "SELECT * FROM jenis_kripik WHERE id_jenis = '".$_GET['id_jenis']."' GROUP BY keterangan_jenis ASC";
													$query = mysql_query($ssql) or die ("error");
													while ($record = mysql_fetch_array($query)){
														$id_jenis = $record['id_jenis'];
														$name = $record ['keterangan_jenis'];
														
														echo "<input name = \"text_name\" value= \"$name\">";
													}
												?>
										</td>
									</tr>
										<?php
											$ssql = "SELECT * FROM detail_kripik WHERE id_jenis='".$_GET['id_jenis']."'";
											$query = mysql_query($ssql) or die ("error");
											$id_jenis = "";
											$berat = "";
											$jumlah = "";
											$harga = "";
											$tgl_kadaluarsa = "";
											$keterangan = "";
												
											while ($record = mysql_fetch_array($query)){
												$id_jenis = $record['id_jenis'];
												$berat = $record['berat'];
												$jumlah = $record['jumlah'];
												$harga = $record['harga'];
												$tgl_kadaluarsa = $record['tgl_kadaluarsa'];
												$keterangan = $record['keterangan'];
											}
										?>
									<tr>
										<td>Berat</td>
										<td><input type="text" name="text_berat" value="<?php echo "$berat";?>"></td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td><input type="text" name="text_jumlah" value="<?php echo "$jumlah";?>"></td>
									</tr>
									<tr>
										<td>Harga</td>
										<td><input type="text" name="text_harga" value="<?php echo "$harga";?>"></td>
									</tr>
									<tr>
										<td>Tanggal Kadaluarsa</td>
										<td><input type="text" name="text_tgl_kadaluarsa" value="<?php echo "$tgl_kadaluarsa";?>"></td>
									</tr>
									<tr>
										<td>Keterangan</td>
										<td><textarea type="text" name="text_keterangan" cols="50" rows="5"><?php echo "$keterangan";?></textarea></td>
									</tr>
								</tbody>
							</table>						
						</div>
						<!-- Table -->
						
					</div>
					<!-- End Box -->
					<div>
						<input type="hidden" name="id_jenis" value="<?php echo $_GET['id_jenis'];?>">
						<button type="submit" class="btn-success" name="actmenu" value="update-item">Update</button>
						<button type="submit" name="actmenu" value="batal-update">Batal</button>
					</div>
				</div>
				<!-- End Content -->
				
				<!-- Sidebar -->
				<div id="sidebar">
					
					<!-- Box -->
					<div class="box">
						
						<!-- Box Head -->
						<div class="box-head">
							<h2>Gambar Item</h2>
						</div>
						<!-- End Box Head-->
						
						<div class="box-content">
							Gambar<input type="file" name="file_gambar">
						</div>
					</div>
					<!-- End Box -->
				</div>
				<!-- End Sidebar -->
				
				<div class="cl">&nbsp;</div>			
			</div>
		</form>
		<!-- Main -->
	</div>