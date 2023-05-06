<?= $this->extend('./templates/template'); ?>
<?= $this->section('content'); ?>
<main class="container">
    <hgroup>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WEB ALMAN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url(['list', 'create']) ?>" role="button" class="contrast">Tambah Mahasiswa</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url(['list']) ?>" role="button">List Mahasiswa</a>
                        </li>

                        <?php if (session()->get('isLoggedIn')) : ?>
                            <li><a href="<?= base_url(['logout']) ?>" role="button">Logout</a></li>
                        <?php else : ?>
                            <li><a href="<?= base_url(['login']) ?>" role="button">Login</a></li>
                        <?php endif ?>
                    </ul>

                </div>
            </div>
        </nav>
    </hgroup>
</main>
<?= $this->endSection(); ?>