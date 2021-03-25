<?php
$baris = 4;
$kolom = 5;
$angka = 1;
echo "<table border = '1'>";
for ($i=1; $i<5; $i++){
	echo "<tr>";
	for ($j=1; $j<6; $j++){
		if ($angka%2 == 0){
			echo "<td bgcolor='red'>";
			echo "<font style='color:white;'>".$angka."</font>";
			$angka++;
			echo "</td>"
;		}
		else{
			echo "<td bgcolor='white'>";
			echo "<font style='color:red;'>".$angka."</font>";
			$angka++;
			echo "</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>