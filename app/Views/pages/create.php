<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <article>
        <form action="/list/<?= $action ?>" method="POST">
            <header class="mb-4">
                <h1 class="h2"><?= $title ?></h1>
            </header>

            <?= csrf_field() ?>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">
                    Nama
                </label>
                <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= $student['nama'] ?? '' ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="no_telp" class="col-sm-2 col-form-label">
                    Nomor Telepon
                </label>
                <div class="col-sm-10">
                    <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon" value="<?= $student['no_telp'] ?? '' ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">
                    NIM
                </label>
                <div class="col-sm-10">
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM" value="<?= $student['nim'] ?? '' ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">
                    Tempat Lahir
                </label>
                <div class="col-sm-10">
                    <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= $student['tempat_lahir'] ?? '' ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label">
                    Tanggal Lahir
                </label>
                <div class="col-sm-10">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?= $student['tanggal_lahir'] ?? '' ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="gender" class="col-sm-2 col-form-label">
                    Jenis Kelamin
                </label>
                <div class="col-sm-10">
                    <select id="gender" name="gender" class="form-select" required>
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="male" <?= isset($student['gender']) && $student['gender'] == "male" ? "selected" : "" ?>>Laki - Laki</option>
                        <option value="female" <?= isset($student['gender']) && $student['gender'] == "female" ? "selected" : "" ?>>Perempuan</option>
                    </select>
                </div>
            </div>

            <fieldset class="mb-3">
                <legend>Jenjang Pendidikan</legend>
                <label for="S1">
                    <input type="radio" id="S1" name="jenjang" value="S1" required <?= isset($student['jenjang']) && $student['jenjang'] == "S1" ? "checked" : "" ?>>
                    S1
                </label>
                <label for="D4">
                    <input type="radio" id="D4" name="jenjang" value="D4" required <?= isset($student['jenjang']) && $student['jenjang'] == "D4" ? "checked" : "" ?>>
                    D4
                </label>
                <label for="D3">
                    <input type="radio" id="D3" name="jenjang" value="D3" required <?= isset($student['jenjang']) && $student['jenjang'] == "D3" ? "checked" : "" ?>>
                    D3
                </label>
            </fieldset>

            <div class="mb-3">
                <label for="campus" class="form-label">Campus</label>
                <select class="form-select" id="campus" name="campus" required>
                    <?php foreach ($campus as $c) : ?>
                        <option value="<?= $c['id_campus'] ?>" <?= isset($student['campus']) && $student['campus'] == $c['id_campus'] ? "selected" : "" ?>><?= $c['campus'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" rows="4" style="resize:none" required><?= $student['alamat'] ?? '' ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</main>

<?= $this->endSection(); ?>