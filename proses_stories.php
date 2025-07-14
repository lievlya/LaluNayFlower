<!--inputan-->
<?php
include 'koneksi.php';

$nama = "Customer Anonim";
$cerita = $_POST['cerita'];
$emosi = $_POST['emosi'];

// Buat folder & nama file baru unik
$targetDir = "foto_stories/";
$originalFile = basename($_FILES['foto']['name']);
$fileExt = strtolower(pathinfo($originalFile, PATHINFO_EXTENSION));
$fotoBaru = uniqid() . "." . $fileExt;
$targetFile = $targetDir . $fotoBaru;

// Validasi ekstensi file
$allowed = ['jpg', 'jpeg', 'png'];
if (!in_array($fileExt, $allowed)) {
    echo "<script>
      alert('❌ Format gambar tidak didukung. Hanya JPG, JPEG, atau PNG.');
      window.location.href = 'stories.php';
    </script>";
    exit;
}

// Upload gambar
$uploadOk = move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile);

// Simpan ke database
if ($uploadOk) {
    $query = "INSERT INTO customer_stories (nama, cerita, emosi, foto) 
              VALUES ('$nama', '$cerita', '$emosi', '$fotoBaru')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
          alert('🎉 Cerita kamu berhasil dikirim! Terima kasih telah berbagi 💌');
          window.location.href = 'stories.php';
        </script>";
    } else {
        echo "<script>
          alert('❌ Gagal menyimpan cerita ke database.');
          window.location.href = 'stories.php';
        </script>";
    }
} else {
    echo "<script>
      alert('❌ Gagal mengunggah gambar.');
      window.location.href = 'stories.php';
    </script>";
}
?>
