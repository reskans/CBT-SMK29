<?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');

  $title = "Daftar Test";
  include('templates/header.php');
  include('templates/menu.php');

 ?>
<main class="main">
  <div style="padding:6px">
  <div class="animated fadeIn">
  <div class="card">
    <div class="card-header bg-light">
      <i class="nav-icon icon-docs"></i><b>Daftar Test</b> ─ <small>Tambah, Edit, Hapus dan Cari daftar Test</small>
    </div>
    <div class="card-body">

      <div class="d-flex flex-wrap justify-content-between mb-2">
        <div class="col-md-6">
          <button type="button" onclick="reload_table()" id="refreshData" class="btn-sm mb-1 float-left btn-icon btn-pill btn btn-success refreshData"><i class="cil-sync"></i> Refresh</button>
          <button type="button"  onclick="add_test()" id="adddata"  class="mb-1 ml-1 btn-sm float-left btn-icon btn-pill btn btn-warning"><i class="icon icon-paper-plane"></i> Tambah Test</button>
          <button type="button" class="mb-1 btn-sm float-left ml-1 btn-icon btn-pill btn btn-danger " name="hapusall" id="hapusall"><i class=" cil-trash"></i> Hapus Semua</button>
        </div>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text bg-light">
                  <i class="cil-search "></i>
                </div>
              </div>
              <input placeholder="Cari Test, deskripsi, Waktu ..." type="text" class="btn-outline-2x form-control global_filter" id="global_filter">
            </div>
          </div>
      </div>

      <div class="row">
        <div class="table-responsive table-sm table-hover col-sm-12">
          <form id="frm-users" method="POST">
            <table id="tests" class="table  table-sm  table-hover" cellspacing="0" width="100%">
              <thead class="bg-light">
                <tr>
                  <th class="pl-3 text-center" style="max-width:20px;">
                    <input class="text-center" name="select_all" value="1" id="users-select-all" type="checkbox" /></th>
                  <th class="text-center" style="max-width:8px;"></th>
                  <th style="width:3000px">Informasi Test<br><small class="text-muted">(Nama Test, Pembuat, Deskripsi, Tgl Mulai, Tgl Selesai, Durasi, Group Test)</small></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th style="width:1000px">Informasi Soal<br><small class="text-muted">(Daftar Topik, Jmlh Soal, Jawab)</small></th>
                  <th style="width:100px">Token<br><small class="text-muted">(Token Test)</small></th>
                  <th style="width:100px">Aksi<br><small class="text-muted">(Proses Test)</small></th>
                  <th></th>
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
      <p class="mr-auto mt-0 mb-0 text-muted"><small><span class="text-danger">*</span><b> Proses Data</b> berguna untuk membagikan soal ke masing-masing peserta test group yang bersangkutan (baik soal acak maupun tidak), sehingga akan mempercepat proses menampilkan daftar soal saat ujian dilakukan.</small></p>

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
      <div id="accordion" class="accordion-wrapper mb-3">
        <div id="headingOne" class="card-header bg-light">
            <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                <h6 class="m-0 p-0"><b><i class="lnr-users"></i> DATA INFORMASI TEST</b> <small class="text-muted"> - Isi semua informasi test yang dibutuhkan!</small></h6>
            </button>
        </div>
        <div data-parent="#accordion" id="collapseOne" aria-labelledby="headingOne" class="collapse show">
        <div class="modal-body form">
          <form id="form" class="form-horizontal" method="POST">
          <input type="hidden" id="x_test_id" name="x_test_id" />
          <div class="form-body">
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="x_nama">Nama Test<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <input id="x_nama" class="form-control" type="text" name="x_nama" placeholder="Nama Test"/>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_desk">Deskripsi</label>
              <div class="col-md-9">
                <textarea class="form-control" id="x_desk" name="x_desk" rows="2" placeholder="Deskripsi test ..."></textarea>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_mulai">Mulai Test<span class="text-danger">*</span></label>
              <div class=" input-group mb-3 col-md-9">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
                <input id="mulai" name="x_mulai" type="text" class="form-control" placeholder="yyyy-mm-dd H:i:s">
                <div class="input-group-append">
                  <span class="input-group-text bg-white"> s/d </span>
                </div>
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
                <input id="selesai" name="x_selesai" type="text" class="form-control" placeholder="yyyy-mm-dd H:i:s">
              </div>
            </div>

            <div class="form-group row" style="margin-top:-28px">
              <label class="col-md-3 col-form-label" id="x_durasi">Waktu Test (Menit)<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <input name="x_durasi" id="x_durasi" type="number" class="form-control" placeholder="60, 75, 90 ..." value="60">
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_group">Pilih Group<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select data-placeholder="Pilih Group" class="form-control" id="x_group" name="x_group[]" multiple="multiple">
                </select>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label">Test Opsional</label>
              <div class="col-md-9 col-form-label">
                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_soal_r">
                  <input class="form-check-input" checked="checked" id="x_soal_r" name="x_soal_r" id="" type="checkbox" value="1" />
                  Acak soal</label>
                </div>

                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_jawab_r">
                  <input class="form-check-input" checked="checked" name="x_jawab_r" id="x_jawab_r" type="checkbox" value="1" />
                  Acak jawaban</label>
                </div>

                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_menu_soal" checked>
                  <input class="form-check-input" name="x_menu_soal" checked="checked" id="x_menu_soal" type="checkbox" value="1" />
                  Tunjukkan daftar soal</label>
                </div>
                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_show_hasil">
                  <input class="form-check-input" name="x_show_hasil" checked="checked" id="x_show_hasil" type="checkbox" value="1" />
                  Tunjukkan hasil</label>
                </div>
                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_ulang_test">
                  <input class="form-check-input" name="x_ulang_test" id="x_ulang_test" type="checkbox" value="1" />
                  Test bisa diulang</label>
                </div>
                <div class="form-check checkbox">
                  <label class="form-check-label" for="x_logout_test">
                  <input class="form-check-input" name="x_logout_test" id="x_logout_test" type="checkbox" value="1" />
                  Otomatis logout</label>
                </div>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_token">Token test</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input name="x_token" id="x_token" type="text" class="form-control col-md-4" placeholder="12345678">
                  <div class="input-group-append">
                    <span class="btn btn-link" type="button" name="randomToken" id="randomToken" title="Buat Token Random"><i class="icon-shuffle"></i></span>
                  </div>
                </div>

              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label" ></label>
              <div class="col-md-9">
                <button type="button" class="btn btn-primary btn-pill col-md-4" name="btnSaveTest" id="btnSaveTest"><i class="nav-icon icon-doc"></i> Simpan Test </button>
              </div>
            </div>
        </form>

      </div>
    </div>
  </div>
