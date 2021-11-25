<?php
require_once('controller/config.php');
require_once('controller/configdb.php');
global $conn;
hakAkses('pengawas');
$level = intval($_SESSION['user_level']);
$uname = $_SESSION['user_name'];
$title = 'Home';
include('templates/header.php');
include('templates/menu.php');

$setuju = 0;
if (isset($_POST['setuju'])) {
$setuju = 1;
$str = file_get_contents('EULA.json');
$json = json_decode($str, true);
$json[0]['status'] = $setuju;
$neula = json_encode($json);
file_put_contents('EULA.json', $neula);
}

$_h ='';
$_h .='<main class="main">';
$_h .='<div class="mt-3 container-fluid">';
$_h .='<div class="animated fadeIn">';
$_h .='<div class="row">';
$_h .='<div class="mb-2 col-md-8 order-md-1 mt-2">';
$_h .='<div class="row">';
$_h .='<div class="col-sm-6 col-lg-4">';
$_h .='<div class="card text-white card-img-top" style="background-image:url(img/bg-analisis.png)">';
$_h .='<div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">';
$_h .='<div>';
$_h .='<div class="text-value-lg  text-primary"><i class="nav-icon icon-people"> </i>';
$_h .= number_format(count_rows("tce_users", ''));
$_h .='</div>';
$_h .='<div style="margin-top:-6px; color:#8e8e8e"><small>Pengguna Aktif</small></div>';
$_h .='</div>';
$_h .='<div class="btn-group">';
if ($level > 3) {
  $_h .='<a title="Lihat detail daftar peserta" href="daftarpeserta.php" class="btn btn-transparent p-0"><i class=" text-primary  icon-options-vertical"></i></a>';
}
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="c-chart-wrapper mt-3 mb-4 mx-2" style="height:100%;">';
$_h .='<canvas class="chart chartjs-render-monitor" id="cPengguna" height="100" style="width: 100%; height:100%;" width="202"></canvas>';
$_h .='</div>';
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="col-sm-6 col-lg-4">';
$_h .='<div class="card text-white" style="background-image:url(img/bg-analisis.png)">';
$_h .='<div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">';
$_h .='<div>';
$_h .='<div class="text-value-lg text-primary"><i class="nav-icon icon-social-dropbox "> </i>';
$_h .= number_format(count_rows("tce_questions", 'WHERE question_enabled=1'));
$_h .= '</div>';
$_h .='<div style="margin-top:-6px;color:#8e8e8e"><small>Bank Soal</small></div>';
$_h .='</div>';
$_h .='<div class="btn-group">';
if ($level > 3) {
  $_h .='<a title="Lihat detail semua daftar soal" href="daftarsoal.php" class="btn btn-transparent p-0"><i class=" text-primary  icon-options-vertical"></i></a>';
}
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="c-chart-wrapper mt-3 mb-4 mx-2" style="height:100%;">';
$_h .='<canvas class="chart chartjs-render-monitor" id="cPelajaran" height="100" style=" width: 100%; height:100%;" width="202"></canvas>';
$_h .='</div>';
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="col-sm-6 col-lg-4">';
$_h .='<div class="card card-image text-white" style="background-image:url(img/bg-analisis.png)">';
$_h .='<div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">';
$_h .='<div>';
$_h .='<div class="text-value-lg  text-primary"><i class="nav-icon icon-note "></i> ';
$_h .= number_format(count_rows("tce_tests", ''));
$_h .='</div>';
$_h .='<div style="margin-top:-6px; color:#8e8e8e"><small>Daftar Test</small></div>';
$_h .='</div>';
$_h .='<div class="btn-group">';
if ($level > 3) {
  $_h .='<a title="Lihat detail daftar test" href="daftartest.php" class="btn btn-transparent p-0"><i class=" text-primary  icon-options-vertical"></i></a>';
}
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="c-chart-wrapper mt-3 mb-4 mx-2" style="height:100%;">';
$_h .='<canvas class="chart chartjs-render-monitor" id="cTest" height="100" style=" width: 100%; height:100%;" width="202"></canvas>';
$_h .='</div>';
$_h .='</div>';
$_h .='</div>';
$_h .='</div>';
$_h .='<div class="card card-accent-gray">';
print($_h);

$str = file_get_contents('EULA.json');
$json = json_decode($str, true);
$status = 0;
foreach ($json as $key => $value) {
echo "<div class='card-header bg-dark text-white'><b>".$value['judul']."</b><br><small class='text-muted'>Diposting oleh : " .$value['dipostingoleh'] . " pada tanggal : " . $value['tgldiposting']."</small></div>";
echo "<div class='card-body bg-light'>";
echo html_entity_decode($value['isi']);
echo "</div'>";
$status = $value['status'];
}
if ($status == 0) {
echo "<form action='index.php' method='post'>";
echo "<button class='btn btn-block btn-pill btn-danger col-md-3 mb-4' type='submit' name='setuju'>Ok, Saya mengerti & setuju EULA ini</button>";
echo "</form>";
echo "<script type='text/javascript'>
$(document).ready(function(){
$('#meula').modal('show');
});
</script>";
}
$_i ='</div>';
$_i .='</div>';
$_i .='</div>';
$_i .='<div id="container" class="bg-light col-md-4 order-md-2 mb-4">';
$_i .='<p class="pt-3"><b>CHANGELOG</b></p>';
$_i .='<div class="content mt-0">';
print($_i);
$strc = file_get_contents('CHANGELOG.json');
$jsonc = json_decode($strc, true);
foreach ($jsonc as $j => $v) {
  echo html_entity_decode('<code>'.$v['versi'].'</code> ─ <small><span class="text-muted">'.$v['publishdate'].'</span> '.$v['isi'].'</small>');
}

