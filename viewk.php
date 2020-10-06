<?php
    //cek session
    if(empty($_SESSION['admin'])){
        $_SESSION['err'] = '<center>Anda harus login terlebih dahulu!</center>';
        header("Location: ./");
        die();
    }else{
        $id_disposisi = mysqli_real_escape_string($config, $_REQUEST['id_disposisi']);
        $result = mysqli_query($config, "SELECT * FROM tbl_disposisi WHERE id_disposisi=$id_disposisi");
        
        while($user_data = mysqli_fetch_array($result))
{
   $id = $user_data['id_konseling'];
   
}
$data = mysqli_query($config, "SELECT * FROM tbl_konseling WHERE id=$id");

while($user_c = mysqli_fetch_array($data))
{
    echo '<div class="card-content grey lighten-4">
           <div class="center">
               <div class="accent">
               <br/>
                   <!-- Row form Start -->
       <div class="row jarak-card">
       <div class="col m12">
       <div class="card">
       <div class="card-content">
       <table>
       <thead class="blue lighten-5 blue-text">
           <div class="confir blue-text"><i class="material-icons md-36">filter_2</i>
           Data KONSELING Wajib Lapor<i class="material-icons md-36 right">call_received</i></div>
       </thead>
       <a class="btn small deep-orange waves-light" href="?page=tsm&act=updta&id_disposisi='.$id_disposisi.'&id='.$user_c['id'].'"><i class="material-icons">add</i>Tambahkan User</a>
       <a class="btn small deep-green waves-light" href="?page=tsm&act=auzs&id_disposisi='.$id_disposisi.'"><i class="material-icons">add</i>SELESAI</a>
   
   
       <tbody>
           <tr>
               <td width="13%">Nama</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['nama'].'</td>
           </tr>
           <tr>
               <td width="13%">Jenis Kelamin</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['jenis_kelamin'].'</td>
           </tr>
           <tr>
               <td width="13%">Pendidikan</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['pndkn_akhir'].'</td>
           </tr>
           <tr>
               <td width="13%">Tanggal Lahir</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['tgl_lahir'].'</td>
           </tr>
           <tr>
               <td width="13%">Alamat</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['alamat'].'</td>
           </tr>
           <tr>
               <td width="13%">No Telpon</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['no_telp'].'</td>
           
           
           </tr>
           <tr>
               <td width="13%">Agama</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['agama'].'</td>
           </tr>
           <tr>
               <td width="13%">Usia</td>
               <td width="1%">:</td>
               <td width="86%">'.$user_c['usia'].'</td>
           </tr>
           <tr>
           <td width="13%">Sesi / Tanggal</td>
           <td width="1%">:</td>
           <td width="86%">'.$user_c['ses_tgl'].'</td>
       </tr>
       <tr>
       <td width="13%">Hasil Pemeriksaan</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['konseling'].'</td>
       </tr>
       <tr>
       <td width="13%">Rencana Terapi</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['rencana_terapi'].'</td>
       </tr>
       <tr>
       <td width="13%">Diagnosis</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['diagnosa'].'</td>
       </tr>
       <tr>
       <td width="13%">Tinjau Kesejahteraan</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['tinjau_kesejahteraan'].'</td>
       </tr>
       <tr>
       <td width="13%">Gambaran Fisik</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['gambaran_fisik'].'</td>
       </tr>
       <tr>
       <td width="13%">Gambaran Prilaku</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['gambaran_perilaku'].'</td>
       </tr>
       <tr>
       <td width="13%">Gambaran Kognitif</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['gambaran_kognitif'].'</td>
       </tr>
       <tr>
       <td width="13%">Gambaran Emosi</td>
       <td width="1%">:</td>
       <td width="86%">'.$user_c['gambaran_emosi'].'</td>
       </tr>
       </tbody>
   </table>   </center>
   <br/>
   </div>   
</div>
</div>


</div>

</div>
</div>
</div>';
   
}

    
    
    }
        ?>
        