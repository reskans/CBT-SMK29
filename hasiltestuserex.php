<?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/hasilController.php');
  global $conn;
  hakAkses('guru');
  $title = ' Daftar Hasil Test User';
  $desk = ' Lihat detail hasil test user!';

  $idtest = 0;
  $groupid = 0;
  $usrid = 0;
  $testlog_testuser_id = 0;

  if (isset($_REQUEST['aksi'])) {
    $aksi = real_escape($conn, $_REQUEST['aksi']);
  }
  if (isset($_REQUEST['x_id_testuserid'])) {
    $testlog_testuser_id = real_escape($conn, $_REQUEST['x_id_testuserid']);
  }
  if (isset($_REQUEST['x_idtest'])) {
    $idtest = real_escape($conn, intval($_REQUEST['x_idtest']));
  }
  if (isset($_REQUEST['groupid'])) {
    $groupid = real_escape($conn, intval($_REQUEST['groupid']));
  }
  if (isset($_REQUEST['usrid'])) {
    $usrid = real_escape($conn, intval($_REQUEST['usrid']));
  }

  $data = gettestperuser($idtest, $testlog_testuser_id, $groupid, $usrid, 1);

?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Cetak Hasil Test Peserta</title>
</head>
<body onload="window.print();">
<div id="cetakdata">
  <?php
  $totskor = 0;
  $jb = 0;
  $js = 0;

  foreach ($data['data'] as $key => $k) {
    $totskor = $totskor + $k['testlog_score'];
    $jb = $jb + $k['test_score_wrong'];
    $js = $js + $k['test_score_unanswered'];
  }
  $totalskorakhir = round(($totskor/$data['tmax']) * 100);

  echo "<p>";
  echo "<b>Informasi Detail</b></p>";
  echo "<p style='padding-left:26px; margin-top:-10px'>";
  echo "Nama User : " .$data['nama'] . "<br>";
  echo "Jumlah Soal : " .count($data['data']) . " Butir<br>";
  echo "Soal Tidak dijawab : " .$data['tdilihat']. " Butir<br>";
  echo "Soal Tidak dilihat : " .$data['tjawab']. " Butir<br>";
  echo "Jumlah Benar : " .$jb . " Butir<br>";
  echo "Jumlah Salah : " .$js. " Butir<br>";
  echo "Total Durasi : " .$data['tTest']. "<br>";
  echo "Waktu Digunakan : " .$data['twaktu']. "<br>";
  echo "Total Skor : " .$totalskorakhir . " / 100<br>";
  echo "</p>";
  $nomor = 1;

  $jmlhtidakdilihat =0;
  $jmlhtidakdijawab =0;
  $twaktu = 0;
  $dwaktu = 0;
  $tTest = 0;
  $dmax = 0;

  echo "<p><b>Daftar Soal</b></p>";
  echo "<ol>";
    foreach ($data['data'] as $key => $value) {
      $dilihat = '';
      $diupdate = '';
      $tw ='';

      if (isset($value['testlog_display_time']) && strlen($value['testlog_display_time']) > 0)  {
        if (substr($value['testlog_display_time'], 11, 8) == '00:00:00') {
          $dilihat = "Tidak dilihat ";
          $jmlhtidakdilihat =  $jmlhtidakdilihat + 1;

        } else {
          $dilihat = "Dilihat " .$value['testlog_display_time'];
        }

      }
      if (isset($value['testlog_change_time']) && strlen($value['testlog_change_time']) > 0 &&
        substr($value['testlog_change_time'], 11, 8) != '00:00:00')  {
        $diupdate = " - ".substr($value['testlog_change_time'], 11, 8);
      } else {
        $jmlhtidakdijawab = $jmlhtidakdijawab + 1;
        $diupdate = " tidak dijawab ";
      }

      if (isset($value['testlog_display_time']) && isset($value['testlog_change_time'])  && $value['testlog_reaction_time'] > 0) {
        $tw = " Durasi ".formatSeconds($value['testlog_reaction_time'] / 1000);
        $twaktu = $twaktu + ($value['testlog_reaction_time'] / 1000);
        $dwaktu = "" . formatSeconds($twaktu);
      }

      if ($dilihat == '') {
        $datastat = '';
      } else {
        $datastat = "<small class='text-muted'>".$dilihat . " ".$diupdate  . $tw . "</small><br>";
      }


      $opt = ['A','B','C','D','E','F','G','H'];
      echo '<li>'.$datastat;
      echo html_entity_decode($value['question_description']);
      $kunci = '';
      $jwbakhir = '';
      $jwbarr = [];

      foreach ($value['jawaban'] as $j => $jawab) {
        $datas = html_entity_decode($jawab);
        $datar = getContents($datas, '®', '®');

        $jwb = html_entity_decode($datar[0]);
        $jwb = str_replace('<p>','',$jwb);

        if (intval($datar[2]) > 0) {
          $jwbakhir .= $opt[$j] .',';
        }

        if ($value['question_type'] == 3) {
          $kunci = "Kunci jawaban : ".$jwb;
          $jwbakhir = $datar[3];
        } else {
          echo "<p style='margin-top:-2px;'>".$opt[$j] .'. '. $jwb." <i><small>(Skor ".$datar[4].")</small></i>";
          if (intval($datar[1]) > 0) {
            $kunci .= $opt[$j] . ",";
          }
        }

      }

      if ($value['question_type'] == 3) {
        $kunci = $kunci;
      } else {
        $kunci = rtrim($kunci,",");
        $kunci = "Kunci Jawaban: <b>".$kunci."</b>";
      }


      if ($value['question_type'] == 3) {
        $jwbakhir = "Jawaban Peserta: <b>".$jwbakhir."</b>";
        $jj = 'Salah';
        if ($datar[4] > 0) {
          $jj = 'Benar';
        }
        $jwbakhir .= "<p style='margin-top:-2px;'> Koreksi jawaban : <code>".$jj."</code></p>";
      } else {
        $jwbakhir = "Jawaban Dipilih: <b>" . rtrim($jwbakhir,',') ."</b>";
      }

      echo "<p style='margin-top:-2px;'>".$kunci."</p>";
      if ($jwbakhir == '') {
        echo "<p style='margin-top:-2px;'> n/a </p>";
      } else {
        echo "<p style='margin-top:-2px;'>".$jwbakhir."</p>";
      }

      echo "</li>";
      $nomor++;
    }
    echo "</ol>";

   ?>

</div>
</body>
</html>
