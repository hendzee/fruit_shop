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
					<table border="0" cellspacing="0" cellpadding="0" class="table_cust">
						<tr>
							<th>ID Cust.</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kode Pos</th>
							<th>No. Telpon / Email</th>
							<th class="ac">Content Control</th>
						</tr>
						<?php
							
							$batas = 5;
							$posisi = 0;
							
							if (isset($_GET['page'])){
								$page = $_GET['page'];
								$posisi = ($page - 1) * $batas;
							}
							
							$ssql = "";
							if (isset($_GET['search']) && $_GET['search'] != ''){
								$search = $_GET['search'];
								$ssql = "";
								
								switch ($_GET['sel_search']){
									case 'id_customer':
									$ssql = "SELECT * FROM customer WHERE id_customer LIKE '%$search%'";
									break;
									
									case 'nama':					
									$ssql = "SELECT * FROM customer WHERE concat (nama_depan,nama_belakang) LIKE '%$search%'";
									break;
									
									case 'alamat':					
									$ssql = "SELECT * FROM customer WHERE provinsi LIKE '%$search%' OR kota LIKE '%$search%' OR alamat LIKE '%$search%'";
									break;
								}
								$rowclass = 0;
								
								$query = mysql_query($ssql);
								$res = mysql_num_rows($query);
								
								if($res <= 0){
									echo "$ssql";
								}
								else{
									$ssql = $ssql;
									}
								}
							else {
								$ssql = "SELECT * FROM customer GROUP BY id_customer ASC LIMIT $posisi,$batas";
								}
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
								echo "<td>".$record['id_customer']."</td>";
								echo "<td>".$record['nama_depan']." ".$record['nama_belakang']."</td>";
								echo "<td>".$record['alamat'].", ".$record['kota'].", ".$record['provinsi']."</td>";
								echo "<td>".$record['kode_pos']."</td>";
								echo "<td>".$record['telpon']." / ".$record['email']."</td>";
								echo "<td><a href=\"actmenu.php?actmenu=hapus_customer&id_customer=".$record['id_customer']."\" class=\"ico del\">Hapus<a href=\"index.php?riwayat_cust=true&container=history&id_customer=".$record['id_customer']."\" class=\"ico riwayat\">Riwayat</td>";
								echo "<tr>";
								
								$rowclass += 1;
							}
						?>
					</table>
					
					
					<!-- Pagging -->
					<div class="pagging">
						<div class="left">Showing 1-12 of 44</div>
						<div class="right">
							<a href="#">Previous</a>
							<?php 
								$ssql = "SELECT * FROM customer";
								$query = mysql_query($ssql);
								$res = mysql_num_rows($query);
								$num_page = ceil($res / 5);
								
								for ($x = 1; $x <= $num_page; $x++){
									echo"<a href=\"index.php?container=customer&page=$x\">$x</a>";
								}
							?>
							<!--<span>...</span>-->
							<?php echo"<a href=\"index.php?container=customer&page=$num_page\">Last</a>";?>
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
					<h2>Pencarian</h2>
				</div>
				<!-- End Box Head-->
				
				<div class="box-content">					
					<!-- Sort -->
					<div class="sort_2">
						<form action="index.php" method="GET" class="customer">
							<label>Search By</label>
							<select name="sel_search" class="field">
								<option name="sel_search" value="id_customer">ID Customer</option>
								<option name="sel_search" value="nama">Nama</option>
								<option name="sel_search" value="alamat">Alamat</option>
							</select>
							<label style="margin-top:5px;">Variabel</label>
							<input type="text" name="search" class="field" id="search_tampil"/>
							<input style="margin-top:5px;" type="submit" value="Cari Sekarang">
							<input type="hidden" name="container" value="customer">
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