<div class="content">	
	<div class="container">
		<div>
			<div class="col-md-9 sin customized_col" id="single-left">
				<div class="single_left">	 
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
							<a href="optionallink.html">
								<?php
									$id_detitem = $_GET['id_detitem'];
									$select_id = $id_detitem;
									$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING (id_jenis) WHERE id_jenis = '$id_detitem'";
									$query = mysql_query($ssql);
									
									while($record = mysql_fetch_array($query)){
										echo "<img class=\"etalage_thumb_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\" />";
										echo "<img class=\"etalage_source_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\" title=\"\" />";
										echo "</a>";
										echo "</li>";
										echo "<li>";
										echo "<img class=\"etalage_thumb_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\" />";
										echo "<img class=\"etalage_source_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\" title=\"\" />";
										echo "</li>";
										echo "<li>";
										echo "<img class=\"etalage_thumb_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\"  />";
										echo "<img class=\"etalage_source_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\"  />";
										echo "</li>";
										echo "<li>";
										echo "<img class=\"etalage_thumb_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\"  />";
										echo "<img class=\"etalage_source_image\" src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\"  />";
										echo "</li>";
										echo "</ul>";
										echo "<div class=\"clearfix\"></div>"; 
										echo "</div>";
										echo "<div class=\"desc1 span_3_of_2\">";
										echo "<div class=\"desc\">";
										echo "<h3>".$record['keterangan_jenis']."</h3>";
										echo "<p>".$record['keterangan']."</p>";
										//agar stock dan harga saling bersampingan
										echo "<div class=\"clearfix\"></div>";
										echo " <div class=\"col-md-5\">";
										echo "<h5><img src=\"images/money.png\"> Rp. ".$record['harga']."</h5>";
										echo "</div> ";
										echo " <div class=\"col-md-5\">";
										if ($record['jumlah'] > 0){
											echo "<h5><img src=\"images/stock.png\"> stok: ada</h5>";
										}else{
											echo "<h5><img src=\"images/stock.png\"> stok: kosong</h5>";
										}
										
										echo "</div> ";
										echo "<div class=\"clearfix\"></div>";
									}
						?>
					<div class="det_nav">
						<a href="index.php?cartact=add<?php echo "&id=$id_detitem";?>" class="get">AMBIL</a>
					</div>
					<div class="det_nav">
						<h4>Rekomendasi Lain:</h4>
						<ul>
							<?php
								$ssql = "SELECT * FROM detail_kripik ORDER BY id_jenis DESC LIMIT 4";
								$query = mysql_query($ssql);
								while($record=mysql_fetch_array($query)){
									$id_detitem = $record['id_jenis'];
									echo "<li><a href=\"index.php?page=single&id_detitem=$id_detitem\"><img src=\"/ecomerce/admin/".$record['gambar']."\" class=\"img-responsive\" alt=\"\"/></a></li>";
								}
							?>
						</ul>
					</div>
				</div>
				</div>
					<div class="clearfix"></div>
				</div>
					<!----- tabs-box ---->
			 </div>	
			 <div class="col-md-3 sin-left customized_col" id="single-list">
			  <div class="block">
                  <p class="block-subtitle">Pilihan Lain</p>
				<div class="list">
					<ul class="price-top">
						<?php
							$ssql = "SELECT * FROM jenis_kripik ORDER BY id_jenis LIMIT 10";
							$query = mysql_query($ssql);
							
							while ($record = mysql_fetch_array($query)){
								$keterangan_jenis = $record['keterangan_jenis'];
								echo  "<li><a href=\"index.php?page=product&text_search=$keterangan_jenis&search=budget\"><span class=\"price\">".$record['keterangan_jenis']."</span></a></li>";
							}
						?>
					</ul>
				</div>	
				<!--
			  <div class="tags">
				    	<h4 class="tag_head">Popular cakes</h4>
				         <ul class="tags_links">
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#"> typesetting industry</a></li>
							<li><a href="#">dummy text </a></li>
							<li><a href="#">Renaissance</a></li>
							<li><a href="#">literature</a></li>
							<li><a href="#">random text</a></li>
							<li><a href="#">passages</a></li>
							<li><a href="#">handful</a></li>					
						</ul>
						<a href="#" class="link1">View all tags</a>
				 </div>
				 -->
			</div>
		</div>
			<div class="clearfix"></div>	
	</div>
	</div>
</div>