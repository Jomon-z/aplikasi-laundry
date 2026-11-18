<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- AREA KONTEN UTAMA -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Layanan Laundry</h3>
        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalLayanan">
            + Tambah Layanan
        </button>
    </div>

    <!-- TABEL DATA LAYANAN -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Layanan</th>
                            <th>Harga / Kg</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cuci Komplit</td>
                            <td>Rp 7.000</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning text-white btn-edit-layanan"
                                    data-bs-toggle="modal" data-bs-target="#modalEditLayanan"
                                    data-id="1"
                                    data-nama="Cuci Komplit"
                                    data-harga="7000">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cuci Kering</td>
                            <td>Rp 5.000</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning text-white btn-edit-layanan"
                                    data-bs-toggle="modal" data-bs-target="#modalEditLayanan"
                                    data-id="2"
                                    data-nama="Cuci Kering"
                                    data-harga="5000">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Setrika Saja</td>
                            <td>Rp 4.000</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning text-white btn-edit-layanan"
                                    data-bs-toggle="modal" data-bs-target="#modalEditLayanan"
                                    data-id="3"
                                    data-nama="Setrika Saja"
                                    data-harga="4000">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH LAYANAN -->
<div class="modal fade" id="modalLayanan" tabindex="-1" aria-labelledby="modalLayananLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalLayananLabel">Tambah Layanan Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="proses_tambah_layanan.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="Contoh: Cuci Express" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_per_kg" class="form-label">Harga per Kg (Rp)</label>
                        <input type="number" class="form-control" id="harga_per_kg" name="harga_per_kg" placeholder="Contoh: 8000" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary fw-bold">Simpan Layanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL EDIT LAYANAN -->
<div class="modal fade" id="modalEditLayanan" tabindex="-1" aria-labelledby="modalEditLayananLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalEditLayananLabel">Edit Data Layanan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="proses_edit_layanan.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="edit_id_layanan" name="id_layanan">

                    <div class="mb-3">
                        <label for="edit_nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="edit_nama_layanan" name="nama_layanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_harga_per_kg" class="form-label">Harga per Kg (Rp)</label>
                        <input type="number" class="form-control" id="edit_harga_per_kg" name="harga_per_kg" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning text-white fw-bold">Update Layanan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tombolEditLayanan = document.querySelectorAll('.btn-edit-layanan');
        tombolEditLayanan.forEach(function (tombol) {
            tombol.addEventListener('click', function () {
                document.getElementById('edit_id_layanan').value = this.getAttribute('data-id');
                document.getElementById('edit_nama_layanan').value = this.getAttribute('data-nama');
                document.getElementById('edit_harga_per_kg').value = this.getAttribute('data-harga');
            });
        });
    });
</script>

<?php include 'components/footer.php'; ?>