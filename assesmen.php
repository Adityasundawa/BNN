<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    } else {

        if(isset($_REQUEST['sub1'])){
            $sub1 = $_REQUEST['sub1'];
            switch ($sub1) {
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
                case 'ct_fawl_drm':
                    include "cetak_formulir_asesmen_wajib_lapor_dan_rehab_medis.php";
                    break;
     
           }
        } else {
            //pagging
            $limit = 8;
            $pg = @$_GET['pg'];
                if(empty($pg)){
                    $curr = 0;
                    $pg = 1;
                } else {
                    $curr = ($pg - 1) * $limit;
                }
                
                $id_disposisi = $_REQUEST['id_disposisi'];

                $query = mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE id_disposisi='$id_disposisi'");

                if(mysqli_num_rows($query) > 0){
                    $no = 1;
                    while($row = mysqli_fetch_array($query)){

                    if($_SESSION['id_user'] != $row['id_user'] AND $_SESSION['id_user'] != 1){
                        echo '<script language="javascript">
                                window.alert("ERROR! Anda tidak memiliki hak akses untuk melihat data ini");
                                window.location.href="./admin.php?page=tsm&act=scr&id_surat='.$row['id_surat'].'";
                              </script>';
                    } else {

                      echo '<!-- Row Start -->
                            <div class="row">
                                <!-- Secondary Nav START -->
                                <div class="col s12">
                                    <div class="z-depth-1">
                                        <nav class="secondary-nav">
                                            <div class="nav-wrapper blue-grey darken-1">
                                                <div class="col m12">
                                                    <ul class="left">
                                                        <li class="waves-effect waves-light hide-on-small-only"><a href="#" class="judul"><i class="material-icons">update</i> Assessment Klien </a></li>
                                                        
                                                        </li>
                                                        <li class="waves-effect waves-light hide-on-small-only"><a href="?page=tsm&act=disp&id_surat='.$row['id_surat'].'&sub=ass&id_disposisi='.$row['id_disposisi'].'"><i class="material-icons">keyboard_return</i> Kembali</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!-- Secondary Nav END -->
                            </div>
                            <!-- Row END -->
                            
                            
                            <div class="row">
                            <form class="col s12"method="post"action="?page=tsm&act=kons">
                                <div class="row">
                                    <div class="input-field col s8">
                                        <input  id="first_name" type="text" class="validate"name="nama"required>
                                        <label for="first_name">Nama</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <select id="selectbox1"class="validate"name="jenis_kelamin"required>
                                        <option value="" disabled selected>Jenis Kelamin</option>
                                        <option value="laki-laki">Laki Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    <label for="selectbox1"></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="first_name" type="text" class="validate"name="pndkn_akhir"required>
                                        <label for="first_name">pendidikan akhir</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input  id="first_name" type="text" class="datepicker"name="tgl_lahir"required>
                                    <label for="first_name">tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="first_name" type="text" class="validate"name="alamat"required>
                                        <label for="first_name">Alamat</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input  id="first_name" type="number" class="validate"name="no_telp"required>
                                    <label for="first_name">No Telepon</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input  id="first_name" type="text" class="validate"name="agama"required>
                                        <label for="first_name">Agama</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <input  id="first_name" type="number" class="validate"name="usia"required>
                                    <label for="first_name">Usia</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <textarea  class="materialize-textarea" id="first_name"name="konseling"required></textarea>
                                        <label for="first_name">Pemeriksaan konseling</label>
                                    </div>
                                    <div class="input-field col s12">
                                    <textarea  class="materialize-textarea" id="first_name"name="rencana_terapi"required></textarea>
                                    <label for="first_name">rencana terapi</label>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="input-field col s12">
                                <textarea  class="materialize-textarea" id="first_name"name="tinjau_kesejahteraan"required></textarea>
                                    <label for="first_name">Tinjau Kesejahteraan</label>
                                </div>
                                <div class="row">
                                <div class="input-field col s6">
                                <textarea  class="materialize-textarea" id="first_name"name="gambaran_fisik"required></textarea>
                                    <label for="first_name">Gambaran Fisik dan penampilan</label>
                                </div>
                                <div class="input-field col s6">
                                <textarea  class="materialize-textarea" id="first_name"name="gambaran_perilaku"required></textarea>
                                <label for="first_name">Gambaran Perilaku</label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s6">
                            <textarea  class="materialize-textarea" id="first_name"name="gambaran_kognitif"required></textarea>
                                <label for="first_name">Gambaran Kognitif</label>
                            </div>
                            <div class="input-field col s6">
                            <textarea  class="materialize-textarea" id="first_name"name="gambaran_emosi"required></textarea>
                            <label for="first_name">Gambaran Emosi</label>
                            </div>
                            <div class="input-field col s12">
                            <textarea  class="materialize-textarea" id="first_name"name="diagnosa"required></textarea>
                            <label for="first_name">Diagnosa</label>
                            </div>
                            </div>
                            </div>
                            <input type="hidden" value="'.$id_disposisi.'"name="id_disposisi">
                            <input type="hidden" value="'.$_REQUEST['id_surat'].'"name="id_surat">
                            
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </form>
                            </div>
                            
                            ';

                            if(isset($_SESSION['succAdd'])){
                                $succAdd = $_SESSION['succAdd'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succAdd.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succAdd']);
                            }
                            if(isset($_SESSION['succEdit'])){
                                $succEdit = $_SESSION['succEdit'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succEdit.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succEdit']);
                            }
                            if(isset($_SESSION['succDel'])){
                                $succDel = $_SESSION['succDel'];
                                echo '<div id="alert-message" class="row">
                                        <div class="col m12">
                                            <div class="card green lighten-5">
                                                <div class="card-content notif">
                                                    <span class="card-title green-text"><i class="material-icons md-36">done</i> '.$succDel.'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                unset($_SESSION['succDel']);
                            }

                            echo '
                            <!-- Row form Start -->
                            <div class="row jarak-form">

                                <div class="col m12" id="colres">
                                    <table class="bordered" id="tbl">
                                        <thead class="blue lighten-4" id="head">
                                            <tr>
                                                <th width="6%">No</th>
                                                <th width="24%">Resume Masalah<br/>Diagnosis</th>
                                                <th width="40%">Rencana Terapi</th>
                                                <th width="30%">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        $id_disposisi = $_REQUEST['id_disposisi'];
                                        $query2 = mysqli_query($config, "SELECT * FROM tbl_asesmen JOIN tbl_disposisi ON tbl_asesmen.id_disposisi = tbl_disposisi.id_disposisi WHERE tbl_asesmen.id_disposisi='$id_disposisi'");

                                        if(mysqli_num_rows($query2) > 0){
                                            $no = 0;
                                            while($row = mysqli_fetch_array($query2)){
                                            $no++;
                                             echo '
                                                <tr>
                                                    <td>'.$no.'</td>
                                                    <td>'.$row['resume_masalah'].'<br/>'.($row['kriteria_diagnosis_napza']).'</td>
                                                    <td>'.$row['rencana_terapi'].'</td>

                                                    <td>
                                                        <a class="btn small orange waves-effect waves-light "href="?page=tsm&act=disp&id_disposisi='.$row['id_disposisi'].'&sub=ass&id_disposisi='.$row['id_disposisi'].'&sub1=edit_a"">
                                                            <i class="material-icons">edit</i> EDIT</a>
                                                        <a class="btn Large deep-orange waves-effect waves-light tooltipped" data-position="right" data-tooltip="Tombol ini akan menprint hasil inputan formulir " href="?page=tsm&act=disp&id_disposisi='.$row['id_disposisi'].'&sub=ass&id_disposisi='.$row['id_disposisi'].'&sub1=ct_fawl_drm">
                                                            <i class="material-icons">print</i> PRINT HASIL</a>
                                                        <a class="btn small yellow darken-3 waves-effect waves-light" href="?page=ct_fawl_drm&id_surat='.$row['id_surat'].'" target="_blank"><i class="material-icons">print</i> PRINT</a>
                                                        
                                                    </td>
                                            </tr>';
                                            }
                                        } else {
                                            echo '<tr><td colspan="5"><center><p class="add">Tidak ada data Assessment untuk ditampilkan. <u><a href="?page=tsm&act=disp&id_surat='.$row['id_surat'].'&sub=ass&id_disposisi='.$row['id_disposisi'].'&sub1=add_a">Tambah data baru</a></u></p></center></td></tr>';
                                        }
                                echo '</tbody></table>
                                </div>
                            </div>
                            <!-- Row form END -->';
                    }
                }
            }
        }
    }
?>
