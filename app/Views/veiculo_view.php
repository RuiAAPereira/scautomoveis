<?= $this->extend('layouts/admin') ?>

<?php

use PHPUnit\Framework\Constraint\Count;

echo $this->section('title'); ?>
<title>Admin</title>
<?php echo $this->endSection();
d(1); ?>

<?= $this->section('content') ?>

<main class="main">
    <ol class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="/admin">Admin</a>
        </li>
        <li class="breadcrumb-item active">Veiculos</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <!-- <a class="btn" href="#">
                    <i class="icon-speech"></i>
                </a> -->
                <a class="btn" href="/admin">
                    <i class="icon-graph"></i> Admin</a>
                <a class="btn" href="#">
                    <i class="icon-settings"></i> Settings</a>
            </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <?php if (session()->get('success')) : ?>
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Ok! </strong>
                            <?= session()->get('success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Veículos
                            <div class="float-right">
                                <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Novo</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Nome</th>
                                        <th>Ano</th>
                                        <th>Côr</th>
                                        <th>Preço</th>
                                        <th>Kms</th>
                                        <th>Vendido?</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody id="veiculos-table">
                                    <?php if ($veiculo) : ?>
                                        <?php foreach ($veiculo as $row) : ?>
                                            <tr>
                                                <td><?= $row['marca']; ?></td>
                                                <td><?= $row['nome']; ?></td>
                                                <td><?= $row['ano']; ?></td>
                                                <td><?= $row['cor']; ?></td>
                                                <td><?= $row['preco']; ?></td>
                                                <td><?= $row['kms']; ?></td>
                                                <td class="text-center">
                                                    <form id="formVendido<?= $row['veiculo_id'] ?>" action="/veiculo/vendido" method="post">
                                                        <input type="hidden" name="veiculo_id" value="<?= $row['veiculo_id'] ?>">
                                                        <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                                                    </form>
                                                    <label class="switch switch-label switch-pill switch-danger switch-sm" data-toggle="tooltip" data-placement="top" title="Marcar como Vendido">
                                                        <input id="cbxVendido" type="checkbox" class="switch-input" <?= ($row['vendido'] == 1 ? 'checked="checked"' : '') ?> onchange="document.getElementById('formVendido<?= $row['veiculo_id'] ?>').submit()">
                                                        <span class="switch-slider" data-checked="Sim" data-unchecked="Não"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('veiculo-detalhes/' . $row['veiculo_id']); ?>" class="btn btn-success btn-sm btn-detalhes" data-toggle="tooltip" data-placement="top" title="Detalhes"><i class="fa fa-search-plus"></i></a>
                                                    <a href="#" class="btn btn-info btn-sm btn-edit" data-toggle="tooltip" data-placement="top" title="Editar" data-id="<?= $row['veiculo_id']; ?>" data-marca="<?= $row['marca_id']; ?>" data-nome="<?= $row['nome']; ?>" data-ano="<?= $row['ano']; ?>" data-preco="<?= $row['preco']; ?>" data-kms="<?= $row['kms']; ?>" data-cor="<?= $row['cor']; ?>" data-portas="<?= $row['portas']; ?>" data-lotacao="<?= $row['lotacao']; ?>" data-origem="<?= $row['origem_id']; ?>" data-transmissao="<?= $row['transmissao']; ?>" data-cilindrada="<?= $row['cilindrada']; ?>" data-potencia="<?= $row['potencia']; ?>" data-airbags="<?= $row['airbags']; ?>" data-chave="<?= $row['chave']; ?>" data-segmento="<?= $row['segmento_id']; ?>" data-portagem="<?= $row['portagem_id']; ?>" data-revisoes="<?= $row['revisoes']; ?>" data-estado="<?= $row['estado']; ?>" data-garantia="<?= $row['garantia']; ?>" data-observacoes="<?= $row['observacoes']; ?>"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" data-placement="top" title="Apagar" data-id="<?= $row['veiculo_id']; ?>"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <?= $pager->links() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>

    </div>
</main>

<!-- Modal Adiciona Veiculo -->
<?php echo $this->include('modals/veiculo-add'); ?>

<!-- Modal Edita Veiculo-->
<?php echo $this->include('modals/veiculo-edit'); ?>

<!-- Modal Apaga Veiculo -->
<form action="/veiculo/delete" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apagar Veiculo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>Tem a certeza que quer apagar este veiculo?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="veiculo_id" class="veiculoID">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <button type="submit" class="btn btn-primary">Sim</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim Modal Apaga Veiculo -->

<?= $this->endSection() ?>

<?= $this->section('extra-css') ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const marca = $(this).data('marca');
            const nome = $(this).data('nome');
            const ano = $(this).data('ano');
            const preco = $(this).data('preco');
            const kms = $(this).data('kms');
            const cor = $(this).data('cor');
            const portas = $(this).data('portas');
            const lotacao = $(this).data('lotacao');
            const origem = $(this).data('origem');
            const transmissao = $(this).data('transmissao');
            const cilindrada = $(this).data('cilindrada');
            const potencia = $(this).data('potencia');
            const airbags = $(this).data('airbags');
            const chave = $(this).data('chave');
            const segmento = $(this).data('segmento');
            const portagem = $(this).data('portagem');
            const revisoes = $(this).data('revisoes');
            const estado = $(this).data('estado');
            const garantia = $(this).data('garantia');
            const observacoes = $(this).data('observacoes');
            // Set data to Form Edit
            $('.veiculo_id').val(id);
            $('.veiculo_marca').val(marca);
            $('.veiculo_nome').val(nome);
            $('.veiculo_ano').val(ano);
            $('.veiculo_preco').val(preco);
            $('.veiculo_kms').val(kms);
            $('.veiculo_cor').val(cor);
            $('.veiculo_portas').val(portas);
            $('.veiculo_lotacao').val(lotacao);
            $('.veiculo_origem').val(origem);
            $('.veiculo_transmissao').val(transmissao);
            $('.veiculo_cilindrada').val(cilindrada);
            $('.veiculo_potencia').val(potencia);
            $('.veiculo_airbags').val(airbags);
            $('.veiculo_chave').val(chave);
            $('.veiculo_segmento').val(segmento);
            $('.veiculo_portagem').val(portagem);
            $('.veiculo_revisoes').val(revisoes);
            $('.veiculo_estado').val(estado);
            $('.veiculo_garantia').val(garantia);
            $('.veiculo_observacoes').val(observacoes).trigger('change');
            // Call Modal Edit
            $('#editModal').modal('show');
        });

    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 4000);
</script>
<script>
    $(document).ready(function() {
        // get Delete Product
        $('.btn-delete').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.veiculoID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });

    });
</script>
<script>
    $("#veiculo_ano").datepicker({
        format: "mm-yyyy",
        startView: "months",
        minViewMode: "months",
        autoclose: true
    });
    $("#ano").datepicker({
        format: "mm-yyyy",
        startView: "months",
        minViewMode: "months",
        autoclose: true
    });
</script>
<?= $this->endSection() ?>