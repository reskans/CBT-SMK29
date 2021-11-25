  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');
  $title = ' Daftar Taxonomy & Detail Taxonomy';
  $desk = ' Tambah, Edit, Hapus, Cari Taxonomy & Detail Taxonomy';
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
                 <b><i class="icon-bubbles"></i> <?= $title ?></b> ─ <small><?=$desk; ?></small>
               </div>
               <div class="card-body">
                 <div class="d-flex flex-wrap justify-content-between mb-1">
                    <div class="col-md-6 mb-1">
                      <?php
                        echo '<button type="button" title="Refresh Data" id="refreshData" class="float-left btn-sm btn-icon btn-pill btn btn-success refreshData"><i class="cil-sync"></i> Refresh</button>';
                        $sesiLevel = real_escape($conn, intval($_SESSION['user_level']));
                        $sesiUser = real_escape($conn,intval($_SESSION['user_id']));

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
                          <input placeholder="Cari Taxonomy, Detail Taxonomy ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                        </div>
                      </div>
                  </div>

                 <form class="mt-0" id="form_table" method="post" >
                   <input type="hidden" value="" name="x_id_tr_hapus" />
                   <div class="table-responsive">
                     <table style="width:100%" id="tabelAuthor" class="table  table-responsive table-sm  table-hover">
                       <thead>
                         <tr>
                           <th style="padding-left:15px;max-width:10px"> <input name="select_all" value="1" id="altet-select-all" type="checkbox" /></th>
                           <th></th>
                           <th style="width:9000px">Informasi Taxonomy & Detail Taxonomy<br><small class="text-muted">(Taxonomy, Detail Taxonomy, Tgl dibuat)</small></th>
                           <th class="text-center" style="width:1000px" >Aksi<br><small class="text-muted">(Edit,Hapus)</small></th>
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
                   <small> <small> Data semua taxonomy hanya ditampilkan dari akun Administrator! </small></small>
                 </p>
               </div>
             </div>
           </div>
           <!-- /.col-->
         </div>

       </div>
     </div>

     <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-body"><center><img src="img/loading.gif" alt=""></center>
           <p class="text-muted"><center>Processing data, silahkan tunggu sebentar ....</center></p>
         </div>
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
             Menghapus Taxonomy akan menyebabkan Detail Taxonomy juga terhapus, Apakah anda yakin untuk menghapus data ini?
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
           <form action="#" id="form" class="form-horizontal" method="post">
             <input type="hidden" value="" id='x_id' name="x_id" />
             <input type="hidden" value="" id='x_id_dettaxo' name="x_id_dettaxo" />
             <div class="form-body">
               <div class="form-group form-group-sm row">
                 <label for="x_name" class="col-sm-3 col-form-label">Nama Taxonomy<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <input required placeholder="Ex: Bloom" id="x_name" class="btn-outline-2x rounded-0 form-control" type="text" name="x_name" value="" required>
                 </div>
               </div>

               <div class="form-group form-group-sm row mb-0 mt-2">
                 <label class="col-sm-3 col-form-label"></label>
                 <div class="col-sm-9">
                   <label><span class="text-danger">*</span><small>Pisahkan dengan tanda titik-koma <code>(;)</code> jika Detail Taxonomy lebih dari satu.</small></label>
                   <small><a onclick="kosongkanTaxo();" class="mt-1 float-right" href="javascript:void(0)">Kosongkan Daftar Taxonomy</a></small>
                 </div>
               </div>

               <div class="form-group form-group-sm row mb-0">
                 <label for="detiltaxo" class="col-sm-3 col-form-label">Detail Taxonomy</label>
                 <div class="col-sm-9">
                   <textarea id="detiltaxo" class="btn-outline-2x rounded-0 form-control" placeholder="Ex: Analyze; Apply" name="detiltaxo" rows="2"></textarea>
                 </div>
               </div>
               <div class="form-group form-group-sm row mb-0 mt-2">
                 <label for="dmateri" class="col-sm-3 col-form-label"></label>
                 <div class="col-sm-9">
                   <p id="daftardetiltaxo"></p>
                 </div>
               </div>
            </div>
           </form>
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn-pill btn btn-warning" data-dismiss="modal"><i class="nav-icon icon-logout"></i> Selesai</button>
           <?php
            if ($sesiLevel >=10) {
              echo '<button id="btnSave" name="btnSave" type="button" class="btn btn-primary btn-pill"><b><i class="nav-icon icon-share-alt"></i> Simpan Data</b></button>';
            }
            ?>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="exportmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header bg-primary">
           <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form  method="post" name="frmExcelExport" id="frmExcelExport">
            <div class="input-group">
              <?php if ($_SESSION['user_level'] > 5) { ?>
              <div class="col-md-12 mb-2">
                <label for="d_group" class="col-form-label">Anda bisa memilih daftar Group yang ingin di Export</label>
                <select class="form-control" id="d_group" name="d_group">
                </select>
              </div>
            <?php } else {
                echo '<label for="d_group" class="col-form-label">Anda hanya bisa meng-Export semua data peserta yang sesuai dengan group akun Anda!</label>';
              }
               ?>
              <div class="col-md-12">
                <button id="btnexport" name="btnexport" class="btn-block ml-1 btn-icon btn-pill btn btn-primary text-white" type="button" title="Import data user"><i class="cil-cloud-upload text-white"></i> Export data user</button>
              </div>
            </div>
          </form>
         </div>
         <div class="modal-footer bg-light">
           <small><span class="text-danger">*</span><span class="text-muted">Data user yang di Export sesuai dengan Group masing-masing Akun. Data semua user hanya bisa di Export oleh Administrator.</span></small>
         </div>
       </div>
     </div>
   </div>

   </main>
   <script type="text/javascript" src="js/taxonomy.js"></script>
<?php
  require('templates/footer.php');
 ?>
