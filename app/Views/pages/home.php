<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1>Hi! This is Alman Farroz.</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="<?= base_url(['list']) ?>" class="nav-link" role="button">List Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url(['list', 'create']) ?>" class="nav-link btn btn-primary" role="button" style="color:white">Tambah Mahasiswa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>