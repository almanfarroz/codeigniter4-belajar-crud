<?= $this->extend('./templates/auth'); ?>

<?= $this->section('content'); ?>

<main class="container">
    <article>
        <h1 style="text-align: center;">Login</h1>
        <p>
            <?php
            if (session()->getFlashData('msg')) {
                echo session()->getFlashData('msg');
            }
            ?>
        </p>
        <form action="login/auth" method="post">


            <div class="form-group">
                <label for="username">Username:</label>
                <input type="username" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p>Don't have account ? <a href="<?= base_url('register') ?>">Register</a></p>
    </article>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"></script>
<?= $this->endSection() ?>