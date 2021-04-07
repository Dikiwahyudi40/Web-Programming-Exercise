<?php
	function hitungDenda($tglKembali, $tglTelat){
		
		$pecah1 = explode("-", $tglKembali);
		$date1 = $pecah1[2];
		$month1 = $pecah1[1];
		$year1 = $pecah1[0];
		
		$pecah2 = explode("-", $tglTelat);
		$date2 = $pecah2[2];
		$month2 = $pecah2[1];
		$year2 = $pecah2[0];
		
		$jdKembali = GregorianToJD($month1, $date1, $year1);
		$jdTelat = GregorianToJD($month2, $date2, $year2);
		
		$selisih = $jdTelat - $jdKembali;
		
		$totalDenda = $selisih * 3000;
		return $totalDenda;
	}
echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05");
?>