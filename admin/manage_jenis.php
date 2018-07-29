<div class="shell">
	
	<!-- Small Nav -->
	<div class="small-nav">
		<a href="#">Dashboard</a>
		<span>&gt;</span>
		Current Articles
	</div>
	<!-- End Small Nav -->
	<br/>
	<!-- Main -->
	<form method="POST" action="actmenu.php">
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box" style="width:50%;">
					
						<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Jenis Baru</h2>
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
									<td>Nama Jenis</td>
									<td><input type="text" name="text_jenis"></td>
								</tr>
							</tbody>
						</table>						
					</div>
					<!-- Table -->
					<div>
						<?php
							if (isset($_GET['update-jenis']) && $_GET['update-jenis']=='true'){
								$id_jenis = $_GET['id_jenis'];
								echo "<input type=\"hidden\" name=\"id_jenis\" value=\"$id_jenis\">";
								echo "<button type=\"submit\" class=\"btn-success\" name=\"actmenu\" value=\"update-jenis\">Update</button>";
							}else{
								echo "<button type=\"submit\" class=\"btn-success\" name=\"actmenu\" value=\"simpan-jenis\">Simpan</button>";
							}
						?>
						<input type="reset" class="btn-success" name="actmenu" value="Hapus">
					</div>
					
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Daftar Jenis</h2>
					</div>
					<!-- End Box Head -->
					
					<table class="table">
						<thead>
							<th>ID Jenis</th>
							<th>Keterangan Jenis</th>
							<th>Control Content</th>
						</thead>
						<tbody>
						<?php
							$ssql ="SELECT * FROM jenis_kripik";
							$query = mysql_query($ssql);
							
							while ($record=mysql_fetch_array($query)){
								echo "<tr>";
								echo "<td>".$record['id_jenis']."</td>";
								echo "<td>".$record['keterangan_jenis']."</td>";
								echo "<td><a href=\"actmenu.php?actmenu=hapus-jenis&id_jenis=".$record['id_jenis']."\" class=\"ico del\">Hapus</a><a href=\"index.php?update-jenis=true&container=manage_jenis&id_jenis=".$record['id_jenis']."\" class=\"ico edit\">Edit</a></td>";
								echo "</tr>";
							}
						?>
						</tbody>
					</table>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Content -->
			<div class="cl">&nbsp;</div>			
		</div>
	</form>
	<!-- Main -->
</div>