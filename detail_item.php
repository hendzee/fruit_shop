<?php
	$network_bands = "";
	$dim = "";
	$wgh = "";
	$os = "";
	$cpu = "";
	$chip = "";
	$i_mem = "";
	$e_mem = "";
	$bat = "";
	$stb_time = "";
	$talk_time = "";
	$p_camera = "";
	$s_camera = "";
	$video = "";
	$f_camera = "";
	$dis = "";
	$s_pixel = "";
	$m_touch = "";
	$protect = "";
	$gprs = "";
	$edge = "";
	$c_speed = "";
	$wlan = "";
	$btooth = "";
	$nfc = "";
	$usb = "";
	$loud = "";
	$jack = "";
		
	$ssql = "SELECT * FROM detail_item WHERE id_detitem = '$select_id'";
	$query = mysql_query($ssql);
	while ($record = mysql_fetch_array($query)){
		$network_bands  = $record[4];
		$dim = $record[5];
		$wgh = $record[6]; 
		$os = $record[7];
		$cpu = $record[8];
		$chip = $record[9];
		$i_mem = $record[10];
		$e_mem = $record[11];
		$bat = $record[12];
		$stb_time = $record[13];
		$talk_time = $record[14];
		$p_camera = $record[15];
		$s_camera = $record[16];
		$video = $record[17];
		$f_camera = $record[18];
		$dis = $record[19];
		$s_pixel = $record[20];
		$m_touch = $record[21];
		$protect = $record[22];
		$gprs = $record[23];
		$edge = $record[24];
		$c_speed = $record[25];
		$wlan = $record[26];
		$btooth = $record[27];
		$nfc = $record[28];
		$usb = $record[29];
		$loud = $record[30];
		$jack = $record[31];
	}
	
	$arr_detail = array ($network_bands , $dim , $wgh	, $os	,$cpu, $chip	, $i_mem, $e_mem, $bat, $stb_time, $talk_time, $p_camera, $s_camera, $video, $f_camera, $dis, $s_pixel, $m_touch, $protect, $gprs, $edge, $c_speed, $wlan, $btooth, $nfc, $usb, $loud, $jack);
	$arr_detail_name = array (
		'Network bands',
		'Dimensi',
		'Berat',
		'Os',
		'CPU',
		'Chipset',
		'Memory internal',
		'Memory eksternal',
		'Baterai',
		'Waktu standby',
		'Waktu menelpon',
		'Kamera belakang',
		'Kamera Depan',
		'Kualitas video',
		'Fitur Kamera',
		'Tampilan',
		'Ukuran dan pixel',
		'Multi touch',
		'Keamanan',
		'GPRS',
		'EDGE',
		'Kecepatan internet',
		'Wlan',
		'Bluetooth',
		'nfc',
		'USB',
		'Loudspeaker',
		'3.5mm Jack'
	)
?>