<?php
	include_once 'config.php';
?>
<html>
	<head>
		<title>DAFTAR SESSION</title>
	</head>
	<body>
		<?php
			$hari = date("Y-m-d h:m:s");
			echo $hari;
		?>
		<table cellspacing="3" cellpadding="3" style="text-align:center;" border="2">
			<thead>
				<tr>
					<th>nama</th>
					<th>nilai</th>
				</tr>
			</thead>
			<tbody>
					<?php
						foreach($_SESSION as $name => $value){
						$name;
						echo "<tr>";
						echo "<td>";
						echo "$name";
						echo "</td>";
						echo "<td>";
						echo "$value";
						echo "</td>";
						echo "</tr>";
						}
					?>
			</tbody>
		</table>
		<?php
		for ($a = 0; $a < 10; $a++){
			$letter = array ('a','b','c','d','e','f','g','h');
			$string = "";
			
			for ($count = 0; $count < 8; $count++){
				
				if ($count == 0 || $count == 2 || $count == 3){
					$rand = rand(0,7);
					$getstring = $letter[$rand];
					$string = "$string"."$getstring";
				}else {
					$rand = rand(0,10);
					$string = "$string"."$rand";
				}
			}
			
			echo strtoupper($string)."<br/><br/>";
		}
		?>		
	</body>
</html>	