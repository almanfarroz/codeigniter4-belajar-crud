<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-YTt4b4s3lXxjTrWHt4dL1MnJc+Fn/gRUByo12nKvtoWh0DhPezoXeLZOjsSWZQ2cBPNPylw+YclQSy7A5dvWUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- CodeIgniter 4 Pagination CSS -->
<style>
    /* Custom pagination styling */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 1rem;
    }

    .pagination li {
        margin-right: 0.5rem;
    }

    .pagination li:last-child {
        margin-right: 0;
    }

    .pagination li a {
        text-decoration: none;
    }

    .pagination li.active a {
        color: #fff;
    }

    .pagination li.disabled a {
        color: #6c757d;
    }

    .pagination li a,
    .pagination li span {
        font-size: 1.2rem;
        padding: 0.5rem;
        border-radius: 0.25rem;
    }

    .pagination li a:hover,
    .pagination li a:focus,
    .pagination li.active a {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }
</style>

<main class="container">
    <h1 class="mb-5">List Mahasiswa</h1>
    <?php if (sizeof($students) > 0) : ?>
        <div class="table-responsive">
            <table class="table table-striped">
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
                            <td>
                                <a href="<?= base_url(['list', $student['id']]) ?>" class="btn btn-primary me-2">
                                    View
                                </a>
                                <a href="<?= base_url(['list', $student['id'], 'edit']) ?>" class="btn btn-warning me-2">
                                    Edit
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#modal-delete-student-<?= $student['id'] ?>" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="modal-delete-student-<?= $student['id'] ?>" tabindex="-1" aria-labelledby="modal-delete-student-<?= $student['id'] ?>-label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-delete-student-<?= $student['id'] ?>-label">Hapus data mahasiswa ini?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus data mahasiswa ini? Data yang telah dihapus tidak bisa dikembalikan.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <a href="<?= base_url(['list', $student['id'], 'delete']) ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $no++;
                    endforeach;
                    ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <?= $pager->links() ?>
                </ul>
            </nav>
        </div>

    <?php else : ?>
        <h3 style="text-align: center;">Belum memiliki data mahasiswa</h3>
    <?php endif ?>


    <a href="<?= base_url(['list', 'create']) ?>" class="btn btn-success mt-4">Tambah Mahasiswa</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</main>
<?= $this->endSection(); ?>