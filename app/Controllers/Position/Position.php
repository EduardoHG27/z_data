<?php

namespace App\Controllers\Position;

use App\Controllers\BaseController;
use App\Models\PositionModel;
use App\Models\StudetsModel;
use App\Libraries\Datatable;

class Position extends BaseController
{
    public $db;

    public function __construct()
    {
        $session = session();
        $this->db = \Config\Database::connect();
    }

    public function listStudent()
    {
        return view('list-student');
    }

    public function create()
    {
        return view('add_user');
    }


    public function get_position()
    {
        $positionModel = new PositionModel();

        $data = [
            'id' => $this->request->getPost('id')
        ];

        

        if ($data = $positionModel->find($data['id'])) {
            $consulta['resp'] = '1';
            $consulta['data'] = $data;
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }


    public function status_up()
    {
        $positionModel = new PositionModel();
        $id = $this->request->getVar('id');

       
        $data = $positionModel->find($id);
        if($data['status']=='true')
        {
            $data = [
                'status' => 'false'
            ];

            if ($positionModel->update($id, $data)) {

                $consulta['resp'] = '1';
                echo json_encode($consulta);
            } else {
    
                $consulta['resp'] = '0';
                echo json_encode($consulta);
            }
        }
        else
        {
            $data = [
                'status' => 'true'
            ];

            if ($positionModel->update($id, $data)) {

                $consulta['resp'] = '1';
                echo json_encode($consulta);
            } else {
    
                $consulta['resp'] = '0';
                echo json_encode($consulta);
            }
        }
     
    }


    public function delete()
    {
        $positionModel = new PositionModel();
        $studentModel = new StudetsModel();

        $id = $this->request->getPost('planid');
        $id_member = $this->request->getPost('id');

        
        $positionModel->where('id', $id);
        if ($positionModel->delete()) {

            $data = [
                'status' => 'false'
            ];

            if($studentModel->update($id_member, $data))
            {
                $consulta['resp'] = '1';
                echo json_encode($consulta);
            }else
            {$consulta['resp'] = '0';
                echo json_encode($consulta);
            }
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function store()
    {
        $positionModel = new PositionModel();

       
        $data = [
            'name_position' => $this->request->getPost('rol'),
            'status_position' => $this->request->getPost('status'),
            'year_act' => $_SESSION['year_act'],
            'company' => $_SESSION['company']
        ];
    

  
        if ($positionModel->save($data)) {

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }

        /*
        $positionModel = new positionModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $positionModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));*/
    }

    public function update()
    {
        $positionModel = new PositionModel();
        $id = $this->request->getVar('id');
        $data = [
            'month' => $this->request->getVar('month'),
            'discount'  => $this->request->getVar('discount'),
            'status'  => $this->request->getVar('status')
        ];

        if ($positionModel->update($id, $data)) {

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
        
    }


    public function ajaxLoadData()
    {
        /*
        $positionModel = new positionModel();
        $params['draw'] = $_REQUEST['draw'];
        $columns = $_REQUEST['columns'];
        
        $id = $columns[0]['search']['value'];
        $name = $columns[1]['search']['value'];
        $email = $columns[2]['search']['value'];
        $mobile = $columns[3]['search']['value'];

        $like = array(
            'id_plan' => $columns[0]['search']['value'],
            'month' => $columns[1]['search']['value'],
            'discount' => $columns[2]['search']['value'],
            'status' => $columns[3]['search']['value']
        );

        $search_value = $_REQUEST['search']['value'];

        
        if (!empty($search_value)) {

            $positionModel->like('month', $search_value);
            $positionModel->orLike('discount', $search_value);
            $positionModel->orLike('status', $search_value);
            $query = $positionModel->get();
            $data = $query->getResult('array');
            $total_count = $data;

        } else if (!empty($id)) {
            $positionModel->like($like);
            $query = $positionModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        }else if (!empty($name)) {
            $positionModel->like($like);
            $query = $positionModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else if (!empty($email)) {
            $positionModel->like($like);
            $query = $positionModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else if (!empty($mobile)) {
            $positionModel->like($like);
            $query = $positionModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else {
            $data=$positionModel->findAll();
            $total_count = $data;
        }
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $data   // total data array
        );
        */


        $positionModel = new PositionModel();
        $order = $_REQUEST['order'];
        $order = array_shift($_REQUEST['order']);
        $columns = $_REQUEST['columns'];
        $like = array(
            'id_position' => $columns[0]['search']['value'],
            'name_position' => $columns[1]['search']['value'],
            'status_position' => $columns[2]['search']['value']
        );

        $data = $positionModel->where('company',$_SESSION['company'])->findAll();
  
        $total_count = $data;

        $lib = new Datatable($positionModel, 'gp1', ['id_position', 'name_position', 'status_position','year_act','company','created_at', 'updated_at', 'deleted_at']);
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
}
