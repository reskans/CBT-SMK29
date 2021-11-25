
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/groupController.php');
  $group = getgroup();

  global $conn;
  hakAkses('pengawas');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];
  $title = 'Pengumuman';
  $desk = 'Buat atau update pengumuman (Kata sambutan) yang akan dilihat oleh user!';
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
                <i class="nav-icon icon-docs"></i><b> <?= $title ?></b> ─ <small><?=$desk; ?></small>
                <button onclick="reload_pengumumman()" class="btn btn-success btn-sm float-right btn-pill" type="button" ><i class="fa fa-refresh"></i> Refresh Data</button>
             </div>
             <div class="card-body">
               <div class="row">
                <div class="table-responsive table-sm table-hover col-sm-12">
                  <form id="form" action="#" method="POST">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                      <div class="col-sm-10">
                        <input id="judul" class="form-control" type="text" name="judul" placeholder="Judul pengumuman"/>
                      </div>
                    </div>

                    <div class="form-group row" style="margin-top:-12px">
                      <label for="isi" class="col-sm-2 col-form-label">Isi Pengumuman</label>
                      <div class="col-sm-10">
                        <textarea id="isi" class="form-control" style="width:100%" name="isi" rows="6" cols="140" placeholder="Isi pengumuman ..."></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="x_module" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10">
                        <button class="btn btn-primary btn-pill col-md-4" type="button" id="savePenguman" name="savePenguman"><i class="fa fa-save"></i> Simpan Pengumuman</button>
                      </div>
                    </div>
                  </form>
                </div>
             </div>
           </div>
           <div class="card-footer bg-light">
             <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
               <small>Data pengumuman akan ditampilkan di halaman user!</small>
             </p>
           </div>
         </div>

       </div>
     </div>
   </div>
 </main>
<script src="js/pengumuman.js"></script>
<?php
  require('templates/footer.php');
 ?>
