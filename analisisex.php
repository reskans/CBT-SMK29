<?php
  require_once('controller/config.php');
  require_once('controller/configdb.php');
  require_once('controller/analisisController.php');
  global $conn;
  hakAkses('guru');
  $title = ' Analisis Tingkat Kesukaran Butir Soal';
  $desk = ' Cetak Analisis Tingkat Kesukaran Butir Soal';

  $idtest = 0;
  $aksi = '';
  $data = [];
  $namaTest = '';

  if (isset($_REQUEST['aksi'])) {
    $aksi = real_escape($conn, $_REQUEST['aksi']);
  }

  if (isset($_REQUEST['x_id'])) {
    $idtest = real_escape($conn, intval($_REQUEST['x_id']));
  }
  if (isset($_REQUEST['n'])) {
    $namaTest = real_escape($conn, $_REQUEST['n']);
  }

  $data = cetakanalisis($idtest);

?>

<!DOCTYPE html>
<html lang="id" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title><?= $title ?></title>
</head>
<body onload="window.print();">
<div id="cetakdata">
  <?php

  echo "<h2>" .$namaTest . "</h2>";
  $nomor = 1;

  echo "<p>Cetak Detail Analisi Tingkat Kesukaran Butir soal</p>";
  echo "<ol>";
    foreach ($data['data'] as $key => $value) {
      echo "<li>";
      echo "<b>Deskripsi Soal : </b>" . $value[2] . "<br><br>";
      echo "<b>Hasil Analisis : </b><br>";
      echo "Tingkat kesukaran : " . $value[3] ."% (" .$value[4]. ")<br>";
      echo "Daya Pembeda : " . $value[5] ." (" .$value[6]. ")<br>";
      echo "Jumlah Benar : " . $value[7] ." Peserta<br>";
      echo "Jumlah Salah : " . $value[8] ." Peserta<br><br>";
      $nomor++;
      echo "</li>";
    }
    echo "</ol><br>";

   ?>

</div>
</body>
</html>
