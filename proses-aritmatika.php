<?php 
	include"function/aritmatika.php";


	$angka1 = 0;
	$angka2 = 0;

	if (isset($_POST['submit'])) {
		$angka1 = @$_POST['angka1'];
		$angka2 = @$_POST['angka2'];
		$aritmatika = @$_POST['aritmatika'];

		if ($aritmatika == 1) {
			echo "Hasil Penjumlahan : " . penjumlahan($angka1, $angka2);
		} elseif ($aritmatika == 2) {
			echo "Hasil Pengurangan : " . pengurangan($angka1, $angka2);
		} elseif ($aritmatika == 3) {
			echo "Hasil Perkalian : " . perkalian($angka1, $angka2);
		} elseif ($aritmatika == 4) {
			echo "Hasil Pembagian : " . pembagian($angka1, $angka2);
		} else {
			echo "Gagal...";
		}


	}
?>