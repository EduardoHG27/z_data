<?php

namespace App\Models;

use CodeIgniter\Model;


class LogStaffModel extends Model
{
    protected $table      = 'tbl_log_staff';
    protected $primaryKey = 'id_entrada';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_entrada','id_staff','hour_in','hour_in_save','status_hour_in','hour_out','hour_out_save','status_hour_out','day','day_save','year_act','company','created_at','updated_at','deleted_at'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getUserBy(string $column, string $value)
    {
        return $this->where($column, $value)->first();
    }
}
