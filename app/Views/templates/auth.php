<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Pico CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>CRUD</title>
</head>

<body>
    <nav class="container-fluid border">
        <ul></ul>
        <ul>
            <li><strong><a href="<?= base_url() ?>" style="color: white;">CRUD</a></strong></li>
        </ul>
        <ul></ul>
    </nav>

    <?= $this->renderSection('content'); ?>
</body>

</html>