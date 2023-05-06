<main class="container">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <article>
        <form action="/list/<?= $action ?>" method="POST">
            <header>
                <h1></h1>
            </header>

            <?= csrf_field() ?>
            <div class="grid">
                <label for="nama">
                    Nama
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $student['nama'] ?? '' ?>" required>
                </label>

            </div>

            <label for="no_telp">
                Nomor Telepon
                <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?= $student['no_telp'] ?? '' ?>" required>
            </label>

            <label for="nim">
                NIM
                <input type="text" id="nim" name="nim" placeholder="NIM" value="<?= $student['nim'] ?? '' ?>" required>
            </label>

            <label for="tempat_lahir">
                Tempat Lahir
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $student['tempat_lahir'] ?? '' ?>" required>
            </label>

            <label for="tanggal_lahir">
                Tanggal Lahir
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $student['tanggal_lahir'] ?? '' ?>" required>
            </label>


            <label for="gender">
                Jenis Kelamin
                <select id="gender" name="gender" required>
                    <option selected disabled>Jenis Kelamin</option>
                    <option value="male" <?= isset($student['gender']) && $student['gender'] == "male" ? "selected" : "" ?>>Laki - Laki</option>
                    <option value="female" <?= isset($student['gender']) && $student['gender'] == "female" ? "selected" : "" ?>>Perempuan</option>
                </select>
            </label>

            <fieldset>
                <legend>Jenjang Pendidikan</legend>
                <label for="jakarta">
                    <input type="radio" id="jakarta" name="jenjang" value="Jakarta" required <?= isset($student['jenjang']) && $student['jenjang'] == "Jakarta" ? "checked" : "" ?>>
                    Jakarta
                </label>
                <label for="depok">
                    <input type="radio" id="depok" name="jenjang" value="Depok" required <?= isset($student['jenjang']) && $student['jenjang'] == "Depok" ? "checked" : "" ?>>
                    Demak
                </label>
            </fieldset>

            <label for="campus">
                Campus
                <select id="campus" name="campus" required>

                    <?php foreach ($campus as $c) : ?>
                        <option value="<?= $c['id_campus'] ?>"><?= $c['campus'] ?></option>
                    <?php endforeach ?>
                </select>
            </label>

            <label for="alamat">
                Alamat
                <textarea type="text" id="alamat" name="alamat" placeholder="Alamat" rows="4" style="resize:none" required><?= $student['alamat'] ?? '' ?></textarea>
            </label>

            <button type="submit">Submit</button>
        </form>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</main>