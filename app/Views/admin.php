<?= $this->extend('layouts/admin') ?>

<?php echo $this->section('title'); ?>
<title>Admin</title>
<?php echo $this->endSection(); ?>

<?= $this->section('content') ?>

<main class="main">
    <ol class="breadcrumb">
        <!-- <li class="breadcrumb-item">
            <a href="#">Admin</a>
        </li> -->
        <li class="breadcrumb-item active">Admin</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <!-- <a class="btn" href="#">
                    <i class="icon-speech"></i>
                </a> -->
                <a class="btn" href="/admin">
                    <i class="icon-graph"></i>  Admin</a>
                <a class="btn" href="#">
                    <i class="icon-settings"></i>  Settings</a>
            </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <h1>Administração</h1>
                </div>
                <!--/.col-->
                
            </div>
            <!--/.row-->
        </div>

    </div>




</main>

<?= $this->endSection() ?>