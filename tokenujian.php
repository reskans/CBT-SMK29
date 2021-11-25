
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('pengawas');
  $level = real_escape($conn, intval($_SESSION['user_level']));
  $sesiUser = real_escape($conn, intval($_SESSION['user_id']));
  $uname = real_escape($conn, $_SESSION['user_name']);

  $title = 'Token Ujian';
  $desk = 'Update token ujian';
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
                  </div>
                    <div class="col-md-4">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text bg-light">
                            <i class="cil-search "></i>
                          </div>
                        </div>
                        <input placeholder="Cari Nama Test, waktu mulai, durasi ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                      </div>
                    </div>
                </div>
               <div class="row">
                 <div class="table-responsive table-sm table-hover col-sm-12">
                   <form id="frm-users" method="POST">
                     <table id="tblToken" class="table" cellspacing="0" width="100%">
                       <thead>
                         <tr>
                           <th style="max-width:20px"><input name="select_all" value="1" id="users-select-all" type="checkbox" /></th>
                           <th style="max-width:160px">Nama Test</th>
                           <th style="max-width:180px">Waktu Mulai</th>
                           <th style="max-width:80px">Durasi</th>
                           <th style="max-width:100px">Token</th>
                           <th style="max-width:80px">Aksi</th>
                         </tr>
                       </thead>
                       <tbody class="table-sm">
                       </tbody>
                     </table>
                     <input type="hidden" name="xinfo" id="xinfo" value="<?= $level; ?>">
                   </form>
                 </div>
               </div>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                 <small>Daftar token Test yang ditampilkan berdasarkan group masing-masing!</small>
               </p>
             </div>
           </div>

           <div class="modal fade docs-example-modal-lg" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
             <form id="form" action="#" class="form-horizontal">
               <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                   <div class="modal-header bg-primary">
                     <h5 class="modal-title" id="modal-title">Title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body form">
                     <input type="hidden" value="" name="x_id" id="x_id" />
                     <div class="form-body">
                       <div class="form-group row">
                         <label for="x_name" class="col-sm-2 col-form-label">Nama Test</label>
                         <div class="col-sm-10">
                           <input type="text" class="form-control" name="x_name" id="x_name"  placeholder="Nama Test" disabled>
                           <span class="help-block"></span>
                         </div>
                       </div>
                       <div style="margin-top:-12px;" class="form-group row">
                         <label for="x_token" class="col-sm-2 col-form-label">Token</label>
                         <div class="input-group mb-3 col-sm-10">
                           <input id="x_token" name="x_token" type="text" class="form-control" placeholder="Token">
                           <div class="input-group-append">
                             <button class="btn btn-success" type="button" name="randomToken" id="randomToken">Buat Random Token</button>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="modal-footer bg-light">
                     <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"> <i class="nav-icon icon-reload"></i> Selesai</button>
                     <button id="updateToken" name="updateToken" type="button" class="btn btn-primary btn-pill"><i class="nav-icon icon-doc"></i> Update Token</button>
                   </div>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/tokenujian.js"></script>
<?php
  require('templates/footer.php');
 ?>
