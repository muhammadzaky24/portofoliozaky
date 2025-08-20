<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - E-LINEN</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> <!-- ✅ AOS CSS -->

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fff;
      color: #222;
    }

    nav {
      background: #fff;
      text-align: center;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* ✅ Gradasi pembatas bawah navbar */
    }

    nav a {
      color: black;
      margin: 0 15px;
      text-decoration: none;
      padding: 10px 15px;
      display: inline-block;
      transition: background 0.3s ease;
    }

    nav a:hover {
      background-color: #f0dccc;
      border-radius: 5px;
    }

    .buynow {
      background-color: #eef3a5ff;
      padding: 8px 16px;
      border-radius: 5px;
      color: black;
      text-decoration: none;
      margin-left: 20px;
    }

    .buynow:hover {
      background-color: #b09c84;
    }

    .about-section {
      background-color: #fff;
      padding: 100px 20px 60px; /* Tambah padding top untuk jarak dari navbar */
      text-align: center;
    }

    .about-section h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .about-section p {
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 20px;
    }

    .about-section img {
      display: block;
      max-width: 100%;
      margin: 30px auto;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    footer {
      background-color: rgba(0,0,0,0.8);
      color: white;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>

<nav>
  <a href="landing page.php">Home</a>
  <a href="#">About</a>
  <a href="lokasi.php">Lokasi</a>
  <a href="kontak.php">Contact</a>
  <a href="pembelian.php" class="buynow">BUY NOW!!</a>
</nav>

<!-- ✅ About Section with AOS -->
<section class="about-section">
  <h1 data-aos="fade-up">Tentang Kami</h1>
  <p data-aos="fade-up" data-aos-delay="100">
    Didirikan dari semangat untuk menghadirkan kualitas terbaik dalam setiap helai kain...
  </p>
  <p data-aos="fade-up" data-aos-delay="200">
    Dengan menggabungkan teknologi jahit modern dan bahan linen premium...
  </p>
  <p data-aos="fade-up" data-aos-delay="300">
    Perjalanan kami adalah kisah tentang ketekunan, inovasi, dan dedikasi...
  </p>
</section>

<!-- ✅ Visi Misi Section with AOS -->
<section style="background-color: #fff; padding: 60px 20px; text-align: center;">
  <h2 style="font-size: 32px; font-weight: bold; color: #000;" data-aos="fade-up">
    Visi Misi <span style="color: #b09c84;">E LINEN</span>
  </h2>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px; margin-top: 40px;">
    <!-- Visi -->
    <div data-aos="fade-up" data-aos-delay="100" style="background: #fff; border-radius: 20px; padding: 30px 20px; width: 300px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
      <img src="https://cdn-icons-png.flaticon.com/512/929/929406.png" alt="Vision Icon" width="60" style="margin-bottom: 20px;">
      <h3 style="color: #b09c84;">Visi <span style="color: #000;">Kami</span></h3>
      <p style="color: #555; font-size: 16px; margin-top: 10px;">
        Menjadi perusahaan tekstil unggulan di Indonesia yang memadukan kualitas, inovasi, dan keberlanjutan.
      </p>
    </div>

    <!-- Misi -->
    <div data-aos="fade-up" data-aos-delay="200" style="background: #fff; border-radius: 20px; padding: 30px 20px; width: 300px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
      <img src="https://cdn-icons-png.flaticon.com/512/10336/10336510.png" alt="Mission Icon" width="60" style="margin-bottom: 20px;">
      <h3 style="color: #b09c84;">Misi <span style="color: #000;">Kami</span></h3>
      <p style="color: #555; font-size: 16px; margin-top: 10px;">
        Menghadirkan linen berkualitas tinggi dengan teknologi modern<br>
        Mengutamakan kelestarian lingkungan<br>
        Memberikan pelayanan terbaik bagi pelanggan<br>
        Mendukung pemberdayaan tenaga kerja lokal
      </p>
    </div>
  </div>
</section>

<!-- ✅ Footer tetap -->
<footer style="
  width: 100%;
  background-color: #f0dccc;
  padding: 40px;
  font-family: Arial, sans-serif;
  color: #000;
  box-sizing: border-box;
">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; width: 100%; box-sizing: border-box;">
    
    <!-- Kolom Alamat & Peta -->
    <div style="flex: 1 1 300px; margin-bottom: 20px;">
      <h3 style="color: #000;">PT. E-Linen Indonesia</h3>
      <p style="color: #000;">
        Tokopedia Tower Ciputra World 2 Lt.37<br>
        Jl. aru No. Kav. 11 RT.3/ RW.3,<br>
        Lubuk Begalung, Padang
      </p>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.052617995614!2d100.39892040212851!3d-0.9558229974642088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b982fd776c89%3A0x4e9e1c8dcc9c55fb!2sUniversitas%20Putra%20Indonesia%20%22YPTK%22!5e0!3m2!1sid!2sid!4v1753891169039!5m2!1sid!2sid" width="100%" height="200" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Kolom Navigasi -->
    <div style="flex: 1 1 150px; margin-bottom: 20px;">
      <h4 style="color: #000;">Produk</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="color: #000; text-decoration: none;">Supplier Financing</a></li>
      </ul>
    </div>

    <div style="flex: 1 1 150px; margin-bottom: 20px;">
      <h4 style="color: #000;">Perusahaan</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="color: #000; text-decoration: none;">Tentang Kami</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Blog</a></li>
      </ul>
    </div>

    <div style="flex: 1 1 200px; margin-bottom: 20px;">
      <h4 style="color: #000;">Lainnya</h4>
      <ul style="list-style: none; padding: 0;">
        <li><a href="#" style="color: #000; text-decoration: none;">FAQ</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Kebijakan Privasi</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Whistle Blowing</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Syarat dan Ketentuan</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Kebijakan Penanganan Pengaduan</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Penerapan E&S</a></li>
        <li><a href="#" style="color: #000; text-decoration: none;">Disclaimer</a></li>
      </ul>
    </div>

    <!-- Sosial Media -->
    <div style="flex: 1 1 200px; margin-bottom: 20px;">
      <h4 style="color: #000;">Ikuti Sosial Media Kami</h4>
      <a href="https://www.instagram.com/mhdzkyy/?utm_source=ig_web_button_share_sheet">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" width="30">
      </a>
    </div>

  </div>

  <!-- Tombol WhatsApp -->
  <a href="https://wa.me/6281234567890" target="_blank" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25D366;
    color: white;
    border-radius: 50px;
    padding: 10px 15px;
    text-decoration: none;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    font-size: 14px;
  ">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WA" width="20" style="margin-right: 8px;">
    Ada yang bisa kami bantu?
  </a>
</footer>

<!-- ✅ AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true, // animasi hanya sekali saat pertama kali muncul
    duration: 1000, // durasi animasi
    offset: 100 // seberapa jauh dari bawah viewport sebelum animasi muncul
  });
</script>

</body>
</html>
