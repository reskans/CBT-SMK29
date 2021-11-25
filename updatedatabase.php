
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('admin');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];
  $title = 'Update Database Server FlyExam';
  $desk = 'Cek dan Update database server flyexam anda!';
  include('templates/header.php');
  include('templates/menu.php');
  $dbVersion = 'N/A';
  $sqlcv = "SELECT nama, value FROM tce_setting WHERE nama='db_version' LIMIT 1";
  if ($rcv = query($conn, $sqlcv)) {
    if (rows($rcv) > 0) {
      $d = fetch_assoc($rcv);
      $dbVersion = $d['value'];
    }
  }
  ?>
<main class="main">
   <div style="padding:6px" class="">
     <div class="animated fadeIn">
       <div class="row">
         <div class="col-lg-12">
           <div class="card">
             <div class="card-header bg-light text-dark">
               <i class="nav-icon icon-pie-chart"></i><b> <?= $title ?></b> ─ <small><?=$desk; ?></small>
             </div>
             <div class="card-body">
               <form id="form" method="POST" enctype="multipart/form-data">
                 <div  class="form-group row mb-0">
                   <div class="col-md-9">
                     <label for="versidb"><h4>Versi Database saat ini : <code><?= $dbVersion; ?></code></h4></label>
                     <div class="form-group">
                       <small class="text-muted">Pastikan <code>Versi Database</code> Anda sudah versi terbaru! <a href="updatedatabase.php"> Klik disini untuk merefresh Halaman</a>
                         <br>Pilih file database (.sql) resmi dari Group Official FlyExam, dan segera lakukan Update jika belum.</small>
                     </div>
                   </div>
                 </div>

                 <div  class="form-group row mb-0">
                   <div class="col-md-9">
                     <label for="InputFile"><b>Pilih File Database (.sql)<span class="text-danger">*</span></b></label>
                     <div class="form-group">
                       <input class="form-control col-md-6" type="file" id="InputFile" name="file_sql">
                     </div>
                   </div>
                 </div>

                 <div id="divprogress" class="mb-0 mt-0 form-group row" style="display:none;">
                   <div class="col-sm-10">
                     <div class="progress" id="progresstheme" style="display:none;">
                       <div id="progressBar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                         <span class="sr-only">0% Complete</span>
                       </div>
                     </div>
                     <div id="infoextrak"></div>
                     <div id="infoupload"></div>
                   </div>
                 </div>

                 <div class="mb-0 mt-0 form-group row">
                   <div class="col-sm-10">
                     <button style="padding-left: 20px;padding-right: 20px;" class="btn btn-primary btn-pill mb-2" type="button" id="submit" name="submit"><i class="nav-icon icon-pie-chart"></i> Update Database FlyExam</button>
                     <p class="small mb-0"><span class="text-danger">*</span>Proses update database tidak bisa dibatalkan! Mohon pastikan file Update yang anda upload benar dan bersumber dari GROUP OFFICIAL FlyExam!</p>
                     <p class="small"><span class="text-danger">*</span>Segala resiko kerusakan akibat kelalaian Anda bukan tanggung jawab kami!</p>
                   </div>
                 </div>
               </form>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted">
                 <small><span class="text-danger">*</span> Pastikan anda mengupload file database .sql resmi FlyExam, Info update akan diinformasikan di group FlyExam!</small>
               </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/updatedatabase.js"></script>
<?php
  require('templates/footer.php');
 ?>
