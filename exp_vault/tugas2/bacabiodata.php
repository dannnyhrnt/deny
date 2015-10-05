<html>
<head>
<title>baca biodata</title>
</head>

<body>
<?php
 $no_data = 1;
 $pegangan = fopen("biodata.txt", "r");
 while ( ! feof($pegangan))
 {
   $nama = trim(fgets($pegangan, 255));
    if ($nama == FALSE)
	 break;
	
   $nrp = trim(fgets($pegangan, 255));	
   $kelas = trim(fgets($pegangan, 255));
   $kelamin = trim(fgets($pegangan, 255));
   $agama = trim(fgets($pegangan, 255));
   $tempat = trim(fgets($pegangan, 255));
   $tgl = trim(fgets($pegangan, 255));
   $alamat = trim(fgets($pegangan, 255));
   $sd = trim(fgets($pegangan, 255));
   $smp = trim(fgets($pegangan, 255));
   $sma = trim(fgets($pegangan, 255));
   $email = trim(fgets($pegangan, 255));
   $homepage = trim(fgets($pegangan, 255));
   $hobi = trim(fgets($pegangan, 255));
   $kode_minat = trim(fgets($pegangan, 255));
  
   $minat = "";
   for ($i = 0; $i < 5; $i++) 
   {
     if (substr($kode_minat,$i,1) == "v" )
	 switch($i)
	 {
	   case 0:
	    $minat .= "Komputer<BR>\n";
		break;
	   
	   case 1:
	    $minat .= "Sport<BR>\n";
		break;
		
	   case 2:
	    $minat .= "Travelling<BR>\n";
		break;
	  
	   case 3:
	    $minat .= "Writing<BR>\n";
		break;

	   case 3:
	    $minat .= "Reading<BR>\n";
		break;
	 }
   }
   $ket = "";
   while ( ! feof($pegangan))
   {
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
   printf("Kelamin : %s <br>\n",
          $kelamin == "L" ? "Pria" : "Wanita");
   printf("Agama : %s <br>\n", $agama);
   printf("Tempat / Tanggal Lahir : %s <br>\n", $tempat. "/" .$tgl);
   printf("Alamat : %s <br>\n", $alamat);
   printf(" <b> Riwayat Pendidikan :  <br>\n </b>");
   printf("SD : %s <br>\n", $sd);
   printf("SMP : %s <br>\n", $smp);
   printf("SMA : %s <br>\n", $sma);
   printf("Email : %s <br>\n", $email);
   printf("Homepage : %s <br>\n", $homepage);
   printf("Hobby : %s <br>\n", $hobi);   
   
   
   print("<br>\n");
   if( ! empty($minat))
   {
   	 print("Interest : <br>\n");
	 print("$minat <br>\n");
   }
   print("<br>\n");   
   $no_data++;  
 
 }
?>
</body>
</html>
