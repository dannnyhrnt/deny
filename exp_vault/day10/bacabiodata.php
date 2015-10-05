<html>
	<head>
		<title>Isi Biodata</title>
	</head>
	
	<body>
		<a href="biodata.php"><< Kembali ke <strong>Biodata</strong></a>
		<hr />

		<?php
			$no_data  = 1;
			$pegangan = fopen("biodata.txt", "r");

			while (!feof($pegangan)) {
			    $nama = trim(fgets($pegangan, 255));
			    if ($nama == FALSE)
			        break;
			    
			    $nrp    	= trim(fgets($pegangan, 255));
			    $kelas    	= trim(fgets($pegangan, 255));
			    $kelamin    = trim(fgets($pegangan, 255));
			    $agama	    = trim(fgets($pegangan, 255));
			    $tmplahir   = trim(fgets($pegangan, 255));
			    $tgllahir   = trim(fgets($pegangan, 255));
			    $alamat		= trim(fgets($pegangan, 255));
			    $sd			= trim(fgets($pegangan, 255));
			    $smp		= trim(fgets($pegangan, 255));
			    $sma		= trim(fgets($pegangan, 255));
			    $email      = trim(fgets($pegangan, 255));
			    $homepage   = trim(fgets($pegangan, 255));
			    $hobby      = trim(fgets($pegangan, 255));
			    $kode_minat = trim(fgets($pegangan, 255));
			    $minat      = "";
			    for ($i = 0; $i < 5; $i++) {
			        if (substr($kode_minat, $i, 1) == "v")
			            switch ($i) {
			                case 0:
			                    $minat .= "Komputer<BR>\n";
			                    break;
			                case 1:
			                    $minat .= "Sport<BR>\n";
			                    break;
			                case 2:
			                    $minat .= "Traveling<BR>\n";
			                    break;
			                case 3:
			                    $minat .= "Writing<BR>\n";
			                    break;
			                case 4:
			                    $minat .= "Reading<BR>\n";
			                    break;
			            }
			    }

			    switch ($agama) {
			    	case 1:
			    		$val_agama = "Islam";
			    		break;
			    	case 2:
			    		$val_agama = "Kristen";
			    		break;
			    	case 3:
			    		$val_agama = "Katholik";
			    		break;
			    	case 4:
			    		$val_agama = "Hindu";
			    		break;
			    	case 5:
			    		$val_agama = "Buddha";
			    		break;
			    	
			    	default:
			    		$val_agama = "Lainnya";
			    		break;
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
			    printf("NRP : %s <br>\n", $nrp);
			    printf("Kelas : %s <br>\n", $kelas);
			    printf("Jenis Kelamin : %s <br>\n", $kelamin == "L" ? "Pria" : "Wanita");
			    printf("Agama : %s <br>\n", $agama);
			    printf("TTL : %s / ", $tmplahir);
			    printf("%s <br>\n", $tgllahir);

			    printf("Alamat : %s <br>\n", $alamat);
			    print("Riwayat Pendidikan : <br>");
			    print('<ol type="a">');
	        		printf('<li>SD   : %s</li>', $sd);
	        		printf('<li>SMP  : %s</li>', $smp);
	        		printf('<li>SMA  : %s</li>', $sma);
	        	print('</ol>');

			    printf("Email : %s <br>\n", $email);
			    printf("Homepage : %s <br>\n", $homepage);
			    printf("Hobby : %s <br>\n", $hobby);
			    print("<br>\n");
			    if (!empty($minat)) {
			        print("Minat : <br>\n");
			        print("$minat <br>\n");
			    }
			    print("===========================");
			    print("<br>\n");
			    $no_data++;
			}
		?>
	</body>
</html>