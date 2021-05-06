
<?php

include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';

         if($_GET['module']==''){
    echo "</div><div class='col-xl-4 stretch-card grid-margin'>
                <div class='card bg-dark text-white'>
                  <div class='card-body'>
                    <h2>Komentar Terbaru</h2>";
         
         $terkini = mysqli_query($koneksi, "SELECT * FROM komentar ORDER BY id_komentar DESC LIMIT 5");
         
                while($t=mysqli_fetch_array($terkini)){
		
		$c = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$t[id_berita]'");
		$nc = mysqli_fetch_array($c);
                 $m = mysqli_query($koneksi, "SELECT * FROM berita where id_berita ='$t[id_berita]'");
                $nm = mysqli_fetch_array($m);

                    echo "<div class='d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between'>
                         <a><h6>$t[nama] di </h6></a> <a class='nav-link' href=?module=detailberita&id=$nc[id_berita]&uid=$nc[id_user]&vw=1&kl=$nm[id_kategori]><h6> $nc[judul] </h6></a>
                    </div>
                 ";  
	}
        echo " </div>
                </div>
              </div>";
        

}  
?>
              
