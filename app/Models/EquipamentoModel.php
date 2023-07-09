<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipamentoModel extends Model
{
    protected $table = 'equipamentos';
    protected $primaryKey = 'equipamento_id';
    protected $allowedFields = ['equipamento','veiculo_id', 'updated_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
