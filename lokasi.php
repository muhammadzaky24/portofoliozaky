<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lokasi - E-LINEN</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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

    .lokasi-section {
      padding: 100px 20px 60px;
      text-align: center;
    }

    .lokasi-section h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .lokasi-section p {
      font-size: 16px;
      line-height: 1.8;
      margin-bottom: 30px;
    }

    .lokasi-map {
      max-width: 100%;
      height: 400px;
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    footer {
      background-color: #b09c84;
      color: black;
      text-align: center;
      padding: 40px 0;
      margin-top: 60px;
    }
  </style>
</head>
<body>

<nav>
  <a href="landing page.php">Home</a>
  <a href="about.php">About</a>
  <a href="#">Lokasi</a>
  <a href="kontak.php">Contact</a>
  <a href="pembelian.php" class="buynow">BUY NOW!!</a>
</nav>

<section class="lokasi-section">
  <h1 data-aos="fade-up">Lokasi Toko Kami</h1>
  <p data-aos="fade-up" data-aos-delay="100">
    Kunjungi toko fisik kami dan rasakan langsung kualitas linen premium yang kami tawarkan.  
  </p>
  <p data-aos="fade-up" data-aos-delay="200">
    📍 Jl. aru No. Kav. 11 RT.3/ RW.3,<br>
        Lubuk Begalung, Padang  
  </p>

  <!-- Google Maps Embed -->
  <div data-aos="zoom-in" data-aos-delay="300">
    <iframe class="lokasi-map"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.052617995614!2d100.39892040212851!3d-0.9558229974642088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b982fd776c89%3A0x4e9e1c8dcc9c55fb!2sUniversitas%20Putra%20Indonesia%20%22YPTK%22!5e0!3m2!1sid!2sid!4v1753891169039!5m2!1sid!2sid"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

<footer>
  <p>© 2025 E-LINEN INDONESIA | Dibuat dengan semangat & cinta akan kain linen terbaik.</p>
</footer>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 1000,
    offset: 100
  });
</script>

</body>
</html>
