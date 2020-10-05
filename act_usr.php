<?php

    require_once 'include/config.php';


if(empty($_SESSION['admin'])){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
} else {
    if (isset($_POST['action'])) {

        $id = $_POST['id'];
        // $query = mysqli_query($config , "UPDATE `tbl_konseling` SET
        //     `nama` = '".$_POST['nama']."',
        // `jenis_kelamin` = '".$_POST['jenis_kelamin']."',
        // `pndkn_akhir` = '".$_POST['pndkn_akhir']."',
        // `tgl_lahir` = '".$_POST['tgl_lahir']."',
        // `alamat` = '".$_POST['alamat']."',
        // `no_telp` = '".$_POST['no_telp']."',
        // `agama` = '".$_POST['agama']."',
        // `usia` = '".$_POST['usia']."',
        // `konseling` = '".$_POST['konseling']."',
        // `rencana_terapi` = '".$_POST['rencana_terapi']."',
        // `tinjau_kesejahteraan` = '".$_POST['tinjau_kesejahteraan']."',
        // `gambaran_fisik` = '".$_POST['gambaran_fisik']."',
        // `gambaran_perilaku` = '".$_POST['gambaran_perilaku']."',
        // `gambaran_kognitif` = '".$_POST['gambaran_kognitif']."',
        // `gambaran_emosi` = '".$_POST['gambaran_emosi']."',
        // `diagnosa` = '".$_POST['diagnosa']."',
        //  WHERE `tbl_konseling`.`id` = '".$id."'");
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pndkn_akhir = $_POST['pndkn_akhir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$usia = $_POST['usia'];
$agama = $_POST['agama'];
$konseling = $_POST['konseling'];
$rencana_terapi = $_POST['rencana_terapi'];
$tinjau_kesejahteraan = $_POST['tinjau_kesejahteraan'];
$gambaran_fisik = $_POST['gambaran_fisik'];
$gambaran_perilaku = $_POST['gambaran_perilaku'];
$gambaran_kognitif = $_POST['gambaran_kognitif'];
$gambaran_emosi = $_POST['gambaran_emosi'];
$diagnosa = $_POST['diagnosa'];



$query = mysqli_query($config, "UPDATE tbl_konseling SET nama='$nama' , jenis_kelamin='$jenis_kelamin' , pndkn_akhir='$pndkn_akhir' , tgl_lahir='$tgl_lahir' , alamat='$alamat' , no_telp='$no_telp' , usia='$usia' , agama=',$agama' , konseling='$konseling' , rencana_terapi='$rencana_terapi' , tinjau_kesejahteraan='$tinjau_kesejahteraan' , gambaran_fisik='$gambaran_fisik' , gambaran_perilaku='$gambaran_perilaku' , gambaran_kognitif='$gambaran_kognitif' , gambaran_emosi='$gambaran_emosi' , diagnosa='$diagnosa' WHERE id='$id'");
        
        if ($query) {
            header('location:admin.php?page=tsm');
        }else{
            header('location:admin.php?page=tsm');
        }

    }else {
        echo"
        <script>
            alert('gagal')
        </script>
        ";
    }
}

