<?php

namespace App\Controllers;

use App\Models\VeiculoModel;
use App\Models\MarcaModel;
use App\Models\OrigemModel;
use App\Models\PortagemModel;
use App\Models\SegmentoModel;
use App\Models\ImagemModel;
use App\Models\EquipamentoModel;

class Veiculo extends BaseController
{
    protected $helpers = ['url', 'form', 'file'];

    public function index()
    {
        $veiculoModel = new VeiculoModel();
        $marcaModel = new MarcaModel();
        $origemModel = new OrigemModel();
        $portagemoModel = new PortagemModel();
        $segmentoModel = new SegmentoModel();

        $data = [
            'veiculo'  => $veiculoModel->getVeiculo(),
            'marca'    => $marcaModel->asObject()->findAll(),
            'origem'   => $origemModel->asObject()->findAll(),
            'portagem' => $portagemoModel->asObject()->findAll(),
            'segmento' => $segmentoModel->asObject()->findAll(),
            'pager' => $veiculoModel->pager
        ];

        echo view('veiculo_view', $data);
    }

    public function save()
    {
        $model = new VeiculoModel();

        $data = array(
            'veiculo_marca_id'      => $this->request->getPost('marca'),
            'nome'                  => $this->request->getPost('nome'),
            'ano'                   => $this->request->getPost('ano'),
            'preco'                 => $this->request->getPost('preco'),
            'kms'                   => $this->request->getPost('kms'),
            'cor'                   => $this->request->getPost('cor'),
            'portas'                => $this->request->getPost('portas'),
            'lotacao'               => $this->request->getPost('lotacao'),
            'veiculo_origem_id'     => $this->request->getPost('origem'),
            'transmissao'           => $this->request->getPost('transmissao'),
            'cilindrada'            => $this->request->getPost('cilindrada'),
            'potencia'              => $this->request->getPost('potencia'),
            'airbags'               => $this->request->getPost('airbags'),
            'chave'                 => $this->request->getPost('chave'),
            'veiculo_segmento_id'   => $this->request->getPost('segmento'),
            'veiculo_portagem_id'   => $this->request->getPost('portagem'),
            'revisoes'              => $this->request->getPost('revisoes'),
            'estado'                => $this->request->getPost('estado'),
            'garantia'              => $this->request->getPost('garantia'),
            'observacoes'           => $this->request->getPost('observacoes'),
            'created_at'            => date('Y-m-d H:i:s'),
        );
        $model->saveVeiculo($data);

        $session = session();
        $session->setFlashdata('success', 'Veículo criado com sucesso');

        return redirect()->to('/veiculos');
    }

    public function update()
    {
        $model = new VeiculoModel();
        $id = $this->request->getPost('veiculo_id');
        $veiculo_url = $this->request->getPost('veiculo_url');
        $data = array(
            //'id'            => $this->request->getPost('veiculo_id'),
            'veiculo_marca_id'      => $this->request->getPost('veiculo_marca'),
            'nome'                  => $this->request->getPost('veiculo_nome'),
            'ano'                   => $this->request->getPost('veiculo_ano'),
            'preco'                 => $this->request->getPost('veiculo_preco'),
            'kms'                   => $this->request->getPost('veiculo_kms'),
            'cor'                   => $this->request->getPost('veiculo_cor'),
            'portas'                => $this->request->getPost('veiculo_portas'),
            'lotacao'               => $this->request->getPost('veiculo_lotacao'),
            'veiculo_origem_id'     => $this->request->getPost('veiculo_origem'),
            'transmissao'           => $this->request->getPost('veiculo_transmissao'),
            'cilindrada'            => $this->request->getPost('veiculo_cilindrada'),
            'potencia'              => $this->request->getPost('veiculo_potencia'),
            'airbags'               => $this->request->getPost('veiculo_airbags'),
            'chave'                 => $this->request->getPost('veiculo_chave'),
            'veiculo_segmento_id'   => $this->request->getPost('veiculo_segmento'),
            'veiculo_portagem_id'   => $this->request->getPost('veiculo_portagem'),
            'revisoes'              => $this->request->getPost('veiculo_revisoes'),
            'estado'                => $this->request->getPost('veiculo_estado'),
            'garantia'              => $this->request->getPost('veiculo_garantia'),
            'observacoes'           => $this->request->getPost('veiculo_observacoes'),
            'updated_at'            => date('Y-m-d H:i:s'),
        );
        $model->updateVeiculo($data, $id);

        $session = session();
        $session->setFlashdata('success', 'Veículo atualizado com sucesso');

        //return redirect()->to('/veiculos');
        if (!empty($veiculo_url)) {
            return redirect()->to($veiculo_url);
        } else {
            return redirect()->to('/veiculos');
        }
    }

