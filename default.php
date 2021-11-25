<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Warningg!!</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
    <section>
      <?php
        $p = 0;
        if (isset($_REQUEST['p'])) {
          $p = intval($_REQUEST['p']);
        }
        $pesan = '';
        $clspesan = '';

        switch ($p) {
          case 2:
            $clspesan = 'alert-info';
            $pesan = "Maaf, FlyExam Browser yang anda gunakan sudah Kadaluarsa, silahkan download FlyExam Browser versi terbaru di Google Playstore pada tautan berikut <br> <a target='blank' href='https://play.google.com/store/apps/details?id=com.blogspot.scqq.b0x&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img width='150px' alt='Get it on Google Play' src='img/en_badge_web_generic.png'/></a><br>
            Silahkan hubungi operator/pengawas untuk lebih jelasnya.";
            break;

          default:
            $clspesan = 'alert-danger';
            $pesan = "Maaf, anda harus login menggunakan aplikasi FlyExam Browser yang sudah tersedia di Google Playstore yang bisa anda download pada tautan berikut <br> <a target='blank' href='https://play.google.com/store/apps/details?id=com.blogspot.scqq.b0x&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img width='150px' alt='Get it on Google Play' src='img/en_badge_web_generic.png'/></a><br>
            Silahkan hubungi operator/pengawas untuk lebih jelasnya.";
          break;
        }
        echo '<div class="alert '.$clspesan.' alert-dismissible">';
        echo $pesan;
        echo '</div>';
       ?>
    </section>
  </main>
</body>

</html>
