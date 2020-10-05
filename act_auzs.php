<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }else{
        $id_disposisi = mysqli_real_escape_string($config, $_REQUEST['id_disposisi']);
    
            $query = mysqli_query($config, "UPDATE `tbl_disposisi` SET `status_konseling` = 'SELESAI' WHERE `tbl_disposisi`.`id_disposisi` = ".$id_disposisi."");
         
            if ($query) {
                header('location:admin.php?page=tsm');
            }
    
    }
        ?>