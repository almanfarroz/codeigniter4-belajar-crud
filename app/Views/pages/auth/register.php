<?= $this->extend('./templates/auth'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <h1>Register</h1>

            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>

            <form action="<?= route_to('store') ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="passconf">Confirm Password:</label>
                    <input type="password" class="form-control" id="passconf" name="passconf">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>