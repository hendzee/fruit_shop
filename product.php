	<?php
			$bound = 4;
			$notfound = false;
			
			if (isset($_GET['topage'])){
				$topage = $_GET['topage'];
			}
			else{
				$topage = 1;
			}
			
			$pos = ($topage - 1) * ($bound + 8);
			
			$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING(id_jenis) ORDER BY keterangan_jenis";
				
			//mengambil nilai dari kotak pencarian
			if (isset($_GET['text_search']) && isset ($_GET['search'])){
				$search = $_GET['text_search'];
				$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING(id_jenis) WHERE keterangan_jenis LIKE '$search%' ORDER BY keterangan_jenis";
				$foundquery = mysql_query($ssql);
				$found = mysql_num_rows($foundquery);
				
				if ($found <= 0){
					$ssql = "SELECT * FROM detail_kripik INNER JOIN jenis_kripik USING(id_jenis) WHERE keterangan_jenis LIKE '$search%' ORDER BY keterangan_jenis";
					$foundquery = mysql_query($ssql);
					$found = mysql_num_rows($foundquery);
					
					if ($found <= 0) {
						$notfound = true;
					}
				}
			}
			
			if ($notfound == true){
				echo "data tidak ditemukan";
			}
			else {
				for ($count = 0; $count < 3; $count++){
				
					echo "<div class=\"content-bottom bottom-product\">";
					
					//gunakan ini agar tidak terjadi penumpukan
					$ssql2 = $ssql." DESC LIMIT $pos, $bound";
					$query = mysql_query($ssql2);
					$count2 = 0;
					
					while ($record=mysql_fetch_array($query)){
						$harga = number_format($record['harga'],"0",",",".");
						
						if ($count2 == 0 || $count2 == 2){
							$act = "";
						}else if ($count2 == 1){
							$act = "ten";
						}
						$id_detitem = $record['id_jenis'];
						echo "<div class=\"col-md-4 bottom-content $act\">";
						echo "<img class=\"img-responsive\" src=\"/ecomerce/admin/".$record['gambar']."\" alt=\"\" >";
						echo "<p class=\"tun\">".$record['keterangan_jenis']."</p>";
						echo "<p class=\"number\"><img src=\"images/money.png\"><span>$harga</span></p>";
						echo "<div class=\"pro-grid\">";
						echo "<p>".$record['keterangan_jenis']."</p>";
						echo "<b>".strtoupper("AKEMA")."</b>";
						echo "<div class=\"pro-btns\">";
						echo "<a href=\"index.php?page=single&id_detitem=$id_detitem\"><span class=\"detail\" >Detail</span></a>";
						echo "<a href=\"index.php?cartact=addprod&id=$id_detitem&topage=$topage\"><span class=\"buy-in\" >ADD TO CART</span></a>";
						echo "</div>";
						echo "</div>";			
						echo "</div>";
						$count2++;					
					}
					echo "<div class=\"clearfix\"> </div>";
					echo "</div>";
				
					$pos += 4;
				}
			}
		?>
		<!---->
<ul class="start">
	<li><a href="#"><i> </i></a></li>					
	<?php
		$ssql2 = "SELECT * FROM detail_kripik";
		$query = mysql_query($ssql2);
		$numrow = mysql_num_rows($query);
		$numpage = ceil ($numrow / ($bound + 8));
		
		for ($count = 0; $count < $numpage; $count++){
			$selpage = $count + 1;
			echo "<li ><a href=\"index.php?page=product&topage=$selpage\"";
			if ($selpage == $topage){
				echo "class = \"activepage\"";
			}
			echo"><span>$selpage</span></a></li>";
		}
	?>
	<li><a href="#"><i class="next"> </i></a></li>
</ul>
<!---->