<?php

namespace App\Models;

use CodeIgniter\Model;


class LogMemberModel extends Model
{
    protected $table      = 'tbl_log_member';
    protected $primaryKey = 'id_log_member';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_log_member ','id_member','hour_in','date','status_log','year_act','company','created_at','updated_at','deleted_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getUserBy(string $column, string $value)
    {
        return $this->where($column, $value)->first();
    }
}
