<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The New Brand of Clothing!</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
        }

    .fade-in {
        animation: fadeIn 1.2s ease-out forwards;
    }

        body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffffffff;
        color: #222;
        }

        nav {
        background: #ffffffff;
        text-align: center;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100;
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

        .section {
        background-color: #ffffffff;
        padding: 60px 20px;
        text-align: center;
        }

        h2 {
            color: #444;
        }


        .buynow {
            background-color: #f0dccc;
            padding: 8px 16px;
            border-radius: 5px;
            color: black;
            text-decoration: none;
            margin-left: 20px;
        }

        .buynow:hover {
            background-color: #f0dccc;
        }

        img {
            vertical-align: middle;
        }

.highlight-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    background-color: #ffffffff;
    border-radius: 10px;
    margin-bottom: 40px;
    padding: 40px 20px;
}

.highlight-text {
    flex: 1;
    min-width: 250px;
    padding-right: 20px;
    text-align: center;
}

.highlight-text h2 {
    margin: 10px 0;
    font-size: 40px; /* lebih besar */
    color: #222;
}

.highlight-text p {
    font-size: 20px;
    line-height: 1.6;
}

.highlight-image {
    flex: 1;
    min-width: 250px;
    text-align: center;
}

.highlight-image img {
    max-width: 60%; /* dikecilkan dari 100% */
    height: auto;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}


.extra-section {
    background-color: #ffffffff;
    padding: 40px 20px;
    text-align: center;
    margin-top: 40px;
}

.extra-text {
    max-width: 800px;
    margin: auto;
    color: #333;
}

.extra-text h2 {
    margin-bottom: 10px;
    font-size: 40px;
    color: #222;
}

.extra-text p {
    font-size: 20px;
    line-height: 1.6;
}

.feature-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    margin-bottom: 40px;
    padding: 40px 20px;
    background-color: #ffffffff;
}

.feature-image {
    flex: 1;
    min-width: 250px;
    text-align: center;
}

.feature-image img {
    max-width: 60%; /* dari 90% jadi 70% */
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}


.feature-text {
    flex: 1;
    min-width: 250px;
    padding: 0 20px;
    padding-left: 40px; /* teks digeser ke kanan */
}


.feature-text h2 {
    font-size: 40px;
    color: #222;
    margin-bottom: 10px;
}

.feature-text p {
    font-size: 20px;
    line-height: 1.6;
    color: #333;
}


    </style>
</head>
<body>

<nav>
    <a href="landing page.php">Home</a>
    <a href="about.php">About</a>
    <a href="lokasi.php">Lokasi</a>
    <a href="kontak.php">Contact us</a>
    <a href="pembelian.php" class="buynow">BUY NOW!!</a>
</nav>

<section style="
    background-image: url('https://i.pinimg.com/736x/b4/18/4a/b4184a077b3a676eaaa3ec0bb0f34372.jpg');
    background-size: fit;
    background-position: center;
    padding: 250px 20px;
    text-align: center;
    color: #fff;">
  <h2 data-aos="fade-up" style="font-size: 40px; font-weight: bold; background-color: rgba(0, 0, 0, 0.5); display: inline-block; padding: 10px 20px; color: white; border-radius: 10px;">
  E - LINEN <span style="color: #f0dccc;">INDONESIA</span>
</h2>


</section>


<div style="
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
    margin-top: 40px;">
</div>

<div class="highlight-section" data-aos="fade-up" data-aos-delay="100">
    <div class="highlight-text">
        <h2>Kenakan Gaya,</h2>
        <h2>Bawakan Cerita</h2>
    </div>
    <div class="highlight-image">
        <img src="https://i.pinimg.com/736x/a8/c9/86/a8c986062b74a7bc5ede600b058eb317.jpg" alt="Gambar Kain Fashion">
    </div>
</div>

<div class="extra-section" data-aos="fade-up" data-aos-delay="300">
    <div class="extra-text">
        <h2>Lebih dari Sekadar Pakaian</h2>
            <p>
            Di setiap jahitan, ada nilai. Di setiap desain, ada cerita. Another V hadir untuk kamu yang ingin tampil percaya diri, tanpa kehilangan jati diri. 
            Jadilah bagian dari perjalanan kami dalam membangun tren yang tidak hanya mengikuti, tapi juga memimpin.
            </p>
        </div>
    </div>
</div>

<div class="feature-section" data-aos="fade-up" data-aos-delay="200">
    <div class="feature-image">
        <img src="https://i.pinimg.com/1200x/bc/24/f4/bc24f4aa2399d4392083705db7b15269.jpg" alt="Fashion Look">
    </div>
    <div class="feature-text">
        <h2>Rasakan Sentuhan Premium.</h2>
            <p>
            Kami memilih bahan terbaik untuk kenyamanan maksimal dan tampilan elegan. Karena pakaian bukan hanya penutup, tapi pernyataan.
            </p>
    </div>
</div>



<div class="highlight-section" data-aos="fade-up" data-aos-delay="100">
    <div class="highlight-text">
        <h2>Teknologi Modern,</h2>
        <h2> Jahitan Presisi.</h2>
            <p>
                Kami memadukan keterampilan tangan terlatih dengan teknologi jahit modern untuk menciptakan hasil akhir yang rapi, kuat, dan konsisten.
            </p>
    </div>
    <div class="highlight-image">
        <img src="https://i.pinimg.com/1200x/61/33/e6/6133e624e769c71e25c289dd860c4543.jpg" alt="Gambar Kain Fashion">
    </div>
</div>


<div class="feature-section" data-aos="fade-up" data-aos-delay="200">
    <div class="feature-image">
        <img src="https://i.pinimg.com/1200x/1e/c1/5f/1ec15f0a13779fe61b7c6cf268a55cd7.jpg" alt="Fashion Look">
    </div>
    <div class="feature-text">
        <h2>All In One.</h2>
            <p>
            Kami menghadirkan beragam pilihan pakaian untuk setiap momen: santai, kerja, hingga acara spesial.
        Pilih gaya yang sesuai dengan jati dirimu tanpa harus berpindah brand.
            </p>
    </div>
</div>





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


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
