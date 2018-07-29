	<div class="shell hal_size">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Dashboard</a>
			<span>&gt;</span>
			Current Articles
		</div>
		<!-- End Small Nav -->
		<br />
		<!-- Main -->
			<div id="main">
				<div class="cl">&nbsp;</div>
				
				<!-- Content -->
				<div class="content_hal">
					
					<!-- Box -->
					<div class="box">
						<!-- Box Head -->
						<div class="box-head">
							<h2 class="left">Banner</h2>
						</div>
						<!-- End Box Head -->	
						<form name="form_banner" action="actmenu.php">
						<input type="hidden" name="actmenu" value="set_ban">
						<!-- Table -->
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tambah_item">
								<tbody>
											<?php 
												$ssql = "SELECT * FROM jenis_kripik";
												$opt = array('selban_1', 'selban_2', 'selban_3');
												$s_opt = array('link 1', 'link 2', 'link 3');
												
												for ($x=0; $x<3; $x++){
													$query = mysql_query($ssql);
													echo "<tr>";
													echo "<td>input $s_opt[$x]</td>";
													echo "<td>";
													echo "<select name=\"$opt[$x]\">";
													while($record = mysql_fetch_array($query)){
														echo "<option value=\"".$record['id_jenis']."\">".$record['keterangan_jenis']."</option>";
													}
													echo "<select>";
													echo "</td>";
													echo "</tr>";
												}
											?>
								</tbody>
							</table>						
						</div>
						<!-- Table -->
						<?php 
							$ssql="SELECT * FROM profil WHERE id_profil=1";
							$query = mysql_query($ssql);
							$deskripsi="";
							$bbm="";
							$telepon="";
							$email="";
							$facebook="";
							$twitter="";
							$instagram="";
							$alamat="";
							$maps="";
							
							while ($record=mysql_fetch_array($query)){
								$deskripsi=$record['deskripsi'];
								$bbm=$record['bbm'];
								$telepon=$record['telepon'];
								$email=$record['email'];
								$facebook=$record['facebook'];
								$twitter=$record['twitter'];
								$instagram=$record['instagram'];
								$alamat=$record['alamat'];
								$maps=$record['maps'];
							}
						?>
					</div>
					<!-- End Box -->
					<div>
						<input type="submit" class="btn-success" value="simpan"/>
					</div>
				</div>
				<!-- End Content -->
				</form>
				<!-- Sidebar -->
				<div class="sidebar_hal">
					
					<!-- Box -->
					<div class="box">
						
						<!-- Box Head -->
						<div class="box-head">
							<h2>Deskripsi Toko</h2>
						</div>
						<!-- End Box Head-->
						<form name="form_editdeskripsi" method="GET" action="actmenu.php">
						<div class="box-content hal">
							<input type="hidden" name="actmenu" value="edit_deskripsi"/>
							<textarea rows="9" cols="61"name="text_deskripsi"><?php echo "$deskripsi";?></textarea>
						</div>
						<div>
							<input type="submit" class="btn-success" value="simpan" style="margin-top:1em;"/>
					</div>
						</form>
					</div>
					<!-- End Box -->
				</div>
				<!-- End Sidebar -->
				
				<div class="cl">&nbsp;</div>			
			</div>
		<!-- Main -->
		
		<!-- Main -->
			<div id="main">
				<div class="cl">&nbsp;</div>
				
				<!-- Content -->
				<div class="content_hal">
					
					<!-- Box -->
					<div class="box">
						<!-- Box Head -->
						<div class="box-head">
							<h2 class="left">Kontak dan Medsos</h2>
						</div>
						<!-- End Box Head -->	
						<form name="form_profil" method="GET" action="actmenu.php">
						<input type="hidden" name="actmenu" value="set_profil">
						<!-- Table -->
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tambah_item">
								<tbody>
									<tr>
										<td><h2 class="sub_definition">Isikan dengan Lengkap</h2></td>
										<td></td>
									</tr>
									<tr>
										<td>BBM</td>
										<td>
											<input type="text" name="text_bbm" value="<?php echo "$bbm";?>"/>
										</td>
									</tr>
									<tr>
										<td>no telepon</td>
										<td>
											<input type="text" name="text_telepon" value="<?php echo "$telepon";?>"/>
										</td>
									</tr>
									<tr>
										<td>email</td>
										<td>
											<input type="text" name="text_email" value="<?php echo "$email";?>"/>
										</td>
									</tr>
									<tr>
										<td>link facebook</td>
										<td>
											<input type="text" name="text_facebook" value="<?php echo "$facebook";?>"/>
										</td>
									</tr>
									<tr>
										<td>link twitter</td>
										<td>
											<input type="text" name="text_twitter" value="<?php echo "$twitter";?>"/>
										</td>
									</tr>
									<tr>
										<td>link instagram</td>
										<td>
											<input type="text" name="text_instagram" value="<?php echo "$instagram";?>"/>
										</td>
									</tr>
								</tbody>
							</table>						
						</div>
						<!-- Table -->
					</div>
					<!-- End Box -->
					<div>
						<input type="submit" class="btn-success" value="simpan"/>
					</div>
				</div>
				<!-- End Content -->
				</form>
				<!-- Sidebar -->
				<div class="sidebar_hal">
					
					<!-- Box -->
					<div class="box">
						
						<!-- Box Head -->
						<div class="box-head">
							<h2>Lokasi</h2>
						</div>
						<!-- End Box Head-->
						
						<div class="box-content hal">
							<!-- Table -->
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tambah_item">
								<tbody>
								<form name="form_lokasi" method="GET" action="actmenu.php">
									<input type="hidden" name="actmenu" value="edit_lokasi"/>
									<tr>
										<td>Alamat</td>
										<td>
											<textarea cols="40" rows="5"name="text_alamat"><?php echo "$alamat";?></textarea>
										</td>
									</tr>
									<tr>
										<td>Maps <a href="https://maps.google.com/" target="_blank">(Google Map, click disini)</a></td>
										<td>
											<input type="text" name="text_maps" value="<?php echo "$maps";?>"/>
										</td>
									</tr>
								</tbody>
							</table>						
						</div>
						<!-- Table -->
						</div>
						<div>
							<input type="submit" class="btn-success" value="simpan" style="margin-top:1em;"/>
					</div>
					</form>
					</div>
					<!-- End Box -->
				</div>
				<!-- End Sidebar -->
				
				<div class="cl">&nbsp;</div>			
			</div>
		<!-- Main -->
	</div style="margin-bottom:2em;">