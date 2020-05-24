<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoGeral - Users</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bg-dark text-light p-3">
                <h3>PROJETO GERAL - Users</h3>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <?php $this->renderSection('contenido') ?>             
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/js/app.js')?>"></script>

</body>

</html>