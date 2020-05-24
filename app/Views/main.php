<?php
    $this->extend('layouts/layout_main');
?>

<?php $this->section('contenido'); ?>

    <a href="<?php echo site_url('users') ?>" class="btn btn-primary btn-200">Users</a> 

<?php $this->endSection('contenido'); ?>
