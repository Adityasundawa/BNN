
 <?php
                                    if(isset($_SESSION['tgl_surat'])){
                                        $tgl_surat = $_SESSION['tgl_surat'];
                                        echo '<div id="alert-message" class="callout bottom z-depth-1 red lighten-4 red-text">'.$tgl_surat.'</div>';
                                        unset($_SESSION['tgl_surat']);
                                    }
                                ?>
                                
<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }else{
    
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
<input type="hidden" value="'.$_REQUEST['id'].'"name="id">
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
    </button>
</form>
</div>';
        
    
    }
        ?>