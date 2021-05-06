<div class="d-flex left-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="index.php">Home</a> / Kategori
        
      </div>
           
<?php
include ("koneksi.php");
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
<a href=?page=kategori&aksi=entri class="btn btn-primary fa fa-plus"> Entri Kategori</a>
<h2>List Kategori</h2>
<table class="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>Nama Kategori</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	$tampil=mysqli_query($koneksi,"SELECT * FROM kategori order by nama_kategori ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['nama_kategori']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
		<td><a href=?page=kategori&aksi=edit&id=<?php echo $data['id']; ?> class="btn btn-success btn-sm fa fa-pencil"> Edit</a>
			<a href="aksi_kategori.php?page=kategori&proses=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data ?');" class="btn btn-danger btn-sm fa fa-trash-o"> Hapus</td> </a>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
<?php
	break;
case 'entri' :	
?>
<a href=?page=kategori&aksi=list class="btn btn-danger fa fa-table"> List Kategori</a>
<h2>Entri Kategori</h2>

<form role="form" method="POST" action="aksi_kategori.php?page=kategori&proses=input">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
	</div>
    <div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="ket" class="form-control" placeholder="keterangan">
	</div>

	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
case 'edit' :	
$ambil=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>
<a href=?page=kategori&aksi=list class="btn btn-danger fa fa-table"> List Kategori</a>

<h2>Edit Kategori</h2>

<form role="form" method="POST" action="aksi_kategori.php?page=kategori&proses=update">
	<div class="form-group">
		<label>id Kategori</label>
		<input type="text" name="id" value="<?php echo $r['id'];?>" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="nama_kategori" value="<?php echo $r['nama_kategori'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="ket" value="<?php echo $r['keterangan'];?>" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Update</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
}
?>
      