<?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');

  $title = 'Daftar Soal';
  $desk = ' Tambah, Edit, Hapus, Cari dan Import daftar soal';
  require('templates/header.php');
  include('templates/menu.php');

 ?>
<main class="main">
   <div style="padding:6px">
     <div class="animated fadeIn">
  <div class="card">
    <div class="card-header bg-light">
      <i class="nav-icon icon-docs"></i><b><?= $title ?></b> ─ <small><?=$desk; ?></small>
    </div>
    <div class="card-body">

      <div class="form-group row pr-3">
        <label for="d_modul" class="col-md-2 col-form-label">Nama Modul<span class="text-danger">*</span></label>
        <div class="col-md-10">
          <select data-placeholder="Pilih nama modul" class="form-control" name="d_modul" id="namaModul">
          </select>
        </div>
      </div>

      <div class="form-group row pr-3 mb-0" style="margin-top: -12px;">
        <label for="d_topik" class="col-md-2 col-form-label">Nama Topik<span class="text-danger">*</span></label>
        <div class="col-md-10">
          <select data-placeholder="Pilih nama topik" class="form-control" name="d_topik" id="namaTopik">
          </select>
        </div>
      </div>

      <div style="margin-left:-2px;" id="tmblaksi" class="hidden">
      <div class="d-flex flex-wrap justify-content-between mb-1 mt-4">
        <div class="col-md-12">
          <label class="float-left mb-1 mt-1 mr-2"><input  type="checkbox" name="checkedAll" id="checkedAll"/> <b class="ml-1">Pilih</b></label>
          <button type="button" id="refreshData" class="btn-sm mb-1 ml-1 float-left btn-icon btn-pill btn btn-success refreshData"><i class="cil-sync"></i> Refresh Data</button>
          <button type="button"  onclick="add_soal()" id="adddata"  class="mb-1 ml-1 btn-sm float-left btn-icon btn-pill btn btn-warning"><i class="icon icon-paper-plane"></i> Tambah Soal</button>
          <button type="button" class="mb-1 btn-sm float-left ml-1 btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>
          <button type="button" class="mb-1 ml-1 btn-sm float-right btn-icon btn-pill btn btn-primary" name="exportsoal" id="exportsoal"><i class="icon-printer"></i> Print Soal </button>
          <button type="button" onclick="importSoal()" class="mb-1 btn-sm float-right btn-icon btn-pill btn btn-danger text-white" name="importsoal" id="importsoal"><i class="cil-cloud-download"></i> Import Soal </button>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <table class="table table-responsive-sm table-outline mb-0 mt-2 daftarsoaljawaban">
            <tbody id="daftarsoaldanjawaban">
              <p id="tunggu" class="text-center text-muted hidden mt-4 mb-4"><img width="18px" class="mr-1" id="imgtunggu" src="img/loading.gif" alt=""> Sedang memuat data, mohon tunggu sebentar ...</p>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="card-footer bg-light">
      <p class="mr-auto mt-0 mb-0 text-muted"><span class="text-danger">*</span><small>Semua tanda (<span class="text-danger">*</span>)  wajib diisi!</small></p>
      <p style="margin-top:-4px" class="mr-auto mb-0 text-muted"><span class="text-danger">*</span><small>Daftar Modul dan Topik yang ditampilkan berdasarkan Group akun masing-masing! </small>
      </p>
    </div>
  </div>
</div>
  </div>
</main>

