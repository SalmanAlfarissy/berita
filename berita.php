
<?php

include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';
if($_GET['module']==''){
    $_GET['idkat']=isset($_GET['idkat'])? $_GET['idkat'] : '';
    if ($_GET['idkat']=='') {
         echo "<h2>Hot News</h2>";
	$terkini = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
                
                $m = mysqli_query($koneksi, "SELECT * FROM berita where id_berita ='$t[id_berita]'");
                $nm = mysqli_fetch_array($m);
                
		$_SESSION['idberita']=$t['id_berita'];
		$_SESSION['iduser']=$t['id_user'];

                $isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
                
		if($t['gambar']!=''){
                    echo "<div class='row'>
                      <div class='col-sm-4 grid-margin'>
                        <div class='position-relative'>
                          <div class='rotate-img'>
                            <img
                              src='admin/foto_berita/$t[gambar]'
                              alt='thumb'
                              class='img-fluid'
                            />
                          </div>
                          
                          <div class='badge-positioned'>
                            
                          </div>
                        </div>
                      </div>
                      
                      <div class='col-sm-8  grid-margin'>
                        <a class='nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]><h2 class='mb-2 font-weight-600'>
                          $t[judul]
                        </h2></a>
                        <div class='fs-13 mb-2'>
                          <span class='mr-2'>$t[tgl_posting] </span> | by : $nu[username]
                        </div>
                        <p class='mb-0'>
                          $isi ... <a class = 'nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]>Selengkapnya</a> <br><hr color=white>
                        </p>
                      </div>
                    </div>";
                  
			
		}
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a class='nav-link' href=?module=detailberita&id=$s[id_berita]&uid=$s[id_user]&vw=1&kl=$nm[id_kategori]>$s[judul]</a></p>";
	}
    }else if($_GET['idkat']!= null){
         echo "<h2>$_GET[n]</h2>";
	$terkini = mysqli_query($koneksi, "SELECT * FROM berita where id_kategori = '$_GET[idkat]'");
	
	while($t=mysqli_fetch_array($terkini)){
		$u = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$t[id_user]'");
		$nu = mysqli_fetch_array($u);
                
                $m = mysqli_query($koneksi, "SELECT * FROM berita where id_berita ='$t[id_berita]'");
                $nm = mysqli_fetch_array($m);
                
		$_SESSION['idberita']=$t['id_berita'];
		$_SESSION['iduser']=$t['id_user'];

                $isi_berita = htmlentities(strip_tags($t['isi_berita']));
		$isi = substr($isi_berita,0,210);
		$isi= substr($isi_berita,0,strrpos($isi," "));
                
		if($t['gambar']!=''){
                    echo "<div class='row'>
                      <div class='col-sm-4 grid-margin'>
                        <div class='position-relative'>
                          <div class='rotate-img'>
                            <img
                              src='admin/foto_berita/$t[gambar]'
                              alt='thumb'
                              class='img-fluid'
                            />
                          </div>
                          
                          <div class='badge-positioned'>
                            
                          </div>
                        </div>
                      </div>
                      
                      <div class='col-sm-8  grid-margin'>
                        <a class='nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]><h2 class='mb-2 font-weight-600'>
                          $t[judul]
                        </h2></a>
                        <div class='fs-13 mb-2'>
                          <span class='mr-2'>$t[tgl_posting] </span> | by : $nu[username]
                        </div>
                        <p class='mb-0'>
                          $isi ... <a class = 'nav-link' href=?module=detailberita&id=$t[id_berita]&uid=$t[id_user]&vw=1&kl=$nm[id_kategori]>Selengkapnya</a> <br><hr color=white>
                        </p>
                      </div>
                    </div>";
                  
			
		}
		
	}
	
	echo "<h2>Berita Sebelumnya</h2>";
	$sebelum=mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1,5");
	while ($s=mysqli_fetch_array($sebelum)){
		echo "<p><a class='nav-link' href=?module=detailberita&id=$s[id_berita]&uid=$s[id_user]&vw=1&kl=$nm[id_kategori]>$s[judul]</a></p>";
	}
        
    }
   
        
        
}
    else if($_GET['module']=='detailberita'){
        $_GET['vw']=isset($_GET['vw'])? $_GET['vw'] : '';
    if ($_GET['vw']=='') {
         $detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
            $d = mysqli_fetch_array($detail);
            $u = mysqli_query($koneksi, "select * from user where id='$_GET[uid]'");
            $nu = mysqli_fetch_array($u);
             
            $omen = mysqli_query($koneksi, "select count(id_komentar) as koment from komentar where id_berita='$_GET[id]'");
            $komen = mysqli_fetch_array($omen);
            
            $l = mysqli_query($koneksi, "select count(dilihat) as lihat from view where id_berita='$_GET[id]'");
            $nl = mysqli_fetch_array($l);
            
            $t = mysqli_query($koneksi, "select * from kategori where id='$_GET[kl]'");
            $nt = mysqli_fetch_array($t);
            

            if ($d['gambar']!=''){
                    echo "<h1>$d[judul]</h1>";
                    echo "<p class='blog-post-meta'>Tanggal : $d[tgl_posting] | by : $nu[username] | Komentar : $komen[koment] | Dilihat : $nl[lihat] | Kategori :<b> $nt[nama_kategori]</b></p> ";
                    echo "<img src='admin/foto_berita/$d[gambar]' width=200 height=100 hspace=10 border=0 align='left'>";
            }

            echo "<p>$d[isi_berita]</p>";
            echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] </p>";
            echo "<br><br>";
         
            include_once './indexkomentar.php';
    }
    else if ($_GET['vw']!= NULL) {
         $detail=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
            $d = mysqli_fetch_array($detail);
            $u = mysqli_query($koneksi, "select * from user where id='$_GET[uid]'");
            $nu = mysqli_fetch_array($u);
             mysqli_query($koneksi,"INSERT INTO view (id_berita,dilihat) 
	                       VALUES('$_GET[id]','$_GET[vw]')");
            $omen = mysqli_query($koneksi, "select count(id_komentar) as koment from komentar where id_berita='$_GET[id]'");
            $komen = mysqli_fetch_array($omen);
            
            $l = mysqli_query($koneksi, "select count(dilihat) as lihat from view where id_berita='$_GET[id]'");
            $nl = mysqli_fetch_array($l);
            
            $t = mysqli_query($koneksi, "select * from kategori where id='$_GET[kl]'");
            $nt = mysqli_fetch_array($t);
            

            if ($d['gambar']!=''){
                    echo "<h1>$d[judul]</h1>";
                    echo "<p class='blog-post-meta'>Tanggal : $d[tgl_posting] | by : $nu[username] | Komentar : $komen[koment] | Dilihat : $nl[lihat] | Kategori :<b> $nt[nama_kategori]</b></p> ";
                    echo "<img src='admin/foto_berita/$d[gambar]' width=200 height=100 hspace=10 border=0 align='left'>";
            }

            echo "<p>$d[isi_berita]</p>";
            echo "<br> [ <a href=javascript:history.go(-1)>Kembali</a> ] </p>";
            echo "<br><br>";
         
            include_once './indexkomentar.php';
    }
           
              
            
	
}

?>