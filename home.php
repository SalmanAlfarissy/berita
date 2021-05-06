<!DOCTYPE html>
<?php
include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';

         if($_GET['module']==''){
         
         $terkini = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1");
         
                while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$c = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$t[id_kategori]'");
		$nu = mysqli_fetch_array($u);
		$nc = mysqli_fetch_array($c);
                $m = mysqli_query($koneksi, "SELECT * FROM berita where id_berita ='$t[id_berita]'");
                $nm = mysqli_fetch_array($m);
		
		if($t['gambar']!=''){
                    echo "
                <div class='position-relative'>
                  <img
                    src='admin/foto_berita/$t[gambar]'
                    alt='banner'
                    class='img-fluid '
                  />
                  
                  <div class='banner-content'>
                    <div class='badge badge-danger fs-12 font-weight-bold mb-3'>
                      $nc[nama_kategori]
                    </div>
                    
                   <a class='nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]><h1 class='mb-2'>
                      $t[judul]
                    </h1></a>
                    
                    <div class='fs-12'>
                      <span class='mr-2'>$t[tgl_posting] </span> | by : $nu[username]
                    </div>
                    
                  </div>
                
              ";
                    
                    
		}
	}
        include_once './Sidebar.php';
}

?>                
          