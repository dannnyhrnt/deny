<html>
	<head>
		<title>Biodata</title>
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

			if(isset($_POST["minat5"]))
				$kode_minat5 = "v";
			else
				$kode_minat5 = "-";
			
			$kode_minat = $kode_minat1 . $kode_minat2 . $kode_minat3 . $kode_minat4 . $kode_minat5;
			//$kode_minat = $_POST["minat1"];
			//Simpan
			$nama = $_POST["nama"];
			$pegangan = fopen("biodata.txt", "a");
			fputs($pegangan, $_POST["nama"] . "\n");
			fputs($pegangan, $_POST["nrp"] . "\n");
			fputs($pegangan, $_POST["kelas"] . "\n");
			fputs($pegangan, $_POST["sex"] . "\n");
			fputs($pegangan, $_POST["agama"] . "\n");
			fputs($pegangan, $_POST["tmplahir"] . "\n");
			fputs($pegangan, $_POST["tgllahir"] . "\n");
			fputs($pegangan, $_POST["alamat"] . "\n");

			if($_POST["sd"] != '')
				fputs($pegangan, $_POST["sd"] . "\n");
			else
				fputs($pegangan, '-' . "\n");

			if($_POST["smp"] != '')
				fputs($pegangan, $_POST["smp"] . "\n");
			else
				fputs($pegangan, '-' . "\n");

			if($_POST["sma"] != '')
				fputs($pegangan, $_POST["sma"] . "\n");
			else
				fputs($pegangan, '-' . "\n");

			fputs($pegangan, $_POST["email"] . "\n");
			fputs($pegangan, $_POST["homepage"] . "\n");
			fputs($pegangan, $_POST["hobby"] . "\n");
			fputs($pegangan, $kode_minat . "\n");
			fputs($pegangan, "*-*\n");
			fclose($pegangan);
			print("Halo, $nama. Data Anda sudah disimpan ");
			print("Terimakasih. ");
			print("<a href='bacabiodata.php'>Baca Biodata >></a>");
		?>
	</body>
</html>