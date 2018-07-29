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
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tambah_item">
								<tbody>
									<tr>
										<td><h2 class="sub_definition">Isikan dengan Lengkap</h2></td>
										<td></td>
									</tr>
									<tr>
										<td>Jenis / Nama Keripik</td>
										<td>
											<input name="text_jenis" style="width:46%;">
										</td>
									</tr>
									<tr>
										<td>Berat</td>
										<td><input type="text" name="text_berat"></td>
									</tr>
									<tr>
										<td>Jumlah</td>
										<td><input type="text" name="text_jumlah"></td>
									</tr>
									<tr>
										<td>Harga</td>
										<td><input type="text" name="text_harga"></td>
									</tr>
									<tr>
										<td>Tanggal Kadaluarsa</td>
										<td><input type="text" name="text_tgl_kadaluarsa"></td>
									</tr>
									<tr>
										<td>Keterangan</td>
										<td><textarea type="text" name="text_keterangan" cols="50" rows="5"></textarea></td>
									</tr>
								</tbody>
							</table>						
						</div>
						<!-- Table -->
						
					</div>
					<!-- End Box -->
					<div>
						<button type="submit" class="btn-success" name="actmenu" value="simpan-item">Simpan</button>
						<input type="reset" class="btn-success" name="actmenu" value="Hapus">
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
							Gambar<input name="file_gambar" type="file">
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