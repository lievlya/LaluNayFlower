<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Home | Toko Bunga</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="home.css" rel="stylesheet">
  <link href="hf.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <!-- background gambar / gif  -->
  <section class="hero">
    <div class="container text-center">
      <h1 class="display-4">Lalunay<br>Flowers speak louder than words</h1>
    </div>
  </section>

  <!-- Mood Buttons -->
  <section class="text-center py-5">
    <h2 class="mb-4">How are you feeling today?</h2>
    <div class="mood-btns">
      <button class="btn btn-outline-warning">🌻 Happy</button>
      <button class="btn btn-outline-primary">💧 Sad</button>
      <button class="btn btn-outline-secondary">🌼 Longing</button>
      <button class="btn btn-outline-danger">❤️ Love</button>
    </div>
  </section>

  <!-- Lalunay Section -->
  <section class="container my-5 text-center">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-4">
        <img src="bunga/bunga_romance/Baby’s Breath.avif" class="img-fluid rounded shadow-sm" alt="Rose of the Week">
      </div>
      <div class="col-md-6 text-start">
        <h3 class="fw-bold">🌸 LaLuNayFlower</h3>
        <p>Ada hal-hal yang tak bisa dijelaskan dengan kata-kata,tapi bisa disampaikan dengan setangkai bunga… 
          <br>LaLuNayFlower hadir bukan sekadar toko bunga,melainkan ruang untuk menyampaikan rasa yang paling dalam rasa yang kadang hanya bisa kita bisikkan dalam diam.
          <br>Di balik setiap rangkaian bunga yang kami susun, tersimpan niat yang tulus dan cerita yang hidup. LaLuNayFlower bukan hanya tempat membeli bunga,tapi tempat di mana perasaan diberi bentuk, warna, dan aroma.Kami percaya bahwa bunga bukan sekadar hadiah,melainkan bahasa jiwa yang tak selalu bisa diucapkan dengan lisan.Bersama kami, kamu bisa menyampaikan cinta, rindu, permintaan maaf,atau sekadar ingin melihat seseorang tersenyum.

        </p>
      </div>
    </div>
  </section>

<section class="container my-5">
  <h2 class="text-center mb-4">🎉 Promo Spesial untuk Kamu!</h2>
  <div class="row g-4 justify-content-center">

    <!-- Promo 1 -->
    <div class="col-md-4">
      <div class="promo-card position-relative rounded-4 overflow-hidden shadow">
        <img src="bunga/bunga_romance/red rose.png" alt="Promo Red Rose" class="img-fluid promo-img">
        
        <!-- Promo Badge -->
        <span class="promo-badge bg-danger text-white px-3 py-1 position-absolute top-0 start-0 rounded-end-4">🔥 PROMO</span>

        <!-- Overlay -->
        <div class="promo-overlay d-flex flex-column justify-content-center align-items-center text-center">
          <h5 class="text-white fw-bold mb-2">❤️ Red Rose Couple Pack</h5>
          <p class="text-light small">2 buket red rose diskon 20%</p>
          <p class="fw-bold text-warning">Rp 288.000 <small class="text-light text-decoration-line-through">Rp 360.000</small></p>
          <a href="order.php?bunga=Promo%20Red%20Rose%20Couple%20Pack&jumlah=12" class="btn btn-sm btn-light rounded-pill mt-2">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Promo 2 -->
    <div class="col-md-4">
      <div class="promo-card position-relative rounded-4 overflow-hidden shadow">
        <img src="bunga/bunga_ultah/Alstroemeria.jpg" alt="Promo Red Rose" class="img-fluid promo-img">
        
        <!-- Promo Badge -->
        <span class="promo-badge bg-danger text-white px-3 py-1 position-absolute top-0 start-0 rounded-end-4">🔥 PROMO</span>

        <!-- Overlay -->
        <div class="promo-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h5 class="text-warning fw-bold mb-2">🎂 Birthday Alstroemeria Surprise</h5>
            <p class="text-light small">Alstroemeria cantik dengan ucapan ulang tahun dan diskon 10%, free kartu ucapan!</p>
            <p class="fw-bold text-warning">Rp 126.000 <small class="text-light text-decoration-line-through">Rp 140.000</small></p>
          <a href="order.php?bunga=Promo%20Birthday%20Alstroemeria%20Surprise&jumlah=12" class="btn btn-sm btn-light rounded-pill mt-2">Pesan Sekarang</a>
        </div>
      </div>
    </div>

    <!-- Promo 3 -->
    <div class="col-md-4">
      <div class="promo-card position-relative rounded-4 overflow-hidden shadow">
        <img src="bunga/bunga_graduation/Lisianthus (Eustoma.jpg" alt="Promo Red Rose" class="img-fluid promo-img">
        
        <!-- Promo Badge -->
        <span class="promo-badge bg-danger text-white px-3 py-1 position-absolute top-0 start-0 rounded-end-4">🔥 PROMO</span>

        <!-- Overlay -->
        <div class="promo-overlay d-flex flex-column justify-content-center align-items-center text-center">
            <h5 class="text-info fw-bold mb-2">🎓 Graduation Lisianthus (Eustoma) </h5>
            <p class="text-light small">Buket bunga Lisianthus (12 tangkai) + boneka wisuda eksklusif untuk perayaan kelulusanmu dan diskon 10% .</p>
            <p class="fw-bold text-warning">Rp 189.000 <small class="text-light text-decoration-line-through">Rp 210.000</small></p>
          <a href="order.php?bunga=Promo%20Graduation%20Lisianthus%20Eustoma&jumlah=12" class="btn btn-sm btn-light rounded-pill mt-2">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>


 <?php include 'footer.php'; ?>


</body>
</html>
