
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('admin');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];

  if(isset($_POST['submit'])){
    $targetDir = "img/";
    $allowTypes = array('jpg','png','jpeg','gif');
    $images_arr = array();
    if (isset( $_FILES["images"] ) && !empty( $_FILES["images"]["name"] ) ) {
      foreach($_FILES['images']['name'] as $key => $val){
          $image_name = $_FILES['images']['name'][$key];
          $tmp_name   = $_FILES['images']['tmp_name'][$key];
          $size       = $_FILES['images']['size'][$key];
          $type       = $_FILES['images']['type'][$key];
          $error      = $_FILES['images']['error'][$key];
          // File upload path
          $fileName = basename($_FILES['images']['name'][$key]);
          $targetFilePath = $targetDir . $fileName;
          // Check whether file type is valid
          $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
          if(in_array($fileType, $allowTypes)){
              // Store images on the server
              if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$targetFilePath)){
                  $images_arr[] = $targetFilePath;
              }
          }
          $sql = "UPDATE tce_setting SET value='$fileName' WHERE id=6";
          if ($r = query($conn, $sql)) {}
      }
    }

  }

  $title = 'Home';
  include('templates/header.php');
  include('templates/menu.php');
  ?>
<main class="main">
   <div style="padding:6px" class="">
     <div class="animated fadeIn">
       <div class="row">
         <div class="col-lg-12">
           <div class="card">
             <div class="card-header bg-light text-dark">
               <i class="icon-lock"></i><b>Setting Server</b><b class="px-2"></b>
             </div>
             <div class="card-body">
               <div class="row col-sm-12">
                 <form id="frmsetting" name="frmsetting" action="" method="POST">
                   <div class="form-group row">
                     <div id="x_logo" class="col-md-3 col-form-label-sm">
                     </div>
                     <div class="col-md-9">
                       <label for="exampleInputFile"><b>Pilih Logo Aplikasi</b></label>
                       <input class="form-control" id="images" name="images[]" type="file">
                     </div>
                   </div>
                   <div style="margin-top:-12px" class="form-group row">
                     <label class="col-md-3 col-form-label-sm"><b>Nama Aplikasi</b></label>
                     <div class="col-md-9">
                       <input id="namaApp" class="form-control" type="text" name="namaApp" placeholder="Nama Aplikasi" required />
                     </div>
                   </div>
                   <div style="margin-top:-12px" class="form-group row">
                     <label class="col-md-3 col-form-label-sm"><b>Alamat Lengkap</b></label>
                     <div class="col-md-9">
                       <textarea class="form-control" placeholder="Alamat Sekolah" id="alamatSekolah" name="alamatSekolah" rows="2" cols="80"></textarea>
                     </div>
                   </div>
                   <div style="margin-top:-12px" class="form-group row">
                     <label class="col-md-3 col-form-label-sm"><b>Time Zone</b></label>
                     <div class="col-md-9">
                       <label><input id="wib" type="radio" name="tz" value="Asia/Jakarta"> UTC+7 (WIB)
                       </label>
                       <label><input id="wita" type="radio" name="tz" value="Asia/Makassar"> UTC+8 (WITA)
                       </label>
                       <label><input id="wit" type="radio" name="tz" value="Asia/Jayapura"> UTC+9 (WIT)
                       </label>
                     </div>
                   </div>

                   <div class="form-group row" style="margin-top:-12px">
                     <label class="col-md-3 col-form-label-sm"><b>Reset Peserta Login?</b></label>
                    <div class="col-md-9">
                      <label> <input type="radio" id='mya' name="reset" value="1" class="minimal"> Ya </label>
                      <label> <input type="radio" id='mno' name="reset" value="0" class="minimal"> Tidak </label>
                    </div>
                  </div>

                   <div class="form-group row" style="margin-top:-12px">
                     <label class="col-md-3 col-form-label-sm"><b>User bisa mengelola data pribadi?</b></label>
                    <div class="col-md-9">
                      <label> <input type="radio" id='dp' name="dp" value="1" class="minimal"> Ya </label>
                      <label> <input type="radio" id='do' name="dp" value="0" class="minimal"> Tidak </label>
                    </div>
                  </div>

                   <div style="margin-top:-12px;" class="mb-0 form-group row">
                     <label for="x_module" class="col-sm-3 col-form-label"></label>
                     <div class="col-sm-9">
                       <p class="mb-0 small">*Pastikan tidak ada Tes yang sedang berlangsung.</p>
                       <p class="small mb-0">*Gunakan Aplikasi Google Chrome (Versi terbaru) jika Waktu tidak tampil.</p>
                       <p class="small mb-0">*Clear cache Aplikasi Google Chrome jika Waktu tidak tampil.</p>
                       <p class="small mb-2">*Silahkan Log-Out dan Log-In kembali.</p>
                     </div>
                   </div>
                   <div class="mb-3 form-group row">
                     <label for="x_module" class="col-sm-3 col-form-label"></label>
                     <div class="col-sm-9">
                       <div id="status"></div><br>
                       <button class="btn btn-danger btn-pill" type="button" id="submit" name="submit"><i class="icon icon-paper-plane "></i> Update Setting Server</button>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                 <small>Pastikan data sudah diisi dengan benar sebelum menyimpan pengaturan</small>
               </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/settingServer.js"></script>
<?php
  require('templates/footer.php');
 ?>
