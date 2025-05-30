<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['submit'])){

            //validasi form kosong
            if($_REQUEST['no_agenda'] == "" 
                || $_REQUEST['no_surat'] == "" 
                || $_REQUEST['nama'] == "" 
                || $_REQUEST['tempat_lahir'] == "" 
                || $_REQUEST['jenis_kelamin'] == "" 
                || $_REQUEST['agama'] == "" 
                || $_REQUEST['status_perkawinan'] == "" 
                || $_REQUEST['pekerjaan'] == "" 
                || $_REQUEST['kewarganegaraan'] == ""  
                || $_REQUEST['asal_surat'] == "" 
                || $_REQUEST['isi'] == ""
                || $_REQUEST['kode'] == "" 
                || $_REQUEST['indeks'] == "" 
                || $_REQUEST['tgl_surat'] == ""  
                || $_REQUEST['klinik'] == ""  
                || $_REQUEST['keterangan'] == ""){
                // $_SESSION['errEmpty'] = 'ERROR! Semua form wajib diisi';
                // echo '<script language="javascript">window.history.back();</script>';
            } else {

                $no_agenda = $_REQUEST['no_agenda'];
                $nama = $_REQUEST['nama'];
                $tempat_lahir = $_REQUEST['tempat_lahir'];
                $jenis_kelamin = $_REQUEST['jenis_kelamin'];
                $agama = $_REQUEST['agama'];
                $status_perkawinan = $_REQUEST['status_perkawinan'];
                $pekerjaan = $_REQUEST['pekerjaan'];
                $kewarganegaraan = $_REQUEST['kewarganegaraan'];
                $no_surat = $_REQUEST['no_surat'];
                $asal_surat = $_REQUEST['asal_surat'];
                $isi = $_REQUEST['isi'];
                $kode = substr($_REQUEST['kode'],0,30);
                $nkode = trim($kode);
                $indeks = $_REQUEST['indeks'];
                $tgl_surat = $_REQUEST['tgl_surat'];
                $klinik = $_REQUEST['klinik'];
                $keterangan = $_REQUEST['keterangan'];
                $id_user = $_SESSION['id_user'];

                //validasi input data
                if(!preg_match("/^[0-9]*$/", $no_agenda)){
                    $_SESSION['eno_agenda'] = 'Form Nomor Agenda harus diisi angka!';
                    echo '<script language="javascript">window.history.back();</script>';
                } else {
                    if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $nama)){
                            $_SESSION['enama'] = 'Form Nama hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $tempat_lahir)){
                            $_SESSION['etempat_lahir'] = 'Form Tempat Lahir hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $jenis_kelamin)){
                            $_SESSION['ejenis_kelamin'] = 'Form Jenis Kelamin hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $agama)){
                            $_SESSION['eagama'] = 'Form Agama hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $status_perkawinan)){
                            $_SESSION['estatus_perkawinan'] = 'Form Status Perkawinan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $pekerjaan)){
                            $_SESSION['epekerjaan'] = 'Form Pekerjaan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $kewarganegaraan)){
                            $_SESSION['ekewarganegaraan'] = 'Form Kewarganegaraan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.\/ -]*$/", $no_surat)){
                            $_SESSION['eno_surat'] = 'Form No KTP hanya boleh mengandung karakter huruf, angka, spasi, titik(.), minus(-) dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {

                            if(!preg_match("/^[a-zA-Z0-9.,() \/ -]*$/", $asal_surat)){
                            $_SESSION['easal_surat'] = 'Form Alamat hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-),kurung() dan garis miring(/)';
                            echo '<script language="javascript">window.history.back();</script>';
                        } else {
                            if(!preg_match("/^[a-zA-Z0-9.,_()%&@\/\r\n -]*$/", $isi)){
                                $_SESSION['eisi'] = 'Form Isi Ringkas hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), kurung(), underscore(_), dan(&) persen(%) dan at(@)';
                                echo '<script language="javascript">window.history.back();</script>';
                            } else {

                                if(!preg_match("/^[a-zA-Z0-9., ]*$/", $nkode)){
                                    $_SESSION['ekode'] = 'Form No.Hp hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,)';
                                    echo '<script language="javascript">window.history.back();</script>';
                                } else {

                                    if(!preg_match("/^[a-zA-Z0-9., -]*$/", $indeks)){
                                        $_SESSION['eindeks'] = 'Form No KK hanya boleh mengandung karakter huruf, angka, spasi, titik(.) dan koma(,) dan minus (-)';
                                        echo '<script language="javascript">window.history.back();</script>';
                                    } else {

                                        if(!preg_match("/^[0-9.-]*$/", $tgl_surat)){
                                            $_SESSION['etgl_surat'] = 'Form Tanggal Lahir hanya boleh mengandung angka dan minus(-)';
                                            echo '<script language="javascript">window.history.back();</script>';
                                        } else {

                                            if(!preg_match("/^[a-zA-Z0-9.,()\/ -]*$/", $keterangan)){
                                                $_SESSION['eketerangan'] = 'Form Keterangan hanya boleh mengandung karakter huruf, angka, spasi, titik(.), koma(,), minus(-), garis miring(/), dan kurung()';
                                                echo '<script language="javascript">window.history.back();</script>';
                                            } else {

                                                $ekstensi = array('jpg','png','jpeg','doc','docx','pdf');
                                                $file = $_FILES['file']['name'];
                                                $x = explode('.', $file);
                                                $eks = strtolower(end($x));
                                                $ukuran = $_FILES['file']['size'];
                                                $target_dir = "upload/surat_masuk/";

                                                if (! is_dir($target_dir)) {
                                                    mkdir($target_dir, 0755, true);
                                                }

                                            //jika form file tidak kosong akan mengeksekusi script dibawah ini
                                            if($file != ""){

                                                $rand = rand(1,10000);
                                                $nfile = $rand."-".$file;

                                                //validasi file
                                                if(in_array($eks, $ekstensi) == true){
                                                    if($ukuran < 2300000){

                                                        $id_surat = $_REQUEST['id_surat'];
                                                        $query = mysqli_query($config, "SELECT file FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
                                                        list($file) = mysqli_fetch_array($query);

                                                        //jika file tidak kosong akan mengeksekusi script dibawah ini
                                                        if(!empty($file)){
                                                            unlink($target_dir.$file);

                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);

                                                            $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET no_agenda='$no_agenda',
                                                                no_surat='$no_surat',
                                                                asal_surat='$asal_surat',
                                                                nama='$nama',
                                                                tempat_lahir='$tempat_lahir',
                                                                jenis_kelamin='$tempat_lahir',agama='$agama',
                                                                status_perkawinan='$status_perkawinan',
                                                                pekerjaan='$pekerjaan',
                                                                kewarganegaraan='$kewarganegaraan',
                                                                isi='$isi',
                                                                kode='$nkode',
                                                                indeks='$indeks',
                                                                tgl_surat='$tgl_surat',
                                                                file='$nfile',
                                                                keterangan='$keterangan',
                                                                klinik='$klinik',
                                                                id_user='$id_user' WHERE id_surat='$id_surat'");

                                                            if($query == true){
                                                                $_SESSION['succEdit'] = 'SUKSES! Data Klien berhasil diupdate';
                                                                header("Location: ./admin.php?page=tsm");
                                                                die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        } else {

                                                            //jika file kosong akan mengeksekusi script dibawah ini
                                                            move_uploaded_file($_FILES['file']['tmp_name'], $target_dir.$nfile);

                                                            $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET no_agenda='$no_agenda',
                                                                no_surat='$no_surat',
                                                                asal_surat='$asal_surat',
                                                                nama='$nama',
                                                                tempat_lahir='$tempat_lahir',
                                                                jenis_kelamin='$tempat_lahir',agama='$agama',
                                                                status_perkawinan='$status_perkawinan',
                                                                pekerjaan='$pekerjaan',
                                                                kewarganegaraan='$kewarganegaraan',
                                                                isi='$isi',
                                                                kode='$nkode',
                                                                indeks='$indeks',
                                                                tgl_surat='$tgl_surat',
                                                                file='$nfile',
                                                                keterangan='$keterangan',
                                                                klinik='$klinik',
                                                                id_user='$id_user' WHERE id_surat='$id_surat'");

                                                            if($query == true){
                                                                $_SESSION['succEdit'] = 'SUKSES! Data berhasil Klien diupdate';
                                                                header("Location: ./admin.php?page=tsm");
                                                                die();
                                                            } else {
                                                                $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                                echo '<script language="javascript">window.history.back();</script>';
                                                            }
                                                        }
                                                    } else {
                                                        $_SESSION['errSize'] = 'Ukuran file yang diupload terlalu besar!';
                                                        echo '<script language="javascript">window.history.back();</script>';
                                                    }
                                                } else {
                                                    $_SESSION['errFormat'] = 'Format file yang diperbolehkan hanya *.JPG, *.PNG, *.DOC, *.DOCX atau *.PDF!';
                                                    echo '<script language="javascript">window.history.back();</script>';
                                                }
                                            } else {

                                                //jika form file kosong akan mengeksekusi script dibawah ini
                                                $id_surat = $_REQUEST['id_surat'];

                                                $query = mysqli_query($config, "UPDATE tbl_surat_masuk SET 
                                                    no_agenda='$no_agenda',
                                                    no_surat='$no_surat',
                                                    asal_surat='$asal_surat',
                                                    nama='$nama',
                                                    tempat_lahir='$tempat_lahir',
                                                    jenis_kelamin='$tempat_lahir',
                                                    agama='$agama',
                                                    status_perkawinan='$status_perkawinan',
                                                    pekerjaan='$pekerjaan',
                                                    kewarganegaraan='$kewarganegaraan',
                                                    isi='$isi',
                                                    kode='$nkode',
                                                    indeks='$indeks',
                                                    tgl_surat='$tgl_surat',
                                                    keterangan='$keterangan',
                                                    klinik='$klinik',
                                                    id_user='$id_user' WHERE id_surat='$id_surat'");

                                                if($query == true){
                                                    $_SESSION['succEdit'] = 'SUKSES! Data berhasil diupdate';
                                                    header("Location: ./admin.php?page=tsm");
                                                    die();
                                                } else {
                                                    $_SESSION['errQ'] = 'ERROR! Ada masalah dengan query';
                                                    echo '<script language="javascript">window.history.back();</script>';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    }}}}}}
    } else {
        $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
            $query = mysqli_query($config, "SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
            if(mysqli_num_rows($query) > 0){
                $no = 1;
                
                while($row = mysqli_fetch_array($query)){

        $id_surat = mysqli_real_escape_string($config, $_REQUEST['id_surat']);
        $query = mysqli_query($config, "SELECT id_surat, no_agenda, no_surat, asal_surat, nama, tempat_lahir, jenis_kelamin, agama, status_perkawinan, pekerjaan, kewarganegaraan, isi, kode, indeks, tgl_surat, file, keterangan, id_user, klinik FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
        list($id_surat, $no_agenda, $no_surat, $asal_surat, $nama, $tempat_lahir, $jenis_kelamin,$agama, $status_perkawinan, $pekerjaan, $kewarganegaraan, $isi, $kode, $indeks, $tgl_surat, $file, $keterangan, $id_user,$klinik) = mysqli_fetch_array($query);


        if($_SESSION['id_user'] != $id_user AND $_SESSION['id_user'] != 1){
            echo '<script language="javascript">
                    window.alert("ERROR! Anda tidak memiliki hak akses untuk mengedit data ini");
                    window.location.href="./admin.php?page=tsm";
                  </script>';
        } else {?>

            <!-- Row Start -->
            <div class="row">
                <!-- Secondary Nav START -->
                <div class="col s12">
                    <nav class="secondary-nav">
                        <div class="nav-wrapper blue-grey darken-1">
                            <ul class="left">
                                <li class="waves-effect waves-light"><a href="#" class="judul"><i class="material-icons">edit</i> Edit Data Klien</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Secondary Nav END -->
            </div>
            <!-- Row END -->

            <?php
                if(isset($_SESSION['errQ'])){
                    $errQ = $_SESSION['errQ'];
                    echo '<div id="alert-message" class="row">
                            <div class="col m12">
                                <div class="card red lighten-5">
                                    <div class="card-content notif">
                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errQ.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    unset($_SESSION['errQ']);
                }
                if(isset($_SESSION['errEmpty'])){
                    $errEmpty = $_SESSION['errEmpty'];
                    echo '<div id="alert-message" class="row">
                            <div class="col m12">
                                <div class="card red lighten-5">
                                    <div class="card-content notif">
                                        <span class="card-title red-text"><i class="material-icons md-36">clear</i> '.$errEmpty.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    unset($_SESSION['errEmpty']);
                }
            ?>

            <!-- Row form Start -->
            <div class="row jarak-form">

                <!-- Form START -->
                <form class="col s12" method="POST" action="?page=tsm&act=edit" enctype="multipart/form-data">

                    <!-- Row in form START -->
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">assignment_ind</i>
                            <input id="nama" type="text" class="validate" name="nama" value="<?php echo $nama ;?>" required>
                                <?php
                                    if(isset($_SESSION['enama'])){
                                        $enama = $_SESSION['enama'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$enama.'</div>';
                                        unset($_SESSION['enama']);
                                    }
                                ?>
                            <label for="nama">Nama</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">pin_drop</i>
                            <input id="tempat_lahir" type="text" class="validate" name="tempat_lahir" value="<?php echo $tempat_lahir ;?>" required>
                                <?php
                                    if(isset($_SESSION['etempat_lahir'])){
                                        $etempat_lahir = $_SESSION['etempat_lahir'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$etempat_lahir.'</div>';
                                        unset($_SESSION['etempat_lahir']);
                                    }
                                ?>
                            <label for="tempat_lahir">Tempat Lahir</label>
                        </div>

                        <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">star_half</i><label>Pilih Jenis Kelamin</label>
                                <div class="input-field col s11 right">
                                    <select class="validate" name="jenis_kelamin" id="jenis_kelamin" required>
                                        <option value="<?php echo $row['jenis_kelamin']; ?>"><?php echo $row['jenis_kelamin']; ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <?php
                                    if(isset($_SESSION['jenis_kelamin'])){
                                        $jenis_kelamin = $_SESSION['jenis_kelamin'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$jenis_kelamin.'</div>';
                                        unset($_SESSION['jenis_kelamin']);
                                    }
                                ?>
                            </div>
                        <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">star_half</i><label>Pilih Agama</label><br/>
                                <div class="input-field col s11 right">
                                    <select class="validate" name="agama" id="agama" required>
                                        <option value="<?php echo $row['agama']; ?>"><?php echo $row['agama']; ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Keristen Protestan">Keristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                    </select>
                                </div>
                                <?php
                                    if(isset($_SESSION['agama'])){
                                        $agama = $_SESSION['agama'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$agama.'</div>';
                                        unset($_SESSION['agama']);
                                    }
                                ?>
                            </div>

                        <div class="input-field col s6">
                                <i class="material-icons prefix md-prefix">wc</i><label>Pilih Status</label>
                                <div class="input-field col s11 right">
                                    <select class="validate" name="status_perkawinan" id="status_perkawinan" required>
                                        <option value="<?php echo $row['status_perkawinan']; ?>"><?php echo $row['status_perkawinan']; ?></option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                </div>
                                <?php
                                    if(isset($_SESSION['status_perkawinan'])){
                                        $status_perkawinan = $_SESSION['status_perkawinan'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$status_perkawinan.'</div>';
                                        unset($_SESSION['status_perkawinan']);
                                    }
                                ?>
                            </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">airline_seat_recline_normal</i>
                            <input id="pekerjaan" type="text" class="validate" name="pekerjaan" value="<?php echo $pekerjaan ;?>" required>
                                <?php
                                    if(isset($_SESSION['epekerjaan'])){
                                        $epekerjaan = $_SESSION['epekerjaan'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$epekerjaan.'</div>';
                                        unset($_SESSION['epekerjaan']);
                                    }
                                ?>
                            <label for="pekerjaan">Pekerjaan</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">airline_seat_recline_normal</i>
                            <input id="kewarganegaraan" type="text" class="validate" name="kewarganegaraan" value="<?php echo $kewarganegaraan ;?>" required>
                                <?php
                                    if(isset($_SESSION['ekewarganegaraan'])){
                                        $ekewarganegaraan = $_SESSION['ekewarganegaraan'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$ekewarganegaraan.'</div>';
                                        unset($_SESSION['ekewarganegaraan']);
                                    }
                                ?>
                            <label for="kewarganegaraan">Kewarganegaraan</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="hidden" name="id_surat" value="<?php echo $id_surat ;?>">
                            <i class="material-icons prefix md-prefix">looks_one</i>
                            <input id="no_agenda" type="number" class="validate" value="<?php echo $no_agenda ;?>" name="no_agenda" required>
                                <?php
                                    if(isset($_SESSION['eno_agenda'])){
                                        $eno_agenda = $_SESSION['eno_agenda'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eno_agenda.'</div>';
                                        unset($_SESSION['eno_agenda']);
                                    }
                                ?>
                            <label for="no_agenda">Nomor Urut</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">bookmark</i>
                            <input id="kode" type="text" class="validate" name="kode" value="<?php echo $kode ;?>" required>
                                <?php
                                    if(isset($_SESSION['ekode'])){
                                        $ekode = $_SESSION['ekode'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$ekode.'</div>';
                                        unset($_SESSION['ekode']);
                                    }
                                ?>
                            <label for="kode">Nomor telp</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">place</i>
                            <input id="asal_surat" type="text" class="validate" name="asal_surat" value="<?php echo $asal_surat ;?>" required>
                                <?php
                                    if(isset($_SESSION['easal_surat'])){
                                        $easal_surat = $_SESSION['easal_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$easal_surat.'</div>';
                                        unset($_SESSION['easal_surat']);
                                    }
                                ?>
                            <label for="asal_surat">Alamat Lengkap</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">place</i><label for="asal_surat">Klinik</label>
                             <div class="input-field col s11 right">
                                <select class="validate" name="klinik" id="klinik" required>
                                    <option value="">Pilih </option>
                                     <?php 
                                      $sql=mysqli_query($config,"SELECT * FROM tbl_klasifikasi");
                                      while ($datax=mysqli_fetch_array($sql)) { 
                                        if($datax['id_klasifikasi'] ==  $row['klinik']){
                                            $selected = "selected";
                                        } else {
                                            $selected = "";
                                        }
                                        ?>
                                       <option value="<?php echo $datax['id_klasifikasi']?>" <?php echo $selected; ?>><?php echo $datax['nama']?></option> 
                                     <?php
                                      }
                                     ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">storage</i>
                            <input id="indeks" type="text" class="validate" name="indeks" value="<?php echo $indeks ;?>" required>
                                <?php
                                    if(isset($_SESSION['eindeks'])){
                                        $eindeks = $_SESSION['eindeks'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eindeks.'</div>';
                                        unset($_SESSION['eindeks']);
                                    }
                                ?>
                            <label for="indeks">Indeks Berkas</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">looks_two</i>
                            <input id="no_surat" type="text" class="validate" name="no_surat" value="<?php echo $no_surat ;?>" required>
                                <?php
                                    if(isset($_SESSION['eno_surat'])){
                                        $eno_surat = $_SESSION['eno_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eno_surat.'</div>';
                                        unset($_SESSION['eno_surat']);
                                    }
                                ?>
                            <label for="no_surat">NIK</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">date_range</i>
                            <input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" value="<?php echo $tgl_surat ;?>" required>
                                <?php
                                    if(isset($_SESSION['etgl_surat'])){
                                        $etgl_surat = $_SESSION['etgl_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$etgl_surat.'</div>';
                                        unset($_SESSION['etgl_surat']);
                                    }
                                ?>
                            <label for="tgl_surat">Tanggal Lahir</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">description</i>
                            <textarea id="isi" class="materialize-textarea validate" name="isi" required><?php echo $isi ;?></textarea>
                                <?php
                                    if(isset($_SESSION['eisi'])){
                                        $eisi = $_SESSION['eisi'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eisi.'</div>';
                                        unset($_SESSION['eisi']);
                                    }
                                ?>
                            <label for="isi">Isi Ringkas</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix md-prefix">featured_play_list</i>
                            <input id="keterangan" type="text" class="validate" name="keterangan" value="<?php echo $keterangan ;?>" required>
                                <?php
                                    if(isset($_SESSION['eketerangan'])){
                                        $eketerangan = $_SESSION['eketerangan'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$eketerangan.'</div>';
                                        unset($_SESSION['eketerangan']);
                                    }
                                ?>
                            <label for="keterangan">Keterangan</label>
                        </div>
                        <div class="input-field col s6">
                            <div class="file-field input-field">
                                <div class="btn light-green darken-1">
                                    <span>File</span>
                                    <input type="file" id="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?php echo $file ;?>" placeholder="Upload file/scan gambar surat masuk">
                                        <?php
                                            if(isset($_SESSION['errSize'])){
                                                $errSize = $_SESSION['errSize'];
                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errSize.'</div>';
                                                unset($_SESSION['errSize']);
                                            }
                                            if(isset($_SESSION['errFormat'])){
                                                $errFormat = $_SESSION['errFormat'];
                                                echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$errFormat.'</div>';
                                                unset($_SESSION['errFormat']);
                                            }
                                        ?>
                                    <small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 2 MB!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row in form END -->

                    <div class="row">
                        <div class="col 6">
                            <button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SUBMIT <i class="material-icons">done</i></button>
                        </div>
                        <div class="col 6">
                            <a href="?page=tsm" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
                        </div>
                    </div>

                </form>
                <!-- Form END -->

            </div>
            <!-- Row form END -->

<?php
            }
        }
    }
}}
?>
