<!DOCTYPE html>
<html>
<head>
	<title>Soal 1</title>
</head>
<body>
	<form action="" method="POST">
		<table border="0">
			<tr>
				<td>Angka 1</td>
				<td>:</td>
				<td><input type="text" name="angka1"></td>
			</tr>
			<tr>
				<td>Angka 2</td>
				<td>:</td>
				<td><input type="text" name="angka2"></td>
			</tr>
			<tr>
				<td>Aritmatika</td>
				<td>:</td>
				<td>
					<select name="aritmatika">
						<option value="1">Penjumalahan</option>	
						<option value="2">Pengurangan</option>
						<option value="3">Perkalian</option>
						<option value="4">Pembagian</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Proses"></td>
			</tr>
		</table>
	</form>

	<?php
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
			$hasil = $x / $y;
			return $hasil;
		}

	?>
</body>
</html>

		