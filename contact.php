<?php 
	$ssql="SELECT * FROM profil WHERE id_profil=1";
	$query = mysql_query($ssql);
	$deskripsi="";
	$bbm="";
	$telepon="";
	$email="";
	$alamat="";
	$maps="";
	
	while ($record=mysql_fetch_array($query)){
		$deskripsi=$record['deskripsi'];
		$bbm=$record['bbm'];
		$telepon=$record['telepon'];
		$email=$record['email'];
		$alamat=$record['alamat'];
		$maps=$record['maps'];
	}
?>
<div class="contact-form customized_col" id="col_cont">
	<div class="cont_contact">
		<h1>Profile perusahaan</h1>
		<p style="text-align:justify;"><?php echo $deskripsi;?></p>
	</div>
	<div class="col-md-6 contact-grid" id="cont_cont">
		<h1>Hubungi</h1>
		<img src="images/tokone.jpg" style="margin-bottom:1em;"/>
		<p>BBM: <?php echo $bbm;?></p>
		<p>No. Telepon: <?php echo $telepon;?></p>
		<p>E-mail: <?php echo $email;?></p>
		<!---
		<form name="contact-form" method="POST" action="informasi.php">
			<p class="your-para">Nama</p>
			<input type="text" name="text_name" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
			<p class="your-para">E-mail</p>
			<input type="text" name="text_email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
			<p class="your-para">Pesan</p>
			<textarea cols="77" rows="6" name="text_message" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
			<input type="hidden" name="informasi" value="mailbox">
			<div class="send">
				<input type="submit" value="Send" >
			</div>
		</form> -->
	</div>
	<div class="col-md-6 contact-in cont_contact">
		<h1>Lokasi</h1>			
		<div class="map">
			<iframe src="<?php echo $maps;?>"></iframe>
		</div>
		<div class="more-address cont_contact"> 
			<div class="address-more">
				<p><?php echo $alamat;?></p>
			</div>
			<div class="address-left">
				<img src="images/keripik_pis.png" style="margin-bottom:1em;"/>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>

				<!---->