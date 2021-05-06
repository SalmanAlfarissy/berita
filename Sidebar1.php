
                        
<?php

include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';

         if($_GET['module']==''){
             echo "<div class='col-lg-3 stretch-card grid-margin'>
<div class='card'>
                  <div class='card-body'>
                    <h2>Berita Terbaru</h2>
                    <ul class='vertical-menu'>";
    
         $terkini = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
         
                while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$c = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$t[id_kategori]'");
		$nu = mysqli_fetch_array($u);
		$nc = mysqli_fetch_array($c);
                $m = mysqli_query($koneksi, "SELECT * FROM berita where id_berita ='$t[id_berita]'");
                $nm = mysqli_fetch_array($m);
		
		if($t['gambar']!=''){
                    echo "<div class='pr-3'><div class='rotate-img'>
                        <img
                          src='admin/foto_berita/$t[gambar]'
                          alt='thumb'
                          class='img-fluid img-lg'
                        /></div>";
                    echo "<h6><a class = 'nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]>$t[judul]</a></h6><div class='fs-12'>
                          <span class='mr-2'>$t[tgl_posting] </span> | by : $nu[username]
                        </div>";
                    
		}
	}
     
        echo "                   </ul>
                  </div>
                </div>
</div>";
}  
?>


 
              
    