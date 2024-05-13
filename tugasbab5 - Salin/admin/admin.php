<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.container {
    width: 60%;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-left: 300px;
}
h2 {
    text-align: center;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
table th {
    background-color: #004466;
    color: #fff;
}
.p{
    color: #00fe7b;
}
.n{
    color: #fe0000;
}

.jdl{
    display: flex;
    padding: 20px 0px 20px 10px;

}
.logo1 { 
    margin-top: 22px;
    width: 30px;
    height: 30px;
}
.judul{
    color: #fff;
    padding-left: 15px;
}
.sidebar {
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #004466;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.sidebar ul li {
    padding: 10px;
    border-top: 1px solid #fff;
}
.sidebar ul li a{
    text-decoration: none;
    padding-left: 5px;
    color: #fff;
}
.sidebar ul li:last-child {
    border-bottom: none;
}

.logo {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

.logo{
    margin: 0;
    color: #fff;
}
.logo + a {
    color: #fff;
    text-decoration: none;
}
.sidebar ul :hover {
    background-color: #004466;
}

/* Gaya untuk popup */
.popup {
    display: none; /* Sembunyikan popup secara default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4); /* Semi-transparan untuk latar belakang */
}

.popup-content {
    background-color: #fefefe;
    margin: 5% auto; /* Posisi tengah vertikal dan horizontal */
    padding: 20px;
    border-radius: 30px;
    width: 40%; /* Sesuaikan lebar sesuai kebutuhan */
    height: 250px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
/* Tombol untuk menutup popup */
.close {
    color: #fff;
    background-color: #2f39ed;
    border: none;
    border-radius: 10px;
    float: right;
    padding: 10px 20px;
    font-size: 20px;
    font-weight: bold;
    margin-top: 20px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>
</head>
<body>
  <div class="sidebar">
      <div class="jdl">
          <h1 class="judul">Pinjaman Online</h1>
      </div>
      <ul>
        <li>
            <a href="pemesanan.php">Dashboard</a>
        </li>
        <li>
            <a href="transaksi.php">Transaksi</a>
        </li>
        <li>
            <a href="pengguna.php">Pengguna</a></li>
        <li>
            <a href="../login.php">Log Out</a>
        </li>
      </ul>
    </div>
    <div class="container">
        <h2>Data Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Tlp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ivan</td>
                    <td>ivan@example.com</td>
                    <td>0813237834</td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fiky</td>
                    <td>fiky@example.com</td>
                    <td>085686675987</td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <tr id="hapus">
                    <td>3</td>
                    <td>Munet</td>
                    <td>munet@example.com</td>
                    <td>0877659087123</td>
                    <td>
                        <button onclick="edit()">Edit</button>
                        <button  onclick="hapus()">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="registration-form" class="popup">
        <form  action="#" method="POST" class="popup-content">
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
            <button type="submit" class="close">Edit</button>
        </form>
    </div>
    <script>
        function hapus() {
            document.getElementById("hapus").style.display = "none";
        }
        function edit() {
            document.getElementById("registration-form").style.display = "block";
        }

        document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("registration-form");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();

        // Mengambil nilai dari input form
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var telepon = document.getElementById("telepon").value;

        // Membuat objek data baru
        var newData = {
            nama: nama,
            email: email,
            telepon: telepon
        };

        // Mengambil data yang sudah ada dari local storage atau membuat array baru jika belum ada
        var existingData = JSON.parse(localStorage.getItem("pinjamanData")) || [];

        // Menambahkan data baru ke dalam array existingData
        existingData.push(newData);

        // Menyimpan array existingData kembali ke local storage
        localStorage.setItem("pinjamanData", JSON.stringify(existingData));

        // Memberikan notifikasi bahwa data telah ditambahkan
        alert("Data telah berhasil ditambahkan!");
        document.getElementById("registration-form").style.display = "none";
        // Setelah data ditambahkan, bisa dilakukan redirect ke halaman lain jika diperlukan
        // window.location.href = "halaman-lain.html";
    });
});
    </script>
</body>
</html>
