<?php 
namespace App\Models;
use CodeIgniter\Model;

class PortagemModel extends Model
{
    protected $table = 'portagens';
    protected $primaryKey = 'portagem_id';
    protected $allowedFields = ['portagem', 'updated_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}