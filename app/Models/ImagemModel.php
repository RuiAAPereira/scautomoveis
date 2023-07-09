<?php

namespace App\Models;

use CodeIgniter\Model;

class ImagemModel extends Model
{
    protected $table = 'imagens';
    protected $primaryKey = 'imagem_id';
    protected $allowedFields = ['veiculo_id', 'name', 'type', 'updated_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
