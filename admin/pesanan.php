<div class="shell">
	
	<!-- Small Nav -->
	<div class="small-nav">
		<a href="#">Pesanan</a>
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
				<div class="box-head" style="width:127.3%;">
					<h2 class="left">Current Articles</h2>
					<div class="right">
					</div>
				</div>
				<!-- End Box Head -->	

				<!-- Table -->
				<div class="table">
					<table width="130%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>invoice</th>
							<th>id customer</th>
							<th>total pembelian</th>
							<th>total tagihan</th>
							<th>tanggal transaksi</th>
							<th>status</th>
							<th>keterangan</th>
							<th width="110" class="ac">Informasi Pembayaran</th>
						</tr>
						<?php
							$ssql = "SELECT * FROM transaksi WHERE status != 'sukses'";
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
								echo "<td>".$record['id_customer']." gr</td>";
								echo "<td>".$record['total_item']." pcs</td>";
								echo "<td>Rp.".$record['total_harga']."</td>";
								echo "<td>".$record['tgl_transaksi']."</td>";
								echo "<td>".$record['status']."</td>";
								echo "<td>".$record['keterangan']."</td>";
								echo "<td><a href=\"index.php?container=detail_tagihan&id_transaksi=".$record['id_transaksi']."\">";
								echo "Detail Tagihan</a></td>";
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
		
		<div class="cl">&nbsp;</div>			
	</div>
	<!-- Main -->
</div>