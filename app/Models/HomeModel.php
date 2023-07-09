<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'veiculos';
    protected $primaryKey = 'veiculo_id';
    protected $allowedFields = [
        'veiculo_marca_id',
        'nome', 'preco',
        'kms',
        'cor',
        'portas',
        'lotacao',
        'veiculo_origem_id',
        'transmissao',
        'cilindrada',
        'potencia',
        'airbags',
        'chave',
        'veiculo_segmento_id',
        'veiculo_portagem_id',
        'revisoes',
        'estado',
        'garantia',
        'observacoes',
        'vendido',
        'updated_at'
    ];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getAll()
    {
        return $this
        ->table('veiculos')
        ->select('*')
        ->join('marcas', 'marca_id = veiculo_marca_id', 'left')
        ->join('origens', 'origem_id = veiculo_origem_id', 'left')
        ->join('portagens', 'portagem_id = veiculo_portagem_id', 'left')
        ->join('segmentos', 'segmento_id = veiculo_segmento_id', 'left')
        ->join('imagens', 'imagens.veiculo_id = veiculos.veiculo_id', 'left')
        ->orderBy('veiculos.created_at')
        ->paginate(25);
    }
}
