<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>

</head>

<body>
    <form action="simpan_biodata.php" id="form1" method="post" name="form1">
    	<table border="0">
			<tr>
				<td width="200px">Nama :</td>
				<td><input id="nama" name="nama" type="text"></td>
			</tr>

			<tr>
				<td>NRP :</td>
				<td><input id="nrp" name="nrp" type="text"></td>
			</tr>

			<tr>
				<td>Kelas :</td>
				<td><input id="kelas" name="kelas" type="text"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<input checked name="sex" type="radio" value="L"> Laki - Laki
			        <input name="sex" type="radio" value="P"> Wanita
				</td>
			</tr>

			<tr>
				<td>Agama :</td>
				<td>
					<select name="agama">
			    		<option value="1">Islam</option>
			    		<option value="2">Kristen</option>
			    		<option value="3">Katholik</option>
			    		<option value="4">Hindu</option>
			    		<option value="5">Buddha</option>
			    		<option value="6">Lainnya</option>
			    	</select>
				</td>
			</tr>

			<tr>
				<td>Tempat/Tanggal Lahir :</td>
				<td>
					<input id="tmplahir" name="tmplahir" type="text"> / 
        			<input id="tgllahir" name="tgllahir" type="text">
				</td>
			</tr>

			<tr>
				<td>Alamat :</td>
				<td><textarea id="alamat" name="alamat"></textarea></td>
			</tr>

			<tr>
				<td>Riwayat Pendidikan :</td>
				<td>
					<ol type="a">
		        		<li>SD  : <input id="sd" name="sd" type="text"></li>
		        		<li>SMP : <input id="smp" name="smp" type="text"></li>
		        		<li>SMA : <input id="sma" name="sma" type="text"></li>
		        	</ol>
				</td>
			</tr>

			<tr>
				<td>Email :</td>
				<td><input id="email" name="email" type="text"></td>
			</tr>

			<tr>
				<td>Homepage :</td>
				<td><input id="homepage" name="homepage" type="text"></td>
			</tr>

			<tr>
				<td>Hobby :</td>
				<td><textarea id="hobby" name="hobby"></textarea></td>
			</tr>

			<tr>
				<td>Interest :</td>
				<td>
					<input id="minat1" name="minat1" type="checkbox" value="checkbox">Komputer
		        	<input id="minat2" name="minat2" type="checkbox" value="checkbox">Sport
		        	<input id="minat3" name="minat3" type="checkbox" value="checkbox">Travelling
		        	<input id="minat4" name="minat4" type="checkbox" value="checkbox">Writing
		        	<input id="minat5" name="minat5" type="checkbox" value="checkbox">Reading
				</td>
			</tr>
		</table>

        <p>
        	<input name="Submit" type="submit" value="Submit">
        	<input name="Reset" type="reset" value="Cancel">
        	<a href="biodata.php">Baca <strong>Biodata</strong></a>
        </p>

        <p><br></p>
    </form>
</body>
</html>