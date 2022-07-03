<?php

namespace App\Controllers\Informativo;

use App\Controllers\BaseController;
use App\Models\StudetsModel;
use App\Models\PlansModel;
use App\Models\PaysModel;
use App\Models\InformativoModel;
use App\Models\LogStaffModel;
use App\Libraries\Datatable;


class Info_staff extends BaseController
{
    public $db;

    public function __construct()
    {

        $this->db = \Config\Database::connect();
         $session = session();
    }

    public function listStudent()
    {
        return view('list-student');
    }

    public function create()
    {
        return view('add_user');
    }


    public function get_student()
    {
        $studetsModel = new StudetsModel();
        $paysModel = new PaysModel();


        $data = [
            'id' => $this->request->getPost('id')
        ];


        $pay_data = $paysModel->where('id_member', $data['id'])->first();;


        if ($data = $studetsModel->find($data['id'])) {

            $consulta['resp'] = '1';
            $consulta['data'] = $data;
            $consulta['pay'] = $pay_data;
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function get_plan_data()
    {
        $plansModel = new PlansModel();

        $data = [
            'id' => $this->request->getPost('id')
        ];

        if ($data = $plansModel->find($data['id'])) {
            $consulta['resp'] = '1';
            $consulta['data'] = $data;
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }


    public function chek_delete()
    {
        $paysModel = new PaysModel();

        $id = $this->request->getPost('id');

        if ($pay_data = $paysModel->where('id_member', $id)->first()) {

            $consulta['data'] = $pay_data;
            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function delete()
    {
        $studetsModel = new StudetsModel();
        

        $id = $this->request->getPost('id');
        $studetsModel->where('id', $id);


        if ($studetsModel->delete()) {
            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }


    public function update()
    {
        $studetsModel = new StudetsModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile')
        ];


        if ($studetsModel->update($id, $data)) {

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }


    public function ajaxLoadData()
    {
        $logStaffModel = new LogStaffModel();
        $order = $_REQUEST['order'];
        $order = array_shift($_REQUEST['order']);


        $columns = $_REQUEST['columns'];


        if ($columns[4]['search']['value'] == '2') {
            $columns[4]['search']['value'] = 'false';
        } else if ($columns[4]['search']['value'] == '1') {
            $columns[4]['search']['value'] = 'true';
        } else {
            $columns[4]['search']['value'] = '';
        }
        $like = array(
            'matricula' => $columns[0]['search']['value'],
            'name' => $columns[1]['search']['value'],
            'email' => $columns[2]['search']['value'],
            'mobile' => $columns[3]['search']['value'],
            'status' => $columns[4]['search']['value']
        );


        $data = $logStaffModel->where('company', $_SESSION['company'])->findAll();
        $total_count = $data;

        $lib = new Datatable($logStaffModel, 'gp1', ['id_entrada','id_staff','hour_in','hour_in_save','status_hour_in','hour_out','hour_out_save','status_hour_out','day','day_save','year_act','company','created_at','updated_at','deleted_at','name']);
        $json_data = $lib->getResponse_join([
            'draw' => $_REQUEST['draw'],
            'length' => $_REQUEST['length'],
            'start' => $_REQUEST['start'],
            'total_count' => $total_count,
            'order' => $order['column'],
            'direction' => $order['dir'],
            'search' => $_REQUEST['search']['value'],
            'like' => $like
        ],'tab_staff','tab_staff.id_staff = tbl_log_staff.id_staff');

       
        echo json_encode($json_data);
    }


    public function ajaxLoadData_1()
    {
        $infoModel = new InformativoModel();
        $studentModel = new StudetsModel();
        $params['draw'] = $_REQUEST['draw'];
        $columns = $_REQUEST['columns'];

        $id = $columns[0]['search']['value'];
        $id_member = $columns[1]['search']['value'];
        $usuario = $columns[2]['search']['value'];
        $fecha_inicio = $columns[3]['search']['value'];
        $fecha_final = $columns[4]['search']['value'];
        $pago = $columns[5]['search']['value'];


        $like = array(
            'id_pay' => $columns[0]['search']['value'],
            'id_member' => $columns[1]['search']['value'],
            'name' => $columns[2]['search']['value'],
            'date_in' => $columns[3]['search']['value'],
            'date_out' => $columns[4]['search']['value'],
            'cost' => $columns[5]['search']['value'],

        );

        $search_value = $_REQUEST['search']['value'];


        if (!empty($search_value)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like('date_in', $search_value);
            $infoModel->orLike('date_out', $search_value);
            $infoModel->orLike('cost', $search_value);
            $infoModel->orLike('id_member', $search_value);
            $infoModel->orLike('id_pay', $search_value); 
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else if (!empty($id)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like($like);
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else if (!empty($id_member)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like($like);
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else if (!empty($usuario)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like($like);
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        }
        else if (!empty($fecha_inicio)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like($like);
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        }  else if (!empty($fecha_final)) {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $infoModel->like($like);
            $query = $infoModel->get();
            $data = $query->getResult('array');
            $total_count = $data;
        } else {
            $infoModel->join('tbl_students', 'tbl_students.id = tbl_members_pay.id_member');
            $infoModel->where('tbl_students.year_act', $_SESSION['year_act']);
            $infoModel->where('tbl_students.company',$_SESSION['company']);
            $data = $infoModel->findAll();
            $total_count = $data;
        }
        $json_data = array(
            "draw" => intval($params['draw']),
            "recordsTotal" => count($total_count),
            "recordsFiltered" => count($total_count),
            "data" => $data   // total data array
        );
        echo json_encode($json_data);
    }



    public function get_plan()
    {
        $planModel = new PlansModel();

        $planModel->select('*');
        $planModel->where('status', 'true');
        $query = $planModel->get();


        if ($data = $query->getResult('array')) {

            $consulta['data'] = $data;
            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }


    public function store_planmember()
    {
        $paysModel = new PaysModel();
        $data = [
            'discount' => $this->request->getPost('discount'),
            'month' => $this->request->getPost('month'),
            'cost' => $this->request->getPost('cost'),
            'id' => $this->request->getPost('id')
        ];



        $date = date('Y-m-d');

        $newDate = date('Y-m-d', strtotime($date . ' + ' . $data['month'] . ' months'));


        $data_plan = [
            'discount' => $this->request->getPost('discount'),
            'date_in' => $date,
            'date_out' => $newDate,
            'id_member' => $this->request->getPost('id'),
            'cost' => $this->request->getPost('cost')
        ];


        if ($paysModel->save($data_plan)) {

            $studetsModel = new StudetsModel();
       
            $data = [
                'status' => 'true'
            ];
            
         
            $studetsModel->update($this->request->getPost('id'),$data);

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }

        /*
        $studetsModel = new StudetsModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $studetsModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));*/
    }
}
