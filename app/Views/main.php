<?php
    $this->extend('layouts/layout_main');
?>

<?php $this->section('contenido'); ?>

    <!--Con site_url agrega index.php-->
    <a href="<?php echo base_url('users') ?>" class="btn btn-primary btn-200">Users</a> 

<?php $this->endSection('contenido'); ?>
