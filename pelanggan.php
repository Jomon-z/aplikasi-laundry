<?php include 'components/header.php'; ?>
<?php include 'components/sidebar.php'; ?>

<!-- AREA KONTEN UTAMA -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Member Pelanggan</h3>
        <button type="button" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalPelanggan">
            + Tambah Member
        </button>
    </div>

    <!-- TABEL DATA MEMBER -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Budi Santoso</td>
                            <td>081234567890</td>
                            <td>Jl. Merdeka No. 10</td>
                            <td><span class="badge bg-success">Member</span></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning text-white btn-edit-member"
                                    data-bs-toggle="modal" data-bs-target="#modalEditPelanggan"
                                    data-id="1"
                                    data-nama="Budi Santoso"
                                    data-hp="081234567890"
                                    data-alamat="Jl. Merdeka No. 10">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Rahma</td>
                            <td>089876543210</td>
                            <td>Jl. Sudirman No. 25</td>
                            <td><span class="badge bg-success">Member</span></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning text-white btn-edit-member"
                                    data-bs-toggle="modal" data-bs-target="#modalEditPelanggan"
                                    data-id="2"
                                    data-nama="Siti Rahma"
                                    data-hp="089876543210"
                                    data-alamat="Jl. Sudirman No. 25">
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

<!-- MODAL TAMBAH MEMBER -->
<div class="modal fade" id="modalPelanggan" tabindex="-1" aria-labelledby="modalPelangganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalPelangganLabel">Tambah Member Baru</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="proses_tambah_member.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_member" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_member" name="nama_pelanggan" placeholder="Masukkan nama member" required>
                    </div>
                    <div class="mb-3">
                        <label for="hp_member" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="hp_member" name="no_hp" placeholder="Contoh: 081234567890" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat_member" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat_member" name="alamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary fw-bold">Simpan Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL EDIT MEMBER -->
<div class="modal fade" id="modalEditPelanggan" tabindex="-1" aria-labelledby="modalEditPelangganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalEditPelangganLabel">Edit Data Member</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="proses_edit_member.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="edit_id_pelanggan" name="id_pelanggan">

                    <div class="mb-3">
                        <label for="edit_nama_member" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="edit_nama_member" name="nama_pelanggan" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_hp_member" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="edit_hp_member" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_alamat_member" class="form-label">Alamat</label>
                        <textarea class="form-control" id="edit_alamat_member" name="alamat" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning text-white fw-bold">Update Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tombolEditMember = document.querySelectorAll('.btn-edit-member');
        tombolEditMember.forEach(function (tombol) {
            tombol.addEventListener('click', function () {
                document.getElementById('edit_id_pelanggan').value = this.getAttribute('data-id');
                document.getElementById('edit_nama_member').value = this.getAttribute('data-nama');
                document.getElementById('edit_hp_member').value = this.getAttribute('data-hp');
                document.getElementById('edit_alamat_member').value = this.getAttribute('data-alamat');
            });
        });
    });
</script>

<?php include 'components/footer.php'; ?>