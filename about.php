<?php include 'navbar.php'?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us | LaLuNayFlower</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="hf.css">
</head>
<body>

<!--background gambar atau gif-->
  <section class="hero">
    <div class="container text-center">
      <h1 class="display-4">LaLuNayFlower <br> <span class="tagline">Flowers speak louder than words</span></h1>
    </div>
  </section>

  <section class="container py-5">
    <div class="about-card shadow-sm p-4 rounded-4 mb-5">
      <h2 class="text-center mb-4">Tentang LaLuNayFlower</h2>
      <p class="text-center fs-5">
        ✿ Siapa Kami? <br>
        Di balik setiap kelopak yang mekar, tersembunyi pesan yang tak selalu bisa terucapkan.
        LaLuNayFlower hadir bukan sekadar sebagai toko bunga — melainkan sebagai ruang di mana perasaan diungkapkan melalui keindahan bunga.
        <br><br>
        Kami percaya bahwa setiap tangkai bunga membawa makna:
        <br>🌷 Cinta yang mendalam
        <br>💛 Rindu yang membuncah
        <br>🙏 Permintaan maaf yang tulus
        <br>🌼 Syukur yang ingin dibagikan
      </p>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-6">
        <div class="info-box p-4 border border-pink rounded-4 h-100">
          <h4 class="mb-3">✿ Filosofi Kami</h4>
          <p>
            "Bunga adalah bahasa jiwa." <br>
            Setiap bunga memiliki makna. <br>
            Setiap warna membawa emosi. <br>
            Setiap rangkaian adalah sebuah cerita. <br>
            Kami ingin setiap pelanggan dapat merangkai perasaannya sendiri lewat bunga-bunga kami.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box p-4 border border-pink rounded-4 h-100">
          <h4 class="mb-3">🎯 Di Balik Layar</h4>
          <p>
            Di studio sederhana kami, para florist LaLuNayFlower setiap hari memilih bunga terbaik dari petani lokal maupun internasional dengan penuh cinta.
            Setiap tangkai yang kamu lihat telah melewati proses pemilihan, perangkaihan, dan sentuhan akhir dengan hati-hati. Kami percaya, buket bunga adalah wujud rasa yang ingin disampaikan.
          </p>
        </div>
      </div>
    </div>

    <div class="row text-center g-4 mb-5">
      <div class="col-md-4">
        <div class="feature-box p-4 border border-pink rounded-4 h-100">
          <img src="bunga/bunga_duka/mawar putih.png" alt="Kualitas" width="60">
          <h5 class="mt-3">Bunga Berkualitas</h5>
          <p>Mewakili perasaan terdalam. Dipetik segar, dirangkai dengan cinta.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box p-4 border border-pink rounded-4 h-100">
          <img src="bunga/bunga_romance/red rose.png" alt="Pelayanan" width="60">
          <h5 class="mt-3">Layanan Profesional</h5>
          <p>Respons cepat dan ramah agar pesan hati tersampaikan dengan tepat.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box p-4 border border-pink rounded-4 h-100">
          <img src="bunga/bunga_duka/Krisan Putih.jpg" alt="Pengiriman" width="60">
          <h5 class="mt-3">Pengiriman Tepat Waktu</h5>
          <p>Pengalaman emosional yang menyentuh, sampai ke depan pintu Anda.</p>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="order.php" class="btn btn-danger rounded-pill px-4 py-2">Pesan Sekarang</a>
    </div>
  </section>

 <?php include 'footer.php'; ?>

</body>
</html>
