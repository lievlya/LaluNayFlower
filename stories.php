<?php include 'navbar.php'; ?>
<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Customer Stories | Bloomverse</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="stories.css" rel="stylesheet">
  <link href="hf.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<section class="container my-5" id="stories">
  <h2 class="text-center mb-4">💬 Cerita Pelanggan Kami</h2>
  <p class="text-center fs-5 mb-5">Kisah nyata yang menyentuh hati dari mereka yang telah merasakan keajaiban Bloomverse 🌸</p>

  <div class="table-responsive">
    <table class="table table-bordered table-hover table-stories align-middle text-center shadow">
      <thead class="table-danger text-white">
        <tr>
          <th>📷 Foto</th>
          <th>📝 Cerita</th>
          <th>😊 Emosi</th>
        </tr>
      </thead>
        <tbody>
        <!--Memproses menampilkan stories dari yang diinputkan-->
        <?php
        $result = mysqli_query($conn, "SELECT * FROM customer_stories ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td><img src="foto_stories/' . htmlspecialchars($row['foto']) . '" alt="User Story" class="story-img rounded"></td>';
          echo '<td>"' . htmlspecialchars($row['cerita']) . '"</td>';
          echo '<td>' . htmlspecialchars($row['emosi']) . '</td>';
          echo '</tr>';
        }
        ?>
        </tbody>
    </table>
  </div>
</section>

<!-- =======================
     Form Tambah Komentar
======================= -->
<section class="container mb-5">
  <h4 class="mb-3">Tambahkan Cerita Kamu</h4>
  <form action="proses_stories.php" method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
      <label for="cerita" class="form-label">Ceritamu</label>
      <textarea class="form-control" id="cerita" name="cerita" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label for="emosi" class="form-label">Rating Emosi (emoji)</label>
      <input type="text" class="form-control" id="emosi" name="emosi" placeholder="Contoh: ❤️❤️❤️❤️" required>
    </div>
    <div class="mb-3">
      <label for="foto" class="form-label">Upload Foto</label>
      <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
    </div>
    <button type="submit" class="btn btn-danger rounded-pill px-4">Kirim Cerita</button>
  </form>
</section>

<?php include 'footer.php'; ?>
</body>
</html>
