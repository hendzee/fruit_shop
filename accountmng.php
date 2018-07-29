<?php
	include 'config.php';
?>

<?php
	
	//UNTUK MELAKUKAN LOGIN
	function login($id_customer, $password){
		$valid = 0;
		$_SESSION['id_customer'] = "";
		$id_customer = strtolower ($id_customer);
		
		for ($count = 0; $count < 2; $count++){
			if ($count == 0){
				$ssql = "SELECT * FROM customer WHERE id_customer = '$id_customer'";
			}else if ($count == 1){
				$ssql = "SELECT * FROM customer WHERE password = '$password'";
			}
			$query = mysql_query($ssql);
			$res = mysql_num_rows($query);
			
			if ($res > 0){
				$valid += 1;
			}
			
			if ($valid == 2){
				$ssql = "SELECT * FROM customer WHERE id_customer = '$id_customer' AND password = '$password'";
				$query = mysql_query($ssql);
				$res2 = mysql_num_rows($query);
				
				if ($res2 > 0){
					while ($record = mysql_fetch_array($query)){
						$_SESSION['id_customer'] = $record['id_customer'];
					}
				}
				header ('location:index.php?page=home');
			}
		}
		
		if ($valid < 2){
			unset($_SESSION['id_customer']);
			header ('location:index.php?page=login&login-inf=true');
		}		
	}
	
	//MEMPEROLEH ID BARU
	function get_id(){
		
		$letter = array ('a','b','c','d','e','f','g','h');
		$string = "";
		
		for ($count = 0; $count < 5; $count++){
			
			if ($count == 0 || $count == 2 || $count == 3){
				$rand = rand(0,7);
				$getstring = $letter[$rand];
				$string = "$string"."$getstring";
			}else {
				$rand = rand(0,10);
				$string = "$string"."$rand";
			}
		}
		
		return "$string";
	}
	
	//account manager switch action
	if (isset($_POST['text_idcustomer']) && isset($_POST['text_password']) && ($_POST['action'] == 'login')){
		$id_customer = $_POST['text_idcustomer'];
		$password = $_POST['text_password'];
		
		login($id_customer, $password);
	}
	//logout
	else if (isset($_GET['action']) && $_GET['action'] == 'logout'){
		unset ($_SESSION['id_customer']);
		header ('location:index.php?page=home');
	}
	//register
	else if (isset($_POST['action']) && $_POST['action'] == 'register'){
		$depan = $_POST['text_depan'];
		$belakang = $_POST['text_belakang'];
		$provinsi = $_POST['text_provinsi'];
		$kota = $_POST['text_kota'];
		$alamat = $_POST['text_alamat'];
		$pos = $_POST['text_pos'];
		$telpon = $_POST['text_telpon'];
		$email = $_POST['text_email'];
		$password = $_POST['text_password'];
		
		$par = array($depan,$belakang,$provinsi,$kota,$alamat,$pos,$telpon,$email,$password);
		
		$total_par = 0;
		
		for ($count = 0; $count < 9; $count++){
			if (isset($par[$count]) && $par[$count] != ""){
				$total_par+=1;
				echo "$par[$count]<br/>";
			}
		}
		
		if ($total_par < 9){
			//gagal;
			header ('location: index.php?page=register&depan='.$depan.'&belakang='.$belakang.'&provinsi='.$provinsi.'&kota='.$kota.'&alamat='.$alamat.'&pos='.$pos.'&telpon='.$telpon.'&email='.$email.'');
		}
		else {
			$new_id = get_id();
			
			$ssql = "SELECT * FROM customer WHERE id_customer = '$new_id'";
			$query = mysql_query($ssql);
			$id_redundant = mysql_num_rows($query);
			
			while ($id_redundant > 0){
				$new_id = get_id();
			
				$ssql = "SELECT * FROM customer WHERE id_customer = '$id'";
				$query = mysql_query($ssql);
				$id_redundant = mysql_num_rows($query);
			}
			
			$ssql = "INSERT INTO customer VALUES ('$new_id','$depan','$belakang','$provinsi','$kota','$alamat','$pos','$telpon','$email','$password')";
			$query = mysql_query($ssql);
			header ('location:register_success.php?new_id='.$new_id);
		}
	}
?>