$_j = '</div>';
$_j .='</div>';
$_j .='</div>';
$_j .='</div>';
$_j .='</div>';
$_j .='</main>';
$_j .='<div class="modal fade" id="meula" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">';
$_j .='<div class="modal-dialog modal-dialog-centered modal-lg" role="document">';
$_j .='<div class="modal-content">';
$_j .='<div class="modal-header bg-primary">';
$_j .='<h5 class="modal-title" id="exampleModalCenterTitle">EULA - END USER LISENCE AGREEMENT</h5>';
$_j .='</div>';
$_j .='<div class="modal-body">';

print($_j);

foreach ($json as $key => $value) {
echo html_entity_decode($value['isi']);
$status = $value['status'];
}

$_k ='</div>';
$_k .='<div class="modal-footer bg-light">';
print($_k);

echo "<form action='index.php' method='post'>";
echo "<button class='btn btn-block btn-pill btn-danger' type='submit' name='setuju'>Ok, Saya mengerti & setuju EULA ini</button>";
echo "</form>";
$_l ='</div>';
$_l .='</div>';
$_l .='</div>';
$_l .='</div>';
print($_l);
require('templates/footer.php');
?>
<script src="js/beranda.js"></script>
<script>
Chart.defaults.global.defaultFontColor = '#0e6681';
Chart.defaults.global.defaultFontSize = 9;

get_a_peserta();
get_a_pelajaran();
get_a_test();

function get_a_peserta() {
var ctx = document.getElementById('cPengguna').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Admin..", "Pengajar..", "Pengawas..", "Peserta"],
datasets: [{
label: 'Kategori Pengguna',
fill: false,
data: [
<?php
$arrlevel = [10,5,3,1];
$datauser = '';
for ($i=0; $i < count($arrlevel) ; $i++) {
$okuser = count_rows("tce_users", "where user_level=" .$arrlevel[$i]);
$datauser .= $okuser.",";
}
$datauser = rtrim($datauser, ",");
echo $datauser;
?>
],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)'
],

borderWidth: 1,
}]
},
options: {
legend: {
display: false
},
tooltips: {
callbacks: {
label: function(tooltipItem) {
return tooltipItem.yLabel;
}
}
},
scales: {
yAxes: [{
drawBorder : false,
gridLines: false,
display:false,
}],
xAxes: [{
gridLines: false,
}],
},
}
});
}
function get_a_pelajaran() {
var ctx = document.getElementById('cPelajaran').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [
<?php
$txtLabel = "";
$arrLabel = [];
$dt = query($conn,"select module_id,module_name from tce_modules where module_enabled=1 ORDER BY module_id desc LIMIT 5");
if (rows($dt) > 0) {
while ($dtr = fetch_assoc($dt)) {
$arrLabel[] = $dtr['module_id'];
$mdname = ($dtr['module_name']);
if (strlen($dtr['module_name']) > 5) {
$mdname = substr($dtr['module_name'],0,5) ."...";
}
$txtLabel .="'".$mdname."',";
}
$txtLabel = rtrim($txtLabel,",");
} else {
  $txtLabel = "'Data soal masih kosong!'";
}

echo $txtLabel;
?>
],
datasets: [{
label: 'Soal dalam Module',
fill: false,
data: [
<?php
$dataSoal = '';
if (count($arrLabel) > 0) {
  for ($i=0; $i < count($arrLabel) ; $i++) {
  $ok = count_rows("tce_questions, tce_subjects, tce_modules", "WHERE question_subject_id=subject_id AND subject_module_id=module_id
  AND module_id=" .$arrLabel[$i]);
  $dataSoal .= $ok.",";
  }
  $dataSoal = rtrim($dataSoal, ",");
} else {
  $dataSoal =0;
}

echo $dataSoal;
?>


],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)'
],

borderWidth: 1,
}]
},
options: {
legend: {
display: false
},
tooltips: {
callbacks: {
label: function(tooltipItem) {
return tooltipItem.yLabel;
}
}
},
scales: {
yAxes: [{
drawBorder : false,
gridLines: false,
display:false,
}],
xAxes: [{
gridLines: false,
}],
},
},


});
}
function get_a_test() {
var ctx = document.getElementById('cTest').getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
labels: [
<?php
$txtl = "";
$arrl = [];
$dt = query($conn,"select test_id, test_name from tce_tests ORDER BY test_begin_time desc LIMIT 5");
if (rows($dt) > 0) {
while ($dtr = fetch_assoc($dt)) {
$arrl[] = $dtr['test_id'];
$mdn = ($dtr['test_name']);
if (strlen($dtr['test_name']) > 5) {
$mdn = substr($dtr['test_name'],0,5) ."...";
}
$txtl .="'".$mdn."',";
}
$txtl = rtrim($txtl,",");
} else {
$txtl = "'Data test masih kosong!'";
}

echo $txtl;
?>
],
datasets: [{
label: 'User dalam test',

data: [
<?php
$duser = '';
if (count($arrl) > 0) {
  for ($i=0; $i < count($arrl) ; $i++) {
  $ok = count_rows("tce_tests_users", "WHERE testuser_test_id=" .$arrl[$i]);
  $duser .= $ok.",";
  }
  $duser = rtrim($duser, ",");
} else {
    $duser = 0;
}
echo $duser;
?>


],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)'
],

borderWidth: 1,
}]
},
options: {
legend: {
display: false
},
tooltips: {
callbacks: {
label: function(tooltipItem) {
return tooltipItem.yLabel;
}
}
},
scales: {
yAxes: [{
drawBorder : false,
gridLines: false,
display:false,
}],
xAxes: [{
gridLines: false,
}],
},

}
});
}
</script>
