<?php

	function penjumlahan($x, $y) {
		$hasil = $x + $y;
		return $hasil;
	}

	function pengurangan($x, $y) {
		$hasil = $x - $y;
		return $hasil;
	}

	function perkalian($x, $y) {
		$hasil = $x * $y;
		return $hasil;
	}

	function pembagian($x, $y) {
		$hasil2 = $x / $y;
		$hasil = round($hasil2, 2);
		return $hasil;
	}

?>