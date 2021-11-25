
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/groupController.php');
  $group = getgroup();

  global $conn;
  hakAkses('guru');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];
  $title = 'Home';
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
               <i class="nav-icon icon-docs"></i><b>Cetak Daftar Hadir</b><b class="px-2"></b>
               <button class="btn btn-sm btn btn-primary btn-pill float-right btn-sm px-3" onclick="modaldh()"><i class="fa fa-gear"></i> Setting Daftar Hadir</button>
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="table-responsive table-sm table-hover col-sm-12">
                   <form id="frm-users" action="#" method="POST">
                     <div class="form-group row">
                       <label for="x_module" class="col-sm-2 col-form-label">Pilih Group / Kelas</label>
                       <div class="col-sm-10">
                         <select data-placeholder="Pilih Group / Kelas" class="form-control" id="groupKartu" name="groupKartu" >

                           <?php
                            echo "<option value='0'>Semua Group</option>";
                            foreach ($group as $key => $value) {
                              echo "<option value='".$value['group_id']."'>".$value['group_name']."</option>";
                            }
                            ?>
                         </select>
                         <span class="help-block"></span>
                       </div>
                     </div>

                     <div style="margin-top:-12px;" class="form-group row">
                       <label for="x_module" class="col-sm-2 col-form-label">Pilih Peserta</label>
                       <div class="col-sm-10">
                         <select data-placeholder="Pilih Peserta" class="form-control" id="uid" name="uid">
                           <option value='0'>Semua Peserta</option>
                         </select>
                         <span class="help-block"></span>
                       </div>
                     </div>

                     <div class="form-group row">
                       <label for="x_module" class="col-sm-2 col-form-label"></label>
                       <div class="col-sm-10">
                         <button class="btn btn-warning btn-pill btn-sm col-md-4" type="button" id="cetakDaftarHadir" name="cetakDaftarHadir"><i class="fa fa-print"></i> Cetak Daftar Hadir</button>
                       </div>
                     </div>

                     <div style="margin-top:-12px;" class="mb-0 form-group row">
                       <label for="x_module" class="col-sm-2 col-form-label"></label>
                       <div class="col-sm-10">
                         <p class="small">*Ijinkan jendela Pop-Up pada browser anda untuk men-cetak daftar hadir peserta!</p>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                  <small> Anda bisa mengubah pengaturan kartu di menu Setting Kartu Peserta. </small>
               </p>
             </div>
           </div>
           <form action="#" id="form" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="modal fade docs-example-modal-lg" id="modal_kartu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="modal-title">Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body form">
                    <div class="form-body">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Nama Sekolah</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <input id="nameSekolah" name="namaSekolah" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nama Sekolah">
                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">Kode</b> </span>
                          </div>
                          <input id="kodeSekolah" name="kodeSekolah" type="text" class="rounded-0 form-control form-control-sm" placeholder="Kode Sekolah">
                        </div>
                      </div>
                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Tahun Pelajaran</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <select id="thnPelajaran" class="rounded-0 form-control form-control-sm" name="thnPelajaran">
                          </select>

                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">Tingkat</b> </span>
                          </div>
                          <select id="tingkat" class=" form-control form-control-sm" name="tingkat">
                          </select>
                        </div>
                      </div>
                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Kota/Kabupaten</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <input id="kota" name="kota" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nama Kabupaten">
                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">Kode</b> </span>
                          </div>
                          <input id="kodeKota" name="kodeKota" type="text" class="rounded-0 form-control form-control-sm" placeholder="Kode Kabupaten">
                        </div>
                      </div>

                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Judul Daftar Hadir</b></label>
                        <div class="col-md-9">
                          <input id="judulKartu" class="form-control form-control-sm rounded-0" type="text" name="judulKartu" placeholder="Judul Daftar Hadir Peserta" />
                        </div>
                      </div>

                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"></label>
                        <div class="col-md-9">
                          <input id="judulKartu2" class="form-control form-control-sm rounded-0" type="text" name="judulKartu2" placeholder="" />
                        </div>
                      </div>

                      <div style="margin-top:-12px" class="form-group row" style="margin-top:-26px">
                        <label class="col-md-3 col-form-label-sm"><b>Nama Proktor</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <input id="namaProktor" name="namaProktor" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nama Proktor">
                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">NIP.</b> </span>
                          </div>
                          <input id="nipProktor" name="nipProktor" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nip. Proktor">
                        </div>
                      </div>
                      <div style="margin-top:-28px" class="form-group row" style="margin-top:-26px">
                        <label class="col-md-3 col-form-label-sm"><b>Nama Pengawas</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <input id="namaPengawas" name="namaPengawas" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nama Pengawas">
                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">NIP.</b> </span>
                          </div>
                          <input id="nipPengawas" name="nipPengawas" type="text" class="rounded-0 form-control form-control-sm" placeholder="Nip. Pengawas">
                        </div>
                      </div>

                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>ID Server</b></label>
                        <div class="col-md-9">
                          <input id="idServer" class="form-control form-control-sm rounded-0" type="text" name="idServer" placeholder="ID Server" />
                        </div>
                      </div>

                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Ruang Ujian</b></label>
                        <div class="col-md-9">
                          <input id="ruangUjian" class="form-control form-control-sm rounded-0" type="text" name="ruangUjian" placeholder="Ruang Ujian" />
                        </div>
                      </div>
                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Sesi</b></label>
                        <div class="col-md-9">
                          <input id="sesiUjian" class="form-control form-control-sm rounded-0" type="text" name="sesiUjian" placeholder="Sesi Ujian" />
                        </div>
                      </div>
                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Nama Pelajaran</b></label>
                        <div class="col-md-9">
                          <input id="mapel" class="form-control form-control-sm rounded-0" type="text" name="mapel" placeholder="Nama pelajaran" />
                        </div>
                      </div>

                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Hari</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <select id="hari" class="rounded-0 form-control form-control-sm" name="hari">
                          </select>

                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">Tgl</b> </span>
                          </div>

                          <input id="tanggal" value="" name="tanggal" type="text" class="form-control form-control-sm" placeholder="dd-mm-yyyy">
                        </div>
                      </div>

                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Pukul</b></label>
                        <div class="input-group mb-3 col-md-9">
                          <select id="pukul1" class="rounded-0 form-control form-control-sm" name="pukul1">
                          </select>
                          <div class="input-group-append">
                            <span class="input-group-text bg-white form-control-sm"> <b class="col-form-label-sm">s/d</b> </span>
                          </div>
                          <select id="pukul2" class=" form-control form-control-sm" name="pukul2">
                          </select>
                        </div>
                      </div>
                      <div style="margin-top:-28px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Lokasi Cetak</b></label>
                        <div class="col-md-9">
                          <input id="lokasiCetak" class="form-control form-control-sm rounded-0" type="text" name="lokasiCetak" placeholder="Lokasi Cetak" />
                        </div>
                      </div>
                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Keterangan 1</b></label>
                        <div class="col-md-9">
                          <input id="ket1" class="form-control form-control-sm rounded-0" type="text" name="ket1" placeholder="Keterangan 1" />
                        </div>
                      </div>
                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Keterangan 2</b></label>
                        <div class="col-md-9">
                          <input id="ket2" class="form-control form-control-sm rounded-0" type="text" name="ket2" placeholder="Keterangan 2" />
                        </div>
                      </div>
                      <div style="margin-top:-20px" class="form-group row">
                        <label class="col-md-3 col-form-label-sm"><b>Keterangan 3</b></label>
                        <div class="col-md-9">
                          <input id="ket3" class="form-control form-control-sm rounded-0" type="text" name="ket3" placeholder="Keterangan 3" />
                        </div>
                      </div>

                      <div class="form-group row ml-2">
                        <div id="x_photo_1" class="col-sm-offset-2 col-sm-1">
                        </div>
                        <div class="col-sm-4 ml-4">
                          <label for="exampleInputFile">Logo (kiri)</label>
                          <input class="form-control form-control-sm" id="image1" name="image1" type="file">
                          <p class="help-block">Logo (kiri) header laporan/kartu</p>
                        </div>
                        <div id="x_photo_2" class="col-sm-1 col-sm-offset-1">

                        </div>
                        <div class=" col-sm-4 ml-4">
                          <label for="exampleInputFile">Logo (kanan)</label>
                          <input class="form-control form-control-sm" name="image2" type="file" id="image2">
                          <p class="help-block">Logo (kanan) header laporan/kartu</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal"><i class="nav-icon icon-reload"></i> Selesai</button>
                    <button type="button" class="btn btn-primary btn-pill" name="btnSaveBA" id="btnSaveBA"><i class="nav-icon icon-doc"></i> Simpan Pengaturan</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/kartu.js"></script>
<?php
  require('templates/footer.php');
 ?>
