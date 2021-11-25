  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/taxonomyController.php');
  global $conn;
  hakAkses('guru');

  $title = ' Daftar Modul';
  $desk = ' Tambah, Edit, Hapus dan Cari daftar modul';
  require('templates/header.php');
  include('templates/menu.php');

  ?>
  <main class="main">
     <div style="padding:6px" class="">
       <div class="animated fadeIn">
         <div class="row">
           <div class="col-lg-12">
             <div class="card">
               <div class="card-header bg-light text-dark">
                 <b><i class="icon-bubbles"></i> <?= $title ?></b> ─ <small><?=$desk; ?></small>
               </div>
               <div class="card-body">
                 <div class="d-flex flex-wrap justify-content-between mb-1">

                    <div class="col-md-6 mb-1">
                      <?php
                        $sesiLevel = real_escape($conn, intval($_SESSION['user_level']));
                        $sesiUser = real_escape($conn,intval($_SESSION['user_id']));
                        echo '<button type="button" title="Refresh Data" id="refreshData" class="float-left btn-sm btn-icon btn-pill btn btn-success refreshData"><i class="cil-sync"></i> Refresh</button>';
                        if ($sesiLevel >=10) {
                          echo '<button type="button" title="Tambah Data" onclick="add_new()" id="adddata"  class="ml-1 mb-1 float-left btn-sm btn-icon btn-pill btn btn-warning"><i class="icon icon-paper-plane"></i> Tambah Data</button>';
                          echo '<button type="button" title="Hapus Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>';
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
                          <input placeholder="Cari Nama Modul, Taxonomy, Username, Status ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                        </div>
                      </div>
                  </div>

                 <form class="mt-0" id="form_table"  method="post" >
                   <input type="hidden" value="" name="x_id_tr_hapus" />
                   <div class="table-responsive">
                     <table style="width:100%" id="tabelAuthor" class="table table-sm  table-hover">
                       <thead>
                         <tr><th style="padding-left:15px;max-width:10px"> <input name="select_all" value="1" id="altet-select-all" type="checkbox" /></th>
                           <th></th>
                           <th style="width:5000px">Informasi Modul dan Taxonomy<br><small class="text-muted">(Taxonomy, Username Pembuat, Tgl dibuat)</small></th>
                           <th class="text-center" style="width:500px">Status<br><small class="text-muted">(Enable, Disable)</small></th>
                           <th class="text-center" style="width:1000px" >Aksi<br><small class="text-muted">(Edit, Hapus)</small></th>
                         </tr>
                       </thead>
                       <tbody>
                       </tbody>
                     </table>
                   </div>
                 </form>
               </div>
               <div class="card-footer bg-light">
                 <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                   <small> <small> Daftar modul/pelajaran ditampilkan berdasarkan Group akun masing-masing! </small></small>
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
         <div class="modal-header bg-primary">
           <h5 class="modal-title" id="modal-title">Title</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body form">
           <form id="form" class="form-horizontal" method="POST">
             <input type="hidden" value="" name="x_id" />
             <div class="form-body">
               <div class="form-group form-group-sm row mt-2">
                 <label for="nama" class="col-sm-3 col-form-label">Nama Modul<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <input placeholder="Nama Modul atau Pelajaran" id="nama" class="btn-outline-2x rounded-0 form-control" type="text" name="nama" value="" required>
                 </div>
               </div>

               <div style="margin-top:-12px;" class="form-group form-group-sm row">
                 <label for="ntaxonomy" class="col-sm-3 col-form-label">Daftar Taxonomy<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <select data-placeholder="Pilih Taxonomy" class="form-control btn-outline-2x rounded-0" name="ntaxonomy[]" id="ntaxonomy" multiple="multiple">
                     <?php
                       $data = daftartaxonomy(0, 0);
                       foreach ($data as $key => $value) {
                         echo '<option value='.$value['id_taxonomy'].'>'.$value['nama_taxonomy'].'</option>';
                       }
                      ?>
                   </select>
                 </div>
               </div>


               <div class="form-group form-group-sm row mt-2">
                 <label for="status" class="col-sm-3 col-form-label"></label>
                 <div  class="col-md-9" style="margin-top:-6px;">
                   <div class="form-check form-check-inline mr-1">
                     <input class="form-check-input"  type="radio" value="1" name="status">
                     <label class="form-check-label" for="status">Enable</label>
                   </div>
                   <div class="form-check form-check-inline mr-1">
                     <input class="form-check-input" type="radio" value="0" name="status">
                     <label class="form-check-label"  for="status">Disable</label>
                   </div>
                 </div>
               </div>
            </div>
           </form>
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn-pill btn btn-warning" data-dismiss="modal"><i class="nav-icon icon-logout"></i> Selesai</button>
           <button id="simpanData" name="simpanData" type="button" class="btn btn-primary btn-pill"><b><i class="nav-icon icon-share-alt"></i> Simpan Data</b></button>
         </div>
       </div>
     </div>
   </div>


   </main>
   <script type="text/javascript" src="js/modul.js"></script>
<?php
  require('templates/footer.php');
 ?>
