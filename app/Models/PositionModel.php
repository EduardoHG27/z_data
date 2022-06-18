<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;


class PositionModel extends Model
{
    protected $table      = 'tbl_position';
    protected $primaryKey = 'id_position';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['name_position','status_position','year_act','company'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getUserBy(string $column, string $value)
    {
        return $this->where($column, $value)->first();
    }
}
