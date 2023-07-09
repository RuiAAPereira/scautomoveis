<?php 
namespace App\Models;
use CodeIgniter\Model;

class OrigemModel extends Model
{
    protected $table = 'origens';
    protected $primaryKey = 'origem_id';
    protected $allowedFields = ['origem', 'updated_at'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}