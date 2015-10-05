<html>
	<head>
		<title>Buku Tamu</title>
	</head>

	<body>
		<?php
			if(isset($_POST["minat1"]))
				$kode_minat1 = "v";
			else
				$kode_minat1 = "-";
			
			if(isset($_POST["minat2"]))
				$kode_minat2 = "v";
			else
				$kode_minat2 = "-";
			
			if(isset($_POST["minat3"]))
				$kode_minat3 = "v";
			else
				$kode_minat3 = "-";
			
			if(isset($_POST["minat4"]))
				$kode_minat4 = "v";
			else
				$kode_minat4 = "-";
			
			$kode_minat = $kode_minat1 . $kode_minat2 . $kode_minat3 . $kode_minat4;
			//$kode_minat = $_POST["minat1"];
			//Simpan
			$nama = $_POST["nama"];
			$pegangan = fopen("bukutamu.txt", "a");
			fputs($pegangan, $nama . "\n");
			fputs($pegangan, $_POST["sex"] . "\n");
			fputs($pegangan, $_POST["email"] . "\n");
			fputs($pegangan, $kode_minat . "\n");
			fputs($pegangan, $_POST["komentar"] . "\n");
			fputs($pegangan, "*-*\n");
			fclose($pegangan);
			print("Halo, $nama. Data Anda sudah disimpan ");
			print("Terimakasih. ");
			print("<a href='bacatamu.php'>Baca Buku Tamu >></a>");
		?>
	</body>
</html>