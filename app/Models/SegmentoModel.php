<?php 
namespace App\Models;
use CodeIgniter\Model;

class SegmentoModel extends Model
{
    protected $table = 'segmentos';
    protected $primaryKey = 'segmento_id';
    protected $allowedFields = ['segmento', 'updated_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}