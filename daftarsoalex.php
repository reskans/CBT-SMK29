<?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/soalController.php');
  global $conn;
  hakAkses('guru');
  $title = ' Daftar Hasil Test User';
  $desk = ' Lihat detail hasil test user!';

  $tid = 0;
  $mid = 0;

  if (isset($_REQUEST['x_tid'])) {
    $tid = real_escape($conn, intval($_REQUEST['x_tid']));
  }

  if (isset($_REQUEST['x_mid'])) {
    $mid = real_escape($conn, intval($_REQUEST['x_mid']));
  }


  $data = exportsoal($mid, $tid);

  // print_r($data);die;
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

  echo "<p><b>Daftar Soal</b></p>";
  echo "<ol>";
    foreach ($data as $key => $value) {
      $opt = ['A','B','C','D','E','F','G','H'];
      echo '<li>'.html_entity_decode($value['question_description']);
      $kunci = '';
      foreach ($value['question_answ'] as $j => $jawab) {
        if ($value['question_type'] == 3) {
          $kunci = "Kunci jawaban : ". html_entity_decode($jawab['answer_description']);
        } else {
          $jw = html_entity_decode($jawab['answer_description']);
          $jw = str_replace('<p>', '', $jw);
          echo '<p>'.$opt[$j] .'. '. $jw;
        }

        if ($jawab['answer_isright'] == 1) {
          $kunci = "Kunci Jawaban: <b>".$opt[$j]."</b>";
        }
      }
      echo "<p>".$kunci."</p>";
      echo "</li>";
    }
    echo "</ol>";

   ?>

</div>
</body>
</html>
