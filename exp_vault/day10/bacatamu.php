<html>
	<head>
		<title>Isi Buku Tamu</title>
	</head>
	
	<body>
		<a href="bukutamu.php"><< Kembali ke <strong>Buku Tamu</strong></a>
		<hr />

		<?php
			$no_data  = 1;
			$pegangan = fopen("bukutamu.txt", "r");

			while (!feof($pegangan)) {
			    $nama = trim(fgets($pegangan, 255));
			    if ($nama == FALSE)
			        break;
			    
			    $kelamin    = trim(fgets($pegangan, 255));
			    $email      = trim(fgets($pegangan, 255));
			    $kode_minat = trim(fgets($pegangan, 255));
			    $minat      = "";
			    for ($i = 0; $i < 4; $i++) {
			        if (substr($kode_minat, $i, 1) == "v")
			            switch ($i) {
			                case 0:
			                    $minat .= "Bonsai<BR>\n";
			                    break;
			                case 1:
			                    $minat .= "Tanaman Hias<BR>\n";
			                    break;
			                case 2:
			                    $minat .= "Musik Jazz<BR>\n";
			                    break;
			                case 3:
			                    $minat .= "Pemrograman<BR>\n";
			                    break;
			            }
			    }
			    $ket = "";
			    while (!feof($pegangan)) {
			        $tmp = trim(fgets($pegangan, 255));
			        if ($tmp == "*-*")
			            break;
			        $ket .= ($tmp . "<BR>\n");
			    }
			    //tampilkan
			    print("<BR> Data ke-$no_data : </br>\n");
			    printf("Nama : %s <br>\n", $nama);
			    printf("Kelamin : %s <br>\n", $kelamin == "L" ? "Pria" : "Wanita");
			    printf("Email : %s <br>\n", $email);
			    print("<br>\n");
			    if (!empty($minat)) {
			        print("Minat : <br>\n");
			        print("$minat <br>\n");
			    }
			    printf("Komentar : %s <br>\n", $ket);
			    print("===========================");
			    print("<br>\n");
			    $no_data++;
			}
		?>
	</body>
</html>