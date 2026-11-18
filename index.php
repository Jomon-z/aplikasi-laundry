<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>



<!-- Konten utama -->
<div class="main-content">
    <h3 class="mb-4">Dashboard Utama</h3>

<!--kartu ringkasan statistik-->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Transaksi Hari Ini</h6>
                    <h2 class="fw-bold mb-0">12</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Cucian Diproses</h6>
                    <h2 class="fw-bold mb-0">5</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Cucian Selesai</h6>
                    <h2 class="fw-bold mb-0">7</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Total Member</h6>
                    <h2 class="fw-bold mb-0">24</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- TABEL TRANSAKSI TERBARU -->
    <div class="card shadow-sm">
        <div class="card-header bg-white py-3">
            <h5 class="card-title mb-0 fw-bold">Transaksi Terbaru</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No. Nota</th>
                            <th>Pelanggan</th>
                            <th>Layanan</th>
                            <th>Total Harga</th>
                            <th>Status Cucian</th>
                            <th>Status Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">TRX-001</td>
                            <td>Budi Santoso <span class="badge bg-success ms-1">Member</span></td>
                            <td>Cuci Komplit</td>
                            <td>Rp 22.050</td>
                            <td><span class="badge bg-warning text-dark">Proses</span></td>
                            <td><span class="badge bg-success">Lunas</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">TRX-002</td>
                            <td>Siti Rahma <span class="badge bg-secondary ms-1">Non-Member</span></td>
                            <td>Cuci Kering</td>
                            <td>Rp 10.000</td>
                            <td><span class="badge bg-primary">Baru</span></td>
                            <td><span class="badge bg-danger">Belum Bayar</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>