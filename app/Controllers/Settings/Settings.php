<?php

namespace App\Controllers\Settings;


use App\Controllers\BaseController;
use App\Models\StudetsModel;
use App\Models\PlansModel;
use App\Models\PositionModel;
use App\Models\PaysModel;
use App\Models\StaffModel;
use App\Models\StaffscheduleModel;
use App\Libraries\Datatable;
use App\Libraries\PHPMailer_lib;
use App\Models\ConfigModel;
use QRcode;
use DateTime;

class Settings extends BaseController
{
    public $db;

    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $session = session();
    }

    public function ajaxLoadData()
    {
        $settingModel = new ConfigModel();
        $order = $_REQUEST['order'];
        $order = array_shift($_REQUEST['order']);


        $columns = $_REQUEST['columns'];


        $like = array(
            'name_config' => $columns[0]['search']['value'],
            'cost_config' => $columns[1]['search']['value'],
            'status_config' => $columns[2]['search']['value'],
        );

        $data = $settingModel->where('tbl_config.company', $_SESSION['company'])->findAll();
        $total_count = $data;

        $lib = new Datatable($settingModel, 'gp1', ['id_config','name_config','cost_config','status_config','year_act','company']);
        $json_data = $lib->getResponse([
            'draw' => $_REQUEST['draw'],
            'length' => $_REQUEST['length'],
            'start' => $_REQUEST['start'],
            'total_count' => $total_count,
            'order' => $order['column'],
            'direction' => $order['dir'],
            'search' => $_REQUEST['search']['value'],
            'like' => $like
        ]);

        echo json_encode($json_data);
    }

    
    public function create_pay()
    {
        $data = $this->request->getPost();

    

        $setModel = new ConfigModel();
        $data = [
            'name_config' => $data['text'],
            'cost_config' =>  $data['charge'],
            'year_act' => $_SESSION['year_act'],
            'company' => $_SESSION['company']
        ];
        
  
  
        if ($setModel->save($data)) {

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function mod_pay()
    {

        $data=$this->request->getPost();      
        $settingModel = new ConfigModel();
    
        if ($data = $settingModel->find($data['id'])) {

         

            //$pay_data = $paysModel->where('id_member', $data['id'])->findAll();

            $consulta['resp']='1';
            $consulta['data']=$data;


                echo json_encode($consulta);
            }
        else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function update_set()
    {

        $settingModel = new ConfigModel();

        $data=$this->request->getPost();    
        
     

        $id = $data['id_config'];
        $data = [
            'cost_config' => $data['cost_config'],
            'name_config'  => $data['name_config']
        ];

        if ($settingModel->update($id, $data)) {

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
        

        /*
        $settingModel = new ConfigModel();
        if ($data = $settingModel->find($data['id'])) {

         

            //$pay_data = $paysModel->where('id_member', $data['id'])->findAll();

            $consulta['resp']='1';
            $consulta['data']=$data;


                echo json_encode($consulta);
            }
        else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }*/
    }
    
  
}
