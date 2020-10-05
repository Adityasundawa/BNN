<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }else{
        $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
        $status = "SIRENA";
            $query = mysqli_query($config, "UPDATE `tbl_surat_masuk` SET `status` = 'SIRENA' WHERE `tbl_surat_masuk`.`id_surat` = ".$id_surat."");
         
            header('location:admin.php?page=tsm');
    
    }
        ?>
        