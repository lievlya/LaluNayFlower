<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link href="hf.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<section class="container my-5" id="kontak">
  <h2 class="text-center mb-5">📬 Hubungi Kami</h2>

  <div class="row g-4 justify-content-center">
    <!-- Instagram Card -->
    <div class="col-md-5">
      <div class="card shadow-lg border-0 rounded-4 bg-light p-4 h-100">
        <div class="card-body text-center">
          <img src="pict/pp_ig.jpg" alt="Instagram Bloomverse" class="rounded-circle mb-3 shadow" style="width: 100px; height: 100px; object-fit: cover;">
          <h4 class="text-danger">🌸 Instagram</h4>
          <p class="fs-5">
            <a href="https://www.instagram.com/dy_avrri23?utm_source=ig_web_button_share_sheet&igsh=Z3pnaWE4bDF0YXZy" class="text-decoration-none text-danger fw-semibold" target="_blank">
              @lievlya
            </a>
          </p>
        </div>
      </div>
    </div>

    <!-- Email Card -->
    <div class="col-md-5">
      <div class="card shadow-lg border-0 rounded-4 bg-light p-4 h-100">
        <div class="card-body text-center">
          <img src="pict/pp_email.jpg" alt="Email Bloomverse" class="rounded-circle mb-3 shadow" style="width: 100px; height: 100px; object-fit: cover;">
          <h4 class="text-danger">📧 Email</h4>
          <p class="fs-5">
            <a href="mailto:bloomverse@gmail.com" class="text-decoration-none text-danger fw-semibold">
              bloomverse@gmail.com
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>


