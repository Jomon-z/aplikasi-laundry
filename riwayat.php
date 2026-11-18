<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- AREA KONTEN UTAMA -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Riwayat Transaksi</h3>
        <!-- Filter/Pencarian Cepat -->
        <div class="d-flex gap-2">
            <input type="date" class="form-control form-control-sm" id="filter_tanggal">
            <select class="form-select form-select-sm" id="filter_status">
                <option value="">-- Semua Status Cucian --</option>
                <option value="Baru">Baru</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>
    </div>

    <!-- TABEL RIWAYAT TRANSAKSI -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No. Nota</th>
                            <th>Tanggal Masuk</th>
                            <th>Pelanggan</th>
                            <th>Layanan & Berat</th>
                            <th>Total Harga</th>
                            <th>Status Cucian</th>
                            <th>Status Bayar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">TRX-001</td>
                            <td>18/10/2026</td>
                            <td>Budi Santoso <span class="badge bg-success ms-1">Member</span></td>
                            <td>Cuci Komplit (3.5 kg)</td>
                            <td class="fw-bold text-primary">Rp 22.050</td>
                            <td><span class="badge bg-warning text-dark">Proses</span></td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td>
                                <button class="btn btn-sm btn-info text-white" title="Cetak Nota">Nota</button>
                                <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalEditStatus">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">TRX-002</td>
                            <td>18/10/2026</td>
                            <td>Siti Rahma <span class="badge bg-secondary ms-1">Non-Member</span></td>
                            <td>Cuci Kering (2.0 kg)</td>
                            <td class="fw-bold text-primary">Rp 10.000</td>
                            <td><span class="badge bg-primary">Baru</span></td>
                            <td><span class="badge bg-danger">Belum Bayar</span></td>
                            <td>
                                <button class="btn btn-sm btn-info text-white" title="Cetak Nota">Nota</button>
                                <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalEditStatus">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-bold">TRX-003</td>
                            <td>17/10/2026</td>
                            <td>Andi Wijaya <span class="badge bg-success ms-1">Member</span></td>
                            <td>Setrika Saja (5.0 kg)</td>
                            <td class="fw-bold text-primary">Rp 18.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td>
                                <button class="btn btn-sm btn-info text-white" title="Cetak Nota">Nota</button>
                                <button class="btn btn-sm btn-warning text-white" data-bs-toggle="modal" data-bs-target="#modalEditStatus">Edit</button>
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT STATUS TRANSAKSI -->
<div class="modal fade" id="modalEditStatus" tabindex="-1" aria-labelledby="modalEditStatusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalEditStatusLabel">Ubah Status</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="proses_update_status.php" method="POST">
                    <input type="hidden" name="id_transaksi" id="edit_id_transaksi">
                    
                    <div class="mb-3">
                        <label for="status_cucian" class="form-label fw-bold">Status Cucian</label>
                        <select class="form-select" id="status_cucian" name="status_cucian">
                            <option value="Baru">Baru</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="status_bayar" class="form-label fw-bold">Status Bayar</label>
                        <select class="form-select" id="status_bayar" name="status_bayar">
                            <option value="Belum Bayar">Belum Bayar</option>
                            <option value="Lunas">Lunas</option>
                        </select>
                    </div>

                    <div class="modal-footer px-0 pb-0 pt-2">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning btn-sm text-white fw-bold">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>