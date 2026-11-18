<?php
// Mendeteksi nama file halaman yang sedang dibuka (contoh: index.php, kasir.php)
$halaman_aktif = basename($_SERVER['PHP_SELF']);
?>

<style>
    .sidebar {
        width: 250px;
        min-height: 100vh;
        background-color: #2c3e50;
        color: #fff;
        padding: 20px 15px;
    }
    .sidebar .nav-link {
        color: #cfd8dc;
        padding: 10px 15px;
        margin-bottom: 6px;
        border-radius: 6px;
        transition: all 0.2s ease-in-out;
    }
    /* Efek shadow box saat kursor diarahkan (hover) */
    .sidebar .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    /* Efek shadow box tetap menyala pada halaman yang sedang dibuka */
    .sidebar .nav-link.active {
        background-color: rgba(255, 255, 255, 0.15);
        color: #ffffff;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    }
</style>

<div class="sidebar d-flex flex-column">
    <h4 class="text-center fw-bold pb-3 mb-3 border-bottom border-secondary">Laundry App</h4>
    
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="index.php" class="nav-link <?= ($halaman_aktif == 'index.php') ? 'active' : ''; ?>">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="kasir.php" class="nav-link <?= ($halaman_aktif == 'kasir.php') ? 'active' : ''; ?>">
                Kasir (Transaksi)
            </a>
        </li>
        <li class="nav-item">
            <a href="riwayat.php" class="nav-link <?= ($halaman_aktif == 'riwayat.php') ? 'active' : ''; ?>">
                Riwayat Transaksi
            </a>
        </li>
        <li class="nav-item">
            <a href="pelanggan.php" class="nav-link <?= ($halaman_aktif == 'pelanggan.php') ? 'active' : ''; ?>">
                Data Pelanggan
            </a>
        </li>
        <li class="nav-item">
            <a href="layanan.php" class="nav-link <?= ($halaman_aktif == 'layanan.php') ? 'active' : ''; ?>">
                Data Layanan
            </a>
        </li>
    </ul>
</div>