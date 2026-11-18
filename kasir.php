<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- AREA KONTEN UTAMA -->
<div class="main-content">
    <h3 class="mb-4">Transaksi Kasir Baru</h3>

    <form action="nota.php" method="POST">
        <div class="row">
            <!-- ========================================== -->
            <!-- KOLOM KIRI (KARTU 1 & KARTU 2)             -->
            <!-- ========================================== -->
            <div class="col-md-7">
                
                <!-- SEGMEN 1: DATA PELANGGAN -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Data Pelanggan</h5>
                        <!-- Tombol Tambah Member Baru -->
                        <button type="button" class="btn btn-light btn-sm fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#modalTambahMember">
                            + Tambah Member
                        </button>
                    </div>
                    <div class="card-body">
                        <!-- Input Pencarian -->
                        <div class="mb-3">
                            <label for="cari_pelanggan" class="form-label">Cari Pelanggan (No. HP / Nama)</label>
                            <input type="text" class="form-control" id="cari_pelanggan" placeholder="Ketik untuk mencari...">
                        </div>

                        <!-- Detail Pelanggan Terpilih -->
                        <div class="row">
                            <input type="hidden" name="id_pelanggan" id="id_pelanggan" value="1">

                            <div class="col-md-8 mb-3">
                                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama pelanggan..." value="Budi Santoso">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="status_member" class="form-label">Status</label>
                                <select class="form-select text-success fw-bold" id="status_member" name="status_member">
                                    <option value="Member" selected>Member</option>
                                    <option value="Non-Member">Non-Member</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEGMEN 2: DETAIL LAYANAN & CUCIAN -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Detail Layanan & Cucian</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="layanan" class="form-label">Pilih Layanan</label>
                                <select class="form-select" id="layanan" name="id_layanan" required>
                                    <option value="">-- Pilih Layanan --</option>
                                    <option value="1">Cuci Komplit (Rp 7.000 / kg)</option>
                                    <option value="2">Cuci Kering (Rp 5.000 / kg)</option>
                                    <option value="3">Setrika Saja (Rp 4.000 / kg)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="berat" class="form-label">Berat Cucian (Kg)</label>
                                <input type="number" step="0.1" class="form-control" id="berat" name="berat_kg" placeholder="Contoh: 3.5" required>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- KOLOM KANAN / SAMPING (RINGKASAN BIAYA)    -->
            <!-- ========================================== -->
            <div class="col-md-5">
                <div class="card shadow-sm border-top border-3 border-success">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-4">Ringkasan Biaya</h5>

                        <!-- Rincian Biaya -->
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-secondary">Subtotal:</span>
                            <span class="fw-semibold" id="subtotal">Rp 0</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3 text-success">
                            <span>Diskon Member (10%):</span>
                            <span id="diskon">- Rp 0</span>
                        </div>

                        <hr>

                        <!-- Total Bayar -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">TOTAL BAYAR:</h5>
                            <h4 class="fw-bold text-primary mb-0" id="total_bayar">Rp 0</h4>
                            <input type="hidden" name="total_harga" id="hidden_total_harga" value="0">
                        </div>

                        <!-- Status Pembayaran -->
                        <div class="mb-4">
                            <label class="form-label fw-bold d-block">Status Pembayaran</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_bayar" id="lunas" value="Lunas" checked>
                                <label class="form-check-label fw-bold text-success" for="lunas">Lunas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_bayar" id="belum_lunas" value="Belum Lunas">
                                <label class="form-check-label fw-bold text-danger" for="belum_lunas">Belum Lunas</label>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success fw-bold py-2 text-uppercase">SIMPAN & CETAK NOTA</button>
                            <button type="reset" class="btn btn-outline-danger py-2">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- MODAL TAMBAH MEMBER -->
<div class="modal fade" id="modalTambahMember" tabindex="-1" aria-labelledby="modalTambahMemberLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTambahMemberLabel">Tambah Member Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nama_baru" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_baru" placeholder="Masukkan nama pelanggan" required>
                    </div>
                    <div class="mb-3">
                        <label for="hp_baru" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="hp_baru" placeholder="Contoh: 081234567890" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_baru" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat_baru" rows="2" placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary fw-bold">Simpan Member</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const layananSelect = document.getElementById('layanan');
        const beratInput = document.getElementById('berat');
        const statusMemberSelect = document.getElementById('status_member');

        const subtotalEl = document.getElementById('subtotal');
        const diskonEl = document.getElementById('diskon');
        const totalBayarEl = document.getElementById('total_bayar');
        const hiddenTotalEl = document.getElementById('hidden_total_harga');

        // Daftar harga per kg sesuai option
        const hargaLayanan = {
            '1': 7000, // Cuci Komplit
            '2': 5000, // Cuci Kering
            '3': 4000  // Setrika Saja
        };

        function hitungTotal() {
            const idLayanan = layananSelect.value;
            const berat = parseFloat(beratInput.value) || 0;
            const status = statusMemberSelect.value;

            const harga = hargaLayanan[idLayanan] || 0;
            const subtotal = harga * berat;

            // Hitung diskon 10% jika Member
            let diskon = 0;
            if (status === 'Member') {
                diskon = subtotal * 0.10;
            }

            const total = subtotal - diskon;

            // Tampilkan ke layar dengan format Rupiah
            subtotalEl.innerText = 'Rp ' + subtotal.toLocaleString('id-ID');
            diskonEl.innerText = '- Rp ' + diskon.toLocaleString('id-ID');
            totalBayarEl.innerText = 'Rp ' + total.toLocaleString('id-ID');
            hiddenTotalEl.value = total;
        }

        // Jalankan fungsi saat ada perubahan input
        layananSelect.addEventListener('change', hitungTotal);
        beratInput.addEventListener('input', hitungTotal);
        statusMemberSelect.addEventListener('change', hitungTotal);
    });
</script>

<?php include 'components/footer.php'; ?>