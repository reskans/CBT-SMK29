
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('pengawas');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];
  $title = 'Reset Peserta Ujian';
  $desk = 'Daftar Peserta Ujian, Gunakan nama, nomor, username untuk mereset login peserta.';
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
               <i class="nav-icon icon-grid"></i><b> <?= $title ?></b> ─ <small><?=$desk; ?></small>
             </div>
             <div class="card-body">
               <div class="d-flex flex-wrap justify-content-between mb-1">
                  <div class="col-md-6 mb-1">
                    <button type="button" title="Refresh Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-primary " onclick="reload_table()"><i class="icon icon-reload"></i> Refresh</button>
                    <button type="button" title="Reset Login Peserta" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-danger" name="hapusall" id="hapusall"><i class=" cil-trash"></i> Reset Login Peserta</button>

                  </div>
                    <div class="col-md-4">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-light">
                            <i class="cil-search "></i>
                          </div>
                        </div>
                        <input placeholder="Cari Username, Nama Lengkap, Group ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                      </div>
                    </div>
                </div>



               <div class="row">
                 <div class="table-responsive table-sm table-hover col-sm-12">
                   <form id="frm-users" method="POST">
                     <table id="peserta" class="table" cellspacing="0" width="100%">
                       <thead>
                         <tr>
                           <th style="max-width:20px"><input name="select_all" value="1" id="users-select-all" type="checkbox" /></th>
                           <th style="max-width:160px">Username</th>
                           <th style="max-width:180px">Nama Lengkap</th>
                           <th style="max-width:80px">Group</th>
                           <th style="max-width:100px">Terakhir Login</th>

                           <th style="max-width:80px">Aksi</th>
                         </tr>
                       </thead>
                       <tbody class="table-sm">
                       </tbody>
                     </table>
                   </form>
                 </div>
               </div>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                 <small> <small> Daftar modul/pelajaran ditampilkan berdasarkan Group akun masing-masing! </small></small>
               </p>
             </div>
           </div>
          <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-danger">
                  <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-refresh"></i> Reset Data Peserta</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Apakah anda yakin untuk mereset semua data yang dipilih?
                </div>
                <form  id="form">
                  <input type="hidden" name="x_id" value="">
                </form>
                <div class="modal-footer bg-white">
                  <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Kembali</button>
                  <button type="button" id="delete-confirm-button" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Konfirmasi dan Reset</button>
                </div>
              </div>
            </div>
          </div>
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
                  Apakah anda yakin untuk mereset data yang dipilih?
                </div>
                <form  id="form">
                  <input type="hidden" name="x_id" value="">
                </form>
                <div class="modal-footer bg-white">
                  <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Kembali</button>
                  <button type="button" id="delete-confirm-button2" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Konfirmasi dan Reset</button>
                </div>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/resetpeserta.js"></script>
<?php
  require('templates/footer.php');
 ?>
