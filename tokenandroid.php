
  <?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/groupController.php');
  $group = getgroup();

  global $conn;
  hakAkses('pengawas');
  $level = real_escape($conn, intval($_SESSION['user_level']));
  $uname = real_escape($conn, $_SESSION['user_name']);
  $title = 'Token Andorid';
  $desk = 'Buat atau update token khusus pengguna Android';
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
                <i class="nav-icon icon-docs"></i><b> <?= $title ?></b> ─ <small><?=$desk; ?></small>
             </div>
             <div class="card-body">
               <div class="row">
                <div class="table-responsive table-sm table-hover col-sm-12">
                  <form id="form" action="#" method="POST">
                    <div class="form-group row">
                      <label for="x_token" class="col-sm-2 col-form-label">Token Khusus Android</label>
                      <div class="input-group col-sm-4">
                        <?php
                        $ket = "";
                        if ($level < 10) {
                          $ket = "disabled='disabled'";
                        }

                        echo '<input '.$ket.' id="x_token" name="x_token" type="text" class="form-control" placeholder="Token">';

                          if ($level >= 10) {
                            echo '<div class="input-group-append"><button class="btn btn-success" type="button" name="randomToken" id="randomToken"> Buat Random Token</button></div>';
                          }
                        ?>
                      </div>
                    </div>
                    <?php
                      if ($level >= 10) {
                        echo '<div class="form-group row" style="margin-top:-12px"><label for="x_module" class="col-sm-2 col-form-label"></label><div class="col-sm-4"><button class="btn btn-primary btn-pill btn-block" type="button" id="saveToken" name="saveToken"><i class="fa fa-save"></i> Simpan Token</button></div></div>';
                      }
                    ?>
                  </form>
                </div>
             </div>
           </div>
           <div class="card-footer bg-light">
             <p class="mr-auto mb-0 text-muted"><span class="text-danger">*</span>
               <small>Anda bisa mengubah Token ini kapan saja.</small>
             </p>
           </div>
         </div>

       </div>
     </div>
   </div>
 </main>
<script src="js/tokenandroid.js"></script>
<?php
  require('templates/footer.php');
 ?>
