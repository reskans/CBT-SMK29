  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');

  $title = ' Daftar Foto Peserta';
  $desk = ' Tambah, Edit, Hapus dan Cari daftar foto peserta';
  require('templates/header.php');
  include('templates/menu.php');

  ?>
  <main class="main">
     <div style="padding:6px" class="">
       <div class="animated fadeIn">
         <div class="row">
           <div class="col-lg-12">
             <div class="card">
               <div class="card-header text-dark bg-light">
                 <b><i class="icon-picture"></i> <?= $title ?></b> ─ <small><?=$desk; ?></small>
               </div>
               <div class="card-body">
                 <div class="d-flex flex-wrap justify-content-between mb-1">
                    <div class="col-md-6 mb-1">
                      <?php
                        $sesiLevel = real_escape($conn, intval($_SESSION['user_level']));
                        $sesiUser = real_escape($conn,intval($_SESSION['user_id']));
                        echo '<button type="button" title="Refresh Data" id="refreshData" class="float-left btn-sm btn-icon btn-pill btn btn-success refreshData"><i class="cil-sync"></i> Refresh</button>';
                        if ($sesiLevel >=10) {
                          echo '
                          <button type="button" title="Tambah Data" onclick="add_new()" id="adddata"  class="ml-1 mb-1 float-left btn-sm btn-icon btn-pill btn btn-warning"><i class="icon icon-paper-plane"></i> Tambah Data</button>
                          <button type="button" title="Hapus Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>';
                        }
                        ?>

                    </div>
                      <div class="col-md-4">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text bg-light">
                              <i class="cil-search "></i>
                            </div>
                          </div>
                          <input placeholder="Cari Nama, Username dan foto peserta ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                        </div>
                      </div>
                  </div>

                 <form class="mt-0" id="form_table"  method="post" >
                   <input type="hidden" value="" name="x_id_tr_hapus" />
                   <div class="table-responsive">
                     <table style="width:100%" id="tabelAuthor" class="table table-sm  table-hover">
                       <thead>
                         <tr>
                           <th style="padding-left:15px;max-width:10px"> <input name="select_all" value="1" id="altet-select-all" type="checkbox" /></th>
                           <th></th>
                           <th style="width:5000px">Informasi Foto Peserta<br><small class="text-muted">(Nama Lengkap, Username)</small></th>
                           <th></th>
                           <th></th>
                           <th style="width:1000px">Foto<br><small class="text-muted">(Username JPG, GIF, PNG)</small></th>
                           <th class="text-center" style="width:500px" >Aksi<br><small class="text-muted">(Edit, Hapus)</small></th>
                         </tr>
                       </thead>
                       <tbody>
                       </tbody>
                     </table>
                   </div>
                   <input type="hidden" name="xnoted" id="xnoted" value="<?= $sesiLevel; ?>">
                 </form>
               </div>
               <div class="modal-footer bg-light">
                 <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                   <small> Refresh halaman jika gambar tidak muncul!</small>
                 </p>
               </div>
             </div>
           </div>
           <!-- /.col-->
         </div>
       </div>
     </div>

     <!-- Modal -->
     <div class="modal fade" id="confirmDelete2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header bg-danger">
             <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             Apakah anda yakin untuk menghapus data ini?
           </div>
           <div class="modal-footer bg-light">
             <button type="button" class="float-left ml-1 btn-icon btn-pill btn btn-secondary" data-dismiss="modal"><i class="icon icon-logout"></i> Batal</button>
             <button type="button" id="delete-confirm-button2" class="float-left ml-1 btn-icon btn-pill btn btn-danger "><i class="fa fa-trash"></i> Konfirmasi & Hapus Data</button>
           </div>
         </div>
       </div>
     </div>

     <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header bg-danger">
             <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-trash"></i> Hapus Data</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <div class="pesanmodaldelete"></div>
           </div>
           <div class="modal-footer bg-light">
             <button type="button" class="float-left ml-1 btn-icon btn-pill btn btn-secondary" data-dismiss="modal"><i class="icon icon-logout"></i> Batal</button>
             <button type="button" class="float-left ml-1 btn-icon btn-pill btn btn-danger " id="delete-confirm-button"><i class="cil-trash"></i>Konfirmasi & Hapus Data</button>
           </div>
         </div>
       </div>
     </div>

  <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header bg-warning">
             <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Warning!</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <div class="pesanmodalwarning"></div>
           </div>
           <div class="modal-footer bg-light">
             <button type="button" class="float-left ml-1 btn-icon btn-pill btn btn-warning " data-dismiss="modal"><i class="cil-sync"></i> OK, Mengerti
             </button>
           </div>
         </div>
       </div>
     </div>

  <div class="modal fade docs-example-modal-lg" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form id="uploadForm" enctype="multipart/form-data" action="api/fotoApi.php" class="form-horizontal" method="post">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="modal-title">Title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body form">
            <div class="form-body">
              <input type="hidden" name="x_id_photo[]" value="">
              <div class="form-group col-md-12 row">
                <p>Upload Foto Peserta sesuai dengan username masing-masing. Misalnya username <code>nicedream</code>, maka nama file yang akan diupload adalah <code>nicedream.jpg</code> atau <code>nicedream.jpeg</code> atau <code>nicedream.png</code> atau <code>nicedream.gif</code> dengan ukuran maksimum <b>2MB</b>.</p>
              </div>
              <div style="margin-top:-30px" class="form-group row">
                <label for="x_photo" class="col-sm-12 col-form-label"><b>Pilih Foto Peserta</b> <small class="text-muted">[support multi file]</small></label>
                <div style="margin-top:10px" class="mb-1 col-sm-12" name="x_photo">
                  <div class="form-group form-group-sm row">
                    <div class="ml-4 mb-2" id="preview">
                      <img alt="imgPrev" title="Foto Peserta" class="rounded" id="imgpreview" name="imgpreview" src="" alt="" width="80" height="80">
                    </div>
                    <div class="col-sm-10">
                      <input class="form-control " id="img" multiple type="file" name="images[]" value="" accept=".jpg, .png, .jpeg, .gif">
                      <button type="submit" name="uploadimg" class="mt-2 btn btn-primary btn-pill btn-block">Upload Foto Peserta <i class="icon-arrow-right"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <p class="mb-0 text-muted small">
                <span class="text-danger">*</span>Nama File foto peserta harus sama dengan <code>Username</code> peserta yang sudah dibuat sebelumnya!</p>
              <p class="mb-0 text-muted small">
                <span class="text-danger">*</span>Format File foto peserta support <code>.png</code>, <code>.JPG</code>, <code>.JEPG</code>, dan <code>.GIF</code></p>
              <p class=" mb-4 text-muted small">
                <span class="text-danger">*</span>Maksimum ukuran File foto Peserta <code>2MB</code></p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  </main>
   <script type="text/javascript" src="js/foto.js"></script>
<?php
  require('templates/footer.php');
 ?>
