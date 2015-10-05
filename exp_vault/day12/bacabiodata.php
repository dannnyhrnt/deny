
<html>
	<head>
		<title>Isi Biodata</title>
	</head>
	
	<body>
		<a href="biodata.php"><< Kembali ke <strong>Biodata</strong></a>
		<hr />

		<?php
            error_reporting(E_ALL);
            include_once("config/mysql.php");
            $db=new MySQL();
            $db->connect();
            $db->execute("SELECT b.id AS id, nama, nrp, kelas, gender, agama, tempat_lahir, tanggal_lahir, alamat, rp_sd, rp_smp, rp_sma,
                email, homepage, hobby, int_komputer, int_sport, int_travelling, int_writing, int_reading
                FROM tb_biodata b, tb_agama a, tb_gender g
                WHERE b.id_agama = a.id
                AND b.id_gender = g.id
            "); 
            $data = $db->get_dataset();
            $no_data  = 1;

            for($i=0; $i<COUNT($data); $i++) {
                
                $minat = "";
                if($data[$i][15] == 1)
                    $minat .= "Komputer<BR>\n";
                if($data[$i][16] == 1)
                    $minat .= "Sport<BR>\n";
                if($data[$i][17] == 1)
                    $minat .= "Traveling<BR>\n";
                if($data[$i][18] == 1)
                    $minat .= "Writing<BR>\n";
                if($data[$i][19] == 1)
                    $minat .= "Reading<BR>\n";

			    //tampilkan
			    print("<BR> Data ke-$no_data : </br>\n");
			    printf("Nama : %s <br>\n", $data[$i][1]);
			    printf("NRP : %s <br>\n", $data[$i][2]);
			    printf("Kelas : %s <br>\n", $data[$i][3]);
			    printf("Jenis Kelamin : %s <br>\n", $data[$i][4]);
			    printf("Agama : %s <br>\n", $data[$i][5]);
			    printf("TTL : %s / ", $data[$i][6]);
			    printf("%s <br>\n", $data[$i][7]);

			    printf("Alamat : %s <br>\n", $data[$i][8]);
			    print("Riwayat Pendidikan : <br>");
			    print('<ol type="a">');
	        		printf('<li>SD   : %s</li>', $data[$i][9]);
	        		printf('<li>SMP  : %s</li>', $data[$i][10]);
	        		printf('<li>SMA  : %s</li>', $data[$i][11]);
	        	print('</ol>');

			    printf("Email : %s <br>\n", $data[$i][12]);
			    printf("Homepage : %s <br>\n", $data[$i][13]);
			    printf("Hobby : %s <br>\n", $data[$i][14]);
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