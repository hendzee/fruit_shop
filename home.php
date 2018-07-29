	<div class="col-md-12 customized_col">
		<!--banner-->
		<a href="#" class="ban">
			<div class="banner ">	
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<?php
							$ssql = "SELECT * FROM banner WHERE id_banner='b1'";
							$query = mysql_query($ssql);
							$ban_1 = "";
							$ban_2 = "";
							$ban_3 = "";
							
							if($record = mysql_fetch_array($query)){
								$ban_1 = $record['ban_1'];
								$ban_2 = $record['ban_2'];
								$ban_3 = $record['ban_3'];
								
								for ($x=0;$x<3;$x++){
									$ban = "";
									
									if ($x == 0)
										$ban = $ban_1;
									else if ($x == 1)
										$ban = $ban_2;
									else if ($x == 2)
										$ban = $ban_3;
									
									$ssql = "SELECT * FROM detail_kripik JOIN jenis_kripik USING (id_jenis) WHERE id_jenis='$ban'";
									$query = mysql_query($ssql);
									
									while($record = mysql_fetch_array($query)){
										echo "<article style=\"position: absolute; width: 100%; opacity: 0;\">"; 
										echo "<div class=\"banner-wrap\">";
										echo "<div class=\"short\" >";
										echo "<img class=\"img-responsive\" src=\"admin/".$record['gambar']."\" alt=\"\">";
										echo "</div>";
										echo "<div class=\"month\">";
										echo "<div class=\"title-col\" id=\"title-half\"><h4>".$record['keterangan_jenis']."</h4></div>";
										echo "<div class=\"month-grid\">";
										echo "<p style=\"text-align:justify;\">".$record['keterangan']."</p>";
										echo "</div>";
										echo "</div>";
										echo "<div class=\"clearfix\"> </div>";
										echo "</div>";
										echo "</article>";
									}
								}
							}
						?>
					</div>
				</div>
				<!---->
				<script src="js/jquery.wmuSlider.js"></script> 
					  <script>
						$('.example1').wmuSlider({
							 pagination : false,
						});         
				</script> 	
			</div> 
		</a>
	</div>
	<!--<div class="col-md-2 banner-right">
		<div class=banner-right-cont>
			<img src="images/discount.png">
		</div>
		<div class=banner-right-cont>
			<img src="images/quality.png">
		</div>
	</div>-->
	<div class="clearfix"> </div>
</div>
</div>
	<!---->
<div class="content">	
	<div class="container">
		<!---->
		<div class="content-middle customized_col">
			<div style="float:left; color:white; margin:2em;">
					<img src="images/invitation.png"/>
				</div>
			<div class="middle-content">
				<div class="middle">
					<h3>DAFTAR DAN PESAN...!!!</h3>
					<p class="from">Macam - macam kripik buah semuanya <br/> ada disini. Kripik apel, kripik semangka, <br/> kripik nangka, kripik pisang, <br/>semuanya ada disini.</p>
				</div>
					<a href="index.php?page=login" class="get">PESAN SEKARANG..!!</a>
			</div>
				<div class="clearfix"> </div>
		</div>
<!---->
<?php
	for ($loop=0; $loop < 2; $loop++){
		echo "<div class=\"content-bottom\">";
		if ($loop==0){
			$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING(id_jenis) ORDER BY keterangan_jenis DESC LIMIT 0,4";
		}else{
			$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING(id_jenis) ORDER BY keterangan_jenis DESC LIMIT 4,8";
		}
		$query = mysql_query($ssql);
		$count = 0;
		
		while ($record = mysql_fetch_array($query)){
			
			$harga = number_format($record['harga'],"0",",",".");
			
			if ($count == 0){
				$act = "";
			}else if ($count == 1){
				$act = "act";
			}else if ($count == 2){
				$act ="ten";
			}
			$id_detitem = $record['id_jenis'];
			echo "<div class=\"col-md-3 bottom-content $act\">";
			echo "<img class=\"img-responsive\" src=\"/ecomerce/admin/".$record['gambar']."\" alt=\"\" >";
			echo "<p class=\"tun\">".$record['keterangan_jenis']."</p>";
			//echo "<p class=\"best\">new</p>";
			echo "<p class=\"number\"><img src=\"images/money.png\"><span>$harga</span></p>";
			echo "<div class=\"pro-grid\">";
			//echo "<p>".$record['keterangan_jenis']."</p>";
			//echo "<b>".strtoupper("akema")."</b>";
			echo "<div class=\"pro-btns\">";		
			echo "<a href=\"index.php?page=single&id_detitem=$id_detitem\"><span class=\"detail\" >Detail</span></a>";
			echo "<a href=\"index.php?cartact=add&id=$id_detitem\"><span class=\"buy-in\" >ADD TO CART</span></a>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			$count+=1;
		}
		echo"<div class=\"clearfix\"> </div>";
		echo "</div>";
	}
	?>
<!---->