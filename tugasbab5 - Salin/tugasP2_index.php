<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pinjaman Online</h1>
    </header>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Produk</a>
        <a href="#">Proses Pengajuan</a>
        <a href="#">Customer Service</a>
    </nav>
    <section class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/pj1.png" alt="Gambar 1">
                <div class="carousel-caption">
                    <h3>Bunga Rendah Dan Tenor Panjang</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/pj2.jpg" alt="Gambar 2">
                <div class="carousel-caption">
                    <h1>Pinjaman Online Cepat Cairnya</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/pj3.jpg" alt="Gambar 3">
                <div class="carousel-caption">
                    <h3>Pinjam Online Bisa Sampai 10JT</h3>
                </div>
            </div>
        </div>
        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>
    </section>
    <section>
        <h2>Selamat Datang di Layanan Pinjaman Online ITN Surabaya</h2>
        <p>Dapatkan pinjaman dengan proses yang cepat, aman, dan terpercaya.</p>
        <p>Kami menawarkan berbagai produk pinjaman dengan suku bunga yang kompetitif.</p>
        <p>Kalau pinjam di bayar ya bolo</p>
        <a href="#" class="cta-button" onclick="openPopup()">Ajukan Pinjaman Sekarang</a>
    </section>
    <section class="accordion">
        <h3>Informasi Pinjaman</h3>
        <h3 class="accordion-header" onclick="toggleAccordion()">Lihat</h3>
        <div class="accordion-content">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pinjaman</th>
                        <th>Tenor</th>
                        <th>Bunga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>200.000.000</td>
                        <td>30 Tahun</td>
                        <td>10%</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10.000.000</td>
                        <td>24 Tahun</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>200.000</td>
                        <td>Seumur Hidup</td>
                        <td>80%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <form id="registration-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon:</label>
                        <input type="tel" id="telepon" name="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah-pinjaman">Jumlah Pinjaman (IDR):</label>
                        <select id="jumlah-pinjaman" name="jumlah-pinjaman" required>
                            <option value="">Pilih Jumlah Pinjaman</option>
                            <option value="1000000">1.000.000 IDR</option>
                            <option value="5000000">5.000.000 IDR</option>
                            <option value="10000000">10.000.000 IDR</option>
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tenor">Tenor (Bulan):</label>
                        <select id="tenor" name="tenor" required>
                            <option value="">Pilih Tenor</option>
                            <option value="6">6 Bulan</option>
                            <option value="12">12 Bulan</option>
                            <option value="24">24 Bulan</option>
                            <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan Tambahan:</label>
                        <textarea id="keterangan" name="keterangan" rows="4"></textarea>
                    </div>
                    <button type="submit">Ajukan Pinjaman</button>
                </form>
            </div>
        </div>
    </section>
    <div id="uda" class="popup">
        <div class="popup-ku">
            <p>Permintaan anda sedang di proses.</p>
            <button onclick="tutup()">Tutup</button>
        </div>
    </div>
    <footer>
        <p>Hak Cipta &copy; 2024 Pinjaman Online</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
