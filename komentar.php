<html>
<head>

<h3>Komentar</h3>
<hr>
<body>
<form action="" method="post" >
Nama   :<br> <input type="text" name="nama"><br>
E-Mail :<br> <input type="text" name="email"><br>
Isi    : <br>
<textarea name="komentar" cols="45" rows="10"> </textarea><br>
<input type="submit" value="Kirim" name="submit">
<input type="reset" value="Batal">
</form>
<?php
include "admin/koneksi.php";
if (isset($_POST['submit'])) {

$nama=$_POST['nama'];
$email=$_POST['email'];
$isikomentar=$_POST['komentar'];

$result= mysqli_query($koneksi,"insert into komentar values('null','$_GET[id]','$nama','$email','$isikomentar',current_timestamp)");
echo "<script>top.location='index.php?module=detailberita&id=$_GET[id]&uid=$_GET[uid]&kl=$_GET[kl]'</script>";
}

?>
</body>

</html>