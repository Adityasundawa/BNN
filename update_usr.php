
 <?php
    if (isset($_SESSION['tgl_surat'])) {
        $tgl_surat = $_SESSION['tgl_surat'];
        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">' . $tgl_surat . '</div>';
        unset($_SESSION['tgl_surat']);
    }
    ?>
                                
<?php
//cek session
if (empty($_SESSION['admin'])) {
    $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
    header("Location: ./");
    die();
} else {
  $id_disposisi = $_REQUEST['id_disposisi'];




 
    $quer =  mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE id_disposisi='$id_disposisi'");
    while ($row = mysqli_fetch_array($quer)) {
        $id_kons = $row['id_konseling'];
        $quey =  mysqli_query($config, "SELECT * FROM tbl_konseling WHERE id='$id_kons'");


        while ($data = mysqli_fetch_array($quey)) {

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
                                        <li class="waves-effect waves-light hide-on-small-only"><a href=""><i class="material-icons">keyboard_return</i> Kembali</a></li>
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
            <form class="col s12"method="post"action="?page=tsm&act=vnz">
                <div class="row">
                    <div class="input-field col s8">
                        <input  id="first_name" type="text" value=' . $data['nama'] . ' class="validate"name="nama"required readonly>
                        <label for="first_name">Nama</label>
                    </div>
                    <div class="input-field col s4">
                    <input  id="first_name" type="text" readonly value=' . $data['jenis_kelamin'] . ' class="validate"name="jenis_kelamin"required>
                   
                    <label for="selectbox1"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                    <select class=" validate" name="pndkn_akhir" id="pndkn_akhir" required>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>
                        <label for="pndkn_akhir"></label>
                    </div>
                    <div class="input-field col s6">
            
                    <input id="tgl_surat" type="text" name="tgl_lahir" class="datepicker" required>
                    
            
            
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
                <input  id="first_name" type="text" class="validate"  value=' . $data['agama'] . ' readonly name="agama"required>
                       
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
                <label for="first_name">Tinjau Kesejahteraan</label><br>
                <table>
                    <tr>
                    <td>
                    <input type="checkbox" id="1" class="validate" name="tinjau_kesejahteraan" value="1">
                    <label for="1">01</label>  
                    <input type="checkbox" id="2" class="validate" name="tinjau_kesejahteraan" value="2">
                    <label for="2">02</label>  
                    <input type="checkbox" id="3" class="validate" name="tinjau_kesejahteraan" value="3">
                    <label for="3">03</label>  
                    <input type="checkbox" id="4" class="validate" name="tinjau_kesejahteraan" value="4">
                    <label for="4">04</label>  
                    <input type="checkbox" id="5" class="validate" name="tinjau_kesejahteraan" value="5">
                    <label for="5">05</label>  
                    <input type="checkbox" id="6" class="validate" name="tinjau_kesejahteraan" value="6">
                    <label for="6">06</label>  
                    <input type="checkbox" id="7" class="validate" name="tinjau_kesejahteraan" value="7">
                    <label for="7">07</label>  
                    <input type="checkbox" id="8" class="validate" name="tinjau_kesejahteraan" value="8">
                    <label for="8">08</label>  
                    <input type="checkbox" id="9" class="validate" name="tinjau_kesejahteraan" value="9">
                    <label for="9">09</label>  
                    <input type="checkbox" id="10" class="validate" name="tinjau_kesejahteraan" value="10">
                    <label for="10">10</label>                                                  
                                                                  
                                                                                                                    </td>
                    </tr>
                                                                                                                     </table>
            
             
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

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
            </div>';
        }
    }
}







?>