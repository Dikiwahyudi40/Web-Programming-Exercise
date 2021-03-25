<?php
$baris = 4;
$kolom = 5;
$angka = 1;
echo "<table border = '1'>";
for ($i=1; $i<5; $i++){
	echo "<tr>";
	for ($j=1; $j<6; $j++){
		echo "<td>";
		echo $angka;
		$angka++;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>