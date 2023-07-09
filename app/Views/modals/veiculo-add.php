<!-- Modal Adiciona Veiculo-->
<form action="/veiculo/save" method="post" class="needs-validation" novalidate>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="card">
                        <div class="card-header">
                            <strong>Adicionar </strong>
                            Veiculo
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="marca" class="form-col-form-label">* Marca</label>
                                    <select id="marca" name="marca" class="custom-select" aria-describedby="marcaHelpBlock" required>
                                        <option selected disabled value="">Selecionar Marca...</option>
                                        <?php foreach ($marca as $row) : ?>
                                            <option value="<?= $row->marca_id; ?>"><?= $row->marca; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecione uma marca.
                                    </div>
                                    <span id="marcaHelpBlock" class="form-text text-muted">Seleccionar Marca</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="cor" class="form-col-form-label">Côr</label>
                                    <input id="cor" name="cor" type="text" aria-describedby="corHelpBlock" class="form-control" minlength="3" maxlength="50">
                                    <span id="corHelpBlock" class="form-text text-muted">Côr do veiculo</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-8">
                                    <label for="nome" class="col-form-label">Nome</label>
                                    <input id="nome" name="nome" type="text" aria-describedby="nomeHelpBlock" class="form-control" required minlength="3" maxlength="50">
                                    <span id="nomeHelpBlock" class="form-text text-muted">inserir nome / descrição (sem a marca)</span>
                                    <div class="invalid-feedback">
                                        Por favor inserir nome/modelo.
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="ano" class="col-form-label">Ano</label>
                                    <input id="ano" name="ano" type="text" aria-describedby="anoHelpBlock" class="form-control">
                                    <span id="anoHelpBlock" class="form-text text-muted">inserir ano</span>
                                    <div class="invalid-feedback">
                                        Selecionar Ano.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="preco" class="form-col-form-label">Preço</label>
                                    <input id="preco" name="preco" type="text" class="form-control" aria-describedby="precoHelpBlock">
                                    <span id="precoHelpBlock" class="form-text text-muted">Preço do veiculo</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="kms" class="form-col-form-label">Kms</label>
                                    <input id="kms" name="kms" type="text" aria-describedby="kmsHelpBlock" class="form-control">
                                    <span id="kmsHelpBlock" class="form-text text-muted">Kms do veiculo</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="portas" class="form-col-form-label">Portas</label>
                                    <input id="portas" name="portas" type="text" class="form-control" aria-describedby="portasHelpBlock" minlength="3" maxlength="50">
                                    <span id="portasHelpBlock" class="form-text text-muted">Quantidade de portas do veiculo (ex.: 5 portas)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lotacao" class="form-col-form-label">Lotação</label>
                                    <input id="lotacao" name="lotacao" type="text" class="form-control" aria-describedby="lotacaoHelpBlock" minlength="3" maxlength="50">
                                    <span id="lotacaoHelpBlock" class="form-text text-muted">Lotação do veiculo (ex.: 4 lugares)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="origem" class="form-col-form-label">* Origem</label>
                                    <select id="origem" name="origem" class="custom-select" aria-describedby="origemHelpBlock" required>
                                        <option selected disabled value="">Selecionar Origem...</option>
                                        <?php foreach ($origem as $row) : ?>
                                            <option value="<?= $row->origem_id; ?>"><?= $row->origem; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecione uma origem.
                                    </div>
                                    <span id="origemHelpBlock" class="form-text text-muted">Seleccionar origem</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="transmissao" class="form-col-form-label">Transmissão</label>
                                    <input id="transmissao" name="transmissao" type="text" class="form-control" aria-describedby="transmicaoHelpBlock" minlength="3" maxlength="50">
                                    <span id="transmicaoHelpBlock" class="form-text text-muted">Tipo de transmissão (ex.: Manual de 6 velocidades)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="cilindrada" class="form-col-form-label">Cilindrada</label>
                                    <input id="cilindrada" name="cilindrada" type="text" class="form-control" aria-describedby="cilindradaHelpBlock" minlength="3" maxlength="50">
                                    <span id="cilindradaHelpBlock" class="form-text text-muted">Cilindrada (ex.:1.461 cc)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="potencia" class="form-col-form-label">Potência</label>
                                    <input id="potencia" name="potencia" type="text" class="form-control" aria-describedby="potenciaHelpBlock" minlength="3" maxlength="50">
                                    <span id="potenciaHelpBlock" class="form-text text-muted">Potência (ex.: 110 Cv)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="airbags" class="form-col-form-label">Airbags</label>
                                    <input id="airbags" name="airbags" type="text" class="form-control" aria-describedby="airbagsHelpBlock" minlength="3" maxlength="50">
                                    <span id="airbagsHelpBlock" class="form-text text-muted">Airbags (ex.: 10 Airbags)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="chave" class="form-col-form-label">Chaves</label>
                                    <input id="chave" name="chave" type="text" class="form-control" aria-describedby="chaveHelpBlock" minlength="3" maxlength="20">
                                    <span id="chaveHelpBlock" class="form-text text-muted">Chaves (ex.: duas chaves)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="segmento" class="form-col-form-label">* Segmento</label>
                                    <select id="segmento" name="segmento" class="custom-select" aria-describedby="segmentoHelpBlock" required>
                                        <option selected disabled value="">Selecionar segmento...</option>
                                        <?php foreach ($segmento as $row) : ?>
                                            <option value="<?= $row->segmento_id; ?>"><?= $row->segmento; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecione uma origem.
                                    </div>
                                    <span id="segmentoHelpBlock" class="form-text text-muted">Seleccionar Segmento</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="portagem" class="form-col-form-label">* Portagem</label>
                                    <select id="portagem" name="portagem" class="custom-select" aria-describedby="portagemHelpBlock" required>
                                        <option selected disabled value="">Selecionar tipo de portagem...</option>
                                        <?php foreach ($portagem as $row) : ?>
                                            <option value="<?= $row->portagem_id; ?>"><?= $row->portagem; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor selecione uma tipo de portagem.
                                    </div>
                                    <span id="portagemHelpBlock" class="form-text text-muted">Seleccionar Portagem</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="revisoes" class="form-col-form-label">Revisões</label>
                                    <input id="revisoes" name="revisoes" type="text" class="form-control" aria-describedby="revisoesHelpBlock" minlength="3" maxlength="50">
                                    <span id="revisoesHelpBlock" class="form-text text-muted">Revisões (ex.: Livro de revisões completo)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="estado" class="form-col-form-label">Estado</label>
                                    <input id="estado" name="estado" type="text" class="form-control" aria-describedby="estadoHelpBlock" minlength="3" maxlength="50">
                                    <span id="estadoHelpBlock" class="form-text text-muted">Estado (ex.: Como novo)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="garantia" class="form-col-form-label">Garantia</label>
                                    <input id="garantia" name="garantia" type="text" class="form-control" aria-describedby="garantiaHelpBlock" minlength="3" maxlength="50">
                                    <span id="garantiaHelpBlock" class="form-text text-muted">Garantia dada (ex.: 1 ano de garantia)</span>
                                </div>
                                <div class="form-group col-sm-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="textarea" class="form-col-form-label">Observações</label>
                                    <textarea id="observacoes" name="observacoes" cols="40" rows="5" class="form-control" minlength="10" maxlength="500"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Gravar</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fim Modal Adiciona Veiculo-->