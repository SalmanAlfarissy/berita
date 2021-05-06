<?php
include "admin/koneksi.php";
$_GET['module']=isset($_GET['module'])? $_GET['module'] : '';
if($_GET['module']==''){
    echo "<h2>Hot News</h2>";
	$terkini = mysqli_query($koneksi, "SELECT * FROM berita where id_kategori = '$_GET[idkat]' ORDER BY id_berita DESC LIMIT 5");
	
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
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