    public function delete()
    {
        $model = new VeiculoModel();
        $id = $this->request->getPost('veiculo_id');

        $imagemModel = new ImagemModel();
        $imagens = $imagemModel->asObject()->where('veiculo_id', $id)->findAll();

        if ($imagens) {
            foreach ($imagens as $row) {
                if (unlink(ROOTPATH . 'public/imagens/' . $row->name)) {
                    $imagemModel->delete($row->imagem_id);
                }
            }
        }

        $equipamentoModel = new EquipamentoModel();
        $equipamentos = $equipamentoModel->asObject()->where('veiculo_id', $id)->findAll();

        if ($equipamentos) {
            foreach ($equipamentos as $row) {
                $equipamentoModel->delete($row->equipamento_id);
            }
        }
        $session = session();
        $session->setFlashdata('success', 'Veiculo apagado assim como todos os dados associados!');

        $model->deleteVeiculo($id);
        return redirect()->to('/veiculos');
    }

    public function detalhe($id = null)
    {

        $veiculoModel = new VeiculoModel();
        $marcaModel = new MarcaModel();
        $origemModel = new OrigemModel();
        $portagemoModel = new PortagemModel();
        $segmentoModel = new SegmentoModel();
        $imagemModel = new ImagemModel();
        $equipamentoModel = new EquipamentoModel();

        //$data['veiculo'] = $veiculoModel->where('veiculo_id', $id)->first();

        $data = [
            'veiculo'      => $veiculoModel->where('veiculo_id', $id)->first(),
            'marca'        => $marcaModel->asObject()->findAll(),
            'origem'       => $origemModel->asObject()->findAll(),
            'portagem'     => $portagemoModel->asObject()->findAll(),
            'segmento'     => $segmentoModel->asObject()->findAll(),
            'imagens'      => $imagemModel->asObject()->where('veiculo_id', $id)->findAll(),
            'equipamentos' => $equipamentoModel->asObject()->where('veiculo_id', $id)->findAll()
        ];
        echo view('veiculo-detalhes', $data);
    }

    function upload()
    {
        helper(['form', 'url']);

        $ImagemModel = new ImagemModel();
        $id = $this->request->getPost('veiculo_id');
        $veiculo_url = $this->request->getPost('veiculo_url');

        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,4096]',
            ]
        ]);

        if (!$input) {
            $session = session();
            $session->setFlashdata('error', 'por favor selecione um ficheiro válido.');

            if (!empty($veiculo_url)) {
                return redirect()->to($veiculo_url);
            } else {
                return redirect()->to('/veiculos');
            }
        } else {
            $img = $this->request->getFile('file');
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/imagens', $newName);

            $data = [
                'veiculo_id' => $id,
                'name'       =>  $img->getName(),
                'type'       => $img->getClientMimeType()
            ];

            $ImagemModel->insert($data);

            $session = session();
            $session->setFlashdata('success', 'Imagem adicionada com sucesso');

            if (!empty($veiculo_url)) {
                return redirect()->to($veiculo_url);
            } else {
                return redirect()->to('/veiculos');
            }
        }
    }

    public function addEquipamento()
    {
        $model = new EquipamentoModel();
        $veiculo_url = $this->request->getPost('veiculo_url');

        $data = array(
            'veiculo_id'  => $this->request->getPost('veiculo_id'),
            'equipamento' => $this->request->getPost('veiculo_equipamento'),
            'created_at'  => date('Y-m-d H:i:s'),
        );
        $model->insert($data);

        $session = session();
        $session->setFlashdata('success', 'Equipamento criado com sucesso');

        if (!empty($veiculo_url)) {
            return redirect()->to($veiculo_url);
        } else {
            return redirect()->to('/veiculos');
        }
    }

    public function deleteImage()
    {
        $model    = new ImagemModel();
        $veiculo_url = $this->request->getPost('veiculo_url');
        $id       = $this->request->getPost('imagem_id');
        $fileName = $this->request->getPost('file');

        if (unlink(ROOTPATH . 'public/imagens/' . $fileName)) {
            $model->delete($id);
        }

        if (!empty($veiculo_url)) {
            return redirect()->to($veiculo_url);
        } else {
            return redirect()->to('/veiculos');
        }
    }

    public function apagaEquipamento()
    {
        $model = new EquipamentoModel();
        $veiculo_url = $this->request->getPost('veiculo_url');
        $id       = $this->request->getPost('equipamento_id');

        $model->delete($id);

        $session = session();
        $session->setFlashdata('success', 'Equipamento apagado!');

        if (!empty($veiculo_url)) {
            return redirect()->to($veiculo_url);
        } else {
            return redirect()->to('/veiculos');
        }
    }

    public function vendido()
    {
        $model = new VeiculoModel();
        $id = $this->request->getPost('veiculo_id');
        $veiculo_url = $this->request->getPost('veiculo_url');
        $veiculo = $model->where('veiculo_id', $id)->first();
        $vendido = ($veiculo["vendido"] == 1 ? 0 : 1);

        $data = array(
            //'id'            => $this->request->getPost('veiculo_id'),
            'vendido'    => $vendido,
            'updated_at' => date('Y-m-d H:i:s'),
        );
        $model->updateVeiculo($data, $id);

        $session = session();

        if ($vendido === 1) {
            $session->setFlashdata('success', 'Veículo marcado como vendido');
        } else {
            $session->setFlashdata('success', 'Veículo desmarcado como vendido');
        }

        //return redirect()->to('/veiculos');
        if (!empty($veiculo_url)) {
            return redirect()->to($veiculo_url);
        } else {
            return redirect()->to('/veiculos');
        }
    }
}
