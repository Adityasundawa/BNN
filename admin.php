<?php
    ob_start();
    //cek session
    session_start();

    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {
?>
<!--

Name        : Aplikasi Rehabilitasi Rawat Jalan
Version     : v1.0.2
Description : Aplikasi Rehabilitasi Rawat Jalan secara digital BNN KEPRI.
Date        : 2020
Developer   : IMRON SIMANJUNTAK
Phone/WA    : 0823-8800-9021
Email       : imronsimanjuntak2@gmail.com
Website     : https://batam-kepri.com

-->
<!doctype html>
<html lang="en">

<!-- Include Head START -->
<?php include('include/head.php'); ?>
<!-- Include Head END -->

<!-- Body START -->
<body class="bg">

<!-- Header START -->
<header>
            <!-- Include Header Instansi START -->
          <div class="center"> Sistem Informasi Rehabilitasi Rawat Jalan </div> 
          <div class="center"> BNN PROV KEPRI</div>
            <!-- Include Header Instansi END -->
<!-- Include Navigation START -->
<?php include('include/menu.php'); ?>
<!-- Include Navigation END -->

               
                <div class="card">
                    
                    <marquee onmouseover="this.stop()" onmouseout="this.start()">
                      
                        <div class="text"> Selamat Datang <?php echo $_SESSION['nama']; ?>, Anda login sebagai
                        <?php
                            if($_SESSION['admin'] == 1){
                                echo "Super Admin. Anda memiliki akses penuh terhadap sistem.";
                            } elseif($_SESSION['admin'] == 2){
                                echo "Kabid Rehabilitasi. Dan Selamat Bekerja di aplikasi SIRAJA.";

                            } elseif($_SESSION['admin'] == 3){
                                echo "Klink (IPWL), Dan Selamat Bekerja di aplikasi SIRAJA.";

                            } elseif($_SESSION['admin'] == 4){
                                echo "Konselor/Dokter, Dan Selamat Bekerja di aplikasi SIRAJA.";

                            } else {
                                echo "Klien/Wali Klien, Semangat Menuju Kesembuhan Untuk Keluarga yang Baik Anda.";
                            }?>
                        </div>
                    </marquee>
                    
                </div>
            
</header>
<!-- Header END -->

<!-- Main START -->
<main>

    <!-- container START -->
    <div class="container">

    <?php
        if(isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
            switch ($page) {
                case 'tsm':
                    include "manajemen_Klien.php";
                    break;
                case 'ctk':
                    include "cetak_disposisi.php";
                    break;
                case 'wp':
                    include "wali_Klien.php";
                    break;

                case 'asm':
                    include "agenda_surat_masuk.php";
                    break;

                case 'ref':
                    include "referensi.php";
                    break;
                case 'sett':
                    include "pengaturan.php";
                    break;
                case 'pro':
                    include "profil.php";
                    break;
                case 'gsm':
                    include "galeri_sm.php";
                    break;

                case 'add_a':
                    include "tambah_assesmen.php";
                    break;
                case 'edit_a':
                    include "edit_assesmen.php";
                    break;
                case 'del_a':
                    include "hapus_assesmen.php";
                    break;
                case 'ass':
                    include "assesmen.php";
                    break;
                case 'scr':
                    include "scrining.php";
                    break;
                case 'bdt':
                    include "biodata.php";
                    break;
                case 'jp':
                    include "jadwal_Klien.php";
                    break;
                case 'grf':
                    include "grafik.php";
                    break;
                case 'cprj':
                    include "cetak_pernyataan_rj.php";
                    break;
                case 'ct_p':
                    include "cetak_penjamin.php";
                    break;
                case 'add_z':
                    include "tambah_jenis_zat.php";
                    break;
                case 'del_z':
                    include "hapus_jenis_zat.php";
                    break;
                case 'edit_z':
                    include "edit_jenis_zat.php";
                    break;
                case 'api':
                    include "assesment_perhari_ini.php";
                    break;
                case 'bp':
                    include "bnnp.php";
                    break;
                case 'wkdm':
                    include "waliklien_darimenu.php";
                    break;
                case 'add_tjkl':
                    include "tambah_jadwal_konsel_keluarga.php";
                    break;
                case 'del_tjkl':
                    include "hapus_jadwal_konsel_keluarga.php";
                    break;
                case 'edit_tjkl':
                    include "edit_jadwal_konsel_keluarga.php";
                    break;
                case 'add_tjklpok':
                    include "tambah_jadwal_konsel_kelompok.php";
                    break;
                case 'del_tjklpok':
                    include "hapus_jadwal_konsel_kelompok.php";
                    break;
                case 'edit_tjklpok':
                    include "edit_jadwal_konsel_kelompok.php";
                    break;
                case 'ct_fawl_drm':
                    include "cetak_formulir_asesmen_wajib_lapor_dan_rehab_medis.php";
                    break;

            }
        } else {
    ?>
        <!-- Row START -->

        <div class="row">
            <div class="center">
                <div class="accent">
                <br/>
                    <a href="?page=tsm"><img src="./asset/img/manpas.png"/></a> &nbsp;
                    <a href="?page=api"><img src="./asset/img/asesmen.png"/></a>
                    <a href="?page=grf"><img src="./asset/img/statistik2.png"/></a>
                <br/><br/>
                    </center>
                <br/>
                </div>   
            </div>

            <?php
                //menghitung jumlah surat masuk
                $count1 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_surat_masuk"));

                //menghitung jumlah surat masuk
                $count3 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_disposisi"));

                //menghitung jumlah klasifikasi
                $count4 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_klasifikasi"));

                //menghitung jumlah pengguna
                $count5 = mysqli_num_rows(mysqli_query($config, "SELECT * FROM tbl_user"));
            ?>

            <!-- Info Statistic START -->
            <?php
            if($_SESSION['admin'] == 1 ){
                $a1=array("cyan","yellow","blue","brown");
                
            $query_kota = mysqli_query($config, "SELECT c.id AS id_kota, nama_kota FROM tbl_surat_masuk a LEFT JOIN tbl_klasifikasi b ON b.id_klasifikasi = a.klinik LEFT JOIN tbl_kota c ON c.id = b.kota WHERE c.id  IS NOT NULL GROUP BY id_kota,nama_kota");
            $kota_hasil = mysqli_fetch_all($query_kota);
            foreach($kota_hasil as $kota_k=>$kota_v) {
                $random_keys=array_rand($a1,3);
            ?>
                <a href="?page=tsm">
                <div class="col s12 m5">
                    <div class="card <?php echo $a1[rand(0,sizeof($a1) - 1)];?>">
                        <div class="card-content">
                            <span class="card-title white-text">Grapik Statistic dari Akun <b><?php echo $kota_v[1];?></b></span>
                            <h5 class="white-text link">
                            <?php 
                            $query_grapik = mysqli_query($config, "SELECT COUNT(a.id_surat) AS jum, 
b.nama AS nama_klinik,b.id_klasifikasi, c.nama_kota, c.id AS id_kota FROM tbl_surat_masuk a LEFT JOIN tbl_klasifikasi b ON b.id_klasifikasi = a.klinik LEFT JOIN tbl_kota c ON c.id = b.kota
WHERE c.id IS NOT NULL AND c.id =".$kota_v[0]." GROUP BY nama_kota,nama_klinik" );
                            $grapik_hasil = mysqli_fetch_all($query_grapik);
                            foreach($grapik_hasil as $k=>$v) {
                                $query_jenis_kelamin = mysqli_query($config, "SELECT COUNT(a.id_surat) AS jum, a.jenis_kelamin, a.klinik FROM tbl_surat_masuk a LEFT JOIN tbl_klasifikasi b ON b.id_klasifikasi = a.klinik LEFT JOIN tbl_kota c ON c.id = b.kota
WHERE c.id IS NOT NULL and a.klinik=". $v[2] ."
GROUP BY a.jenis_kelamin, a.klinik");
                                $_jenis_kelamin_hasil = mysqli_fetch_all($query_jenis_kelamin);
                                ?>
 							<?php echo $v[1] . " <b>".$v[0] . "</b><br>";
 							
 							foreach($_jenis_kelamin_hasil as $kk=>$kv) {
 							    echo $kv[1] . " <b>".$kv[0] . "</b><br>";
 							}
 							?>

                <?php
                echo "<hr>";
            }
                            ?>
                          

                        </h5>
                        </div>
                    </div>
                </div>
            </a>
            <?php
            }
                ?>
           
            <!-- Info Statistic START -->
        <?php
            }
        ?>

        </div>
        <!-- Row END -->
    <?php
        }
    ?>
    </div>
    <!-- container END -->

</main>
<!-- Main END -->

<!-- Include Footer START -->
<?php include('include/footer.php'); ?>
<!-- Include Footer END -->

</body>
<!-- Body END -->

</html>

<?php
    }
?>