<!-- Modal -->
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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item soalnav">
          <a class="nav-link active" title="Daftar Soal" id="soal-tab" data-toggle="tab" href="#soal" role="tab" aria-controls="soal" aria-selected="true"><b>Daftar Soal</b></a>
        </li>
        <li class="nav-item jawabnav">
          <a class="nav-link" title="Daftar Jawaban" id="jawaban-tab" data-toggle="tab" href="#jawaban" role="tab" aria-controls="jawaban" aria-selected="false"><b>Daftar Jawaban</b></a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="soal" role="tabpanel" aria-labelledby="soal-tab">
          <form id="form" name="form" method="POST">
            <input type="hidden" value="" name="x_id" id="x_id" />
            <input type="hidden" value="" name="x_topik_id" id="x_topik_id" />
            <div class="form-body">
              <div class="form-group row">
                <label for="deskripsiSoal" class="col-sm-2 col-form-label">Deskripsi Soal<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <div class="card">
                    <div id="deskripsiSoal" name="deskripsiSoal" style="min-height:100%; height:auto"></div>
                  </div>
                </div>
              </div>
              <div style="margin-top:-34px;" class="form-group row">
                <label for="x_type" class="col-sm-2 col-form-label">Type Soal<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select data-placeholder="Pilih type soal" class="form-control form-control-sm" name="x_type" id="x_type">
                    <option value="1">Jawaban Tunggal</option>
                    <option value="2">Jawaban Ganda</option>
                    <option value="3">Jawaban Singkat</option>
                  </select>
                </div>
              </div>

              <div style="margin-top:-12px;" class="form-group row">
                <label for="x_diff" class="col-sm-2 col-form-label">Kesukaran<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select data-placeholder="Pilih tingkat kesukaran" class="form-control form-control-sm" name="x_diff" id="x_diff">
                    <option value="1">Mudah</option>
                    <option value="2">Sedang</option>
                    <option value="3">Sukar</option>
                    <option value="4">Sangat Sukar</option>
                  </select>
                </div>
              </div>

              <div style="margin-top:-12px;" class="form-group row">
                <label for="kd" class="col-sm-2 col-form-label">Materi<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select  id="kd" class="form-control form-control-sm" name="kd"></select>
                </div>
              </div>

              <div style="margin-top:-12px;" class="form-group row">
                <label for="x_posisi" class="col-sm-2 col-form-label">Posisi<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select class="form-control form-control-sm" id="x_posisi" name="x_posisi">
                  </select>
                </div>
              </div>

              <div style="margin-top:-12px;" class="form-group row">
                <label for="x_enable" class="col-sm-2 col-form-label">Status<span class="text-danger">*</span></label>
                <div class="col-sm-4">
                  <select data-placeholder="Pilih status" class="form-control form-control-sm" name="x_enable" id="x_enable">
                    <option value="1">Enable</option>
                    <option value="0">Disable</option>
                  </select>
                </div>
              </div>

            </div>
          </form>

          <div class="form-group row">
            <label for="btnSaveSoal" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="button" class="btn btn-primary btn-pill mb-1 float-right" name="btnSaveSoal" id="btnSaveSoal"><i class="nav-icon icon-doc"></i> Simpan Soal
              </button>
            </div>
          </div>


        </div>
        <div class="tab-pane fade" id="jawaban" role="tabpanel" aria-labelledby="jawaban-tab">

          <form id="formjwb" name="formjwb" method="POST">
            <input type="hidden" value="" name="x_id_jawab" id="x_id_jawab"/>
            <input type="hidden" value="" name="x_id_soal" id="x_id_soal" />
            <div class="form-body">
              <div  class="form-group row">
                <label for="x_daftar_jawab" class="col-sm-2 col-form-label">Daftar Jawaban</label>
                <div class="col-sm-10">
                  <select data-placeholder="Pilih daftar jawaban" class="form-control form-control-sm" id="x_daftar_jawab" name="x_daftar_jawab">
                  </select>
                </div>
              </div>

              <div style="margin-top:-28px;" class="form-group row">
                <label for="deskripsiJawab" class="col-sm-2 col-form-label">Deskripsi<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <div class="card">
                    <div id="deskripsiJawab" style="min-height:100%; height:auto;"></div>
                  </div>
                </div>
              </div>

              <div style="margin-top:-28px;" class="form-group row">
                <label for="x_askor" class="col-sm-2 col-form-label">Skor Opsi jawaban<span class="text-danger">*</span></label>
                <div class="col-md-2">
                  <input placeholder="ex: 5" class="form-control" type="number" step="0.1" name="x_askor" id="x_askor" value="0">
                </div>

                <small class="col-md-8 mt-2">Isi <code>0</code> jika opsi jawaban ini <code>Salah</code>, dan <code>1</code>,<code>2</code>,atau <code>3...</code> jika <code>Benar</code></small>


              </div>

              <div style="margin-top:-28px;" class="form-group row">
                <label for="x_enable_jawab" class="col-sm-2 col-form-label">Status<span class="text-danger">*</span></label>
                <div class="col-sm-4">
                  <select data-placeholder="Pilih status" class="form-control form-control-sm" name="x_enable_jawab" id="x_enable_jawab">
                    <option value="1">Enable</option>
                    <option value="0">Disable</option>
                  </select>
                </div>
              </div>

            </div>
          </form>

          <div class="form-group row">
            <label for="x_enable_jawab" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="button" class="btn btn-primary btn-pill mb-1 float-right" name="btnSaveJwb" id="btnSaveJwb"><i class="nav-icon icon-doc"></i> Simpan Jawaban</button>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-trash"></i> Hapus Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin untuk menghapus semua data yang dipilih?
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
        <button type="button" id="delete-confirm-button" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Hapus Soal</button>
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
        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
        <button type="button" id="delete-confirm-button2" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Hapus Soal </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmDeleteJwb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
        <input type="hidden" name="x_idjawab_hapus" id="x_idjawab_hapus" value="">
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
        <button type="button" id="confirmhapusjwb" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Hapus Jawaban </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmDeleteAllJwb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin untuk menghapus semua jawaban untuk soal ini?
        <input type="hidden" name="x_idjawab_idsoal_hapus" id="x_idjawab_idsoal_hapus" value="">
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
        <button type="button" id="confirmhapusalljwb" class="btn btn-danger btn-pill"><i class="fa fa-trash"></i> Ya, Hapus Jawaban </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pindahSoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <input type="hidden" name="x_idpindah_idsoal" id="x_idpindah_idsoal" value="">
          <input type="hidden" name="x_idpindah_idtopik" id="x_idpindah_idtopik" value="">
         <div class="input-group">
           <div class="col-md-12">
             <p class="text-dark well well-sm no-shadow">
                Pindahkan soal yang dipilih dari topik aktif ke topik lainnya yang sudah tersedia! Silahkan pilih topik yang sudah dibuat atau buat topik baru jika belum. <br>
            </p>
           </div>
           <div class="col-md-12 mb-2">
             <div class="form-group row ">
               <select data-placeholder="Pilih nama modul" class="form-control" name="x_modul" id="x_modul">
               </select>
             </div>

             <div class="form-group row  mb-0" style="margin-top: -12px;">
               <select data-placeholder="Pilih nama topik" class="form-control" name="x_topik" id="x_topik">
               </select>
             </div>

           </div>
           <div class="col-md-12">
             <button id="btnpindahsoal" name="btnpindahsoal" class="btn-block ml-1 btn-icon btn-pill btn btn-info text-white" type="button" title="Pindahkan Soal"><i class="cil-exit-to-app  text-white"></i> Konfirmasi & Pindahkan Soal</button>
           </div>
         </div>
      </div>
      <div class="modal-footer bg-light">
        <small><span class="text-danger">*</span><span class="text-muted">Anda dapat memindahkan semua soal ke semua topik baru ataupun yang sudah tersedia sebelumnya, pastikan soal tidak digunakan pada Test Log.</span></small>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id=""><i class="fa fa-warning"></i> Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf, Silahkan pilih Modul dan Topik terlebih dahulu!
      </div>
      <div class="modal-footer bg-white">
        <button type="button" class="btn btn-default btn-block" data-dismiss="modal"><i class="nav-icon icon-reload"></i> OK, Mengerti </button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="importSoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-dark"  id=""><i class="fa fa-warning"></i> Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post" name="frmSoalImport" id="frmSoalImport" enctype="multipart/form-data">
         <div class="input-group">
           <div class="col-md-12">
             <p class="text-dark well well-sm no-shadow">
                Silahkan upload file soal dengan format <code>HTML (Wep Page Filtered)</code> yang sudah di kompress ke dalam FIle .ZIP, atau silahkan download contoh template soal dibawah ini <br>
              <a href="files/SIMKIM.zip"><code>FlyExam.zip</code></a>
              </p>
           </div>
           <div class="col-md-12 mb-2">
             <b class="text-dark">Pilih Berkas</b>
             <input class="form-control" type="file" name="filezip" id="filezip" accept=".zip">
           </div>
           <div class="col-md-12">
             <button id="btnimport" name="btnimport" class="btn-block ml-1 btn-icon btn-pill btn btn-info text-white" type="button" title="Import Soal"><i class="cil-cloud-download text-white"></i> Import Soal</button>
           </div>
         </div>
       </form>
      </div>
      <div class="modal-footer bg-light">
        <small><span class="text-danger">*</span><span class="text-muted">Pastikan format template soal yang anda gunakan sudah sesuai dengan format template asli FlyExam!</span></small>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="importGambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title" id=""><i class="fa fa-upload"></i> Input File</h5>
      </div>
      <form id="uploadForm" enctype="multipart/form-data" action="user_foto.php" class="form-horizontal" method="post">

        <div class="modal-body form">
          <input class="form-control form-control-sm " id="img" type="file" name="inFiles" value="" accept=".jpg, .png, .jpeg, .gif">
        </div>
      </form>

      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Keluar </button>
        <button type="button" id="testkirim" name="button">testt</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="js/quill.js"></script>
<script type="text/javascript" src="js/soal.js"></script>
<script type="text/javascript" src="js/image-upload.min.js"></script>
<script type="text/javascript" src="js/image-resize.min.js"></script>
<?php include('templates/footer.php'); ?>
