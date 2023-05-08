<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>
<main class="container">

    <article>
        <h1>Detail Mahasiswa</h1>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $student['nama'] ?? '' ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="number" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?= $student['no_telp'] ?? '' ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="NIM" value="<?= $student['nim'] ?? '' ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $student['tanggal_lahir'] ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <?php
                $gender = $student['gender'] == "male" ? 'Laki - Laki' : 'Perempuan';
                ?>
                <input type="text" id="gender" name="gender" placeholder="Gender" value="<?= $gender ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="jenjang" class="form-label">Jenjang Pendidikan</label>
                <input type="text" id="jenjang" name="jenjang" placeholder="Jenjang Pendidikan" value="<?= $student['jenjang'] ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label for="campus" class="form-label">Campus</label>
                <input type="text" id="campus" name="campus" placeholder="Campus" value="<?= $student['campus'] ?>" class="form-control" readonly>
            </div>
            <div class="col-md-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea type="text" id="alamat" name="alamat" placeholder="Alamat" rows="4" class="form-control" style="resize:none" readonly><?= $student['alamat'] ?? '' ?></textarea>
            </div>

            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= base_url(uri_string() . "/edit") ?>" role="button" class="btn btn-primary me-md-2">Edit</a>
                    <a href="<?= base_url(uri_string() . "/delete") ?>" role="button" class="btn btn-danger">Delete</a>
                </div>
            </div>

        </div>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</main>
<?= $this->endSection(); ?>