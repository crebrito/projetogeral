<?php
    $this->extend('layouts/layout_users');
?>

<?php $this->section('contenido'); ?>

<div class="row mt-3 mb-3">
    
    <div class="col-4 offset-4 card bg-light">
        
        <form action="<?= site_url('users/login') ?>" method="post">
            
            <div class="form-group mt-3">
                <label for="username">Usuario:</label>
                <input type="text" name="text_username" class="form-control" placeholder="Escriba su nombre de usuario" id="username" required>
            </div>
            
            <div class="from-group mb-3">
                <label for="password">Contraseña:</label>
                <input type="password" name="text_password" class="form-control" placeholder="Escriba su contraseña" id="password" required>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <small><a href="<?= site_url('users/recover') ?>">Olvidé mi contraseña</a></small>
                </div>
                
                <div class="form-group col-6 text-right">
                    <input type="submit" value="Entrar" class="btn btn-primary">
                </div>
            
            </div>

        </form>

    </div>

</div>

<?php $this->endSection('contenido'); ?>