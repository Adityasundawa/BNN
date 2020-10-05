<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<strong>ERROR!</strong> Anda harus login terlebih dahulu.';
        header("Location: ./");
        die();
    } else {
?>
        <style type="text/css">
            #colres {
                margin-top: 30px;
            }
            table {
                background: #fff;
                padding: 3px!important;
            }
            tr, td {
                border-collapse: collapse;
                border: 1px solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            .isi {
                height: 100px!important;
            }
            .isihal {
                height: 60px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .chk {
                margin-bottom: 5px;
            }
            .chk:first-of-type {
                margin-top: 5px;
            }
            .check {
                font-size: 31px;
                margin: -15px 0 0 -2px
            }
            .cb {
                border: 1px solid #222;
                height: 20px;
                float: left;
                margin-right: 5px;
                width: 20px;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border-collapse: collapse;
                    border: 1px  solid #444;
                    padding: 3px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 15px;
                }
                .isi {
                    height: 100px!important;
                }

                .isihal {
                    height: 60px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 80px;
                    height: 80px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 5px 0 0 50%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -5px;
                }
                #nama1 {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }


            }
        </style>

        <body onload="window.print()">

        <!-- Container START -->
            <div id="colres">

<?php
                $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
                $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($query)){

                echo '

                    <table class="bordered" id="tbl">
                        <tbody>
                            <tr>
                                <td class="tgh" id="lbr" colspan="5">FORMULIR ASESMEN WAJIB LAPOR & REHABILITAS MEDIS</td>
                            </tr>

                            <tr>
                                <td style="border-right:none!important"><strong>Tanggal Kedatangan</strong></td>
                                <td style="border-left:none!important;border-left:none!important"></td>
                                <td colspan="2">: '.indoDate($row['tgl_diterima']).'</td>
                            </tr>
                            <tr>
                                <td style="border-right:none!important"><strong>Nomor Rekam Medis</strong></td>
                                <td style="border-left:none!important;border-left:none!important"></td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td style="border-right:none!important"><strong>Nama</strong></td>
                                <td style="border-left:none!important;border-left:none!important"></td>
                                <td colspan="2">: '.$row['nama'].'</td>
                            </tr>                            
                            
                            <tr>
                                <td id="right: 2px;"><strong></strong></td>
                                <td>Medis</td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td id="right: 2px;"><strong></strong></td>
                                <td>Pekerjaan/Dukungan</td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td id="right: 0px;"><strong>Kesimpulan</strong></td>
                                <td>Napza</td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td id="right: 0px;"><strong></strong></td>
                                <td>Legal</td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td id="right: 2px;"><strong></strong></td>
                                <td>Keluarga/Sosial</td>
                                <td colspan="2">: '.$row['no_agenda'].'</td>
                            </tr>
                            <tr>
                                <td style="border-right:none!important;border-left:none!important"><strong></strong></td>
                                <td style="border-up:none!important;border-down:none!important">Pisikiatris</td>
                                <td>: '.$row['no_agenda'].'</td>
                            </tr>
                            ';
                            $query3 = mysqli_query($config, "SELECT * FROM tbl_asesmen JOIN tbl_disposisi ON tbl_asesmen.id_disposisi = tbl_disposisi.id_disposisi WHERE tbl_asesmen.id_disposisi='$id_disposisi'");

                            if(mysqli_num_rows($query3) > 0){
                                $no = 0;
                                $row = mysqli_fetch_array($query3);{
                                echo '
                            <tr>
                                            ';

                                                $pekerjaan_dukungan = explode(',', $row['pekerjaan_dukungan']);
                                                $query4 = mysqli_query($config, "SELECT * FROM tbl_kategori  WHERE id_katego IN ('41','42','43','44','45','46','47','48','49','50')");
                                                    if(mysqli_num_rows($query4) > 0){
                                                    while($r = mysqli_fetch_array($query4)){
                                                    echo'
                                                <div class="chk">
                                                <div class="cb">';
                                                if (in_array($r['nama_katego'], $pekerjaan_dukungan)) {
                                                echo '<div class="check">&check;</div>';
                                                }
                                                echo '
                                                </div>
                                                    <span>'.$r['nama_katego'].'</span>
                                                </div>';
                                                    }
                                                }
                                                echo '
                                           

                            <tr>
                                <td style="border-right:none!important"><strong>Sifat :</strong></td>
                                    <td style="border-right:none!important;border-left:none!important">';
                                    $sifat = explode(',', $row['sifat']);
                                    $query = mysqli_query($config, "SELECT * FROM tbl_sifat_disposisi  WHERE id_sifat IN ('1', '2')");

                                    if(mysqli_num_rows($query) > 0){
                                        while($r = mysqli_fetch_array($query)){
                                            echo '
                                            <div class="chk">
                                            <div class="cb">';

                                            if (in_array($r['sifat_surat'], $sifat)) {
                                                echo '<div class="check">&check;</div>';
                                            }

                                            echo '
                                            </div>
                                            <span>'.$r['sifat_surat'].'</span>
                                            </div>';
                                        }
                                    }
                                    echo '
                                    </td>
                                <td style="border-left:none!important">';
                                $sifat = explode(',', $row['sifat']);
                                    $query = mysqli_query($config, "SELECT * FROM tbl_sifat_disposisi  WHERE id_sifat IN ('3', '4')");

                                    if(mysqli_num_rows($query) > 0){
                                        while($r = mysqli_fetch_array($query)){
                                            echo '
                                            <div class="chk">
                                            <div class="cb">';

                                            if (in_array($r['sifat_surat'], $sifat)) {
                                                echo '<div class="check">&check;</div>';
                                            }

                                            echo '
                                            </div>
                                            <span>'.$r['sifat_surat'].'</span>
                                            </div>';
                                        }
                                    }
                                    echo '
                                </td>
                            </tr>

                            <tr>
                                <td style="border-right:none!important"><strong>Mohon bantuan saudara untuk :</strong>
                                </td>
                                <td style="border-left:none!important;border-right:none!important">';
                                    $tindakan = explode(',', $row['tindakan']);
                                    $query = mysqli_query($config, "SELECT * FROM tbl_sifat_disposisi  WHERE id_sifat IN ('10', '11', '12', '13', '14', '15', '16')");

                                    if(mysqli_num_rows($query) > 0){
                                        while($r = mysqli_fetch_array($query)){
                                            echo '
                                            <div class="chk">
                                            <div class="cb">';

                                            if (in_array($r['sifat_surat'], $tindakan)) {
                                                echo '<div class="check">&check;</div>';
                                            }

                                            echo '
                                            </div>
                                            <span>'.$r['sifat_surat'].'</span>
                                            </div>';
                                        }
                                    }
                                    echo '

                                </td>

                                <td style="border-left:none!important">';
                                    $tindakan = explode(',', $row['tindakan']);
                                    $query = mysqli_query($config, "SELECT * FROM tbl_sifat_disposisi WHERE id_sifat IN ('17', '18', '19', '20', '21', '22')");

                                    if(mysqli_num_rows($query) > 0){
                                        while($r = mysqli_fetch_array($query)){
                                            echo '
                                            <div class="chk">
                                            <div class="cb">';

                                            if (in_array($r['sifat_surat'], $tindakan)) {
                                                echo '<div class="check">&check;</div>';
                                            }

                                            echo '
                                            </div>
                                            <span>'.$r['sifat_surat'].'</span>
                                            </div>';
                                        }
                                    }
                                    echo '
                                </td>
                            </tr>

                            <tr>
                                <td class="isi" colspan="5">
                                    <strong>Catatan :</strong><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['isi_disposisi'].'
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border-right:none!important"><strong>Terima kasih</strong></td>
                                <td style="border-left:none!important"><strong>Tanjungpinang,</strong> '.indoDate($row['batas_waktu']).'';
                                        $query = mysqli_query($config, "SELECT ketua_plh FROM tbl_instansi");
                                        list($ketua_plh) = mysqli_fetch_array($query);
                                        if(!empty($ketua_plh)){
                                            echo '<p class=""><strong>'.$ketua_plh.'</strong><br>';
                                            } else '';
                                        $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
                                        while ($data = mysqli_fetch_array($query)){
                                        if(!empty($data['paraf_ketua'])){
                                            echo '<img class="" src="./asset/img/'.$data['paraf_ketua'].'"/>','';
                                            } else '';
                                        $query = mysqli_query($config, "SELECT kepsek FROM tbl_instansi");
                                        list($kepsek) = mysqli_fetch_array($query);
                                        if(!empty($kepsek)){
                                            echo '<p class=""><strong>'.$kepsek.'</strong>';
                                            } else '
                                </td>
                            </tr>';

                                }
                            }
                        } else {
                                echo '<tr><td colspan="5"><center><a class="btn-large red waves-effect waves-light">Surat Ini Belum Didisposisikan Oleh <strong><u> Ketua / Plh. Ketua</strong></u></a></center></td></tr>';
                            }
                        } echo '
                </tbody>
            </table>
        </div>
        <div class="jarak2"></div>
    <!-- Container END -->

    </body>';
    }
}
?>
