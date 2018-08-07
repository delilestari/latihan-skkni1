<?php 
	include"function/aritmatika.php";
	include"function/terbilang.php";

	$angka1 = 0;
	$angka2 = 0;
	$hasil  = 0;

	if (isset($_POST['submit'])) {
		$angka1 = @$_POST['angka1'];
		$angka2 = @$_POST['angka2'];
		$aritmatika = @$_POST['aritmatika'];

		if ($aritmatika == 1) {
			$hasil = penjumlahan($angka1, $angka2);
			$terbilang = terbilang($hasil);

			echo "Hasil Penjumlahan : " . $hasil; 
		} elseif ($aritmatika == 2) {
			$hasil = pengurangan($angka1, $angka2);
			$terbilang = terbilang($hasil);

			echo "Hasil Pengurangan : " . $hasil;
		} elseif ($aritmatika == 3) {
			$hasil = perkalian($angka1, $angka2);
			$terbilang = terbilang($hasil);

			echo "Hasil Perkalian : " . $hasil;
		} elseif ($aritmatika == 4) {
			$hasil = pembagian($angka1, $angka2);
			$terbilang = terbilang($hasil);

			echo "Hasil Pembagian : " . $hasil;
		} else {
			echo "Gagal...";
		}

		echo "<br>Terbilang : ".$terbilang;


	}
?>