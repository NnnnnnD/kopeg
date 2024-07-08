<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../resources/css/index.css">
    <!-- Tambahkan Chart.js melalui CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">   

</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="../resources/images/KopegtelLogoOnly.png" alt="Kopegtel Logo">
    </div>
    <div class="menu-toggle" id="menu-toggle">
        ☰
    </div>
    <ul class="menu" id="menu">
        <!-- Menu Data Barang -->
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page == 'barangMasuk.php') {
            echo '<li><a href="../views/tambahBarang.php">Stok Galon</a></li>';
        }
        ?>
                <!-- Item dengan Icon Lonceng untuk Notifikasi -->
        <li class="notification-bell">
            <a href="#"><i class="fas fa-bell"></i></a>
        </li>

        <!-- Item setting dengan ikon setting dengan fungsi dropdown-menu -->
        <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-cog"></i></a>
            <div class="dropdown-content">
                <a href="../views/profile.php">Profile</a>
                <a href="../views/login.php">Logout</a>
            </div>
        </li>

    </ul>
</nav>
<!-- Your existing HTML content -->
<style>.notification-bell, .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    left: -450%;
}

.menu a {
    color: white; /* Mengatur warna teks pada menu utama menjadi putih */
}

.dropdown-content a {
    color: black; /* Mengatur warna teks pada menu dropdown menjadi hitam */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Optional: Add some hover effects for links */
.dropdown-content a:hover {
    background-color: #ddd;
}


</style>
</body>
</html>
