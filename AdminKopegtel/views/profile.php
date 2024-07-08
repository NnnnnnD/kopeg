<?php

$title = "Profile";
include '../views/components/navbar.php'; 
include '../views/components/sidebar.php'; 
include '../controller/connection.php';

// Query untuk mengambil data pengguna
$sql = "SELECT nama, email FROM admin";
$result = $conn->query($sql);

// Cek jika query berhasil dieksekusi
if ($result->num_rows > 0) {
    // Ambil data setiap baris dan tampilkan di halaman profil
    while($row = $result->fetch_assoc()) {
        $user = [
            'name' => $row['nama'],
            'email' => $row['email'],
        ];
    }
} else {
    echo "Tidak ada data pengguna";
}

// Tutup koneksi
$conn->close();
?>

<div class="main-content">
    <div class="container">
        <h1>Profile</h1>

        <!-- Tampilkan nama pengguna -->
        <p>Nama: <?php echo $user['name']; ?></p>

        <!-- Tampilkan email pengguna -->
        <p>Email: <?php echo $user['email']; ?></p>
    </div>
</div>

<!-- Tambahkan JavaScript Anda di sini -->
<style>
    .main-content {
        margin-left: 150px; /* Adjust according to sidebar width */
        margin-top: 120px;
        padding: 2rem;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
</style>
</body>
</html>
