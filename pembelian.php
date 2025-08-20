<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pemesanan - E-LINEN</title>
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

    .order-section {
      padding: 100px 20px 60px;
      max-width: 800px;
      margin: auto;
    }

    .order-section h1 {
      text-align: center;
      font-size: 36px;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    input, select, textarea {
      padding: 14px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
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
  <a href="kontak.php">Contact</a>
  <a href="#" class="buynow">BUY NOW!!</a>
</nav>

<section class="order-section">
  <h1 data-aos="fade-up">Form Pemesanan</h1>

  <form action="#" method="post" data-aos="fade-up" data-aos-delay="100">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="text" name="alamat" placeholder="Alamat Pengiriman" required>
    <input type="tel" name="nohp" placeholder="Nomor HP/WA" required>
    
    <select name="produk" required>
      <option value="">Pilih Produk</option>
      <option value="linen hotel">Linen Hotel</option>
      <option value="linen rumah sakit">Linen Rumah Sakit</option>
      <option value="linen rumah tangga">Linen Rumah Tangga</option>
    </select>

    <select name="ukuran" required>
      <option value="">Pilih Ukuran</option>
      <option value="single">Single</option>
      <option value="queen">Queen</option>
      <option value="king">King</option>
      <option value="custom">Custom</option>
    </select>

    <input type="number" name="jumlah" placeholder="Jumlah" required min="1">

    <select name="pembayaran" required>
      <option value="">Metode Pembayaran</option>
      <option value="transfer">Transfer Bank</option>
      <option value="cod">Bayar di Tempat (COD)</option>
      <option value="qris">QRIS / e-Wallet</option>
    </select>

    <textarea name="catatan" placeholder="Catatan Tambahan (Opsional)"></textarea>

    <button type="submit">Kirim Pesanan</button>
  </form>
</section>

<footer>
  <p>© 2025 E-LINEN INDONESIA | Terima kasih atas kepercayaan Anda.</p>
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
