<html>
	<head>
		<title>Biodata</title>
	</head>

	<body>
		<?php
            include_once("config/mysql.php");

			if(isset($_POST["minat1"]))
				$kode_minat1 = 1;
			else
				$kode_minat1 = 0;
			
			if(isset($_POST["minat2"]))
				$kode_minat2 = 1;
			else
				$kode_minat2 = 0;
			
			if(isset($_POST["minat3"]))
				$kode_minat3 = 1;
			else
				$kode_minat3 = 0;
			
			if(isset($_POST["minat4"]))
				$kode_minat4 = 1;
			else
				$kode_minat4 = 0;

			if(isset($_POST["minat5"]))
				$kode_minat5 = 1;
			else
				$kode_minat5 = 0;

            extract($_POST);

            $db=new MySQL();
            $db->connect();
            $db->execute("INSERT INTO tb_biodata VALUES
                ('',
                '$nama',
                '$nrp',
                '$kelas',
                '$sex',
                '$agama',
                '$tmplahir',
                '$tgllahir',
                '$alamat',
                '$sd',
                '$smp',
                '$sma',
                '$email',
                '$homepage',
                '$hobby',
                '$kode_minat1',
                '$kode_minat2',
                '$kode_minat3',
                '$kode_minat4',
                '$kode_minat5')
            "); 

			print("Halo, $nama. Data Anda sudah disimpan ");
			print("Terimakasih. ");
			print("<a href='bacabiodata.php'>Baca Biodata >></a>");
		?>
	</body>
</html>