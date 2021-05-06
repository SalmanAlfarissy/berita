<html>
<head>

<h3>Komentar</h3>

<?php
	include "admin/koneksi.php";
        
	$tampil=mysqli_query($koneksi,"SELECT * FROM komentar where id_berita=$_GET[id] ORDER BY id_komentar DESC ");
	while ($data=mysqli_fetch_array($tampil)) {
		echo "<hr/>";
		echo "<b>$data[nama]</b><br>";
		echo "email : <i>$data[email]</i><br>";
		echo "$data[isi_komentar]<br>";
                echo "$data[data_create]";
	}

?>
</body>
</html>