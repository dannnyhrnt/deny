<head>
<title>Simpan Form</title>
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
 $nrp = $_POST["nrp"];
 $kelas = $_POST["kelas"];
 $tempat = $_POST["tempat"];
 $tgl = $_POST["tgllahir"];
 $alamat = $_POST["alamat"];
 $sd = $_POST["sd"];
 $smp = $_POST["smp"];
 $sma = $_POST["sma"];
 $email = $_POST["email"];
 $homepage = $_POST["homepage"];
 //$hobi = $_POST["hobi"];
 
 $pegangan = fopen("biodata.txt", "a");
 fputs($pegangan, $nama . "\n");
 fputs($pegangan, $nrp . "\n");
 fputs($pegangan, $kelas . "\n");
 fputs($pegangan, $_POST["sex"] . "\n");
 fputs($pegangan, $_POST["agama"] . "\n");
 fputs($pegangan, $tempat . "\n" . $tgl . "\n");
 fputs($pegangan, $alamat . "\n");
 fputs($pegangan, $sd . "\n");
 fputs($pegangan, $smp . "\n");
 fputs($pegangan, $sma . "\n");
 fputs($pegangan, $email . "\n");
 fputs($pegangan, $homepage . "\n");
 fputs($pegangan, $_POST["hobi"] . "\n");
 fputs($pegangan, $kode_minat . "\n");
 //fputs($pegangan,  . "\n");
 fputs($pegangan, "*-*\n");
 fclose($pegangan);
 print("Halo, $nama. Data Anda sudah disimpan ");
 print("Terimakasih");
 ?>
</body>
</html>
