
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  global $conn;
  hakAkses('guru');
  $level = $_SESSION['user_level'];
  $uname = $_SESSION['user_name'];
  $title = 'Analisis Butir Soal';
  $desk = 'Daftar Analisis Butir Soal Seluruh Test Group!';
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
               <i class="icon-graph"></i><b><?php echo $title ?></b> ─ <small><?=$desk; ?></small>
               <button type="button" title="Cetak Analisis Tingkat Kesukaran Butir Soal" class="float-right ml-1 mb-1 btn-sm btn-icon btn-pill btn btn-primary " name="cetakanalisis" id="cetakanalisis"><i class="cil-print"></i> Cetak Analisis</button>
             </div>
             <div class="card-body">
               <div class="form-group row">
                 <label for="namaTest" class="col-sm-3 col-form-label">Pilih Nama Test<span class="text-danger">*</span></label>
                 <div class="col-sm-9">
                   <select class="form-control form-control-sm" value="" name="d_namatest" id="d_namatest">
                   </select>
                 </div>
               </div>

               <div class="row" style="margin-top:-15px">
                 <div class="table-responsive table-sm table-hover col-sm-12">
                   <form id="frm-users" action="#" method="POST">
                     <table id="tabelAuthor" class="table" cellspacing="0" width="100%">
                       <thead>
                         <tr>
                           <th style="max-width:20px"><input name="select_all" value="1" id="users-select-all" type="checkbox" /></th>
                           <th></th>
                           <th style="max-width:10000px">Deskripsi Soal<br><small class="text-muted">(TK, Ket Tk, DP, Ket DP, Jmlh Benar, Jml Salah)</small></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                         </tr>
                       </thead>
                       <tbody class="table-sm">
                       </tbody>
                       <tfoot class="bg-light" align="right">
                          <tr class="text-dark mt-0 ">
                            <td></td>
                            <td colspan="2">-</td>
                          </tr>
                          <tr class="text-dark mt-0">
                            <td></td>
                            <td colspan="2">-</td>
                          </tr>
                          <tr class="text-dark mt-0">
                            <td class="text-center text-primary"></td>
                            <td colspan="2">-</td>
                          </tr>
                          <tr class="text-dark mt-0">
                            <td class="text-center text-primary"></td>
                            <td colspan="2">-</td>
                          </tr>
                        </tfoot>
                     </table>
                   </form>
                 </div>
               </div>
             </div>
             <div class="card-footer bg-light">
               <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
                 <small>Warna <i>badge</i> orange menandakan butir soal harus diperbaiki, Warna <i>badge</i> merah menandakan butir soal harus
                     dibuang, Warna <i>badge</i> biru menandakan butir soal cukup bagus dan Warna <i>badge</i> hijau menandakan butir
                     soal sangat bagus</small>
               </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </main>
<script src="js/analisis.js"></script>
<?php
  require('templates/footer.php');
 ?>
