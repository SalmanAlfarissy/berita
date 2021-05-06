<div class="d-flex left-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="index.php">Home</a> /User
        
      </div>
	  
<p>User</p>
<?php
include ("koneksi.php");
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
<a href=?page=user&aksi=entri class="btn btn-primary fa fa-plus"> Entri User</a>
<h2>List User</h2>
<table class="table table-bordered table-striped">
	<tr>
		<th>No</th>
		<th>User Name</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	$tampil=mysqli_query($koneksi,"SELECT * FROM user order by id ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['level']; ?></td>
		<td><a href=?page=user&aksi=edit&id=<?php echo $data['id']; ?> class="btn btn-success btn-sm fa fa-pencil"> Edit</a>
			<a href="aksi_user.php?page=user&proses=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data ?');" class="btn btn-danger btn-sm fa fa-trash-o"> Hapus</td> </a>
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
<a href=?page=user&aksi=list class="btn btn-danger fa fa-table"> List User</a>
<h2>Entri User</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=input">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>
    <div class="form-group">
		<label>Password</label>
		<input type="text" name="pass" class="form-control" placeholder="Password">
	</div>

	<div class="form-group">
		<label>Level</label>
		<select name="level" class="form-control">
			<option>Administrator</option>
			<option>Moderator</option>
			<option>Operator</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
case 'edit' :	
$ambil=mysqli_query($koneksi,"SELECT * FROM user WHERE id=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>

<h2>Edit User</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=update">
	<div class="form-group">
		<label>id user</label>
		<input type="text" name="id" value="<?php echo $r['id'];?>" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label>UserName</label>
		<input type="text" name="username" value="<?php echo $r['username'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label>Password</label>
		<input type="text" name="pass" class="form-control">
	</div>
	<div class="form-group">
		<label>Level</label>
		<select name="level" class="form-control">
			<option>Administrator</option>
			<option>Moderator</option>
			<option>Operator</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Update</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
}
?>