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
        <li class="breadcrumb-item">
            <a href="/veiculos">Listagem Veículos</a>
        </li>
        <li class="breadcrumb-item active">Detalhes</li>
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
                <?php if (session()->get('error')) : ?>
                    <div class="col-12">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Erro! </strong>
                            <?= session()->get('error') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form id="formVendido" action="/veiculo/vendido" method="post">
                        <input type="hidden" name="veiculo_id" value="<?= $veiculo['veiculo_id'] ?>">
                        <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                    </form>
                    <form action="/veiculo/update" method="post" class="needs-validation" novalidate>
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> <?= $veiculo['nome'] ?>
                                <div class="float-right">
                                    <label class="switch switch-label switch-pill switch-danger switch-sm" data-toggle="tooltip" data-placement="top" title="Marcar como Vendido">
                                        <input id="cbxVendido" type="checkbox" class="switch-input" <?= ($veiculo['vendido'] == 1 ? 'checked="checked"' : '') ?> onchange="document.getElementById('formVendido').submit()">
                                        <span class="switch-slider" data-checked="Sim" data-unchecked="Não"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_marca" class="form-col-form-label">Marca</label>
                                        <select id="veiculo_marca" name="veiculo_marca" required="required" class="custom-select" aria-describedby="marcaHelpBlock" se>
                                            <?php foreach ($marca as $row) : ?>
                                                <option <?php if ($row->marca_id == $veiculo['veiculo_marca_id']) {
                                                            echo 'selected="selected"';
                                                        } ?> value="<?php echo $row->marca_id ?>"><?php echo $row->marca ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span id="marcaHelpBlock" class="form-text text-muted">Seleccionar Marca</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_cor" class="form-col-form-label">Côr</label>
                                        <input id="veiculo_cor" name="veiculo_cor" type="text" aria-describedby="corHelpBlock" class="form-control" value="<?= $veiculo['cor'] ?>">
                                        <span id="corHelpBlock" class="form-text text-muted">Côr do veiculo</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-8">
                                        <label for="veiculo_nome" class="col-form-label">Nome</label>
                                        <input id="veiculo_nome" name="veiculo_nome" type="text" aria-describedby="nomeHelpBlock" required="required" class="form-control" value="<?= $veiculo['nome'] ?>">
                                        <span id="nomeHelpBlock" class="form-text text-muted">inserir nome / descrição (sem a marca)</span>
                                        <div class="invalid-feedback">
                                            Por favor inserir nome/modelo.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="veiculo_ano" class="col-form-label">Ano</label>
                                        <input id="veiculo_ano" name="veiculo_ano" type="text" aria-describedby="anoHelpBlock" class="form-control" value="<?= $veiculo['ano'] ?>" />
                                        <span id="anoHelpBlock" class="form-text text-muted">inserir ano</span>
                                        <div class="invalid-feedback">
                                            Selecionar Ano.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_preco" class="form-col-form-label">Preço</label>
                                        <input id="veiculo_preco" name="veiculo_preco" type="text" class="form-control" aria-describedby="precoHelpBlock" value="<?= $veiculo['preco'] ?>">
                                        <span id="precoHelpBlock" class="form-text text-muted">Preço do veiculo</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_kms" class="form-col-form-label">Kms</label>
                                        <input id="veiculo_kms" name="veiculo_kms" type="text" aria-describedby="kmsHelpBlock" class="form-control" value="<?= $veiculo['kms'] ?>">
                                        <span id="kmsHelpBlock" class="form-text text-muted">Kms do veiculo</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_portas" class="form-col-form-label">Portas</label>
                                        <input id="veiculo_portas" name="veiculo_portas" type="text" class="form-control" aria-describedby="portasHelpBlock" value="<?= $veiculo['portas'] ?>">
                                        <span id="portasHelpBlock" class="form-text text-muted">Quantidade de portas do veiculo (ex.: 5 portas)</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_lotacao" class="form-col-form-label">Lotação</label>
                                        <input id="veiculo_lotacao" name="veiculo_lotacao" type="text" class="form-control" aria-describedby="lotacaoHelpBlock" value="<?= $veiculo['lotacao'] ?>">
                                        <span id="lotacaoHelpBlock" class="form-text text-muted">Lotação do veiculo (ex.: 4 lugares)</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_origem" class="form-col-form-label">Origem</label>
                                        <select id="veiculo_origem" name="veiculo_origem" class="custom-select" required="required" aria-describedby="origemHelpBlock">
                                            <?php foreach ($origem as $row) : ?>
                                                <option <?php if ($row->origem_id == $veiculo['veiculo_origem_id']) {
                                                            echo 'selected="selected"';
                                                        } ?> value="<?php echo $row->origem_id ?>"><?php echo $row->origem ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        </select>
                                        <span id="origemHelpBlock" class="form-text text-muted">Seleccionar origem</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_transmissao" class="form-col-form-label">Transmissão</label>
                                        <input id="veiculo_transmissao" name="veiculo_transmissao" type="text" class="form-control" aria-describedby="transmicaoHelpBlock" value="<?= $veiculo['transmissao'] ?>">
                                        <span id="transmicaoHelpBlock" class="form-text text-muted">Tipo de transmissão (ex.: Manual de 6 velocidades)</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_cilindrada" class="form-col-form-label">Cilindrada</label>
                                        <input id="veiculo_cilindrada" name="veiculo_cilindrada" type="text" class="form-control" aria-describedby="cilindradaHelpBlock" value="<?= $veiculo['cilindrada'] ?>">
                                        <span id="cilindradaHelpBlock" class="form-text text-muted">Cilindrada (ex.:1.461 cc)</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_potencia" class="form-col-form-label">Potência</label>
                                        <input id="veiculo_potencia" name="veiculo_potencia" type="text" class="form-control" aria-describedby="potenciaHelpBlock" value="<?= $veiculo['potencia'] ?>">
                                        <span id="potenciaHelpBlock" class="form-text text-muted">Potência (ex.: 110 Cv)</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_airbags" class="form-col-form-label">Airbags</label>
                                        <input id="veiculo_airbags" name="veiculo_airbags" type="text" class="form-control" aria-describedby="airbagsHelpBlock" value="<?= $veiculo['airbags'] ?>">
                                        <span id="airbagsHelpBlock" class="form-text text-muted">Airbags (ex.: 10 Airbags)</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_chave" class="form-col-form-label">Chaves</label>
                                        <input id="veiculo_chave" name="veiculo_chave" type="text" class="form-control" aria-describedby="chaveHelpBlock" value="<?= $veiculo['chave'] ?>">
                                        <span id="chaveHelpBlock" class="form-text text-muted">Chaves (ex.: duas chaves)</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_segmento" class="form-col-form-label">Segmento</label>
                                        <select id="veiculo_segmento" name="veiculo_segmento" class="custom-select" aria-describedby="segmentoHelpBlock">
                                            <?php foreach ($segmento as $row) : ?>
                                                <option <?php if ($row->segmento_id == $veiculo['veiculo_segmento_id']) {
                                                            echo 'selected="selected"';
                                                        } ?> value="<?php echo $row->segmento_id ?>"><?php echo $row->segmento ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <span id="segmentoHelpBlock" class="form-text text-muted">Seleccionar Segmento</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_portagem" class="form-col-form-label">Portagem</label>
                                        <select id="veiculo_portagem" name="veiculo_portagem" class="custom-select veiculo_portagem" aria-describedby="portagemHelpBlock">
                                            <?php foreach ($portagem as $row) : ?>
                                                <option <?php if ($row->portagem_id == $veiculo['veiculo_portagem_id']) {
                                                            echo 'selected="selected"';
                                                        } ?> value="<?php echo $row->portagem_id ?>"><?php echo $row->portagem ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        </select>
                                        <span id="portagemHelpBlock" class="form-text text-muted">Seleccionar Portagem</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_revisoes" class="form-col-form-label">Revisões</label>
                                        <input id="veiculo_revisoes" name="veiculo_revisoes" type="text" class="form-control" aria-describedby="revisoesHelpBlock" value="<?= $veiculo['revisoes'] ?>">
                                        <span id="revisoesHelpBlock" class="form-text text-muted">Revisões (ex.: Livro de revisões completo)</span>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_estado" class="form-col-form-label">Estado</label>
                                        <input id="veiculo_estado" name="veiculo_estado" type="text" class="form-control" aria-describedby="estadoHelpBlock" value="<?= $veiculo['estado'] ?>">
                                        <span id="estadoHelpBlock" class="form-text text-muted">Estado (ex.: Como novo)</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="veiculo_garantia" class="form-col-form-label">Garantia</label>
                                        <input id="veiculo_garantia" name="veiculo_garantia" type="text" class="form-control" aria-describedby="garantiaHelpBlock" value="<?= $veiculo['garantia'] ?>">
                                        <span id="garantiaHelpBlock" class="form-text text-muted">Garantia dada (ex.: 1 ano de garantia)</span>
                                    </div>
                                    <div class="form-group col-sm-6">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="textarea" class="form-col-form-label">Observações</label>
                                        <textarea id="veiculo_observacoes" name="veiculo_observacoes" cols="40" rows="5" class="form-control" value="<?= $veiculo['observacoes'] ?>"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="float-right">
                                    <input type="hidden" name="veiculo_id" value="<?= $veiculo['veiculo_id'] ?>">
                                    <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                                    <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Gravar Atualizações"><i class="fa fa-edit pr-2"></i> Atualizar</button>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" data-id="<?= $veiculo['veiculo_id']; ?>" data-toggle="tooltip" data-placement="top" title="Apagar Veículo"><i class="fa fa-trash pr-2"></i>Apagar</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="/Veiculo/upload" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-align-justify"></i> Upload
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Imagem</label>
                                            <input type="file" name="file" class="form-control" required>
                                            <div class="invalid-feedback">
                                                Por favor selecione um ficheiro.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="float-right">
                                            <input type="hidden" name="veiculo_id" value="<?= $veiculo['veiculo_id'] ?>">
                                            <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                                            <button type="submit" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Enviar foto"><i class="fa fa-upload"></i> Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Imagens
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <?php if ($imagens) : ?>
                                            <?php foreach ($imagens as $row) : ?>
                                                <div class="col-lg-3 p-2">
                                                    <a href="<?php echo base_url('imagens/' . $row->name); ?>" data-lightbox="veiculo">
                                                        <img src="<?php echo base_url('imagens/' . $row->name); ?>" class="rounded img-fluid" alt="" width="250">
                                                    </a>
                                                    <div class="float-right pt-2">
                                                        <a href="#" class="btn btn-danger btn-sm btn-delete-img" data-toggle="tooltip" data-placement="top" title="Apagar imagem" data-id="<?= $row->imagem_id ?>" data-file="<?= $row->name ?>"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Equipamentos
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 pb-4">
                                            <form method="post" action="/Veiculo/AddEquipamento" enctype="multipart/form-data" class="needs-validation" novalidate>
                                                <div class="input-group">
                                                    <span id="equipamentoHelpBlock" class="form-text text-muted pr-4">Equipamento (ex.: Jantes de liga leve)</span>
                                                    <input type="hidden" name="veiculo_id" value="<?= $veiculo['veiculo_id'] ?>">
                                                    <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                                                    <input id="veiculo_equipamento" name="veiculo_equipamento" type="text" class="form-control" aria-describedby="equipamentoHelpBlock" required>
                                                    <span class="input-group-append">
                                                        <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Adicionar Equipamento"><i class="fa fa-plus-square"></i> Adicionar</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php
                                        $total = count($equipamentos);
                                        if ($total >= 4) {
                                            $chunksize = $total / 4;
                                        } else {
                                            $chunksize = 1;
                                        }

                                        $fourarrays = array_chunk($equipamentos, $chunksize);
                                        ?>
                                        <?php if ($fourarrays) : ?>
                                            <?php foreach ($fourarrays as $rows) : ?>
                                                <?php foreach ($rows as $row) : ?>
                                                    <div class="col-md-4">
                                                        <ul class="list-group">
                                                            <?php foreach ($rows as $row) : ?>
                                                                <li class="list-group-item">
                                                                    <form action="/veiculo/apagaequipamento" method="post">
                                                                        <input type="hidden" name="equipamento_id" value="<?= $row->equipamento_id ?>">
                                                                        <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                                                                        <h6>
                                                                            <?= $row->equipamento ?>
                                                                            <span class="float-right">
                                                                                <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Apagar <?= $row->equipamento ?>"><i class="fa fa-trash"></i></button>
                                                                            </span>
                                                                        </h6>
                                                                    </form>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="float-right mb-2">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>

    </div>
</main>

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
<!-- Modal Apaga imagem -->
<form action="/veiculo/deleteimage" method="post">
    <div class="modal fade" id="deleteImageModal" tabindex="-1" role="dialog" aria-labelledby="deleteImageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteImageModalLabel">Apagar Imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4>Tem a certeza que quer apagar esta imagem?</h4>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="imagem_id" class="imagemID">
                    <input type="hidden" name="file" class="fileName">
                    <input type="hidden" name="veiculo_url" value="<?= base_url(uri_string()); ?>">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <button type="submit" class="btn btn-primary">Sim</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim Modal Apaga imagem -->

<?= $this->endSection() ?>
<?= $this->section('extra-css') ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" />

<style>
    img {
        transition: transform 0.25s ease;
    }

    img:hover {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

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
    $(document).ready(function() {
        // get Delete Product
        $('.btn-delete-img').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            const file = $(this).data('file');
            // Set data to Form Edit
            $('.imagemID').val(id);
            $('.fileName').val(file);
            // Call Modal Edit
            $('#deleteImageModal').modal('show');
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
</script>
<?= $this->endSection() ?>