<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<!-- Automóveis-->
<section class="page-section" id="novidades">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="owl-carousel">
                    <?php if ($veiculos) : ?>
                        <?php foreach ($veiculos as $row) : ?>

                            <div class="card bg-dark item">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="dark">
                                    <?php if ($imagens) : ?>
                                        <?php $first = true; ?>
                                        <?php foreach ($imagens as $img) : ?>
                                            <?php if ($img['veiculo_id'] == $row['veiculo_id']) : ?>
                                                <?php if ($first) : ?>
                                                    <a href="#">
                                                        <figure><img src="<?php echo base_url('imagens/' . $img['name']) ?>" class="rounded" height="400"></figure>
                                                    </a>
                                                    <?php $first = false; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <?php if ($row['vendido'] == 1) : ?>
                                    <div class="badge-overlay">
                                        <span class="top-left badge red">VENDIDO</span>
                                    </div>
                                <?php else : ?>
                                    <div class="badge-overlay">
                                        <span class="top-right badge green"><?= number_format((int)$row['preco']); ?> €</span>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title text-white"><?= $row['marca'] ?></h5>
                                    <p class="card-text">
                                        <?= $row['nome'] ?>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-3">
                                            <i class="fa fa-calendar"></i>
                                            <?php
                                            setlocale(LC_ALL, 'ptg');
                                            // echo ucwords(strftime('%b', strtotime('01-' . $row['ano'])) . '/' . strftime('%Y', strtotime('01-' . $row['ano'])));
                                            ?>
                                        </div>
                                        <div class="col-sm-3">
                                            <i class="fas fa-tachometer-alt"></i>
                                            <?php
                                            echo number_format((int)$row['kms']);
                                            ?>
                                            kms
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                    </div>
                                    <!-- <a href="#!" class="btn btn-danger">Button</a> -->
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section" id="automoveis">
    <div class="container">
        <div class="row p-3 mb-2 bg-dark text-white text-center rounded m-5 p-5">
            <form class="form-inline">
                <div class="form-group">
                    <label class="my-1 mr-2" for="veiculo_marca">Marca</label>
                    <select id="veiculo_marca" name="veiculo_marca" required="required" class="custom-select veiculo_marca" aria-describedby="marcaHelpBlock">
                        <?php foreach ($marca as $row) : ?>
                            <option value="<?= $row->marca_id; ?>"><?= $row->marca; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label class="my-1 mr-2" for="inlineFormCustomSelectModelo">Modelo</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectModelo">
                        <option selected>selecione...</option>
                        <option value="1">Modelo1</option>
                        <option value="2">Modelo2</option>
                        <option value="3">Modelo3</option>
                    </select>

                    <label class="my-1 mr-2" for="inlineFormCustomSelectAno">Ano</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectAno">
                        <option selected>selecione...</option>
                        <option value="1">2010</option>
                        <option value="2">2011</option>
                        <option value="3">2012</option>
                    </select>
                </div>
                <!-- <button type="submit" class="btn btn-primary mb-2">Submit</button> -->
            </form>
        </div>
        <div class="container-fluid content-row">
            <div class="row">
                <?php if ($veiculos) : ?>
                    <?php foreach ($veiculos as $row) : ?>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="card bg-dark h-100">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="dark">
                                    <?php if ($imagens) : ?>
                                        <?php $first = true; ?>
                                        <?php foreach ($imagens as $img) : ?>
                                            <?php if ($img['veiculo_id'] == $row['veiculo_id']) : ?>
                                                <?php if ($first) : ?>
                                                    <a href="#">
                                                        <figure><img src="<?php echo base_url('imagens/' . $img['name']) ?>" class="rounded card-img-top img-fluid embed-responsive-item"></figure>
                                                    </a>
                                                    <?php $first = false; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <?php if ($row['vendido'] == 1) : ?>
                                    <div class="badge-overlay">
                                        <span class="top-left badge red">VENDIDO</span>
                                    </div>
                                <?php else : ?>
                                    <div class="badge-overlay">
                                        <span class="top-right badge green"><?= number_format((int)$row['preco']); ?> €</span>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title text-white"><?= $row['marca'] ?></h5>
                                    <p class="card-text">
                                        <?= $row['nome'] ?>
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <i class="fa fa-calendar"></i>
                                            <?php
                                            setlocale(LC_ALL, 'ptg');
                                            // echo ucwords(strftime('%b', strtotime('01-' . $row['ano'])) . '/' . strftime('%Y', strtotime('01-' . $row['ano'])));
                                            ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <i class="fas fa-tachometer-alt"></i>
                                            <?php
                                            echo number_format((int)$row['kms']);
                                            ?>
                                            kms
                                        </div>
                                    </div>
                                    <!-- <a href="#!" class="btn btn-danger">Button</a> -->
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- About-->
<section class="page-section" id="empresa">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="masthead-subheading rounded"><img src="assets/img/logo-stand.jpg" alt="" width="250" /></div>
                <br>
                <h2 class="section-heading text-uppercase text-white">Sobre nós</h2>
                <h3 class="section-subheading text-muted text-white">Dispomos de uma gama completa de viaturas Nacionais disponíveis por catálogo e ainda viaturas importadas sob encomenda! Todas as viaturas são alvo de manutenção e análise por parte da nossa oficina antes da entrega.
                    Para mais informações, condições de venda, garantia e crédito. Consulte-nos!
                    Possibilidade de crédito até 120 meses..</h3>
                <h2 class="text-white">Contacto: 927 999 428</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1080" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Coimbra%20Iparque&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yt2.org"></a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 400px;
                            width: 1080px;
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 400px;
                            width: 1080px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contacto">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contacte-nos</h2>
            <h3 class="section-subheading text-muted">O seu carro a sua medida.</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Nome *" required="required" data-validation-required-message="Por favor indique o seu nome." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Por favor indique o seu email." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Telefone *" required="required" data-validation-required-message="Por favor indique o seu telefone." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Mensagem *" required="required" data-validation-required-message="Por favor indique a sua mensagem." rows=6></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-danger btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>

<?= $this->endSection() ?>