</div>


    <div class="card border-0 mb-0" style="margin-top:-15px">
      <div id="headingTwo" class="card-header bg-light">
          <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block">
              <h6 class="m-0 p-0"><b><i class="lnr-users"></i> DATA SOAL, MODUL & TOPIK</b> <small class="text-muted"> - Pilih daftar soal dari masing-masing topik dan modul yang sudah ada!</small></h6>
          </button>
      </div>
      <div data-parent="#accordion" id="collapseTwo" aria-labelledby="headingTwo" class="collapse hide">
        <div class="card-body">
          <form action="" method="POST" id="formdaftarsoal">
            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_daftar_soal">Pilih Daftar Soal<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select data-placeholder="Pilih daftar soal" class="form-control" id="x_daftar_soal" name="x_daftar_soal[]" multiple="multiple">
                </select>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_type_soal">Type Soal<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select class="form-control" name="x_type_soal" id="x_type_soal">
                  <option value="0">Semua Type (Default)</option>
                  <option value="1">Jawaban Tunggal</option>
                  <option value="2">Jawaban Ganda</option>
                  <option value="3">Jawaban Singkat</option>
                </select>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_tingkat_soal">Tingkat Kesukaran<span class="text-danger">*</span></label>
              <div class="col-md-9">
                <select class="form-control"  name="x_tingkat_soal" id="x_tingkat_soal">
                  <option value="1">Mudah (Default)</option>
                  <option value="2">Sedang</option>
                  <option value="3">Sukar</option>
                  <option value="4">Sangat Sukar</option>
                </select>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_j_soal">Jumlah Soal<span class="text-danger">*</span></label>
              <div class="col-md-4">
                <input name="x_j_soal" id="x_j_soal" step="1" type="number" class="form-control" placeholder="40, 50, 60 ..." min="1" value="40">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="form-group row" style="margin-top:-12px">
              <label class="col-md-3 col-form-label" for="x_j_jawab">Jumlah Jawaban<span class="text-danger">*</span></label>
              <div class="col-md-4">
                <input name="x_j_jawab" id="x_j_jawab" step="1" type="number" class="form-control" placeholder="2,4,5 ..." value="4" min="0">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label" ></label>
              <div class="col-md-9">
                <button type="button" class="btn btn-primary btn-pill mb-1 col-md-4" name="btnSaveSoal" id="btnSaveSoal" title="Tambah Soal kedalam test"><i class="nav-icon icon-doc"></i> Tambah Soal </button>
                <button type="button" class="btn btn-warning col-md-4 mb-1 btn-pill float-right" title="Selsai dan kembali ke halaman test" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai </button>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 col-form-label"></label>
              <div class="col-md-9">
                <div id="daftarsoaltest">
                </div>
              </div>
            </div>

          </form>
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
        Apakah anda yakin untuk menghapus semua data yang terpilih?
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Batal</button>
        <button type="button" id="delete-confirm-button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Data</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="confirmDelete2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <input type="hidden" name="x_test_id_hapus" id="x_test_id_hapus">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Batal</button>
        <button type="button" id="delete-confirm-button2" name="delete-confirm-button2" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Data</button>
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
        Maaf, silahkan pilih data yang akan dihapus terlebih dahulu!
      </div>
      <div class="modal-footer bg-white">
        <button type="button" class="btn btn-default btn-block" data-dismiss="modal"><i class="nav-icon icon-reload"></i> OK, Mengerti </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="img/loading.gif" alt="">
        <p>Mohon tunggu sebentar ....</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="prosessdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="x_idtest" id="x_idtest">
        Buat test ke masing-masing user berdasarkan Group,
        Mungkin membutuhkan waktu beberapa saat tergantung banyak user dan soal yang akan dibagi <br><br>
        Apakah anda yakin untuk memproses data ini?
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai</button>
        <button type="button" id="prosesdataOK" class="btn btn-primary btn-pill"><i class="icon icon-paper-plane"></i> Ya, Prosess Data</button>
      </div>
    </div>
  </div>
</div>

<script src="js/test.js"></script>

<?php
  include('templates/footer.php');
?>
