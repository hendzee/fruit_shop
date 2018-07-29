<div class="container">
	<div class="register customized_col">
		<?php 
			if (isset($_GET['login-inf'])){
				echo"<div class=\"login-inf\" id=\"log-inf-acc\">";
				echo"<h5>ID / PASSWORD INVALID</h5>";
				echo"</div>";
			} 
		?>
		<div class="col-md-5 login-right">
				<h3>MEMBER</h3>
			<p>Masuk dan mulai berbelanja.</p>
			<form name = "form_login" method = "POST" action = "accountmng.php">
			  <div>
				<span>ID Member</span>
				<input type="text" name = "text_idcustomer" placeholder="Masukan ID anda" required> 
			  </div>
			  <div>
				<span>Password</span>
				<input type="password" placeholder="password" name = "text_password" required> 
			  </div>
			  <input type = "hidden" name = "action" value = "login">
			  <input type="submit" value="Login">
			</form>
		   </div>	
		   <div class="col-md-7 login-left">
				<h3>Customers Baru</h3>
			 <p>Dengan mendaftar dan menjadi member, anda bisa sesuka hati untuk berbelanja di keripiku.com secara online. Selain itu anda juga bisa dapat informasi dan penawaran - penawaran spesial dari kami. Untuk cara pembelianya anda dapat melihatnya di halaman Cara Beli.</p>
			 <a class="acount-btn" href="index.php?page=register">BUAT AKUN</a>
		   </div>
		   
		   <div class="clearfix"> </div>
	</div>
</div>