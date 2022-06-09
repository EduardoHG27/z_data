<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\StudetsModel;
use App\Models\PaysModel;
use DateTime;
use DateTimeZone;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $data = $this->get_dash();
        if ($session->get('usuario')) {
            return view('Principal/view_dash', $data);
        } else {
            return view('Auth/Home');
        }
    }

    public function hola()
    {
        $to = "email@prueba.com";
        $subject = "Prueba";
        $message = "Un cron para enviar un email cada 5 minutos";
         
        mail($to, $subject, $message);
        
    }


    public function get_dash()
    {
        $now = new DateTime();
        $now->setTimezone(new DateTimeZone('America/Mexico_City'));
        $mes_p_today = date("Y-m-t", strtotime("-1 months"));
        $mes_p_start = date("Y-m-01", strtotime("-1 months"));


        $todays = $now->format('Y-m-d');
        $date_in = $now->format('Y-m-01');
        $date = strtotime($date_in);
        // Last date of current month.
        $lastdate = strtotime(date("Y-m-t", $date));
        // Day of the last date 
        $date_last = date("Y-m-t", $lastdate);

        $studetsModel = new StudetsModel();
        $paysModel = new PaysModel();
        $studetsModel->select();
        $studetsModel->where('status', 'true');
        $query = $studetsModel->get();
        $miembros_activos = $query->getResult('array');
        $miembros_activos = count($miembros_activos);
        $studetsModel->select();
        $studetsModel->where('status', 'false');
        $query = $studetsModel->get();
        $miembros_inactivos = $query->getResult('array');
        $miembros_inactivos = count($miembros_inactivos);




        $paysModel->select('cost,date_in');
        $paysModel->where('date_in >=', $mes_p_start);
        $paysModel->where('date_in <=', $mes_p_today);
        $query = $paysModel->get();
        $cost = $query->getResult('array');

        $ingresos_mensual_p = 0;
        foreach ($cost as $key => $value) {
            $ingresos_mensual_p = $value['cost'] + $ingresos_mensual_p;
        }
        $paysModel->where('date_in >=', $date_in);
        $paysModel->where('date_in <=', $date_last);
        $query = $paysModel->get();
        $cost = $query->getResult('array');
        $ingresos_mensual = 0;
        foreach ($cost as $key => $value) {
            $ingresos_mensual = $value['cost'] + $ingresos_mensual;
        }

        if ($ingresos_mensual_p == '0') {
            $porcentaje_mes = '0';
            $label_mes = 'danger';
        } else {

            $paysModel->select('cost,date_in');

            $porcentaje_mes = (($ingresos_mensual - $ingresos_mensual_p) / $ingresos_mensual_p) * 100;
            $porcentaje_mes = number_format($porcentaje_mes, 2);

            if ($porcentaje_mes > 0) {
                $label_mes = 'success';
            } else {
                $label_mes = 'danger';
            }
        }

        $ingresos_diario = 0;
        $paysModel->select('cost,date_in');
        $paysModel->where('date_in =', $todays);
        $query = $paysModel->get();
        $cost = $query->getResult('array');
        foreach ($cost as $key => $value) {
            $ingresos_diario = $value['cost'] + $ingresos_diario;
        }

        $data = [
            'miembros_activos' => $miembros_activos,
            'miembros_inactivos' => $miembros_inactivos,
            'ingresos_diario' => $ingresos_diario,
            'ingresos_mensual' => $ingresos_mensual,
            'porcentaje_mes' => $porcentaje_mes,
            'label_mes' => $label_mes
        ];

        return $data;
    }

}
