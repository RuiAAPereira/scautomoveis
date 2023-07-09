<!-- Modal Edita Veiculo-->
<form action="/veiculo/update" method="post" class="needs-validation" novalidate>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="card">
                        <div class="card-header">
                            <strong>Editar </strong>
                            Veiculo
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_marca" class="form-col-form-label">Marca</label>
                                    <select id="veiculo_marca" name="veiculo_marca" required="required" class="custom-select veiculo_marca" aria-describedby="marcaHelpBlock">
                                        <?php foreach ($marca as $row) : ?>
                                            <option value="<?= $row->marca_id; ?>"><?= $row->marca; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span id="marcaHelpBlock" class="form-text text-muted">Seleccionar Marca</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_cor" class="form-col-form-label">Côr</label>
                                    <input id="veiculo_cor" name="veiculo_cor" type="text" aria-describedby="corHelpBlock" class="form-control veiculo_cor">
                                    <span id="corHelpBlock" class="form-text text-muted">Côr do veiculo</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-8">
                                    <label for="veiculo_nome" class="col-form-label">Nome</label>
                                    <input id="veiculo_nome" name="veiculo_nome" type="text" aria-describedby="nomeHelpBlock" required="required" class="form-control veiculo_nome">
                                    <span id="nomeHelpBlock" class="form-text text-muted">inserir nome / descrição (sem a marca)</span>
                                    <div class="invalid-feedback">
                                        Por favor inserir nome/modelo.
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="veiculo_ano" class="col-form-label">Ano</label>
                                    <input id="veiculo_ano" name="veiculo_ano" type="text" aria-describedby="anoHelpBlock" class="form-control veiculo_ano">
                                    <span id="anoHelpBlock" class="form-text text-muted">inserir ano</span>
                                    <div class="invalid-feedback">
                                        Selecionar Ano.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_preco" class="form-col-form-label">Preço</label>
                                    <input id="veiculo_preco" name="veiculo_preco" type="text" class="form-control veiculo_preco" aria-describedby="precoHelpBlock">
                                    <span id="precoHelpBlock" class="form-text text-muted">Preço do veiculo</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_kms" class="form-col-form-label">Kms</label>
                                    <input id="veiculo_kms" name="veiculo_kms" type="text" aria-describedby="kmsHelpBlock" class="form-control veiculo_kms">
                                    <span id="kmsHelpBlock" class="form-text text-muted">Kms do veiculo</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_portas" class="form-col-form-label">Portas</label>
                                    <input id="veiculo_portas" name="veiculo_portas" type="text" class="form-control veiculo_portas" aria-describedby="portasHelpBlock">
                                    <span id="portasHelpBlock" class="form-text text-muted">Quantidade de portas do veiculo (ex.: 5 portas)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_lotacao" class="form-col-form-label">Lotação</label>
                                    <input id="veiculo_lotacao" name="veiculo_lotacao" type="text" class="form-control veiculo_lotacao" aria-describedby="lotacaoHelpBlock">
                                    <span id="lotacaoHelpBlock" class="form-text text-muted">Lotação do veiculo (ex.: 4 lugares)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_origem" class="form-col-form-label">Origem</label>
                                    <select id="veiculo_origem" name="veiculo_origem" class="custom-select veiculo_origem" required="required" aria-describedby="origemHelpBlock">
                                        <?php foreach ($origem as $row) : ?>
                                            <option value="<?= $row->origem_id; ?>"><?= $row->origem; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </select>
                                    <span id="origemHelpBlock" class="form-text text-muted">Seleccionar origem</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_transmissao" class="form-col-form-label">Transmissão</label>
                                    <input id="veiculo_transmissao" name="veiculo_transmissao" type="text" class="form-control veiculo_transmissao" aria-describedby="transmicaoHelpBlock">
                                    <span id="transmicaoHelpBlock" class="form-text text-muted">Tipo de transmissão (ex.: Manual de 6 velocidades)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_cilindrada" class="form-col-form-label">Cilindrada</label>
                                    <input id="veiculo_cilindrada" name="veiculo_cilindrada" type="text" class="form-control veiculo_cilindrada" aria-describedby="cilindradaHelpBlock">
                                    <span id="cilindradaHelpBlock" class="form-text text-muted">Cilindrada (ex.:1.461 cc)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_potencia" class="form-col-form-label">Potência</label>
                                    <input id="veiculo_potencia" name="veiculo_potencia" type="text" class="form-control veiculo_potencia" aria-describedby="potenciaHelpBlock">
                                    <span id="potenciaHelpBlock" class="form-text text-muted">Potência (ex.: 110 Cv)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_airbags" class="form-col-form-label">Airbags</label>
                                    <input id="veiculo_airbags" name="veiculo_airbags" type="text" class="form-control veiculo_airbags" aria-describedby="airbagsHelpBlock">
                                    <span id="airbagsHelpBlock" class="form-text text-muted">Airbags (ex.: 10 Airbags)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_chave" class="form-col-form-label">Chaves</label>
                                    <input id="veiculo_chave" name="veiculo_chave" type="text" class="form-control veiculo_chave" aria-describedby="chaveHelpBlock">
                                    <span id="chaveHelpBlock" class="form-text text-muted">Chaves (ex.: duas chaves)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_segmento" class="form-col-form-label">Segmento</label>
                                    <select id="veiculo_segmento" name="veiculo_segmento" class="custom-select veiculo_segmento" aria-describedby="segmentoHelpBlock">
                                        <?php foreach ($segmento as $row) : ?>
                                            <option value="<?= $row->segmento_id; ?>"><?= $row->segmento; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span id="segmentoHelpBlock" class="form-text text-muted">Seleccionar Segmento</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_portagem" class="form-col-form-label">Portagem</label>
                                    <select id="veiculo_portagem" name="veiculo_portagem" class="custom-select veiculo_portagem" aria-describedby="portagemHelpBlock">
                                        <?php foreach ($portagem as $row) : ?>
                                            <option value="<?= $row->portagem_id; ?>"><?= $row->portagem; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    </select>
                                    <span id="portagemHelpBlock" class="form-text text-muted">Seleccionar Portagem</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_revisoes" class="form-col-form-label">Revisões</label>
                                    <input id="veiculo_revisoes" name="veiculo_revisoes" type="text" class="form-control veiculo_revisoes" aria-describedby="revisoesHelpBlock">
                                    <span id="revisoesHelpBlock" class="form-text text-muted">Revisões (ex.: Livro de revisões completo)</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_estado" class="form-col-form-label">Estado</label>
                                    <input id="veiculo_estado" name="veiculo_estado" type="text" class="form-control veiculo_estado" aria-describedby="estadoHelpBlock">
                                    <span id="estadoHelpBlock" class="form-text text-muted">Estado (ex.: Como novo)</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="veiculo_garantia" class="form-col-form-label">Garantia</label>
                                    <input id="veiculo_garantia" name="veiculo_garantia" type="text" class="form-control veiculo_garantia" aria-describedby="garantiaHelpBlock">
                                    <span id="garantiaHelpBlock" class="form-text text-muted">Garantia dada (ex.: 1 ano de garantia)</span>
                                </div>
                                <div class="form-group col-sm-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="textarea" class="form-col-form-label">Observações</label>
                                    <textarea id="veiculo_observacoes" name="veiculo_observacoes" cols="40" rows="5" class="form-control veiculo_observacoes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="veiculo_id" class="veiculo_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
<!-- Fim Modal Edita Veiculo-->