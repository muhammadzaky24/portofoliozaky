<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak - E-LINEN</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>

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

    .kontak-section {
      padding: 100px 20px 60px;
      max-width: 800px;
      margin: auto;
    }

    .kontak-section h1 {
      text-align: center;
      font-size: 36px;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    input, textarea {
      padding: 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    button {
      background-color: #b09c84;
      color: white;
      padding: 12px 20px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #8c7a66;
    }

    .info {
      margin-top: 40px;
      text-align: center;
      font-size: 14px;
      color: #555;
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
  <a href="lokasi.php">Lokasi</a>
  <a href="#">Contact</a>
  <a href="pembelian.php" class="buynow">BUY NOW!!</a>
</nav>

<section class="kontak-section">
  <h1 data-aos="fade-up">Hubungi Kami</h1>

  <form data-aos="fade-up" data-aos-delay="100" action="#" method="post">
    <input type="text" name="nama" placeholder="Nama Anda" required>
    <input type="email" name="email" placeholder="Email Anda" required>
    <textarea name="pesan" placeholder="Tulis pesan Anda..." required></textarea>
    <button type="submit">Kirim Pesan</button>
  </form>

  <div class="info" data-aos="fade-up" data-aos-delay="200">
    <p>📍 Jl. aru No. Kav. 11 RT.3/ RW.3,<br>
        Lubuk Begalung, Padang </p>
    <p>📞 0823-8919-5846</p>
    <p>✉️ support@e-linen.id</p>
  </div>
</section>

<footer>
  <p>© 2025 E-LINEN INDONESIA | Kami siap melayani Anda dengan sepenuh hati.</p>
</footer>

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
