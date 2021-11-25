  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');
  $title = ' Daftar Test Yang Sedang Berlangsung';
  $desk = ' Lihat detail hasil test yang sedang berlangsung semua test, group dan user!';
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
                        <button type="button" title="Refresh Data" id="refreshData" class="float-left btn-sm btn-icon btn-pill btn btn-dark refreshData"><i class="icon icon-reload"></i></button>
                        <button type="button" title="Hentikan & Simpan Semua data terpilih" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-warning " name="mnhentikandansimpanall" id="mnhentikandansimpanall"><i class="nav-icon icon-share-alt"></i> Hentikan & Simpan Semua</button>
                        <button type="button" title="Tambah Waktu peserta yang dipilih" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-primary " name="mntambahwaktuall" id="mntambahwaktuall"><i class="nav-icon icon-clock"></i> Tambah Waktu</button>
                        <button type="button" title="Hapus Data" class="float-left ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>
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
                       <table style="width:100%" id="tabelAuthor" class="table table-hover daftarhasil">
                         <thead class="bg-light">
                           <tr>
                             <th style="max-width:20px">
                               <input name="select_all" value="1" id="altet-select-all" type="checkbox" />
                             </th>
                             <th class="text-primary" style="width:1500px">Informasi Test<br><small class="text-muted">(Nama Test, Deskripsi, Tgl Mulai)</small></th>
                             <th class="text-primary" style="width:1000px">Nama Lengkap<br><small class="text-muted">(Nama Depan, Nama Belakang, @Username)</small></th>
                             <th class="text-primary text-center" style="width:1000px">Group<br><small class="text-muted">(Group User)</small></th>
                             <th class="text-primary" style="width:1000px">Skor<br><small class="text-muted">(Skor sementara)</small></th>
                             <th class="text-primary"></th>
                             <th class="text-primary">Status<br><small class="text-muted">(1,2,3,4..9999)</small></th>
                             <th class="text-primary text-center" style="width:2000px">Aksi<br><small class="text-muted">(Simpan, Reset, Hentikan, Tambah waktu)</small></th>
                             <th></th>
                          </tr>
                         </thead>
                         <tbody class="table-sm">
                         </tbody>
                         <tfoot class="bg-light" align="right">
                            <tr class="text-dark mt-0 ">
                              <th class="text-primary text-center" colspan="4"> Nilai Maksimum</th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>
                              <th class="text-center text-primary"></th>

                            </tr>
                            <tr class="text-dark mt-0">
                              <th class="text-primary text-center" colspan="4"> Nilai Minimum</th>
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

   <div class="modal fade" id="tambahwaktu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header bg-primary">
           <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form  method="post" name="frmtambahwaktu" id="frmtambahwaktu">
             <input type="hidden" name="x_id_testuserid"  id="x_id_testuserid" value="">
            <div class="input-group">
              <div class="col-md-12 mb-2">
                <input class="form-control" type="number" min="1" max="1000" id="bnyakwaktu" name="bnyakwaktu" value="" placeholder="Tambah waktu peserta (menit), ex : 20">
              </div>
              <div class="col-md-12">
                <button id="tblTambahwaktu" name="tblTambahwaktu" class="btn-block ml-1 btn-icon btn-pill btn btn-primary text-white" type="button" title="Tambah waktu peserta"><i class="cil-cloud-upload text-white"></i> Tambah waktu test Peserta</button>
              </div>
            </div>
          </form>
         </div>
         <div class="modal-footer bg-light">
           <small><span class="text-danger">*</span><span class="text-muted">Waktu yang dibuat dalam menit.</span></small>
         </div>
       </div>
     </div>
   </div>
   <div class="modal fade" id="tambahwaktuall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header bg-primary">
           <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form  method="post" name="frmtambahwaktuall" id="frmtambahwaktuall">
            <div class="input-group">
              <div class="col-md-12 mb-2">
                <input class="form-control" type="number" min="1" max="1000" id="bnyakwaktuall" name="bnyakwaktuall" value="" placeholder="Tambah waktu Peserta (menit), ex : 20">
              </div>
              <div class="col-md-12">
                <button id="tblTambahwaktuall" name="tblTambahwaktuall" class="btn-block ml-1 btn-icon btn-pill btn btn-primary text-white" type="button" title="Tambah waktu peserta"><i class="cil-cloud-upload text-white"></i> Tambah waktu test Peserta</button>
              </div>
            </div>
          </form>
         </div>
         <div class="modal-footer bg-light">
           <small><span class="text-danger">*</span><span class="text-muted">Waktu yang dibuat dalam menit.</span></small>
         </div>
       </div>
     </div>
   </div>

   <div class="modal fade" id="hentikantest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <input type="hidden" id="x_h_idusertl" name="x_h_idusertl" value="">
         <input type="hidden" id="x_h_tid" name="x_h_tid" value="">
         <input type="hidden" id="x_h_uid" name="x_h_uid" value="">
         <input type="hidden" id="x_h_gid" name="x_h_gid" value="">
         <div class="modal-header bg-danger">
           <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-trash"></i> Hentikan Test</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           Apakah anda yakin untuk menyimpan dan menghentikan test peserta yang dipilih?
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
           <button type="button" id="btnhentikantest" class="btn btn-danger btn-pill"><i class="icon icon-shuffle"></i> Ya, Hentikan Test</button>
         </div>
       </div>
     </div>
   </div>
   <div class="modal fade" id="ulangitest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <input type="hidden" id="x_h_idusertl_u" name="x_h_idusertl_u" value="">
         <input type="hidden" id="x_h_tid_u" name="x_h_tid_u" value="">
         <input type="hidden" id="x_h_uid_u" name="x_h_uid_u" value="">
         <div class="modal-header bg-danger">
           <h5 class="modal-title" id="exampleModalCenterTitles"><i class="fa fa-trash"></i> Hentikan Test</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           Apakah anda yakin untuk menghapus hasil dan mengulangi test peserta yang dipilih?
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
           <button type="button" id="btnulangitest" class="btn btn-danger btn-pill"><i class="icon icon-shuffle"></i> Ya, Hapus dan Ulang Test</button>
         </div>
       </div>
     </div>
   </div>


   <div class="modal fade" id="hentikandansimpanall" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <input type="hidden" id="x_h_idusertl_u_h" name="x_h_idusertl_u_h" value="">
         <input type="hidden" id="x_h_tid_u_h" name="x_h_tid_u_h" value="">
         <input type="hidden" id="x_h_uid_u_h" name="x_h_uid_u_h" value="">
         <div class="modal-header bg-danger">
           <h5 class="modal-title" id="hexampleModalCenterTitles"><i class="fa fa-trash"></i> Hentikan dan Simpan Hasil Test</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           Apakah anda yakin untuk menghentikan dan menyimpan hasil test peserta yang dipilih?
         </div>
         <div class="modal-footer bg-light">
           <button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
           <button type="button" id="btnhentikandansimpanall" class="btn btn-danger btn-pill"><i class="nav-icon icon-share-alt"></i> Ya, Hentikan & Simpan Hasil</button>
         </div>
       </div>
     </div>
   </div>

   </main>
   <script type="text/javascript" src="js/livetest.js"></script>
<?php
  require('templates/footer.php');
 ?>
