<div class="shell">
	
	<!-- Small Nav -->
	<div class="small-nav">
		<a href="#">Dashboard</a>
		<span>&gt;</span>
		Daftar Keripik
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
					<h2 class="left">Daftar Keripik</h2>
				</div>
				<!-- End Box Head -->	

				<!-- Table -->
				<div class="table">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>gambar</th>
							<th>jenis</th>
							<th>berat</th>
							<th>jumlah</th>
							<th>harga/pcs</th>
							<th>keterangan</th>
							<th width="110" class="ac">Content Control</th>
						</tr>
						<?php
							$batas = 5;
							$posisi = 0;
							
							if (isset($_GET['page'])){
								$page = $_GET['page'];
								$posisi = ($page - 1) * $batas;
							}
							
							//search
							if (isset($_GET['search']) && $_GET['search'] != ''){
								$search = $_GET['search'];
								$ssql = "";
								
								switch ($_GET['sel_search']){
									case 'nama':
									$ssql = "SELECT * FROM detail_kripik JOIN jenis_kripik USING (id_jenis) WHERE keterangan_jenis LIKE '%$search%'";
									break;
									
									case 'jumlah':
									$search1 = $search-50;
									$search2 = $search+50;
					
									$ssql = "SELECT * FROM detail_kripik JOIN jenis_kripik USING (id_jenis) WHERE jumlah BETWEEN $search1 AND $search2";
									break;
									
									case 'harga':
									$search1 = $search-2500;
									$search2 = $search+2500;
					
									$ssql = "SELECT * FROM detail_kripik JOIN jenis_kripik USING (id_jenis) WHERE harga BETWEEN $search1 AND $search2";
									break;
								}
								$rowclass = 0;
								
								$query = mysql_query($ssql);
								$res = mysql_num_rows($query);
								
								if($res <= 0){
									echo "$ssql";
								}
								else{
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
										echo "<td>".$record['keterangan_jenis']."</td>";
										echo "<td>".$record['berat']." gr</td>";
										echo "<td>".$record['jumlah']." pcs</td>";
										echo "<td>Rp.".$record['harga']."</td>";
										echo "<td>".$record['keterangan']."</td>";
										echo "<td><a href=\"actmenu.php?actmenu=hapus&id_jenis=".$record['id_jenis']."\" class=\"ico del\">Hapus</a><a href=\"index.php?container=edit_item&id_jenis=".$record['id_jenis']."\" class=\"ico edit\">Edit</a></td>";
										echo "<tr>";
										
										$rowclass += 1;
									}
								}
							}
							else {
								$ssql = "SELECT * FROM detail_kripik JOIN jenis_kripik USING (id_jenis) LIMIT $posisi, $batas";
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
									echo "<td>".$record['keterangan_jenis']."</td>";
									echo "<td>".$record['berat']." gr</td>";
									echo "<td>".$record['jumlah']." pcs</td>";
									echo "<td>Rp.".$record['harga']."</td>";
									echo "<td>".$record['keterangan']."</td>";
									echo "<td><a href=\"actmenu.php?actmenu=hapus&id_jenis=".$record['id_jenis']."\" class=\"ico del\">Hapus</a><a href=\"index.php?container=edit_item&id_jenis=".$record['id_jenis']."\" class=\"ico edit\">Edit</a></td>";
									echo "<tr>";
									
									$rowclass += 1;
								}
							}
						?>
					</table>
					
					
					<!-- Pagging -->
					<div class="pagging">
						<div class="left">Showing 1-12 of 44</div>
						<div class="right">
							<a href="#">Previous</a>
							<?php 
								$ssql = "SELECT * FROM detail_kripik";
								$query = mysql_query($ssql);
								$res = mysql_num_rows($query);
								$num_page = ceil($res / 5);
								
								for ($x = 1; $x <= $num_page; $x++){
									echo"<a href=\"index.php?container=tampil_item&page=$x\">$x</a>";
								}
							?>
							<!--<span>...</span>-->
							<?php echo"<a href=\"index.php?container=tampil_item&page=$num_page\">Last</a>";?>
							<a href="#">View all</a>
						</div>
					</div>
					<!-- End Pagging -->
					
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
					<h2>Management</h2>
				</div>
				<!-- End Box Head-->
				
				<div class="box-content">
					<a href="index.php?container=tambah_item" class="add-button"><span>Tambah Item Baru</span></a>
					<div class="cl">&nbsp;</div>
					
					<!-- Sort -->
					<div class="sort">
						<form action="index.php" method="GET" class="tampil_item">
							<label>Search By</label>
							<select name="sel_search" class="field">
								<option name="sel_search" value="nama">Nama</option>
								<option name="sel_search" value="jumlah">Jumlah</option>
								<option name="sel_search" value="harga">Harga</option>
							</select>
							<label style="margin-top:5px;">Variabel</label>
							<input type="text" name="search" class="field" id="search_tampil"/>
							<input style="margin-top:5px;" type="submit" value="Cari Sekarang">
							<input type="hidden" name="container" value="tampil_item">
						</form>
					</div>
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