  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');
  $title = ' Daftar Hasil Test';
  $desk = ' Hapus, Export, dan Cari daftar hasil ujian peserta yang sudah selesai';
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
                 <b><i class="icon icon-docs"></i> <?= $title ?></b> ─ <small><?=$desk; ?></small>
               </div>
               <div class="card-body">

                 <div class="form-group row pr-3">
                   <label for="d_namatest" class="col-md-2 col-form-label">Nama Test<span class="text-danger">*</span></label>
                   <div class="col-md-10">
                     <select data-placeholder="Pilih nama test" class="form-control" name="d_namatest" id="d_namatest">
                     </select>
                   </div>
                 </div>

                 <div class="form-group row pr-3" style="margin-top: -12px;">
                   <label for="d_namagroup" class="col-md-2 col-form-label">Nama Group<span class="text-danger">*</span></label>
                   <div class="col-md-10">
                     <select data-placeholder="Pilih nama group" class="form-control" name="d_namagroup" id="d_namagroup">
                     </select>
                   </div>
                 </div>

                 <div class="form-group row pr-3 mb-0" style="margin-top: -12px;">
                   <label for="d_namauser" class="col-md-2 col-form-label">Nama User<span class="text-danger">*</span></label>
                   <div class="col-md-10">
                     <select data-placeholder="Pilih nama user" class="form-control" name="d_namauser" id="d_namauser">
                     </select>
                   </div>
                 </div>

                 <div id="content" class="hidden">
                   <div class="d-flex flex-wrap justify-content-between mb-1 mt-4">
                      <div class="col-md-6 mb-1">
                        <button type="button" title="Refresh Data" id="refreshData" class="float-left btn-sm btn-icon btn-pill btn btn-primary refreshData"><i class="cil-sync"></i> Refresh Data </button>
                        <button type="button" title="Hapus Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>
                        <!-- <button type="button" title="Export Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-warning " name="exportdata" id="exportdata"><i class="cil-cloud-upload"></i> Export Data</button> -->
                        <a title="Export Data" href="javascript:void(0)" id="export" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="cil-cloud-upload"></i> Export Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <a name="exportdata" id="exportdata" class="dropdown-item small" href="javascript:void(0)" title="Export Detail Data"><i class="fa fa-file"></i>Export Detail Data</a>
                          <a name="exportdatakd" id="exportdatakd" class="dropdown-item small" href="javascript:void(0)" title="Export Data Per-KD"><i class="fa fa-file"></i>Export Data Per-KD</a>
                          <a name="exportdatarespon" id="exportdatarespon" class="dropdown-item small" href="javascript:void(0)" title="Export Respon Data untuk kebutuhan Analisis"><i class="fa fa-file"></i>Export Respon Data</a>
                        </div>

                      </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-light">
                                <i class="cil-search "></i>
                              </div>
                            </div>
                            <input placeholder="Cari Username, Nama Lengkap, Group, jumlah benar, salah..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
                          </div>
                        </div>
                    </div>
                   <form class="mt-1" id="form" method="post" >
                     <div class="table-responsive">
                       <table style="width:100%" id="tabelAuthor" class="table table-responsive table-hover daftarhasil">
                         <thead class="bg-light">
                           <tr>
                             <th rowspan="2" style="max-width:20px">
                               <input name="select_all" value="1" id="altet-select-all" type="checkbox" />
                             </th>
                             <th class="text-primary" rowspan="2" style="width:1500px">Informasi Test<br><small class="text-muted">(Nama Test, Deskripsi, Tgl Mulai)</small></th>
                             <th class="text-primary" rowspan="2" style="width:1000px">Nama Lengkap<br><small class="text-muted">(Nama Depan, Nama Belakang, @Username)</small></th>
                             <th class="text-primary" rowspan="2" style="width:1000px">Group<br><small class="text-muted">(Group User)</small></th>
                             <th class="text-primary text-center" colspan="5">Total Data</th>
                             </tr>
                            <tr>
                             <th class="text-center text-primary" style="width:150px">Soal</th>
                             <th class="text-center text-primary" style="width:150px">Jawab</th>
                             <th class="text-center text-primary" style="width:150px">Benar</th>
                             <th class="text-center text-primary" style="width:150px">Salah</th>
                             <th class="text-center text-primary" style="width:500px">Skor</th>
                           </tr>
                         </thead>
                         <tbody class="table-sm">
                         </tbody>
                         <tfoot class="bg-light" align="right">
                            <tr class="text-dark mt-0 ">
                              <th class="text-primary" colspan="4"> Nilai Maksimum</th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                            </tr>
                            <tr class="text-dark mt-0">
                              <th class="text-primary" colspan="4"> Nilai Minimum</th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                            </tr>
                          </tfoot>

                       </table>
                     </div>
                   </form>
                 </div>



               </div>
               <div class="card-footer bg-light">
                 <p class="mr-auto mt-0 mb-0 text-muted"><small>Semua tanda (<span class="text-danger">*</span>)  wajib diisi!</small></p>
                 <p style="margin-top:-4px" class="mr-auto text-muted"><small>Row <span class="text-success"><b>Hijau</b></span> Nilai >= 70%</small></p>
                 <p style="margin-top:-20px" class="mr-auto text-muted"><small>Row <span class="text-warning"><b>Orange</b></span> Nilai >= 50%</small></p>
                 <p style="margin-top:-20px" class="mr-auto mb-0 text-muted"><small>Row <span class="text-danger"><b>Merah</b></span> Nilai < 50%</small></p>
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

     <div class="modal fade" id="importmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header bg-info">
             <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form  method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
              <div class="input-group">
                <div class="col-md-12">
                  <p class="text-dark well well-sm no-shadow">
                     Silahkan upload Data User dari file Microsoft Excel dengan format
                   .xls, .xlsx, .csv. Download contoh template User
                   <a href="files/tce_users.xlsx"><code>tce_users.xlsx</code></a> atau
                   <a href="files/tce_users.xls"><code>tce_users.xls</a></code> atau
                   <a href="files/tce_users.csv"><code>tce_users.csv</a></code></p>
                </div>
                <div class="col-md-12 mb-2">
                  <b class="text-dark">Pilih Berkas</b>
                  <input class="form-control" type="file" name="file" id="file" accept=".xls,.xlsx">
                </div>
                <div class="col-md-12">
                  <button id="btnimport" name="btnimport" class="btn-block ml-1 btn-icon btn-pill btn btn-info text-white" type="button" title="Import data user"><i class="cil-cloud-download text-white"></i> Import data user</button>
                </div>
              </div>
            </form>
           </div>
           <div class="modal-footer bg-light">
             <small><span class="text-danger">*</span><span class="text-muted">Pastikan format template data user yang anda gunakan sudah sesuai dengan format template asli FlyExam!</span></small>
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
             <input type="hidden" value="" name="x_id" />
             <div class="form-body">
               <div class="form-group form-group-sm row">
                 <label for="x_name" class="col-sm-3 col-form-label">Username<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <input required placeholder="Username" id="x_name" class="btn-outline-2x rounded-0 form-control" type="text" name="x_name" value="" required>
                 </div>
               </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_password" class="col-sm-3 col-form-label">Password<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <input placeholder="1234" id="x_password" class="btn-outline-2x rounded-0 form-control" type="password" name="x_password" value="" required>
                 </div>
               </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_email" class="col-sm-3 col-form-label">Email</label>
                 <div class="col-sm-9">
                   <input placeholder="email@flyexam.id" id="x_email" class="btn-outline-2x rounded-0 form-control" type="text" name="x_email" value="">
                 </div>
               </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_f_name" class="col-sm-3 col-form-label">Nama Depan</label>
                 <div class="col-sm-9">
                   <input placeholder="Nama Depan" id="x_f_name" class="btn-outline-2x rounded-0 form-control" type="text" name="x_f_name" value="">
                 </div>
               </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_l_name" class="col-sm-3 col-form-label">Nama Belakang</label>
                 <div class="col-sm-9">
                   <input placeholder="Nama Belakang" id="x_l_name" class="btn-outline-2x rounded-0 form-control" type="text" name="x_l_name" value="">
                 </div>
               </div>

               <div class="form-group form-group-sm row">
                <label class="col-md-3 col-form-label"  style="margin-top:-12px;">Jenis Kelamin<span class="text-danger">*</span></label>
                <div id="jenisk" class="col-md-9" style="margin-top:-6px;">
                  <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input"  type="radio" value="L" name="jk">
                    <label class="form-check-label" for="jk">Laki-Laki</label>
                  </div>
                  <div class="form-check form-check-inline mr-1">
                    <input class="form-check-input" type="radio" value="P" name="jk">
                    <label class="form-check-label"  for="jk">Perempuan</label>
                  </div>
                </div>
              </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_tmpt_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                 <div class="col-sm-9">
                   <input placeholder="Tempat Lahir" id="x_tmpt_lahir" class="btn-outline-2x rounded-0 form-control" type="text" name="x_tmpt_lahir" value="">
                 </div>
               </div>

               <div class="form-group form-group-sm row" style="margin-top:-12px">
                 <label for="x_tgllahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                 <div class="col-sm-9">
                   <input placeholder="Tanggal Lahir" id="x_tgllahir" class="btn-outline-2x rounded-0 form-control" type="date" name="x_tgllahir" value="<?= date('Y-m-d'); ?>">
                 </div>
               </div>

              <div style="margin-top:-12px;" class="form-group form-group-sm row">
              <label for="xx_group" class="col-sm-3 col-form-label">Group<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select data-placeholder="Pilih Group" class="form-control" id="xx_group" name="xx_group[]" size="5" multiple="">
                </select>
              </div>
            </div>
            <?php if ($_SESSION['user_level'] > 5) { ?>
            <div style="margin-top:-12px;" class="form-group row">
              <label for="x_level" class="col-md-3 col-form-label">Level Akses<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select id="x_level" name="x_level" class="form-control">
                  <option value="1">User</option>
                  <option value="3">Pengawas</option>
                  <option value="5">Guru</option>
                  <option value="10">Administrator</option>
                </select>
              </div>
            </div>
            <?php } ?>
            </div>
           </form>
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn-pill btn btn-warning" data-dismiss="modal"><i class="nav-icon icon-logout"></i> Selesai</button>
           <button id="btnSave" name="btnSave" type="button" class="btn btn-primary btn-pill"><b><i class="nav-icon icon-share-alt"></i> Simpan Data</b></button>
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
             <input type="hidden" name="x_idtest"  id="x_idtest" value="">
             <input type="hidden" name="d_group"  id="d_group" value="">
             <input type="hidden" name="usrid"  id="usrid" value="">
            <div class="input-group">
              <div class="col-md-12 mb-2">
                <label for="d_group" class="col-form-label" id="ket">Anda bisa memilih daftar Group yang ingin di Export</label>
              </div>

              <div class="col-md-12">
                <button id="btnexport" name="btnexport" class="btn-block ml-1 btn-icon btn-pill btn btn-primary text-white" type="button" title="Export hasil test peserta"><i class="cil-cloud-upload text-white"></i> Export hasil test peserta</button>
              </div>
            </div>
          </form>
         </div>
         <div class="modal-footer bg-light">
           <small><span class="text-danger">*</span><span class="text-muted">Hasil test peserta yang di Export sesuai dengan Group masing-masing Akun. Semua hasil test peserta hanya bisa di Export oleh Administrator.</span></small>
         </div>
       </div>
     </div>
   </div>

   </main>
   <script type="text/javascript" src="js/hasil.js"></script>
<?php
  require('templates/footer.php');
 ?>
