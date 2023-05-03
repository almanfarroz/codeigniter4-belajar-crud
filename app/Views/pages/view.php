<main class="container">

    <article>
        <h1>Detail Mahasiswa</h1>

        <div class="grid">
            <label for="nama">
                Nama Lengkap
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $student['nama'] ?? '' ?>" style="cursor: default;" readonly>
            </label>

            <label for="no_telp">
                Nomor Telepon
                <input type="number" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?= $student['no_telp'] ?? '' ?>" style="cursor: default;" readonly>
            </label>

            <label for="nim">
                NIM
                <input type="text" id="nim" name="nim" placeholder="NIM" value="<?= $student['nim'] ?? '' ?>" style="cursor: default;" readonly>
            </label>

            <label for="tanggal_lahir">
                Tanggal Lahir
                <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $student['tanggal_lahir'] ?>" style="cursor: default;" readonly>
            </label>

            <label for="gender">
                Jenis Kelamin
                <?php
                $gender = $student['gender'] == "male" ? 'Laki - Laki' : 'Perempuan';
                ?>
                <input type="text" id="gender" name="gender" placeholder="Gender" value="<?= $gender ?>" style="cursor: default;" readonly>
                </select>
            </label>

            <label for="jenjang">
                Campus Location
                <input type="text" id="jenjang" name="jenjang" placeholder="Jenjang Pendidikan" value="<?= $student['jenjang'] ?>" style="cursor: default;" readonly>
            </label>

            <label for="alamat">
                Alamat
                <textarea type="text" id="alamat" name="alamat" placeholder="Alamat" rows="4" style="resize:none;cursor: default;" readonly><?= $student['alamat'] ?? '' ?></textarea>
            </label>

            <div class="grid">
                <a href="<?= base_url(uri_string() . "/edit") ?>" role="button">Edit</a>
                <a href="<?= base_url(uri_string() . "/delete") ?>" role="button" class="contrast">Delete</a>

            </div>
    </article>
</main>