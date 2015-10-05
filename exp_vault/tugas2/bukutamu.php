<html>
<head>
<title>Isi Form</title>
</head>

<body>
<form name="form1" method="post" action="simpan.php">
<table border="0">
  <tr>
  		<td width="200px">1. Nama		:</td>
        <td><input name="nama" type="text" id="nama"></td>
  </tr>
  
  <tr>
  		<td>2. NRP		:</td>	
        <td><input name="nrp" type="text" id="nrp"></td>
  </tr>
  <tr>
  		<td>3. Kelas	:</td>
        <td><input name="kelas" type="text" id="kelas"></td>
  </tr>
  <tr>
  		<td>4. Jenis Kelamin :</td>
        <td><input name="sex" type="radio" value="P" checked>
			Wanita 
		<input name="sex" type="radio" value="L">
            Laki - Laki </td>
  </tr>
  <tr>
  		<td>5. Agama	:</td>
    	   <td>
           <select name="agama">
    		<option value="1">Islam</option>
    		<option value="2">Hindu</option>
    		<option value="3">Kristen</option>
    		<option value="4">Katolik</option>
    		<option value="5">Budha</option>
    		</select>
            </td>	
  </tr>
  <tr>
  		<td>6. Tempat / Tanggal Lahir:</td>
        <td>    <input name="tempat" type="text" id="tempat">
/ <input name="tgllahir" type="text" id="tgllahir"></td>
  </tr>
  <tr>
  		<td>7. Alamat	:
        <td><textarea name="alamat" cols="40" id="alamat"></textarea></td>
  </tr>
  <tr>
  		<td>8. Riwayat Pendidikan:</td>
        <td>
        <ol type="a">
        <li>SD  :<input name="sd" type="text" id="sd"></li>
        <li>SMP :<input name="smp" type="text" id="smp"></li>
        <li>SMA :<input name="sma" type="text" id="sma"></li>
        </ol>
        </td>
  </tr>
  <tr>
  		<td>9. Email:</td>
    	<td><input name="email" type="text" id="email"></td>  
  </tr>
  <tr>
  		<td>10. Homepage:	
    	<td><input name="homepage" type="text" id="homepage"></td>
  </tr>
  <tr>
  		<td>11. Hobby:	
    	<td><textarea name="hobi" cols="40" id="hobi"></textarea></td> 
  </tr>
  <tr>
  		<td>12. Interest:
    	<td>  <input name="minat1" type="checkbox" id="minat1" value="checkbox"> 
  Komputer
  <input name="minat2" type="checkbox" id="minat2" value="checkbox">
  Sport
  <input name="minat3" type="checkbox" id="minat3" value="checkbox"> 
  Travelling
  <input name="minat4" type="checkbox" id="minat4" value="checkbox"> 
  Writing
  <input name="minat5" type="checkbox" id="minat5" value="checkbox"> 
  Reading</td> 
  </tr>
</table>

<p>    <input type="submit" name="simpan" value="SIMPAN">
    <input type="reset" name="reset" value="RESET">
</p>
</form>
</body>
</html>