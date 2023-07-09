<?php

namespace App\Models;

use CodeIgniter\Model;

class VeiculoModel extends Model
{
    protected $table = 'veiculos';
    protected $primaryKey = 'veiculo_id';
    protected $allowedFields = [
        'veiculo_marca_id',
        'nome',
        'ano',
        'preco',
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

    public function getMarca()
    {
        $builder = $this->db->table('marcas');
        return $builder->get();
    }

    public function getOrigem()
    {
        $builder = $this->db->table('origens');
        return $builder->get();
    }

    public function getPortagem()
    {
        $builder = $this->db->table('portagens');
        return $builder->get();
    }

    public function getSegmento()
    {
        $builder = $this->db->table('segmentos');
        return $builder->get();
    }

    public function getVeiculo()
    {

        return $this
            ->table('veiculos')
            ->select('*')
            ->join('marcas', 'marca_id = veiculo_marca_id', 'left')
            ->join('origens', 'origem_id = veiculo_origem_id', 'left')
            ->join('portagens', 'portagem_id = veiculo_portagem_id', 'left')
            ->join('segmentos', 'segmento_id = veiculo_segmento_id', 'left')
            ->orderBy('veiculos.created_at')
            ->paginate(25);
    }

    public function saveVeiculo($data)
    {
        $query = $this->db->table('veiculos')->insert($data);
        return $query;
    }

    public function updateVeiculo($data, $id)
    {
        $query = $this->db->table('veiculos')->update($data, array('veiculo_id' => $id));
        return $query;
    }

    public function deleteVeiculo($id)
    {
        $query = $this->db->table('veiculos')->delete(array('veiculo_id' => $id));
        return $query;
    }

    public function getDetalhes($id = null)
    {
        $query = $this
            ->table('veiculos')
            ->select('*')
            ->where('veiculo_id', $id)
            ->join('marcas', 'marca_id = veiculo_marca_id', 'left')
            ->join('origens', 'origem_id = veiculo_origem_id', 'left')
            ->join('portagens', 'portagem_id = veiculo_portagem_id', 'left')
            ->join('segmentos', 'segmento_id = veiculo_segmento_id', 'left')
            ->orderBy('veiculos.created_at');

        return $query->get();
    }
}
