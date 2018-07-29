<div class="container">
			<div class=" register customized_col">
		  	  <form name = "form_register" method = "POST" action = "accountmng.php"> 
				 <div class="col-md-3 register-top-grid">
					 <div>
						<span>Nama Depan</span>
						<input type="text" name = "text_depan" placeholder="nama depan"<?php //if (isset($_GET['depan']) && $_GET['depan'] != "") {$depan = $_GET['depan']; echo "value=\"$depan\"";}	?> required > 
					 </div>
					 <div>
						 <span>Provinsi</span>
						 <input type="text" name = "text_provinsi" placeholder="provinsi"<?php //if (isset($_GET['provinsi']) && $_GET['provinsi'] != "") {$provinsi = $_GET['provinsi']; echo "value=\"$provinsi\"";}?> required > 
					 </div>
					  <div>
						 <span>Alamat Rumah</span>
						 <input type="text" name = "text_alamat" placeholder="alamat RT/RW dsb"<?php //if (isset($_GET['alamat']) && $_GET['alamat'] != "") {$alamat = $_GET['alamat']; echo "value=\"$alamat\"";}?> required > 
					 </div>
					 <div>
						<span>Nomor Handphone / Telpon</span>
						<input type="text" name = "text_telpon" placeholder="0341-99999"<?php //if (isset($_GET['telpon']) && $_GET['telpon'] != "") {$telpon = $_GET['telpon']; echo "value=\"$telpon\"";}?> required >
					 </div>
					  <div>
							<span>Password</span>
							<input type="password" name = "text_password">
					 </div>
					 <input type="submit" value="SIMPAN">
					 </div>
					 <div class="col-md-3 register-top-grid">
						<div>
							<span>Nama Belakang</span>
							<input type="text" name = "text_belakang" placeholder="nama belakang"<?php //if (isset($_GET['belakang']) && $_GET['belakang'] != "") {$belakang = $_GET['belakang']; echo "value=\"$belakang\"";}?> required > 
						</div>
						<div>
							<span>Kota</span>
							<input type="text" name = "text_kota" placeholder="kota"<?php //if (isset($_GET['kota']) && $_GET['kota'] != "") {$kota = $_GET['kota']; echo "value=\"$kota\"";}?> required > 
						</div>
						<div>
							<span>Kode Pos</span>
							<input type="text" name = "text_pos" placeholder="55879"<?php //if (isset($_GET['pos']) && $_GET['pos'] != "") {$pos = $_GET['pos']; echo "value=\"$pos\"";}?> required >
						</div>
						 <div>
							<span>Email</span>
							<input type="text" name = "text_email" placeholder="example@mail.com"<?php //if (isset($_GET['telpon']) && $_GET['telpon'] != "") {$telpon = $_GET['telpon']; echo "value=\"$telpon\"";}	?> required >
						</div>
					 </div>
				     <div class="col-md-3 register-bottom-grid">
							 <div>
								<img src = "images/registerman.png">
							</div>
					 </div>
					  <div class="col-md-3 register-top-grid" id="right-cont-register">
						<h2>KENAPA HARUS DAFTAR ?</h2>
						<div>
							<p>
								Dengan mendaftarkan diri kamu ke akema kamu bisa dengan mudah membeli dan memesan kripik buah yang kamu mau. Tunggu apalagi ? isi form pendaftaranmu sekarang juga.
							</p>
						</div>
						<h2>UDAH DAFTAR ?</h2>
						<div>
							<a href="index.php?page=product"class="gobuy">MULAI BELANJA</a>
						</div>
						 <input type = "hidden" name = "action" value = "register">
					  </div>
					 <div class="clearfix"> </div>
				</form>
			</div>
		</div>
