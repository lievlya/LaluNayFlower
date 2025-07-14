<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Order | Bloomverse</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="order.css" rel="stylesheet">
  <link href="hf.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
  // Tangkap data dari URL dari promo
  $selectedBunga = $_GET['bunga'] ?? '';
  $selectedJumlah = $_GET['jumlah'] ?? '';
?>


<section class="container my-5">
  <h2 class="text-center mb-4">🛒 Formulir Pemesanan Bunga</h2>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card p-4 shadow rounded-4 bg-light">
        <form action="order.php" method="POST">
          
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
           
          <div class="mb-3">
            <label for="bunga" class="form-label">Pilih Bunga</label>
            <select class="form-select" id="bunga" name="bunga">
              <?php
                $daftarBunga = [
                  "-",
                  "Promo Red Rose Couple Pack",
                  "Promo Birthday Alstroemeria Surprise",
                  "Promo Graduation Lisianthus Eustoma",
                  "Red Velvet Rose",
                  "Peony",
                  "Hydrangea Pink",
                  "Lily Casablanca",
                  "Sunflower",
                  "Tulip",
                  "Lily Oriental",
                  "Alstroemeria",
                  "Carnation",
                  "Dahlia",
                  "Gerbera Daisy",
                  "Lisianthus",
                  "Calla Lily Putih",
                  "Iris",
                  "Krisan Putih",
                  "Mawar Putih"
                ];
                //Memindah bunga yang dipilih
                foreach ($daftarBunga as $bunga) {
                  $selected = ($selectedBunga === $bunga) ? 'selected' : '';
                  echo "<option value=\"$bunga\" $selected>$bunga</option>";
                }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Bunga</label>
            <select class="form-select" id="jumlah" name="jumlah">
              <option value="-" <?= $selectedJumlah == 0 ? 'selected' : '' ?>>-</option>
              <option value="2" <?= $selectedJumlah == 2 ? 'selected' : '' ?>>2 Tangkai</option>
              <option value="12" <?= $selectedJumlah == 12 ? 'selected' : '' ?>>12 Tangkai</option>
              <option value="20" <?= $selectedJumlah == 20 ? 'selected' : '' ?>>20 Tangkai</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Pengiriman</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
          </div>

          <div class="mb-3">
            <label for="pembayaran" class="form-label">Metode Pembayaran</label>
            <select class="form-select" id="pembayaran" name="pembayaran">
              <option value="Transfer Bank">Transfer Bank</option>
              <option value="COD">Bayar di Tempat (COD)</option>
              <option value="E-Wallet">E-Wallet (OVO/Gopay/Dana/M-Banking)</option>
            </select>
          </div>

          <button type="submit" name="pesan" class="btn btn-danger rounded-pill px-4">Pesan Sekarang</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php

#Output yang dipesan

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $bunga   = $_POST['bunga'];
  $tangkai = (int)$_POST['jumlah'];
//mendeklar harga bunga
  $harga_bunga =[
    "Promo Red Rose Couple Pack" => [12 => 288000],
    "Promo Birthday Alstroemeria Surprise" => [12 => 126000],
    "Promo Graduation Lisianthus Eustoma" => [12 => 189000],
    "Red Velvet Rose" => [2 => 40000, 12 => 180000, 20 => 280000],
    "Peony" => [2 => 60000, 12 => 110000, 20 => 299000],
    "Hydrangea Pink" => [2 => 35000, 12 => 90000, 20 => 160000],
    "Lily Casablanca"=> [2 => 50000, 12 => 250000, 20 => 360000],
    "Sunflower" => [2 => 25000, 12 => 160000, 20 => 220000],
    "Tulip" => [2 => 65000, 12 => 100000, 20 => 140000],
    "Lily Oriental" => [2 => 45000, 12 => 75000, 20 => 115000],
    "Alstroemeria" => [2 => 30000, 12 => 140000, 20 => 210000],
    "Carnation" => [2 => 30000, 12 => 130000, 20 => 190000],
    "Dahlia" => [2 => 70000, 12 => 90000, 20 => 140000],
    "Gerbera Daisy" => [2 => 60000, 12 => 100000, 20 => 135000],
    "Lisianthus" => [2 => 40000, 12 => 170000, 20 => 250000],
    "Calla Lily Putih" => [2 => 75000, 12 => 115000, 20 => 190000],
    "Iris" => [2 => 90000, 12 => 150000, 20 => 220000],
    "Krisan Putih" => [2 => 25000, 12 => 110000, 20 => 170000],
    "Mawar Putih"=> [2 => 35000, 12 => 150000, 20 => 230000]
  ];

  $harga = $harga_bunga[$bunga][$tangkai] ?? 0;
//format pencetakan
  echo "<div class='container mt-4'>";
  echo "<div class='alert alert-success rounded-4 p-4 shadow-sm'>";
  echo "<h5>🧾 Detail Pemesanan Anda:</h5>";
  echo "<p><strong>Bunga:</strong> $bunga</p>";
  echo "<p><strong>Jumlah:</strong> $tangkai Tangkai</p>";
  echo "<p><strong>Total Harga:</strong> Rp " . number_format($harga, 0, ',', '.') . "</p>";
  echo "</div></div>";
}
?>

<?php include 'footer.php'; ?>

</body>
</html>
