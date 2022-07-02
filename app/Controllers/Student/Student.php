<?php


namespace App\Controllers\Student;

use App\Controllers\BaseController;
use App\Models\StudetsModel;
use App\Models\StaffModel;
use App\Models\PlansModel;
use App\Models\PaysModel;
use App\Models\StaffscheduleModel;
use App\Models\LogStaffModel;
use App\Models\LogMemberModel;
use App\Libraries\Datatable;
use App\Libraries\PHPMailer_lib;
use App\Libraries\qr;
use QRcode;
use DateTime;
use function PHPUnit\Framework\isNull;

class Student extends BaseController
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

        if ($data = $studetsModel->find($data['id'])) {

            $paysModel->select();
            $paysModel->where('id_member', $data['id']);
            $paysModel->where('year_act', $_SESSION['year_act']);
            $paysModel->where('company', $_SESSION['company']);
            $paysModel->where('pay_status', 'true');
            $query = $paysModel->get();
            $pay_data = $query->getResult('array');


            //$pay_data = $paysModel->where('id_member', $data['id'])->findAll();

            if ($pay_data == null) {
                $consulta['resp'] = '1';
                $consulta['data'] = $data;
                $consulta['pay'] = null;
                echo json_encode($consulta);
            } else if ($pay_data[0]['pay_status'] == 'false') {
                $consulta['resp'] = '1';
                $consulta['data'] = $data;
                $consulta['pay'] = null;
                echo json_encode($consulta);
            } else {

                $consulta['resp'] = '1';
                $consulta['data'] = $data;
                $consulta['pay'] = $pay_data;


                echo json_encode($consulta);
            }
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

        $paysModel->select('*');
        $paysModel->where('id_member', $this->request->getPost('id'));
        $paysModel->where('pay_status', 'true');
        $query = $paysModel->get();
        $data_validation = $query->getResult('array');

        if (!empty($data_validation)) {

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
        $data = $studetsModel->find($id);
        unlink($data['qr_location']);
        $studetsModel->where('id', $id);
        if ($studetsModel->delete()) {
            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function store()
    {
        include RUTA_APP . '/ThirdParty/phpqrcode/qrlib.php';
        $mail = new PHPMailer_lib();
        $year = date("Y");
        $studetsModel = new StudetsModel();
        $studetsModel->select('*');
        $studetsModel->where('name', $this->request->getPost('name'));
        $studetsModel->where('year_act', $_SESSION['year_act']);
        $studetsModel->where('company', $_SESSION['company']);
        $studetsModel->where('email', $this->request->getPost('email'));
        $query = $studetsModel->get();
        $data_validation = $query->getResult('array');

        if (empty($data_validation)) {

            $correo = $mail->load();
            $correo->isSMTP();
            $correo->Host = 'smtp.gmail.com';
            $correo->Port = 465;
            $correo->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $correo->SMTPAuth = true;
            $correo->Username  = 'eduardoenrique.hernandez@gmail.com';
            //$correo->Username  = 'desarrollo.hergut@gmail.com';
            // $correo->Password = 'Hergut27!';
            $correo->Password = 'xgquztnppmjzgwuw';
            $correo->SMTPSecure = 'ssl';

            $correo->setFrom('eduardoenrique.hernandez@gmail.com', 'CodexWorld');
            $correo->addReplyTo($this->request->getPost('email'), 'Codexworld');
            $correo->addAddress($this->request->getPost('email'));
            $correo->Subject = 'Registro de Usuario Exitoso';
            $correo->isHTML(true);
            $mailcontent = "<h1>Bienvenido, Ya eres miembro!!</h1>
             <p>Tu contraseña para Ingresar es : </p>" . $this->request->getPost('password');

            $correo->Body = $mailcontent;

            if (!$correo->send()) {


                $consulta['resp'] = '2';
                $consulta['msj_error'] = $correo->ErrorInfo;
                echo json_encode($consulta);
            } else {
                $number = rand();
                $dir = 'temp/';
                if (!file_exists($dir)) {
                    mkdir($dir);
                }
                $filename = $dir . '' . $number . '.png';
                $tamanio = 15;
                $level = 'H';
                $frameSize = 1;
                $contenido = md5($this->request->getPost('password')) . $number;
                QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

                $data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'mobile' => $this->request->getPost('mobile'),
                    'password' => md5($this->request->getPost('password')),
                    'qr_location' => $filename,
                    'password_qr' => md5($this->request->getPost('password')) . $number,
                    'year_act' => $_SESSION['year_act'],
                    'company' => $_SESSION['company']
                ];

                $studetsModel->save($data);
                $consulta['id'] = $studetsModel->insertID();
                $data = [
                    'matricula' =>  $year . $consulta['id']
                ];
                $studetsModel->update($consulta['id'], $data);
                $consulta['resp'] = '1';
                // $consulta['img'] =  $img;
                echo json_encode($consulta);
            }
        } else {

            $consulta['resp'] = '3';
            echo json_encode($consulta);
        }
    }

    /*
    public function qr_log()
    {
        $hoy = getdate();

        if (strlen($hoy['minutes']) == 1) {
            $hoy['minutes'] = '0' . $hoy['minutes'];
        }

        if (strlen($hoy['seconds']) == 1) {
            $hoy['seconds'] = '0' . $hoy['seconds'];
        }

        $hour_today = $hoy['hours'] . ':' . $hoy['minutes'] . ':' . $hoy['seconds'];
        $day_today = $hoy['year'] . '-' . $hoy['mon'] . '-' . $hoy['mday'];
        $studetsModel = new StudetsModel();

        $data = $this->request->getPost();
        var_dump($data);
        $data = [
            'id' => $this->request->getPost('id')
        ];

        $studetsModel->select('name,matricula');
        $studetsModel->where('password_qr', $this->request->getPost('id'));
        $studetsModel->where('year_act', $_SESSION['year_act']);
        $studetsModel->where('company', $_SESSION['company']);
        $query = $studetsModel->get();
        $data_validation = $query->getResult('array');


        $staffModel = new StaffModel();
        $staffModel->select('id_staff,name,matricula_staff');
        $staffModel->where('password_qr', $this->request->getPost('id'));
        $staffModel->where('year_act', $_SESSION['year_act']);
        $staffModel->where('company', $_SESSION['company']);
        $query = $staffModel->get();
        $data_validation_staff = $query->getResult('array');

        $dat = count($data_validation);
        $dat_staff = count($data_validation_staff);

        if (!$dat == '0') {
            $user = $studetsModel->getUserBy('matricula', $data_validation[0]['matricula']);

            $log = new LogMemberModel();


            if ($user['status'] != 'true') {
                $consulta['resp'] = '2';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'agoto su membresia';
                $consulta['company'] = $_SESSION['company'];

                $data = [
                    'id_member' => $user['id'],
                    'hour_in' => $hour_today,
                    'date' => $day_today,
                    'status_log' => 'false',
                    'desc_status_log' => $consulta['msj'],
                    'year_act' => $_SESSION['year_act'],
                    'company' => $_SESSION['company']
                ];
                if ($log->save($data)) {
                    echo json_encode($consulta);
                } else {
                    var_dump("error al guardar datos de logueo miembro");
                }
            } else {
                $consulta['resp'] = '1';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'Usuario Activo';
                $consulta['company'] = $_SESSION['company'];

                $data = [
                    'id_member' => $user['id'],
                    'hour_in' => $hour_today,
                    'date' => $day_today,
                    'status_log' => 'true',
                    'desc_status_log' => $consulta['msj'],
                    'year_act' => $_SESSION['year_act'],
                    'company' => $_SESSION['company']
                ];

                if ($log->save($data)) {
                    echo json_encode($consulta);
                } else {
                    var_dump("error al guardar datos de logueo miembro");
                }
            }
        } else if (!$dat_staff == '0') {
            $user = $staffModel->getUserBy('matricula_staff', $data_validation_staff[0]['matricula_staff']);
            if ($user['status'] != 'true') {
                $consulta['resp'] = '2';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'no tiene un horario asignado!!';
                $consulta['company'] = $_SESSION['company'];
                echo json_encode($consulta);
            } else {
                if ($hoy['weekday'] == 'Monday') {
                    $dia = 'lunes';
                } else if ($hoy['weekday'] == 'Tuesday') {
                    $dia = 'martes';
                } else if ($hoy['weekday'] == 'Wednesday') {
                    $dia = 'miercoles';
                } else if ($hoy['weekday'] == 'Thursday') {
                    $dia = 'jueves';
                } else if ($hoy['weekday'] == 'Friday') {
                    $dia = 'viernes';
                } else if ($hoy['weekday'] == 'Saturday') {
                    $dia = 'sabado';
                } else if ($hoy['weekday'] == 'Sunday') {
                    $dia = 'domingo';
                }

                $schedulestaffModel = new StaffscheduleModel();
                $schedulestaffModel->select('day,hour_in,hour_out');
                $schedulestaffModel->where('id_staff', $data_validation_staff[0]['id_staff']);
                $schedulestaffModel->where('year_act', $_SESSION['year_act']);
                $schedulestaffModel->where('company', $_SESSION['company']);
                $schedulestaffModel->where('day', $dia);
                $query = $schedulestaffModel->get();
                $data_schedule = $query->getResult('array');

                if (count($data_schedule) != 0) {
                    $log = new LogStaffModel();


                    $log->select('id_entrada,hour_out');
                    $log->where('id_staff', $data_validation_staff[0]['id_staff']);
                    $log->where('day', $dia);
                    $log->where('day_save', $day_today);
                    $log->where('company', $_SESSION['company']);
                    $log->where('year_act', $_SESSION['year_act']);
                    $query_log = $log->get();
                    $data_log = $query_log->getResult('array');

                    if (count($data_log) == 0) {
                        $bandera = 0;
                        foreach ($data_schedule as $key => $value) {
                            # code...
                            $diffff = $this->timeDiff($value['hour_in'], $hour_today);

                            $diffff = ($diffff / 60);

                            if ($diffff <= 1) {
                                $stat = "on time";
                            } else if ($diffff > 1 && $diffff <= 5) {
                                $stat = "less 5";
                            } else if ($diffff > 5 && $diffff <= 10) {
                                $stat = "less 10";
                            } else {
                                $stat = "late";
                            }

                            if ($value['day'] == $dia) {
                                $data = [
                                    'id_staff' => $data_validation_staff[0]['id_staff'],
                                    'hour_in' => $hour_today,
                                    'hour_in_save' => $value['hour_in'],
                                    'status_hour_in' => $stat,
                                    'day' => $dia,
                                    'day_save' => $day_today,
                                    'year_act' => $_SESSION['year_act'],
                                    'company' => $_SESSION['company']
                                ];

                                $log->save($data);
                                $bandera = 0;
                                $consulta['company'] = $_SESSION['company'];
                                $consulta['resp'] = '3';
                                $consulta['name'] = $user['name'];
                                $consulta['msj'] = 'Se registro tu Entrada con exito!!';
                                echo json_encode($consulta);
                            }
                        }
                    } else if ($data_log[0]['hour_out'] == '') {



                        foreach ($data_schedule as $key => $value) {




                            $diffff = $this->timeDiff($value['hour_out'], $hour_today);

                            $diffff = ($diffff / 60);

                            if ($diffff < 0) {

                                $stat = "early";
                            } else {

                                $stat = "on time";
                            }
                            # code...
                            if ($value['day'] == $dia) {
                                $data = [

                                    'hour_out' => $hour_today,
                                    'hour_out_save' => $value['hour_out'],
                                    'status_hour_out' =>  $stat
                                ];

                                $log->update($data_log[0]['id_entrada'], $data);
                                $consulta['company'] = $_SESSION['company'];
                                $consulta['resp'] = '4';
                                $consulta['name'] = $user['name'];
                                $consulta['msj'] = 'Se registro tu Salida con exito!!';
                                echo json_encode($consulta);
                            }
                        }
                    } else if ($data_log[0]['hour_out'] != '') {
                        $consulta['company'] = $_SESSION['company'];
                        $consulta['resp'] = '5';
                        $consulta['name'] = $user['name'];
                        $consulta['msj'] = 'Se ha registrado Su entrada y salida por hoy';
                        echo json_encode($consulta);
                    }
                } else {
                    $consulta['resp'] = '6';
                    $consulta['company'] = $_SESSION['company'];
                    $consulta['name'] = $user['name'];
                    $consulta['msj'] = 'No se tiene registrado hoy su ingreso';
                    echo json_encode($consulta);
                }
            }
        } else {

            $consulta['company'] = $_SESSION['company'];
            $consulta['resp'] = '0';
            $consulta['msj'] = 'Código QR no reconocido';
            echo json_encode($consulta);
        }
    }
*/
    public function log_function()
    {

        $hoy = getdate();

        if (strlen($hoy['minutes']) == 1) {
            $hoy['minutes'] = '0' . $hoy['minutes'];
        }

        if (strlen($hoy['seconds']) == 1) {
            $hoy['seconds'] = '0' . $hoy['seconds'];
        }

        $hour_today = $hoy['hours'] . ':' . $hoy['minutes'] . ':' . $hoy['seconds'];
        $day_today = $hoy['year'] . '-' . $hoy['mon'] . '-' . $hoy['mday'];
      


        $data = $this->request->getPost();
        $num_data=count($data);
        $studetsModel = new StudetsModel();
        $studetsModel->select('name,matricula');
        if($num_data=='1')
        {
            $data = ['id' => $this->request->getPost('id')];
            $studetsModel->where('password_qr', $this->request->getPost('id'));
        }else{

            $data = [
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password')
            ];
           
            $nombre = trim($data['username']);
            $password = md5($data['password']);
    
    
         
           $studetsModel->where('matricula', $nombre);
           $studetsModel->where('password', $password);
        }
       $studetsModel->where('year_act', $_SESSION['year_act']);
       $studetsModel->where('company', $_SESSION['company']);
       $query_student = $studetsModel->get();
       $data_validation = $query_student->getResult('array');



       
       $staffModel = new StaffModel();
       $staffModel->select('id_staff,name,matricula_staff');

       if($num_data=='1')
       {
           $data = [
               'id' => $this->request->getPost('id')
           ];
   
        
           $staffModel->where('password_qr', $this->request->getPost('id'));
       }else{

           $data = [
               'username' => $this->request->getPost('username'),
               'password' => $this->request->getPost('password')
           ];
          
           $nombre = trim($data['username']);
           $password = md5($data['password']);
   
   
        
           $staffModel->where('matricula_staff', $nombre);
           $staffModel->where('password', $password);
       }

       
        $staffModel->where('year_act', $_SESSION['year_act']);
        $staffModel->where('company', $_SESSION['company']);
        $query = $staffModel->get();
        $data_validation_staff = $query->getResult('array');

        $dat = count($data_validation);
        $dat_staff = count($data_validation_staff);

        if (!$dat == '0') {
            $user = $studetsModel->getUserBy('matricula', $data_validation[0]['matricula']);

            $log = new LogMemberModel();


            if ($user['status'] != 'true') {
                $consulta['resp'] = '2';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'agoto su membresia';
                $consulta['company'] = $_SESSION['company'];

                $data = [
                    'id_member' => $user['id'],
                    'hour_in' => $hour_today,
                    'date' => $day_today,
                    'status_log' => 'false',
                    'desc_status_log' => $consulta['msj'],
                    'year_act' => $_SESSION['year_act'],
                    'company' => $_SESSION['company']
                ];
                if ($log->save($data)) {
                    echo json_encode($consulta);
                } else {
                    var_dump("error al guardar datos de logueo miembro");
                }
            } else {
                $consulta['resp'] = '1';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'Usuario Activo';
                $consulta['company'] = $_SESSION['company'];

                $data = [
                    'id_member' => $user['id'],
                    'hour_in' => $hour_today,
                    'date' => $day_today,
                    'status_log' => 'true',
                    'desc_status_log' => $consulta['msj'],
                    'year_act' => $_SESSION['year_act'],
                    'company' => $_SESSION['company']
                ];

                if ($log->save($data)) {
                    echo json_encode($consulta);
                } else {
                    var_dump("error al guardar datos de logueo miembro");
                }
            }
        } else if (!$dat_staff == '0') {
            $user = $staffModel->getUserBy('matricula_staff', $data_validation_staff[0]['matricula_staff']);
            if ($user['status'] != 'true') {
                $consulta['resp'] = '2';
                $consulta['name'] = $user['name'];
                $consulta['msj'] = 'no tiene un horario asignado!!';
                $consulta['company'] = $_SESSION['company'];
                echo json_encode($consulta);
            } else {
                if ($hoy['weekday'] == 'Monday') {
                    $dia = 'lunes';
                } else if ($hoy['weekday'] == 'Tuesday') {
                    $dia = 'martes';
                } else if ($hoy['weekday'] == 'Wednesday') {
                    $dia = 'miercoles';
                } else if ($hoy['weekday'] == 'Thursday') {
                    $dia = 'jueves';
                } else if ($hoy['weekday'] == 'Friday') {
                    $dia = 'viernes';
                } else if ($hoy['weekday'] == 'Saturday') {
                    $dia = 'sabado';
                } else if ($hoy['weekday'] == 'Sunday') {
                    $dia = 'domingo';
                }

                $schedulestaffModel = new StaffscheduleModel();
                $schedulestaffModel->select('day,hour_in,hour_out');
                $schedulestaffModel->where('id_staff', $data_validation_staff[0]['id_staff']);
                $schedulestaffModel->where('year_act', $_SESSION['year_act']);
                $schedulestaffModel->where('company', $_SESSION['company']);
                $schedulestaffModel->where('day', $dia);
                $query = $schedulestaffModel->get();
                $data_schedule = $query->getResult('array');

                if (count($data_schedule) != 0) {
                    $log = new LogStaffModel();
                    $log->select('id_entrada,hour_out');
                    $log->where('id_staff', $data_validation_staff[0]['id_staff']);
                    $log->where('day', $dia);
                    $log->where('day_save', $day_today);
                    $log->where('company', $_SESSION['company']);
                    $log->where('year_act', $_SESSION['year_act']);
                    $query_log = $log->get();
                    $data_log = $query_log->getResult('array');

                    if (count($data_log) == 0) {
                        $bandera = 0;
                        foreach ($data_schedule as $key => $value) {
                            # code...
                            $diffff = $this->timeDiff($value['hour_in'], $hour_today);

                            $diffff = ($diffff / 60);

                            if ($diffff <= 1) {
                                $stat = "on time";
                            } else if ($diffff > 1 && $diffff <= 5) {
                                $stat = "less 5";
                            } else if ($diffff > 5 && $diffff <= 10) {
                                $stat = "less 10";
                            } else {
                                $stat = "late";
                            }

                            if ($value['day'] == $dia) {
                                $data = [
                                    'id_staff' => $data_validation_staff[0]['id_staff'],
                                    'hour_in' => $hour_today,
                                    'hour_in_save' => $value['hour_in'],
                                    'status_hour_in' => $stat,
                                    'day' => $dia,
                                    'day_save' => $day_today,
                                    'year_act' => $_SESSION['year_act'],
                                    'company' => $_SESSION['company']
                                ];

                                $log->save($data);
                                $consulta['company'] = $_SESSION['company'];
                                $consulta['resp'] = '3';
                                $consulta['name'] = $user['name'];
                                $consulta['msj'] = 'Se registro tu Entrada con exito!!';
                                echo json_encode($consulta);
                            }
                        }
                    } else if ($data_log[0]['hour_out'] == '') {
                        foreach ($data_schedule as $key => $value) {

                            $diffff = $this->timeDiff($value['hour_out'], $hour_today);

                            $diffff = ($diffff / 60);

                            if ($diffff < 0) {

                                $stat = "early";
                            } else {

                                $stat = "on time";
                            }
                            # code...
                            if ($value['day'] == $dia) {
                                $data = [

                                    'hour_out' => $hour_today,
                                    'hour_out_save' => $value['hour_out'],
                                    'status_hour_out' =>  $stat
                                ];

                                $log->update($data_log[0]['id_entrada'], $data);
                                $consulta['company'] = $_SESSION['company'];
                                $consulta['resp'] = '4';
                                $consulta['name'] = $user['name'];
                                $consulta['msj'] = 'Se registro tu Salida con exito!!';
                                echo json_encode($consulta);
                            }
                        }
                    } else if ($data_log[0]['hour_out'] != '') {
                        $consulta['company'] = $_SESSION['company'];
                        $consulta['resp'] = '5';
                        $consulta['name'] = $user['name'];
                        $consulta['msj'] = 'Se ha registrado Su entrada y salida por hoy';
                        echo json_encode($consulta);
                    }
                } else {
                    $consulta['resp'] = '6';
                    $consulta['company'] = $_SESSION['company'];
                    $consulta['name'] = $user['name'];
                    $consulta['msj'] = 'No se tiene registrado hoy su ingreso';
                    echo json_encode($consulta);
                }
            }
        } else {
            if($num_data=='1')
            {
                $consulta['company'] = $_SESSION['company'];
                $consulta['resp'] = '0';
                $consulta['msj'] = 'Código QR no reconocido';
                echo json_encode($consulta);
            }
            else
            {
                $consulta['company'] = $_SESSION['company'];
                $consulta['resp'] = '0';
                $consulta['msj'] = 'Usuario y/o Contraseña no reconocidos';
                echo json_encode($consulta);
            }

           
        }






















/*       
        $studetsModel = new StudetsModel();

        $studetsModel->select('*');
        $studetsModel->where('matricula', $nombre);
        $studetsModel->where('password', $password);
        $studetsModel->where('year_act', $_SESSION['year_act']);
        $studetsModel->where('company', $_SESSION['company']);
        $query_student = $studetsModel->get();
        $data_validation_student = $query_student->getResult('array');

        
     
        $staffModel = new StaffModel();
        $staffModel->select('*');
        $staffModel->where('matricula_staff', $nombre);
        $staffModel->where('password', $password);
        $staffModel->where('year_act', $_SESSION['year_act']);
        $staffModel->where('company', $_SESSION['company']);
        $query = $staffModel->get();
        $data_validation = $query->getResult('array');


        if (!empty($data_validation)) {


            if ($data_validation[0]['position'] == '1') {

                if ($password != $data_validation[0]['password']) {

                    $consulta['data'] = '1';
                    $consulta['msj'] = 'Contraseña Incorrecta';
                    echo json_encode($consulta);
                } else {


                    $consulta['data'] = '5';
                    $consulta['msj'] = 'Admin';


                    echo json_encode($consulta);
                }
            } else {
                var_dump("error al validar admin");
            }
        } else if (!empty($data_validation_student)) {
            if ($password != $data_validation_student[0]['password']) {
                $consulta['data'] = '1';
                $consulta['msj'] = 'Contraseña Incorrecta';

                echo json_encode($consulta);
            } else if ($data_validation_student[0]['status'] != 'true') {
                $consulta['data'] = '2';
                $consulta['msj'] = 'Usuario se agoto su membresia';
                echo json_encode($consulta);
            } else {

                $consulta['data'] = '3';
                $consulta['msj'] = 'Usuario Activo';
                echo json_encode($consulta);
            }
        } else {
            $consulta['data'] = '0';
            $consulta['msj'] = 'Este usuario no se encuentra registrado en el sistema';
            echo json_encode($consulta);
        }
        */
    }

    public function get_qr()
    {
        $studetsModel = new StudetsModel();
        $data = [
            'id' => $this->request->getPost('id')
        ];


        $data = $studetsModel->find($data['id']);


        if ($data['qr_location'] == '') {
            $consulta['resp'] = '0';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '1';
            $consulta['data'] = $data['qr_location'];
            echo json_encode($consulta);
        }
    }

    public function update()
    {
        $studetsModel = new StudetsModel();
        $mail = new PHPMailer_lib();
        $id = $this->request->getVar('id');

        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile'  => $this->request->getVar('mobile')
        ];


        $correo = $mail->load();
        $correo->isSMTP();
        $correo->Host = 'smtp.gmail.com';
        $correo->Port = 465;
        $correo->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $correo->SMTPAuth = true;
        $correo->Username  = 'eduardoenrique.hernandez@gmail.com';
        $correo->Password = 'xgquztnppmjzgwuw';
        $correo->SMTPSecure = 'ssl';

        $correo->setFrom('eduardoenrique.hernandez@gmail.com', 'CodexWorld');
        $correo->addReplyTo($this->request->getPost('email'), 'Codexworld');
        $correo->addAddress($this->request->getPost('email'));
        $correo->Subject = 'Registro de Usuario Exitoso';
        $correo->isHTML(true);
        $mailcontent = "<h1>Bienvenido, Ya eres miembro!!</h1>
         <p>Tu contraseña para Ingresar es : </p>" . $this->request->getPost('password');

        $correo->Body = $mailcontent;

        if (!$correo->send()) {

            $consulta['resp'] = '2';
            $consulta['msj_error'] = $correo->ErrorInfo;
            echo json_encode($consulta);
        } else {

            $studetsModel->update($id, $data);

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        }
    }


    public function ajaxLoadData()
    {
        $studetsModel = new StudetsModel();
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


        $data = $studetsModel->where('company', $_SESSION['company'])->findAll();
        $total_count = $data;

        $lib = new Datatable($studetsModel, 'gp1', ['id', 'matricula', 'name', 'email', 'mobile', 'status', 'password', 'year_act', 'company', 'created_at', 'updated_at', 'deleted_at']);
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

    public function dash()
    {
        //$query_1 =$logMemberModel->getLastQuery();
        //var_dump($query_1[0]);
        $date = date('Y-m-d'); //date from database 
        $str2 = date('Y-m-d', strtotime('-6 days', strtotime($date)));

        $logMemberModel = new LogMemberModel();
        $logMemberModel->select('*');
        $logMemberModel->where('status_log', 'true');
        $logMemberModel->where('date <= "' . $date . '" and Date >= "' . $str2 . '"');
        $logMemberModel->where('year_act', $_SESSION['year_act']);
        $logMemberModel->where('company', $_SESSION['company']);
        $logMemberModel->orderBy('date', 'ASC');
        $query = $logMemberModel->get();


      

        $get_total = $query->getResult('array');

        $dia_res = [];
        $day_count=[];
        $z = 0;
        $y = 0;
        foreach ($get_total as $key => $value) {

            
            $dayofweek = date('l', strtotime($value['date']));

            if ($dayofweek == 'Monday') {
                $dia = 'L';
            } else if ($dayofweek == 'Tuesday') {
                $dia = 'M';
            } else if ($dayofweek == 'Wednesday') {
                $dia = 'X';
            } else if ($dayofweek == 'Thursday') {
                $dia = 'J';
            } else if ($dayofweek == 'Friday') {
                $dia = 'V';
            } else if ($dayofweek == 'Saturday') {
                $dia = 'S';
            } else {
                $dia = 'D';
            }
            $day_count[$y++]=$dia;
            $bandera = 1;
            foreach ($dia_res as $key => $day_d) {

               
                if ($day_d == $dia) {
                    
                    $bandera = 0;
                }
                else{
                    $bandera = 1;
                }
            }

            if ($bandera == 1) {
                $dia_res[$z++] = $dia;

            }
        }

        $datos_dias_totales=$this->contarValoresArray($day_count);


        $paysModel = new PaysModel();
        $paysModel->select('cost,date_in');
        $paysModel->where('year_act', $_SESSION['year_act']);
        $paysModel->where('company', $_SESSION['company']);
        $paysModel->orderBy('date_in', 'ASC');
        $query = $paysModel->get();
        $get_total = $query->getResult('array');
        $i = 0;
        $j = 0;
        $arr = [];
        $suma = 0;
        $data = count($get_total);


        foreach ($get_total as $key => $value) {
            if ($i == $data - 1) {
                $arr[$j] = $suma + $value['cost'];
                $suma = 0;
            } else {
                $fecha = $value['date_in'];
                $pieces = explode("-", $fecha);
                $pieces[1];
                $fecha = $get_total[$i + 1]['date_in'];
                $pieces_1 = explode("-", $fecha);
                $pieces_1[1];
                if ($pieces[1] == $pieces_1[1]) {
                    $suma = $value['cost'] + $suma;
                } else {
                    $arr[$j] = $suma + $value['cost'];
                    $suma = 0;
                    $j++;
                }
                $i++;
            }
        }




        $arr_dat = array();
        foreach ($arr as $key => $value) {
            $arr_dat[] = $value;
        }

        $mes = [];
        $mes_res = [];
        $j = -1;
        foreach ($get_total as $key => $value) {
            $fecha = $value['date_in'];
            $pieces = explode("-", $fecha);
            $pieces[1];


            if ($pieces[1] == '01') {
                $mes[$j + 1] = 'Ene';
            } else if ($pieces[1] == '02') {
                foreach ($mes as $key => $value) {
                    if ($value == '02') {
                    } else {
                        $mes[$j + 2] = 'Feb';
                    }
                }
            } else if ($pieces[1] == '03') {
                foreach ($mes as $key => $value) {
                    if ($value == '03') {
                    } else {
                        $mes[$j + 3] = 'Mar';
                    }
                }
            } else if ($pieces[1] == '04') {
                foreach ($mes as $key => $value) {
                    if ($value == '04') {
                    } else {
                        $mes[$j + 4] = 'Abr';
                    }
                }
            } else if ($pieces[1] == '05') {
                foreach ($mes as $key => $value) {
                    if ($value == '05') {
                    } else {
                        $mes[$j + 5] = 'May';
                    }
                }
            } else if ($pieces[1] == '06') {
                foreach ($mes as $key => $value) {
                    if ($value == '06') {
                    } else {
                        $mes[$j + 6] = 'Jun';
                    }
                }
            } else if ($pieces[1] == '07') {
                foreach ($mes as $key => $value) {
                    if ($value == '07') {
                    } else {
                        $mes[$j + 7] = 'Jul';
                    }
                }
            } else if ($pieces[1] == '08') {
                foreach ($mes as $key => $value) {
                    if ($value == '08') {
                    } else {
                        $mes[$j + 8] = 'Ago';
                    }
                }
            } else if ($pieces[1] == '09') {
                foreach ($mes as $key => $value) {
                    if ($value == '09') {
                    } else {
                        $mes[$j + 9] = 'Sep';
                    }
                }
            } else if ($pieces[1] == '10') {
                foreach ($mes as $key => $value) {
                    if ($value == '10') {
                    } else {
                        $mes[$j + 10] = 'Oct';
                    }
                }
            } else if ($pieces[1] == '11') {
                foreach ($mes as $key => $value) {
                    if ($value == '11') {
                    } else {
                        $mes[$j + 11] = 'Nov';
                    }
                }
            } else if ($pieces[1] == '12') {
                foreach ($mes as $key => $value) {
                    if ($value == '12') {
                    } else {
                        $mes[$j + 12] = 'Dic';
                    }
                }
            }
        }

        $k = 0;
        foreach ($mes as $key => $value) {

            $mes_res[$k++] = $value;
        }
        $data = [100, 100, 100, 100, 100, 100, 40];
        $consulta['datos_dias'] = $dia_res;
        $consulta['datos_dias_totales'] = $datos_dias_totales;
        $consulta['datos_entrada'] = $data;
        $consulta['datos_ingresos'] = $arr_dat;
        $consulta['mes'] = $mes_res;
        $consulta['resp'] = '1';

        echo json_encode($consulta);
    }


    public function get_plan()
    {
        $planModel = new PlansModel();

        $planModel->select('*');
        $planModel->where('status', 'true');
        $planModel->where('year_act', $_SESSION['year_act']);
        $planModel->where('company', $_SESSION['company']);
        $query = $planModel->get();

        if ($data = $query->getResult('array')) {

            //var_dump($data);
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
        $date = date('Y-m-d');

        $newDate = date('Y-m-d', strtotime($date . ' + ' .  $this->request->getPost('month') . ' months'));

       
        $data_plan = [
            'discount' => $this->request->getPost('discount'),
            'date_in' => $date,
            'date_out' => $newDate,
            'id_member' => $this->request->getPost('id'),
            'cost' => $this->request->getPost('cost'),
            'pay_status' => 'true',
            'year_act' => $_SESSION['year_act'],
            'company' => $_SESSION['company']

        ];


        if ($paysModel->save($data_plan)) {

            $studetsModel = new StudetsModel();

            $data = [
                'status' => 'true'
            ];

            $studetsModel->update($this->request->getPost('id'), $data);

            $consulta['resp'] = '1';
            echo json_encode($consulta);
        } else {

            $consulta['resp'] = '0';
            echo json_encode($consulta);
        }
    }

    public function planmember_store_test()
    {
        $date = date('Y-m-d');
        $paysModel = new PaysModel();
        $data = $this->request->getPost();

         $cost= $data['num']*$data['val'];

       
         if($data['type']=='day')
         {
            $newDate = date('Y-m-d', strtotime($date . ' + ' .  $data['num'] . ' day'));
         }
         else
         {
            $newDate = date('Y-m-d', strtotime($date . ' + ' .  $data['num'] . ' week'));
         }

         $data_plan = [
             'discount' => '',
             'date_in' => $date,
             'date_out' => $newDate,
             'id_member' => $this->request->getPost('id'),
             'cost' => $cost,
             'pay_status' => 'true',
             'year_act' => $_SESSION['year_act'],
             'company' => $_SESSION['company']
 
         ];
 
 
         if ($paysModel->save($data_plan)) {
 
             $studetsModel = new StudetsModel();
 
             $data = [
                 'status' => 'true'
             ];
 
             $studetsModel->update($this->request->getPost('id'), $data);
 
             $consulta['resp'] = '1';
             echo json_encode($consulta);
         } else {
 
             $consulta['resp'] = '0';
             echo json_encode($consulta);
         }

    }


    function timeDiff($firstTime, $lastTime)
    {
        $firstTime = strtotime($firstTime);
        $lastTime = strtotime($lastTime);
        $timeDiff = $lastTime - $firstTime;
        return $timeDiff;
    }
    function contarValoresArray($array)
{
	$contar=array();
 
	foreach($array as $value)
	{
		if(isset($contar[$value]))
		{
			// si ya existe, le añadimos uno
			$contar[$value]+=1;
		}else{
			// si no existe lo añadimos al array
			$contar[$value]=1;
		}
	}
	return $contar;
}
}
