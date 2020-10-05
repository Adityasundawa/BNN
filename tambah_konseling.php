<?php

    require_once 'include/config.php';


if(empty($_SESSION['admin'])){
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
} else {
    if (isset($_POST['action'])) {

        $query = mysqli_query($config , 'INSERT INTO tbl_konseling(
            nama,
            jenis_kelamin,
            pndkn_akhir,
            tgl_lahir,
            alamat,
            no_telp,
            agama,
            usia,
            konseling,
            rencana_terapi,
            tinjau_kesejahteraan,
            gambaran_fisik,
            gambaran_perilaku,
            gambaran_kognitif,
            gambaran_emosi,
            id_surat,
            id_disposisi,
            diagnosa,
            status
        )VALUES(
            "'.$_POST['nama'].'",
            "'.$_POST['jenis_kelamin'].'",
            "'.$_POST['pndkn_akhir'].'",
            "'.$_POST['tgl_lahir'].'",
            "'.$_POST['alamat'].'",
            "'.$_POST['no_telp'].'",
            "'.$_POST['agama'].'",
            "'.$_POST['usia'].'",
            "'.$_POST['konseling'].'",
            "'.$_POST['rencana_terapi'].'",
            "'.$_POST['tinjau_kesejahteraan'].'",
            "'.$_POST['gambaran_fisik'].'",
            "'.$_POST['gambaran_perilaku'].'",
            "'.$_POST['gambaran_kognitif'].'",
            "'.$_POST['gambaran_emosi'].'",
            "'.$_POST['id_surat'].'",
            "'.$_POST['id_disposisi'].'",
            "'.$_POST['diagnosa'].'",
            "belum"
        )');
        
        if ($query) {
            $_SESSION['succAdd'] = 'SUKSES! Data Konseling berhasil ditambahkan';
            echo '<script language="javascript">
            window.location.href="./admin.php?page=tsm&act=scr&id_surat='.$_POST['id_surat'].'#tombol3";
          </script>';
        }

    }else {
        echo"
        <script>
            alert('gagal')
        </script>
        ";
    }
}

