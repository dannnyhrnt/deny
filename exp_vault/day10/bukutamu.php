<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>

<body>
    <form action="simpan.php" id="form1" method="post" name="form1">
        <p>Nama : <input id="nama" name="nama" type="text"></p>

	    <p>Jenis Kelamin :<br>
	        <input checked name="sex" type="radio" value="P"> Wanita<br>
	        <input name="sex" type="radio" value="L"> Laki - Laki
	    </p>

        <p>E-Mail : <input id="email" name="email" type="text"></p>

        <p>Minat :</p>

        <p>
        	<input id="minat1" name="minat1" type="checkbox" value="checkbox">Bonsai<br>
        	<input id="minat2" name="minat2" type="checkbox" value="checkbox">Tanaman Hias<br>
        	<input id="minat3" name="minat3" type="checkbox" value="checkbox">Musik Jazz<br>
        	<input id="minat4" name="minat4" type="checkbox" value="checkbox">Pemrograman
        </p>
		<p>
			Komentar :<br>
        	<textarea cols="40" id="komentar" name="komentar"></textarea>
    	</p>

        <p>
        	<input name="Submit" type="submit" value="Submit">
        	<input name="Reset" type="reset" value="Cancel">
        	<a href="bacatamu.php">Baca <strong>Buku Tamu</strong></a>
        </p>

        <p><br></p>
    </form>
</body>
</html>