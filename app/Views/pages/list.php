<main class="container"></main>
<h1>List Mahasiswa</h1>
<?php if (sizeof($students) > 0) : ?>
    <figure>
        <table role="grid">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenjang Pendidikan</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = isset($_GET['page']) ? $_GET['page'] * $per_page : 1;
                foreach ($students as $student) :
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $student['nama'] ?></td>
                        <td><?= $student['jenjang'] ?></td>
                        <td><?= $student['nim'] ?></td>
                        <td><a href="<?= base_url(['list', $student['id']]) ?>" style="color: white;">View</a> | <a href="<?= base_url(['list', $student['id'], 'edit']) ?>">Edit</a></ins> | <a data-target="modal-delete-student-<?= $student['id'] ?>" onclick="toggleModal(event)" style="color: red;">Delete</a></td>
                    </tr>

                    <!-- Modal -->
                    <dialog id="modal-delete-student-<?= $student['id'] ?>">
                        <article>
                            <a aria-label="Close" class="close" data-target="modal-delete-student-<?= $student['id'] ?>" onclick="toggleModal(event)">
                            </a>
                            <h3>Hapus data mahasiswa ini?</h3>
                            <p>
                                Apakah anda yakin ingin menghapus data mahasiswa ini? Data yang telah dihapus tidak bisa
                            </p>
                            <footer>
                                <a href="" role="button" class="secondary" data-target="modal-delete-student-<?= $student['id'] ?>" onclick="toggleModal(event)">
                                    Cancel
                                </a>
                                <a href="<?= base_url(['list', $student['id'], 'delete']) ?>" role="button">
                                    Delete
                                </a>
                            </footer>
                        </article>
                    </dialog>
                <?php
                    $no++;
                endforeach;
                ?>
            </tbody>
        </table>
        <?php
        if (sizeof($students) > $per_page) {
            echo $pager->links();
        }
        ?>
    </figure>

<?php else : ?>
    <h3 style="text-align: center;">Belum memiliki data mahasiswa</h3>
<?php endif ?>

<a href="<?= base_url(['list', 'create']) ?>" role="button">Tambah Mahasiswa</a>
</main>