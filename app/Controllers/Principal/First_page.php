<?php

namespace App\Controllers\Principal;

use App\Controllers\BaseController;
use App\Models\StudetsModel;
use App\Models\PaysModel;
use App\Models\ConfigModel;
use DateTime;
use DateTimeZone;

class First_page extends BaseController
{
    public function index()
    {
        $session = session();


        if ($session->get('usuario')) {
            $data = $this->get_dash();
            return view('Principal/view_dash', $data);
        } else {
            return view('Auth/Home');
        }
    }

    public function member()
    {
        $session = session();

        if ($session->get('usuario')) {
            return view('Principal/view_first');
        } else {
            return view('Auth/Home');
        }
    }

    public function dash()
    {
        $session = session();


        if ($session->get('usuario')) {

            $data = $this->get_dash();
            return view('Principal/view_dash', $data);
        } else {
            return view('Auth/Home');
        }
    }


    public function student()
    {
        var_dump("hostras_data");
        $session = session();

        if ($session->get('usuario')) {

            $config = new ConfigModel();
            $config->select('name_config,cost_config');
            $config->where('company', $_SESSION['company']);
            $query = $config->get();
            $pay_data = $query->getResult('array');
            var_dump($pay_data);
            $data = [
                'costo_mensualidad' => $pay_data[0]['cost_config'],
                'costo_semanal' => $pay_data[1]['cost_config'],
                'costo_dia' => $pay_data[2]['cost_config'],

            ];

            if ($session->get('usuario')) {
                return view('Student/view_student', $data);
            } else {
                return view('Auth/Home');
            }
        } else {
            return view('Auth/Home');
        }
    }

    public function plans()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Plans/view_plans');
        } else {
            return view('Auth/Home');
        }
    }

    public function position()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Position/view_position');
        } else {
            return view('Auth/Home');
        }
    }
    public function boot()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Auth/Home_in');
        } else {
            return view('Auth/Home');
        }
    }


    public function data()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Data/view_informative');
        } else {
            return view('Auth/Home');
        }
    }

    public function staff()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Staff/view_staff');
        } else {
            return view('Auth/Home');
        }
    }

    public function info_staff()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Data/view_info_staff');
        } else {
            return view('Auth/Home');
        }
    }

    public function info_member()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Data/view_info_member');
        } else {
            return view('Auth/Home');
        }
    }

    public function settings_pays()
    {
        $session = session();
        if ($session->get('usuario')) {
            return view('Settings/view_config_pays');
        } else {
            return view('Auth/Home');
        }
    }

    public function get_out()
    {
        $session = session();
        $session->destroy();
        return view('Auth/Home');
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
        $studetsModel->where('year_act', $_SESSION['year_act']);
        $studetsModel->where('company', $_SESSION['company']);
        $query = $studetsModel->get();
        $miembros_activos = $query->getResult('array');
        $miembros_activos = count($miembros_activos);
        $studetsModel->select();
        $studetsModel->where('status', 'false');
        $studetsModel->where('year_act', $_SESSION['year_act']);
        $studetsModel->where('company', $_SESSION['company']);
        $query = $studetsModel->get();
        $miembros_inactivos = $query->getResult('array');
        $miembros_inactivos = count($miembros_inactivos);

        $paysModel->select('cost,date_in');
        $paysModel->where('date_in >=', $mes_p_start);
        $paysModel->where('date_in <=', $mes_p_today);
        $paysModel->where('year_act', $_SESSION['year_act']);
        $paysModel->where('company', $_SESSION['company']);
        $query = $paysModel->get();
        $cost = $query->getResult('array');

        $ingresos_mensual_p = 0;
        foreach ($cost as $key => $value) {
            $ingresos_mensual_p = $value['cost'] + $ingresos_mensual_p;
        }
        $paysModel->where('date_in >=', $date_in);
        $paysModel->where('date_in <=', $date_last);
        $paysModel->where('year_act', $_SESSION['year_act']);
        $paysModel->where('company', $_SESSION['company']);
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
        $paysModel->where('year_act', $_SESSION['year_act']);
        $paysModel->where('company', $_SESSION['company']);
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
