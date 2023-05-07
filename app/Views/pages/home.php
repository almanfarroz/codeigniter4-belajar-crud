<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <hgroup>
        <h1>Hi! This is Alman Farroz.</h1>
        <nav>
            <ul>
                <li>
                    <a href="<?= base_url(['list']) ?>" role="button">List Mahasiswa</a>
                </li>
                <li>
                    <a href="<?= base_url(['list', 'create']) ?>" role="button" class="contrast">Tambah Mahasiswa</a>
                </li>
            </ul>
        </nav>
    </hgroup>

</main>
<?= $this->endSection(); ?>