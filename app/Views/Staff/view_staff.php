<?= $this->extend('Front/layout/main') ?>
<?= $this->section('content') ?>

<?php $session = session(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/select/css/select2.min.css">


<script type="text/javascript" src="<?php echo base_url(); ?>/select/js/select2.js"></script>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Staff</li>
            </ol>
            <h3 class="font-weight-bolder mb-0"><?php echo $_SESSION['company'] ?></h3>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">

                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <b>Staff</b>
                    <span class="">
                        <div class="row text-center">
                            <div class="col-md-12">

                                <button id="btn-refresh" class="ejemplo1 btn-default">
                                    <div class="icono">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                    <a class="small-box-footere">Recargar Tabla <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </button>
                                <button id="btn_agregarstaff" class="ejemplo1 btn-info" data-toggle="modal" data-target="#addForma_Adq">
                                    <div class="icono">
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <a class="small-box-footere">Agregar Staff<i class="fa fa-arrow-circle-right"></i></a>
                                </button>
                                <button id="update_button" class="ejemplo1 btn-warning dis">
                                    <div class="icono">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                    <a class="small-box-footere">Modificar Staff<i class="fa fa-arrow-circle-right"></i></a>
                                </button>

                                <button id="btndelete" class="ejemplo1 bg-red dis eliminar">
                                    <div class="icono">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                    <a class="small-box-footere">Eliminar Staff <i class="fa fa-arrow-circle-right"></i></a>
                                </button>
                                <!--
                    <button id="btnActForm" class="ejemplo1 bg-green-active dis button1">
                        <div class="icono">
                            <i class="fas fa-check"></i>
                        </div>
                        <a class="small-box-footere">Activar Forma Adquisición<i class="fa fa-arrow-circle-right"></i></a>
                    </button>
                    <button id="btnDesForm" class="ejemplo1 bg-red-active dis button2">
                        <div class="icono">
                            <i class="fas fa-window-close"></i>
                        </div>
                        <a class="small-box-footere">Desactivar Forma Adquisición<i class="fa fa-arrow-circle-right"></i></a>
                    </button>

                    <button id="btnImprimir" class="ejemplo1 btn-info" onclick="delete_btn()">
                        <div class="icono">
                            <i class="fa fa-print"></i>
                        </div>
                        <a class="small-box-footere">Imprimir Reporte <i class="fa fa-arrow-circle-right"></i></a>
                    </button>

-->
                            </div>
                        </div>
                        <!--  <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block btn-sm col-sm-2 float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> <i class="fa fa-plus"></i>New</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="update_button" class="btn btn-primary btn-block btn-sm col-sm-2 float-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> <i class="fa fa-plus"></i>Update</button>
                    </div>
                </div>
            </div>-->
                        <label id="lbltipAddedComment">test</label>
                    </span>
                </div>
            </div>

            <div class="card-body">
                <hr>
                <div class="card-body">

                    <table class="table table-sm table-striped  table-bordered table-hover " id="tbl-students-data">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>






<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalTitle"></h4>
                <div id="ohsnap"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <br>

            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation" id="staff_pestaña">
                        <button class="nav-link pestaña active" id="staff" data-bs-toggle="tab" data-bs-target="#member_form" type="button" role="tab" aria-controls="home" aria-selected="true">Staff</button>
                    </li>
                    <li class="nav-item" role="presentation" id="plan_pestaña">
                        <button class="nav-link pestaña" style="" id="plan_button" data-bs-toggle="tab" data-bs-target="#plan_schedule" type="button" role="tab" aria-controls="profile" aria-selected="false">Asignar Horario</button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="member_form" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <br>

                            <form action="" id="registration">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label class="control-label">Matricula</label>
                                        <input type="text" class="form-control" name="txt_id" id="txt_id" placeholder="Matricula" readonly />
                                        <small><i>Leave this blank if you want to a auto generate ID no.</i></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div id="div_1" class="col-md-4">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" name="txt_name" id="txt_name" placeholder="Nombre" />
                                    </div>
                                    <div id="div_2" class="col-md-4">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="txt_email" id="txt_email" placeholder="Email" />
                                    </div>
                                    <div id="div_3" class="col-md-4">
                                        <label id="label_3" class="control-label">Mobile</label>
                                        <input type="number" class="form-control" name="txt_mobile" id="txt_mobile" placeholder="Telefono" min="1" />
                                    </div>

                                    <div id="div_5" class="col-md-4">
                                        <label id="label_4" class="control-label">Puesto</label>
                                        <select class="js-select2" id="plan_select" name='plan_select' style="width: 100%;">
                                            <option value="">Selecciona</option>
                                        </select>
                                    </div>
                                    <!--  <div id="div_5" class="col-md-4">
                                        
                                        <select class="js-select2" id="plan_select_1" name='item1' tyle="width: 100%;">
                                            <option value=''>Selecciona</option>
                                        </select>
                                     <div class="form-group">btnmodstaff
                                        <label id="label_4" class="control-label">Cargo</label>
                                            <select class="js-select2" id="plan_select" name='plan_select' style="width: 100%;">
                                                <option value="">Selecciona</option>
                                            </select>
                                        </div>
                                    </div>-->

                                    <div id="div_4" class="col-md-4">
                                        <label id="label_4" class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="Contraseña" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" id="btnstaff" class="btn btn-info">Crear Staff</button>
                                <button type="button" id="btnmodstaff" class="btn btn-info">Modificar Staff</button>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="plan_schedule" role="tabpanel" aria-labelledby="plan_button">
                        <div class="container">
                            <br>
                            <h3>Elegir Horario</h3>
                            <br>
                            <form action="" id="member-plan">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">

                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                       
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <label for="">Día</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label for="">Entrada</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <label for="">Salida</label>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    
                                    </div>
                                    <div class="col-md-2">
                                    <button type="button" class="bluew-button-clock" id="mod_hora" title="Copiar/Pegar Hora"><i class="fa fa-clock-o"></i></button>
                                    </div>
                                   
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Lunes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_lun1" name="appt" style="display:none" onchange="startTimeInput(event,'lun');">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_lun2" name="appt" style="display:none" value="12:59:48" onchange="endsTimeInput(event,'lun');">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_lun" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Martes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_mar1" name="appt_mar1" style="display:none" onchange="startTimeInput(event,'mar');">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_mar2" name="appt_mar2" value="12:59:48" onchange="endsTimeInput(event,'mar');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_mar" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check3" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Miercoles</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_mier1" name="appt_mar1" style="display:none" onchange="startTimeInput(event,'mier');">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_mier2" name="appt" value="12:59:48" onchange="endsTimeInput(event,'mier');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_mier" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check4" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Jueves</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_juev1" name="appt" style="display:none" onchange="startTimeInput(event,'juev');">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_juev2" name="appt" value="12:59:48" onchange="endsTimeInput(event,'juev');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_juev" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check5" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Viernes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_vier1" name="appt" onchange="startTimeInput(event,'vier');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_vier2" name="appt" value="12:59:48" onchange="endsTimeInput(event,'vier');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_vier" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check6" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Sabado</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_sab1" name="appt" onchange="startTimeInput(event,'sab');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_sab2" name="appt" value="12:59:48" onchange="endsTimeInput(event,'sab');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_sab" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-1" style="float:right;">
                                    </div>
                                    <div class="col-md-1" style="float:right;">
                                        <input type="checkbox" class="form-check-input" id="check7" name="option1" value="something">
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-check-label" for="check1">Domingo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input type="time" id="appt_dom1" name="appt" onchange="startTimeInput(event,'dom');" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            <input type="time" id="appt_dom2" name="appt" onchange="endsTimeInput(event,'dom');" value="12:59:48" style="display:none">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <label id="lblstats_dom" style="color:green; display:none;"></label>
                                        </div>
                                    </div>
                                </div>





                                <div class="row form-group">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                </div>

                                <div class="row form-group">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="bthorario" class="btn btn-info">Asignar Horario</button>
                                    <button type="button" id="bthorario_mod" class="btn btn-info">Modificar Horario</button>
                                    <!--    <button type="button" id="btn_copiar_horario" class="btn btn-info">Copiar Horario</button>-->
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="view_form" role="tabpanel" aria-labelledby="plan_button">
                        <div class="container">
                            <br>
                            <h3>Informacion de plan</h3>
                            <br>
                            <form action="" id="member-plan">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fecha Inicio</label>
                                            <input type="text" id="txt_date_1" name="txt_date_1" class="form-control" value="" readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fecha Final</label>
                                            <input type="text" id="txt_date_2" name="txt_date_2" class="form-control" value="300" readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Dias Vigentes</label>
                                            <input type="text" id="txt_days" name="txt_days" class="form-control" value="" readonly>

                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label class="control-label">Proximo pago</label>
                                        <input type="text" id="txt_date_next" name="txt_date_next" class="form-control" value="" readonly>
                                        <input type="text" id="txt_payid" name="txt_payid" class="form-control" value="" readonly>
                                    </div>
                                </div>
                            </form>

                            <div class="row form-group">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-2">

                                </div>

                                <div class="col-sm-3">
                                    <button type="button" id="btn_eliminarplan" class="btn btn-info">Eliminar Plan</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>

                </div>

            </div>

            <div class="modal-footer">

            </div>
        </div>


    </div>
</div>


<div class="modal fade" id="Modalqr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalTitle"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                        <img id="image_qr" name="image_qr" width="300" height="300">
                    </div>
                    <div class="col-md-8">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<link rel="stylesheet" href="<?php echo base_url(); ?>/select/css/rSlider.min.css">



<script src="<?php echo base_url(); ?>/select/js/rSlider.min.js"></script>

<script>
    (function() {
        'use strict';

        var init = function() {

            var slider2 = new rSlider({
                target: '#slider2',
                values: [0, 1, 2, 3, 4, 5, 6, '7', 8],
                range: false,
                set: [5],
                tooltip: false,
                onChange: function(vals) {}
            });

            var slider3 = new rSlider({
                target: '#slider3',
                values: {
                    min: 7,
                    max: 24
                },
                step: 1,
                range: true,
                set: [10],
                scale: false,
                labels: false,
                onChange: function(vals) {

                }
            });
            var slider4 = new rSlider({
                target: '#slider4',
                values: {
                    min: 7,
                    max: 24
                },
                step: 1,
                range: true,
                set: [10, 40],
                scale: false,
                labels: false,

            });

            var slider = new rSlider({
                target: '#slider',
                values: [2014, 2015, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, ],
                range: true,
                set: [2010, 2013],
                onChange: function(vals) {
                    console.log(vals);
                }
            });
        };
        window.onload = init;
    })();
</script>






<style>
    #plan_select {
        color: red;
        background-color: #acf;
    }

    #registration .error {
        color: red;
    }

    #member-plan .error {
        color: red;
    }
</style>
<script>
    var site_url = "<?php echo base_url(); ?>";

    document.getElementById('txt_payid').style.display = 'none';

    $(document).ready(function() {



        get_rol();
        $("#plan_select").select2({
            dropdownParent: $("#exampleModal"),
            theme: "classic"
        });

        $(".js-select2").select2({
            dropdownParent: $("#exampleModal"),
            closeOnSelect: false
        });

        $(".js-select3").select2({
            dropdownParent: $("#tbl-students-data"),
            closeOnSelect: false
        });



        $('#plan_select').on('change', function() {
            if ($('#plan_select').select2('val') != null) {
                data = $('#plan_select').select2('data')[0];

                $.ajax({
                    url: site_url + '/student/student_data',
                    method: "post",
                    data: {
                        id: data['id']
                    },
                    success: function(resp) {
                        var result = $.parseJSON(resp);



                        if (result.resp == 1) {
                            monto = $('#txt_valor').val();

                            mes = result.data['month'];

                            res_1 = monto * mes;
                            descuento = result.data['discount'] / 100;
                            descuento = descuento * res_1
                            total = res_1 - descuento;


                            $('#txt_desc').val(result.data['discount']);
                            $('#txt_total').val(total);




                            table.ajax.reload();
                            //	setTimeout(function() {
                            //		location.reload()
                            //	}, 1000)
                        } else if (resp == 2) {
                            $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                            end_load();
                        }
                    }
                });
            }
        });

        var selected = [];




        /*
        $('#tbl-students-data tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });
*/

        $('#tbl-students-data thead tr').clone(true).appendTo('#tbl-students-data thead');
        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+1):nth-child(-n+5)').each(function(i) {
            var title = $(this).text();
            $(this).html('<input id="txt_' + i + '" type="text" class="form-control form-control-sm" placeholder="' + title + '" />');
            $('input', this).on('keyup change', function() {
                if (table.column(i).search() !== this.value) {
                    table
                        .column(i)
                        .search(this.value)
                        .draw();
                }
            });
        });

        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+6)').each(function(i) {
            $(this).html('<select id="status" name="status" class="form-control input-sm" style="width:100%">' +
                '<option value="0">Selecciona</option><option value="1">Activo</option><option value="2">No activo</option></select>');
            $('select', this).on('change', function() {
                if (table.column(5).search() !== this.value) {
                    table
                        .column(5)
                        .search(this.value)
                        .draw();
                }
            });
        });
        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+7)').each(function(i) {
            $(this).html('<button type="button" class="blue-button-min" onclick="limpiar()">Limpiar<i class="fa fa-eraser" aria-hidden="true"></i></button>');
        });

        // DataTable
        table = $('#tbl-students-data').DataTable({
            paging: true,
            fixedHeader: true,
            lengthChange: true,
            pageLength: 5,
            lengthMenu: [
                [5, 10, 15, 1000],
                [5, 10, 15, "Todos"]
            ],
            select: "multi",
            bProcessing: true,
            serverSide: true,
            scrollY: "400px",
            scrollCollapse: true,
            ajax: {
                url: site_url + "/staff/staff-ajax-load", // json datasource
                type: "post",
                data: {
                    // key1: value1 - in case if we want send data with request
                }
            },
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
            },
            order: [
                [1, "desc"]
            ],
            columns: [{
                    data: "id_staff",
                    'orderable': true,
                },
                {
                    data: "name",
                    'orderable': true,
                    'searchable': true
                },
                {
                    data: "email"
                },
                {
                    data: "mobile"
                }, {
                    data: "name_position"
                },
                {


                    data: null,
                    'orderable': false,

                    render: function(data, type, row) {

                        if (row.status == "true") {
                            return '<div >' +
                                '<button type="button" class="green-button" onclick="change_status(' + row.id_staff + ')" data-toggle="tooltip" data-placement="top" title="Estatus" >Activo</button>' +
                                '</div>';
                        } else {
                            return '<div >' +
                                '<button  class="red-button" onclick="change_status(' + row.id_staff + ')" title="Estatus" >No activo</button>' +
                                '</div>';
                        }

                    }

                },
                {
                    'orderable': false,
                    render: function(data, type, row) {
                        /*
                                                return '<div class="btn-group">' +
                                                    '<button type="button" class="btn btn-primary btn-flat btn-sm visible-lg-inline-block" data-toggle="modal" data-target="#addTramite" onclick="edit(' + row.id + ')">Modificar</button>' +
                                                    '<button type="button" class="btn btn-primary btn-flat btn-sm dropdown-toggle" data-toggle="dropdown">' +
                                                    '<span class="caret"></span>' +
                                                    '<span class="sr-only">Opciones</span>' +
                                                    '</button>' +
                                                    '</div>';*/
                        return '<div >' +
                            '<button class="red-button-min" onclick="eliminar(' + row.id_staff + ')"><i class="fas fa-trash-alt"></i></button>' +
                            '<button class="yellow-button-min" onclick="actualizar(' + row.id_staff + ')"><i class="fa fa-pencil-square-o"></i></button>' +
                            '<button class="bluew-button-min" onclick="get_qr(' + row.id_staff + ')"><i class="fa fa-qrcode"></i></button>' +
                            '</div>';
                    }
                },
            ],
            columnDefs: [{
                orderable: false,
                targets: [0, 1, 2, 3]
            }],
            bFilter: true,
            // to display datatable search
        });




        $("#mod_hora").click(function() {

            domingo_1 = $('#appt_lun1').val();
            domingo_2 = $('#appt_lun2').val();

            agregar_hora(domingo_1, domingo_2);

            
        });


        function agregar_hora(hour_in, hour_out) {


            remember_2=document.getElementById('check2');
            remember_3=document.getElementById('check3');
            remember_4=document.getElementById('check4');
            remember_5=document.getElementById('check5');
            remember_6=document.getElementById('check6');
            remember_7=document.getElementById('check7');

            if(remember_2.checked)
            {
              
          
                document.getElementById('appt_mar1').value = hour_in;
                document.getElementById('appt_mar2').value = hour_out;
                startTimeInput_fijo('mar');
            }
            
            if(remember_3.checked)
            {
             
                document.getElementById('appt_mier1').value = hour_in;
                document.getElementById('appt_mier2').value = hour_out;
                startTimeInput_fijo('mier');   
            }

            if(remember_4.checked)
            {
                
              
                document.getElementById('appt_juev1').value = hour_in;
                document.getElementById('appt_juev2').value = hour_out;
                startTimeInput_fijo('juev');
            }


            if(remember_5.checked)
            {
                
               
                document.getElementById('appt_vier1').value = hour_in;
                document.getElementById('appt_vier2').value = hour_out;
                startTimeInput_fijo('vier');
            }


            if(remember_6.checked)
            {
              
                document.getElementById('appt_sab1').value = hour_in;
                document.getElementById('appt_sab2').value = hour_out;
                startTimeInput_fijo('sab');
            }


            if(remember_7.checked)
            {
               
                document.getElementById('appt_dom1').value = hour_in;
                document.getElementById('appt_dom2').value = hour_out;
                startTimeInput_fijo('dom');
            }
            /*
            remember_2=document.getElementById('check2');
            remember_3=document.getElementById('check3');

            if (remember_2.checked) {
                document.getElementById('appt_mar1').value = hour_in;
                document.getElementById('appt_mar2').value = hour_out;
                console.log("Si2");
            }
            else{
                console.log("data2");
            }


            if (remember_2.checked) {
                document.getElementById('appt_mier1').value = hour_in;
                document.getElementById('appt_mier2').value = hour_out;
                console.log("Si3");
            }
            else{
                console.log("data3");
            }

            if (document.getElementById('check2').checked) {
                document.getElementById('appt_juev1').value = hour_in;
                document.getElementById('appt_juev2').value = hour_out;
                console.log("Si4");

            }
            else{
                console.log("data4");
            }


            if (document.getElementById('check2').checked) {

                document.getElementById('appt_vier1').value = hour_in;
                document.getElementById('appt_vier2').value = hour_out;
                console.log("Si5");
            }
            else{
                console.log("data5");
            }

            if (document.getElementById('check2').checked) {
                document.getElementById('appt_sab1').value = hour_in;
                document.getElementById('appt_sab2').value = hour_out;
                console.log("Si6");
            }
            else{
                console.log("data6");
            }

            if (document.getElementById('check2').checked) {
                document.getElementById('appt_dom1').value = hour_in;
                document.getElementById('appt_dom2').value = hour_out;
                console.log("Si7");
            }
            else{
                console.log("data7");
            }


*/
        }

        $("#btndelete").click(function() {
            start_load();
            let data = table.rows('.selected').data()[0];


            if (data === undefined) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: 'Debes seleccionar un registro de la tabla'
                })
                end_load();
            } else {

                eliminar(data['id_staff']);
            }
        });

        const checkbox = document.getElementById('check1')

        checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_lun1').style.display = 'block';
                document.getElementById('appt_lun2').style.display = 'block';

                document.getElementById('appt_lun1').value = '';
                document.getElementById('appt_lun2').value = '';



            } else {

                document.getElementById('appt_lun1').style.display = 'none';
                document.getElementById('appt_lun2').style.display = 'none';

                document.getElementById('appt_lun1').value = '';
                document.getElementById('appt_lun2').value = '12:59:48';


                var labelText = document.getElementById('lblstats_lun');
                labelText.innerHTML = '';
            }
        })

        const checkbox2 = document.getElementById('check2')

        checkbox2.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_mar1').style.display = 'block';
                document.getElementById('appt_mar2').style.display = 'block';
                document.getElementById('lblstats_mar').style.display = 'block';
                document.getElementById('appt_mar1').value = '';
                document.getElementById('appt_mar2').value = '';
            } else {

                document.getElementById('appt_mar1').style.display = 'none';
                document.getElementById('appt_mar2').style.display = 'none';
                document.getElementById('lblstats_mar').style.display = 'none';
                document.getElementById('appt_mar1').value = '';
                document.getElementById('appt_mar2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_mar');
                labelText.innerHTML = '';
            }
        })

        const checkbox3 = document.getElementById('check3')

        checkbox3.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_mier1').style.display = 'block';
                document.getElementById('appt_mier2').style.display = 'block';


                document.getElementById('appt_mier1').value = '';
                document.getElementById('appt_mier2').value = '';
            } else {

                document.getElementById('appt_mier1').style.display = 'none';
                document.getElementById('appt_mier2').style.display = 'none';

                document.getElementById('appt_mier1').value = '';
                document.getElementById('appt_mier2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_mier');
                labelText.innerHTML = '';
            }
        })

        const checkbox4 = document.getElementById('check4')

        checkbox4.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_juev1').style.display = 'block';
                document.getElementById('appt_juev2').style.display = 'block';


                document.getElementById('appt_juev1').value = '';
                document.getElementById('appt_juev2').value = '';
            } else {

                document.getElementById('appt_juev1').style.display = 'none';
                document.getElementById('appt_juev2').style.display = 'none';


                document.getElementById('appt_juev1').value = '';
                document.getElementById('appt_juev2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_juev');
                labelText.innerHTML = '';
            }
        })

        const checkbox5 = document.getElementById('check5')

        checkbox5.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_vier1').style.display = 'block';
                document.getElementById('appt_vier2').style.display = 'block';


                document.getElementById('appt_vier1').value = '';
                document.getElementById('appt_vier2').value = '';
            } else {

                document.getElementById('appt_vier1').style.display = 'none';
                document.getElementById('appt_vier2').style.display = 'none';
                document.getElementById('appt_vier1').value = '';
                document.getElementById('appt_vier2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_vier');
                labelText.innerHTML = '';
            }
        })

        const checkbox6 = document.getElementById('check6')

        checkbox6.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_sab1').style.display = 'block';
                document.getElementById('appt_sab2').style.display = 'block';


                document.getElementById('appt_sab1').value = '';
                document.getElementById('appt_sab2').value = '';
            } else {

                document.getElementById('appt_sab1').style.display = 'none';
                document.getElementById('appt_sab2').style.display = 'none';

                document.getElementById('appt_sab1').value = '';
                document.getElementById('appt_sab2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_sab');
                labelText.innerHTML = '';
            }
        })

        const checkbox7 = document.getElementById('check7')

        checkbox7.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {

                document.getElementById('appt_dom1').style.display = 'block';
                document.getElementById('appt_dom2').style.display = 'block';


                document.getElementById('appt_dom1').value = '';
                document.getElementById('appt_dom2').value = '';
            } else {

                document.getElementById('appt_dom1').style.display = 'none';
                document.getElementById('appt_dom2').style.display = 'none';

                document.getElementById('appt_dom1').value = '';
                document.getElementById('appt_dom2').value = '12:59:48';

                var labelText = document.getElementById('lblstats_dom');
                labelText.innerHTML = '';
            }
        })



        function disable_tabs() {
            document.getElementById("plan_pestaña").classList.remove('enableTab');
            document.getElementById("plan_pestaña").classList.remove('active');
            document.getElementById("plan_pestaña").classList.remove('disabledTab');
            document.getElementById("staff").classList.remove('enableTab');
            document.getElementById("plan_pestaña").classList.add('disabledTab');

        }

        var div_1 = document.getElementById("div_1");
        var div_2 = document.getElementById("div_2");
        var div_3 = document.getElementById("div_3");
        var div_4 = document.getElementById("div_4");
        var div_5 = document.getElementById("div_5");


        $(".exampleModal").draggable({
            handle: ".modal-header"
        });

        $(".modal-header").on("mousedown", function(mousedownEvt) {
            var $draggable = $(this);
            var x = mousedownEvt.pageX - $draggable.offset().left,
                y = mousedownEvt.pageY - $draggable.offset().top;
            $("body").on("mousemove.draggable", function(mousemoveEvt) {
                $draggable.closest(".modal-dialog").offset({
                    "left": mousemoveEvt.pageX - x,
                    "top": mousemoveEvt.pageY - y
                });
            });
            $("body").one("mouseup", function() {
                $("body").off("mousemove.draggable");
            });
            $draggable.closest(".modal").one("bs.modal.hide", function() {
                $("body").off("mousemove.draggable");
            });
        });


        $("#btn_agregarstaff").click(function() {
            document.getElementById('view_form').style.display = 'none';
            $("#registration").data('validator').resetForm();
            $("#member-plan").data('validator').resetForm();
            remove_red();

            //validator.resetForm();
            $('.modal-title').text('Agregar | Staff');
            $('#exampleModal').modal('show');

            $('#txt_id').val('');
            $('#txt_name').val('');
            $('#txt_email').val('');
            $('#txt_mobile').val('');
            $('#btnstaff').show();
            $('#btnmodstaff').hide();
            $('#btnactializar_est').hide();


            document.getElementById("plan_schedule").classList.remove('show');
            document.getElementById("plan_schedule").classList.remove('active');

            document.getElementById("view_form").classList.remove('show');
            document.getElementById("view_form").classList.remove('active');


            document.getElementById('plan_pestaña').style.display = 'block';

            document.getElementById("member_form").classList.add('active');
            document.getElementById("member_form").classList.add('show');
            document.getElementById("plan_pestaña").classList.add('disabledTab');




            $('#plan_button').attr("style", "opacity:0.4");
            $('#plan_pestaña').attr("class", "disabledTab");
            $('#msg').html('')

        });


        $("#update_button").click(function() {

            remove_red();
            $("#member-plan").data('validator').resetForm();
            $('#plan_select ').val('0');

            $('#msg').html('')
            //  $('#miembro_pestaña').attr("class", "enabledTab");
            let data = table.rows('.selected').data()[0];
            if (data === undefined) {

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'error',
                    title: 'Debes seleccionar un registro de la tabla'
                })
            } else {
                actualizar(data['id_staff']);
            }
        });




        $('#tbl-students-data tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                table.$('tr.selected').removeClass('selected')
            } else {
                table.$('tr.selected').removeClass('selected');
                data = table.row(this).data();
                document.getElementById('lbltipAddedComment').innerHTML = data.id_staff;
                $(this).addClass('selected')
                $('#update_button').prop('disabled', false)
            }
        });
    });







    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        error
        return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
    });


    jQuery(function($) {
        var validator = $('#news_action').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {},
            highlight: function(element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('error')
            }
        });
    });

    $(function() {
        $("#myform").validate({
            rules: {
                item: {
                    required: true
                }
            }
        });
    });

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Solo se aceptan letras en este campo");

    var $registrationForm = $('#registration');
    if ($registrationForm.length) {
        $registrationForm.validate({
            rules: {
                txt_name: {
                    required: true,
                    lettersonly: true
                },
                txt_email: {
                    required: true,
                    email: true,
                },
                txt_mobile: {
                    required: true
                },
                txt_password: {
                    required: true
                },
                plan_select: {
                    required: true
                }
            },
            messages: {
                txt_name: {
                    required: 'El campo Nombre esta vacio!',
                },
                txt_email: {
                    required: 'El campo Email esta vacio!',
                    email: 'Please enter valid email!'
                },
                txt_mobile: {
                    required: 'El campo Telefono esta vacio!!'
                },
                txt_password: {
                    required: 'Ingrese contraseña!'
                },
                plan_select: {
                    required: 'El campo Puesto esta vacio!!'
                }
            },
            highlight: function(element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('error')
            }

        });
    }




    var $planForm = $('#member-plan');
    if ($planForm.length) {
        $planForm.validate({
            rules: {
                txt_total: {
                    required: true,
                }
            },
            messages: {
                txt_total: {
                    required: 'Please enter username!'
                }
            },
            highlight: function(element) {
                $(element).parent().addClass('error')
            },
            unhighlight: function(element) {
                $(element).parent().removeClass('error')
            }

        });
    }

    $("#btn-refresh").click(function() {
        start_load();
        table.ajax.reload();
        end_load();
    });



    $("#bthorario_mod").click(function() {

        resp = 1;
        lunes_1 = $('#appt_lun1').val();
        lunes_2 = $('#appt_lun2').val();
        lunes_lbl = $('#lblstats_lun').val();
        lunes_lbl = document.getElementById('lblstats_lun').textContent

        martes_1 = $('#appt_mar1').val();
        martes_2 = $('#appt_mar2').val();
        martes_lbl = $('#lblstats_mar').val();
        martes_lbl = document.getElementById('lblstats_mar').textContent

        miercoles_1 = $('#appt_mier1').val();
        miercoles_2 = $('#appt_mier2').val();
        miercoles_lbl = $('#lblstats_mier').val();
        miercoles_lbl = document.getElementById('lblstats_mier').textContent

        jueves_1 = $('#appt_juev1').val();
        jueves_2 = $('#appt_juev2').val();
        jueves_lbl = $('#lblstats_juev').val();
        jueves_lbl = document.getElementById('lblstats_juev').textContent

        viernes_1 = $('#appt_vier1').val();
        viernes_2 = $('#appt_vier2').val();
        viernes_lbl = document.getElementById('lblstats_vier').textContent

        sabado_1 = $('#appt_sab1').val();
        sabado_2 = $('#appt_sab2').val();
        sabado_lbl = document.getElementById('lblstats_sab').textContent

        domingo_1 = $('#appt_dom1').val();
        domingo_2 = $('#appt_dom2').val();
        domingo_lbl = document.getElementById('lblstats_dom').textContent

        const ban = [];

        if (lunes_2 == '12:59:48' && martes_2 == '12:59:48' && miercoles_2 == '12:59:48' && jueves_2 == '12:59:48' && viernes_2 == '12:59:48' && sabado_2 == '12:59:48' && domingo_2 == '12:59:48') {

            ohSnap('Aviso!!: No se ha seleccionado ningun dia!', {
                color: 'red'
            });
            resp = 0;
        } else {

            if (lunes_2 == '' && lunes_1 == '') {
                ohSnap('Aviso!!: Dia Lunes vacio!', {
                    color: 'red'
                });
            } else if (lunes_2 == '12:59:48') {
                banderal = 'vacio';
                ban[0] = banderal;
            } else if (lunes_2 == '') {
                ohSnap('Aviso!!: Dia Lunes salida Vacio', {
                    color: 'red'
                });
            } else if (lunes_1 == '') {

                ohSnap('Aviso!!: Lunes entrada Vacio', {
                    color: 'red'
                });

            } else {

                ban[0] = lunes_1 + '/' + lunes_2 + '/lunes/' + lunes_lbl;

            }

            if (martes_2 == '' && martes_1 == '') {
                ohSnap('Aviso!!: Dia Martes vacio!', {
                    color: 'red'
                });
            } else if (martes_2 == '12:59:48') {
                ban[1] = 'vacio';
            } else if (martes_2 == '') {
                ohSnap('Aviso!!: Dia Martes salida Vacio', {
                    color: 'red'
                });
            } else if (martes_1 == '') {
                ohSnap('Aviso!!: Dia Martes entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[1] = martes_1 + '/' + martes_2 + '/martes/' + martes_lbl;
            }

            if (miercoles_2 == '' && miercoles_1 == '') {
                ohSnap('Aviso!!: Dia Miercoles vacio!', {
                    color: 'red'
                });
            } else if (miercoles_2 == '12:59:48') {
                ban[2] = 'vacio';
            } else if (miercoles_2 == '') {
                ohSnap('Aviso!!: Dia Miercoles salida Vacio', {
                    color: 'red'
                });
            } else if (miercoles_1 == '') {
                ohSnap('Aviso!!: Dia Miercoles entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[2] = miercoles_1 + '/' + miercoles_2 + '/miercoles/' + miercoles_lbl;
            }

            if (jueves_2 == '' && jueves_1 == '') {
                ohSnap('Aviso!!: Dia Jueves vacio!', {
                    color: 'red'
                });
            } else if (jueves_2 == '12:59:48') {
                ban[3] = 'vacio';
            } else if (jueves_2 == '') {
                ohSnap('Aviso!!: Dia Jueves salida Vacio', {
                    color: 'red'
                });
            } else if (jueves_1 == '') {
                ohSnap('Aviso!!: Dia Jueves entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[3] = jueves_1 + '/' + jueves_2 + '/jueves/' + jueves_lbl;
            }

            if (viernes_2 == '' && viernes_1 == '') {
                ohSnap('Aviso!!: Dia Viernes vacio!', {
                    color: 'red'
                });
            } else if (viernes_2 == '12:59:48') {
                ban[4] = 'vacio';
            } else if (viernes_2 == '') {
                ohSnap('Aviso!!: Dia Jueves salida Vacio', {
                    color: 'red'
                });
            } else if (viernes_1 == '') {
                ohSnap('Aviso!!: Dia Viernes entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[4] = viernes_1 + '/' + viernes_2 + '/viernes/' + viernes_lbl;
            }

            if (sabado_2 == '' && sabado_1 == '') {
                ohSnap('Aviso!!: Dia Sabado vacio!', {
                    color: 'red'
                });
            } else if (sabado_2 == '12:59:48') {
                ban[5] = 'vacio';
            } else if (sabado_2 == '') {
                ohSnap('Aviso!!: Dia Sabado salida Vacio', {
                    color: 'red'
                });
            } else if (sabado_1 == '') {
                ohSnap('Aviso!!: Dia Sabado entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[5] = sabado_1 + '/' + sabado_2 + '/sabado/' + sabado_lbl;
            }

            if (domingo_2 == '' && domingo_1 == '') {
                ohSnap('Aviso!!: Dia Domingo vacio!', {
                    color: 'red'
                });
                ban[6] = null;
            } else if (domingo_2 == '12:59:48') {
                ban[6] = 'vacio';
            } else if (domingo_2 == '') {
                ohSnap('Aviso!!: Dia Domingo salida Vacio', {
                    color: 'red'
                });
                banderad = 3;
            } else if (domingo_1 == '') {
                ohSnap('Aviso!!: Dia Domingo entrada Vacio', {
                    color: 'red'
                });
                banderad = 3;
            } else {
                banderad = 1;
                ban[6] = domingo_1 + '/' + domingo_2 + '/domingo/' + domingo_lbl;
            }
        }

        for (let index = 0; index < ban.length; index++) {

            if (ban[index] == null) {
                console.log("no pasa");
                resp = 0;
                break;
            }
        }


        id_staff = $('#txt_id').val();

        if (resp == 1) {
            document.getElementById("plan_button").disabled = false;
            txt_id
            var data = {
                'data': ban,
                'id_staff': id_staff
            };
            $.ajax({
                url: site_url + '/staff/day_schedule_mod',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);
                    if (result.resp == 0) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Horario asignado correctamente!!'
                        })
                        table.ajax.reload();
                        end_load();
                    } else if (result.resp == 2) {
                        data = result.msj_error;
                        $('#msg').html('<div class="alert alert-danger">Error al enviar correo:' + data + '</div>')
                        end_load();
                    } else if (result.resp == 7) {
                        ohSnap('Aviso!!: Revisar Horario asignado al Staff', {
                            color: 'red'
                        });
                    } else {
                        $('#msg').html('<div class="alert alert-danger">Error al Modificar el Horario</div>')
                    }
                    table.ajax.reload();
                }
            })
        }
    });

    $("#bthorario").click(function() {

        resp = 1;
        lunes_1 = $('#appt_lun1').val();
        lunes_2 = $('#appt_lun2').val();

        martes_1 = $('#appt_mar1').val();
        martes_2 = $('#appt_mar2').val();


        miercoles_1 = $('#appt_mier1').val();
        miercoles_2 = $('#appt_mier2').val();


        jueves_1 = $('#appt_juev1').val();
        jueves_2 = $('#appt_juev2').val();


        viernes_1 = $('#appt_vier1').val();
        viernes_2 = $('#appt_vier2').val();


        sabado_1 = $('#appt_sab1').val();
        sabado_2 = $('#appt_sab2').val();


        domingo_1 = $('#appt_dom1').val();
        domingo_2 = $('#appt_dom2').val();

        const ban = [];

        if (lunes_2 == '12:59:48' && martes_2 == '12:59:48' && miercoles_2 == '12:59:48' && jueves_2 == '12:59:48' && viernes_2 == '12:59:48' && sabado_2 == '12:59:48' && domingo_2 == '12:59:48') {

            ohSnap('Aviso!!: No se ha seleccionado ningun dia!', {
                color: 'red'
            });
            resp = 0;
        } else {

            if (lunes_2 == '' && lunes_1 == '') {
                ohSnap('Aviso!!: Dia Lunes vacio!', {
                    color: 'red'
                });
            } else if (lunes_2 == '12:59:48') {
                banderal = 'vacio';
                ban[0] = banderal;
            } else if (lunes_2 == '') {
                ohSnap('Aviso!!: Dia Lunes salida Vacio', {
                    color: 'red'
                });
            } else if (lunes_1 == '') {

                ohSnap('Aviso!!: Lunes entrada Vacio', {
                    color: 'red'
                });

            } else {

                ban[0] = lunes_1 + '-' + lunes_2 + '-lunes';

            }

            if (martes_2 == '' && martes_1 == '') {
                ohSnap('Aviso!!: Dia Martes vacio!', {
                    color: 'red'
                });
            } else if (martes_2 == '12:59:48') {
                ban[1] = 'vacio';
            } else if (martes_2 == '') {
                ohSnap('Aviso!!: Dia Martes salida Vacio', {
                    color: 'red'
                });
            } else if (martes_1 == '') {
                ohSnap('Aviso!!: Dia Martes entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[1] = martes_1 + '-' + martes_2 + '-martes';;
            }

            if (miercoles_2 == '' && miercoles_1 == '') {
                ohSnap('Aviso!!: Dia Miercoles vacio!', {
                    color: 'red'
                });
            } else if (miercoles_2 == '12:59:48') {
                ban[2] = 'vacio';
            } else if (miercoles_2 == '') {
                ohSnap('Aviso!!: Dia Miercoles salida Vacio', {
                    color: 'red'
                });
            } else if (miercoles_1 == '') {
                ohSnap('Aviso!!: Dia Miercoles entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[2] = miercoles_1 + '-' + miercoles_2 + '-miercoles';
            }

            if (jueves_2 == '' && jueves_1 == '') {
                ohSnap('Aviso!!: Dia Jueves vacio!', {
                    color: 'red'
                });
            } else if (jueves_2 == '12:59:48') {
                ban[3] = 'vacio';
            } else if (jueves_2 == '') {
                ohSnap('Aviso!!: Dia Jueves salida Vacio', {
                    color: 'red'
                });
            } else if (jueves_1 == '') {
                ohSnap('Aviso!!: Dia Jueves entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[3] = jueves_1 + '-' + jueves_2 + '-jueves';
            }

            if (viernes_2 == '' && viernes_1 == '') {
                ohSnap('Aviso!!: Dia Viernes vacio!', {
                    color: 'red'
                });
            } else if (viernes_2 == '12:59:48') {
                ban[4] = 'vacio';
            } else if (viernes_2 == '') {
                ohSnap('Aviso!!: Dia Jueves salida Vacio', {
                    color: 'red'
                });
            } else if (viernes_1 == '') {
                ohSnap('Aviso!!: Dia Viernes entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[4] = viernes_1 + '-' + viernes_2 + '-viernes';;
            }

            if (sabado_2 == '' && sabado_1 == '') {
                ohSnap('Aviso!!: Dia Sabado vacio!', {
                    color: 'red'
                });
            } else if (sabado_2 == '12:59:48') {
                ban[5] = 'vacio';
            } else if (sabado_2 == '') {
                ohSnap('Aviso!!: Dia Sabado salida Vacio', {
                    color: 'red'
                });
            } else if (sabado_1 == '') {
                ohSnap('Aviso!!: Dia Sabado entrada Vacio', {
                    color: 'red'
                });
            } else {
                ban[5] = sabado_1 + '-' + sabado_2 + '-sabado';;
            }

            if (domingo_2 == '' && domingo_1 == '') {
                ohSnap('Aviso!!: Dia Domingo vacio!', {
                    color: 'red'
                });
            } else if (domingo_2 == '12:59:48') {
                ban[6] = 'vacio';
            } else if (domingo_2 == '') {
                ohSnap('Aviso!!: Dia Domingo salida Vacio', {
                    color: 'red'
                });
                banderad = 3;
            } else if (domingo_1 == '') {
                ohSnap('Aviso!!: Dia Domingo entrada Vacio', {
                    color: 'red'
                });
                banderad = 3;
            } else {
                banderad = 1;
                ban[6] = domingo_1 + '-' + domingo_2 + '-domingo';
            }
        }




        for (let index = 0; index < ban.length; index++) {

            if (ban[index] == null) {
                console.log("no pasa");
                resp = 0;
                break;
            }
        }


        id_staff = $('#txt_id').val();
        console.log(id_staff);

        if (resp == 1) {
            document.getElementById("plan_button").disabled = false;
            txt_id
            var data = {
                'data': ban,
                'id_staff': id_staff
            };
            $.ajax({
                url: site_url + '/staff/day_schedule',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);
                    if (result.resp == 0) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Horario de Staff registrado correctamente'
                        })
                        table.ajax.reload();
                    } else if (result.resp == 2) {
                        data = result.msj_error;
                        plan_pestaña
                        $('#msg').html('<div class="alert alert-danger">Error al enviar correo:' + data + '</div>')
                        end_load();
                    } else {
                        $('#msg').html('<div class="alert alert-danger">Nombre y/o correo ya registrado</div>')
                    }

                }
            })


        }
    });

    $("#btnmodstaff").click(function() {
        //   $('#txt_valor').val('300');
        if ($("#registration").valid() == false) {

            return;
        } else {

            document.getElementById("plan_button").disabled = false;
            if ($('#plan_select').select2('val') != null) {
                data = $('#plan_select').select2('data')[0];
            }
            var data = {
                'id': $('#txt_id').val(),
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val(),
                'position': data['id'],
                'password': $('#txt_password').val()
            };
            $.ajax({
                url: site_url + '/staff/staff_up_date',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);
                    if (result.resp == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Staff registrado correctamente'
                        })

                        $('#txt_id').val(result.id);
                        $('#plan_button').attr("style", "");
                        $('#plan_pestaña').attr("class", "enabledTab");
                        $('#plan_pestaña').attr("class", "active");
                        $('#plan_pestaña').attr("class", "show");

                        $('#txt_password').val('');

                        table.ajax.reload();
                        $('#msg').html('')
                        //	setTimeout(function() {
                        //		location.reload()
                        //	}, 1000)
                    } else if (result.resp == 2) {
                        data = result.msj_error;
                        $('#msg').html('<div class="alert alert-danger">Error al enviar correo:' + data + '</div>')
                        end_load();
                    } else {
                        $('#msg').html('<div class="alert alert-danger">Nombre y/o correo ya registrado</div>')
                    }

                }
            })


        }
    });


    $("#btn_eliminarplan").click(function() {

        document.getElementById("plan_button").disabled = false;

        var data = {
            'payid': $('#txt_payid').val(),
            'id': $('#txt_id').val()
        };
        Swal.fire({
            title: 'Esta seguro de eliminar el plan de : ' + $('#txt_name').val() + '  ?',
            text: "Una vez eliminado el registro no se podra recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {

                start_load();
                $.ajax({
                    url: site_url + '/staff/staff_delete',
                    method: "post",
                    data: data,
                    success: function(resp) {
                        var result = $.parseJSON(resp);
                        if (result.resp == 1) {

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Plan eliminado correctamente',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#exampleModal').modal('toggle');
                            table.ajax.reload();


                        } else if (resp == 0) {
                            $('#msg').html('<div class="alert alert-danger">Error al eliminar el plan.</div>')

                        } else {
                            $('#msg').html('<div class="alert alert-danger">Error :Favor de contactar al administrador</div>')

                        }

                    }

                });


                end_load();
            }
        })

    });


    function get_rol() {
        $.ajax({
            url: site_url + '/staff/staff_get_rol',
            method: "post",
            success: function(resp) {
                var result = $.parseJSON(resp);



                if (result.resp == 1) {
                    $.each(result.data, function(key, value) {

                        $("#plan_select").append('<option value=' + value.id_position + '>' + value.name_position + '</option>');
                    });

                    table.ajax.reload();
                    //	setTimeout(function() {
                    //		location.reload()
                    //	}, 1000)
                } else if (resp == 2) {
                    $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                    end_load();
                }
            }
        });
    }

    $("#btn_copiar_horario").click(function() {

    });


    $("#btnstaff").click(function() {
        if ($("#registration").valid() == false) {

            return;
        } else {

            document.getElementById("plan_button").disabled = false;
            if ($('#plan_select').select2('val') != null) {
                data_select = $('#plan_select').select2('data')[0];
            }
            var data = {
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val(),
                'password': $('#txt_password').val(),
                'charge': data_select['id']
            };
            start_load();
            $.ajax({
                url: site_url + '/staff/staff_store',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);
                    if (result.resp == 1) {
                        end_load();
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Staff registrado correctamente'
                        })

                        $('#txt_id').val(result.id);
                        $('#plan_button').attr("style", "");
                        $('#plan_pestaña').attr("class", "enabledTab");
                        $('#plan_pestaña').attr("class", "active");
                        $('#plan_pestaña').attr("class", "show");

                        $('#txt_password').val('');

                        table.ajax.reload();
                        $('#msg').html('')
                        //	setTimeout(function() {
                        //		location.reload()
                        //	}, 1000)
                    } else if (result.resp == 2) {
                        data = result.msj_error;
                        $('#msg').html('<div class="alert alert-danger">Error al enviar correo:' + data + '</div>')
                        end_load();
                    } else {
                        $('#msg').html('<div class="alert alert-danger">Nombre y/o correo ya registrado</div>')
                        end_load();
                    }

                }
            })


        }
    });


    $("#btnactializar_est").click(function() {
        if ($("#registration").valid() == false) {
            disable_tabs();
            return;
        } else {

            document.getElementById("plan_button").disabled = false;

            var data = {
                'id': $('#txt_id').val(),
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val()
            };
            $.ajax({
                url: site_url + '/staff/staff_delete',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);
                    if (result.resp == 1) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Staff actualizado correctamente'
                        })
                        table.ajax.reload();
                        //	setTimeout(function() {
                        //		location.reload()
                        //	}, 1000)
                    } else if (resp == 2) {
                        $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                        end_load();
                    }
                }
            })


        }
    });






    window.start_load = function() {
        $('body').prepend('<di id="preloader2"></di>')
    }
    window.end_load = function() {
        $('#preloader2').fadeOut('fast', function() {
            $(this).remove();
        })
    }

    function limpiar() {

        $('#txt_0').val('');
        $('#txt_1').val('');
        $('#txt_2').val('');
        $('#txt_3').val('');
        $('#txt_4').val('');
        document.getElementById("status").selectedIndex = 0;
        $('input[type=search]').val('').change();

        table.columns(0).search('').draw();
        table.columns(1).search('').draw();
        table.columns(2).search('').draw();
        table.columns(3).search('').draw();
        table.columns(4).search('').draw();
        table.columns(5).search('').draw();
    }

    function eliminar(id) {

        end_load();
        $.ajax({
            url: site_url + '/staff/chek_delete',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {
                var result = $.parseJSON(resp);
                if (result.resp == 1) {

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'error',
                        title: 'Staff con una cuenta activa no es posible eliminar el registro'
                    })
                    table.ajax.reload();
                    end_load();
                } else if (result.resp == 0) {
                    Swal.fire({
                        title: 'Esta seguro de eliminar el registro con Id : ' + id + ' ?',
                        text: "Una vez eliminado el registro no se podra recuperar!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si Eliminar!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            start_load();
                            $.ajax({
                                url: site_url + '/staff/staff_delete',
                                method: "post",
                                data: {
                                    id: id
                                },
                                success: function(resp) {
                                    var result = $.parseJSON(resp);
                                    if (result.resp == 1) {

                                        const Toast = Swal.mixin({
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000,
                                            timerProgressBar: true,
                                            didOpen: (toast) => {
                                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                                            }
                                        })
                                        Toast.fire({
                                            icon: 'success',
                                            title: 'Registro eliminado'
                                        })
                                        table.ajax.reload();
                                        end_load();
                                    } else if (resp == 2) {

                                        const Toast = Swal.mixin({
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000,
                                            timerProgressBar: true,
                                            didOpen: (toast) => {
                                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                                            }
                                        })
                                        Toast.fire({
                                            icon: 'error',
                                            title: 'Error al eliminar el registro'
                                        })
                                        end_load();
                                    }
                                }
                            });
                        }
                    })
                    end_load();
                }
            }
        });


        /*
         */
    }

    function get_qr(id) {

        $('.modal-title').text('Codigo Qr');
        $.ajax({
            url: site_url + '/staff/get_qr',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {
                var result = $.parseJSON(resp);

                if (result.resp == '1') {
                    $('#Modalqr').modal('show');
                    document.getElementById("image_qr").src = "../" + result.data;
                } else {

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'warning',
                        title: 'Usuario no cuenta con código Qr'
                    })
                }
            }
        });
    }

    function actualizar(id) {
        enable_tabs();
        end_load();
        limpiar_chek();
        today = new Date();
        $('#txt_desc').val('');
        //   $('#txt_valor').val('');
        $('#txt_total').val('');

        $('.modal-title').text('Modificar | Staff');
        $("#registration").data('validator').resetForm();
        div_1.classList.remove("error");
        div_2.classList.remove("error");
        div_3.classList.remove("error");
        div_4.classList.remove("error");
        div_5.classList.remove("error");
        let data = table.rows('.selected').data()[0];
        // $('#exampleModal').modal('toggle');

        $('#exampleModal').modal('show');
        $('#btnstaff').hide();
        $('#btnactializar').show();
        $('#btnmodstaff').show();

        $.ajax({
            url: site_url + '/staff/staff_update',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {
                var result = $.parseJSON(resp);
                if (result.resp == 1) {
                    $('#bthorario').show();
                    $('#bthorario_mod').hide();
                    document.getElementById("plan_button").classList.remove('active');
                    document.getElementById("staff_pestaña").classList.remove('enabledTab');
                    document.getElementById("plan_pestaña").classList.add('disabledTab');
                    document.getElementById("plan_schedule").classList.remove('active');
                    document.getElementById("view_form").classList.remove('active');

                    document.getElementById("member_form").classList.add('show');
                    document.getElementById("member_form").classList.add('active');
                    document.getElementById("member_form").classList.add('enabledTab');
                    document.getElementById("staff").classList.add('active');

                    var x = document.getElementById("plan_button");
                    x.innerHTML = "Asignar Horario";

                    $('#txt_id').val(result.data['id_staff']);
                    $('#txt_name').val(result.data['name']);
                    $('#txt_email').val(result.data['email']);
                    $('#txt_mobile').val(result.data['mobile']);
                    $('#plan_select').val(result.data['position']).change();

                    table.ajax.reload();
                    //	setTimeout(function() {
                    //		location.reload()
                    //	}, 1000)



                } else if (result.resp == 2) {


                    $('#bthorario').hide();
                    $('#bthorario_mod').show();
                    document.getElementById("plan_button").classList.remove('active');
                    document.getElementById("staff_pestaña").classList.remove('enabledTab');
                    document.getElementById("plan_pestaña").classList.add('disabledTab');
                    document.getElementById("plan_schedule").classList.remove('active');
                    document.getElementById("view_form").classList.remove('active');

                    document.getElementById("member_form").classList.add('show');
                    document.getElementById("member_form").classList.add('active');
                    document.getElementById("member_form").classList.add('enabledTab');
                    document.getElementById("staff").classList.add('active');
                    document.getElementById("plan_button").value = "Full Screen";

                    var x = document.getElementById("plan_button");
                    x.innerHTML = "Visualzar Horario";
                    $('#txt_id').val(result.data['id_staff']);
                    $('#txt_name').val(result.data['name']);
                    $('#txt_email').val(result.data['email']);
                    $('#txt_mobile').val(result.data['mobile']);
                    $('#plan_select').val(result.data['position']).change();
                    table.ajax.reload();

                    $.ajax({
                        url: site_url + '/staff/get_schedule',
                        method: "post",
                        data: {
                            id: id
                        },
                        success: function(resp) {
                            var result = $.parseJSON(resp);

                            for (let index = 0; index < result.resp.length; index++) {

                                if (result.resp[index]['day'] == 'lunes') {
                                    document.getElementById("check1").checked = true;
                                    document.getElementById('appt_lun1').style.display = 'block';
                                    document.getElementById('appt_lun2').style.display = 'block';
                                    $('#appt_lun1').val(result.resp[index]['hour_in']);
                                    $('#appt_lun2').val(result.resp[index]['hour_out']);
                                } else if (result.resp[index]['day'] == 'martes') {
                                    document.getElementById("check2").checked = true;
                                    document.getElementById('appt_mar1').style.display = 'block';
                                    document.getElementById('appt_mar2').style.display = 'block';
                                    $('#appt_mar1').val(result.resp[index]['hour_in']);
                                    $('#appt_mar2').val(result.resp[index]['hour_out']);
                                } else if (result.resp[index]['day'] == 'miercoles') {
                                    document.getElementById("check3").checked = true;
                                    document.getElementById('appt_mier1').style.display = 'block';
                                    document.getElementById('appt_mier2').style.display = 'block';
                                    $('#appt_mier1').val(result.resp[index]['hour_in']);
                                    $('#appt_mier2').val(result.resp[index]['hour_out']);
                                } else if (result.resp[index]['day'] == 'jueves') {
                                    document.getElementById('appt_juev1').style.display = 'block';
                                    document.getElementById('appt_juev2').style.display = 'block';
                                    $('#appt_juev1').val(result.resp[index]['hour_in']);
                                    $('#appt_juev2').val(result.resp[index]['hour_out']);
                                    document.getElementById("check4").checked = true;
                                } else if (result.resp[index]['day'] == 'viernes') {
                                    document.getElementById("check5").checked = true;
                                    document.getElementById('appt_vier1').style.display = 'block';
                                    document.getElementById('appt_vier2').style.display = 'block';
                                    $('#appt_vier1').val(result.resp[index]['hour_in']);
                                    $('#appt_vier2').val(result.resp[index]['hour_out']);
                                } else if (result.resp[index]['day'] == 'sabado') {
                                    document.getElementById("check6").checked = true;
                                    document.getElementById('appt_sab1').style.display = 'block';
                                    document.getElementById('appt_sab2').style.display = 'block';
                                    $('#appt_sab1').val(result.resp[index]['hour_in']);
                                    $('#appt_sab2').val(result.resp[index]['hour_out']);
                                } else if (result.resp[index]['day'] == 'domingo') {
                                    document.getElementById("check7").checked = true;
                                    document.getElementById('appt_dom1').style.display = 'block';
                                    document.getElementById('appt_dom2').style.display = 'block';
                                    $('#appt_dom1').val(result.resp[index]['hour_in']);
                                    $('#appt_dom2').val(result.resp[index]['hour_out']);
                                }
                            }


                        }
                    });


                }
            }
        });
    }


    function addDays(date, days) {
        var result = new Date(date);

        ostras = format(new Date(result.setDate(result.getDate() + days)), 'yyyy-MM-dd')

        return ostras;
    }



    format = function date2str(x, y) {
        var z = {
            M: x.getMonth() + 1,
            d: x.getDate(),
            h: x.getHours(),
            m: x.getMinutes(),
            s: x.getSeconds()
        };
        y = y.replace(/(M+|d+|h+|m+|s+)/g, function(v) {
            return ((v.length > 1 ? "0" : "") + z[v.slice(-1)]).slice(-2)
        });

        return y.replace(/(y+)/g, function(v) {
            return x.getFullYear().toString().slice(-v.length)
        });
    }

    function get_plan() {
        $.ajax({
            url: site_url + '/student/student_get_plan',
            method: "post",
            success: function(resp) {
                var result = $.parseJSON(resp);



                if (result.resp == 1) {
                    $.each(result.data, function(key, value) {

                        $("#plan_select").append('<option value=' + value.id_plan + '>' + value.month + '</option>');
                    });

                    table.ajax.reload();
                    //	setTimeout(function() {
                    //		location.reload()
                    //	}, 1000)
                } else if (resp == 2) {
                    $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                    end_load();
                }
            }
        });
    }

    function enable_tabs() {


        document.getElementById("plan_pestaña").classList.add('disabledTab');
        document.getElementById("staff").classList.remove('disabledTab');
        document.getElementById("plan_pestaña").classList.add('enableTab');
        document.getElementById("plan_pestaña").classList.add('active');
        //document.getElementById("member_form").classList.remove('active');
        // document.getElementById("plan_schedule").classList.add('active');
        // document.getElementById("plan_schedule").classList.add('show');

        $('#plan_button').attr("style", " ");


    }

    function remove_red() {
        div_1.classList.remove("error");
        div_2.classList.remove("error");
        div_3.classList.remove("error");
        div_4.classList.remove("error");
        div_5.classList.remove("error");

    }

    function startTimeInput_fijo(day) {

       
        domingo_1 = $('#appt_' + day + '1').val();
        domingo_2 = $('#appt_' + day + '2').val();

        if (domingo_1 == null) {
            console.log('vacio domingo 1');
        }

        if (domingo_2 == null) {
            console.log('vacio domingo 2');
        }

        var startTime = moment(domingo_1, "HH:mm:ss a");
        var endTime = moment(domingo_2, "HH:mm:ss a");
        var duration = moment.duration(endTime.diff(startTime));
        var hours = parseInt(duration.asHours());
        var minutes = parseInt(duration.asMinutes()) - hours * 60;
        document.getElementById('lblstats_' + day).style.display = 'block';
        var labelText = document.getElementById('lblstats_' + day);
        labelText.innerHTML = hours + ' Hrs' + minutes + ' Mins';


        if (!isNaN(hours)) {

            if (hours < 0 || minutes < 0) {
                ohSnap('Aviso!!: El horario ingresado no esta permitido!', {
                    color: 'red'
                });
                document.getElementById("lblstats_" + day).style.color = 'red';
            } else {
                document.getElementById("lblstats_" + day).style.color = 'green';
            }
            document.getElementById('lblstats_' + day).style.display = 'block';
            var labelText = document.getElementById('lblstats_' + day);
            labelText.innerHTML = hours + ' Hrs ' + minutes + ' Mins';
        } else {
            document.getElementById('lblstats_' + day).style.display = 'none';
        }

    }

    function startTimeInput(e, day) {
        var mindate = e.target.value;


        domingo_1 = $('#appt_' + day + '1').val();
        domingo_2 = $('#appt_' + day + '2').val();

        if (domingo_1 == null) {
            console.log('vacio domingo 1');
        }

        if (domingo_2 == null) {
            console.log('vacio domingo 2');
        }

        var startTime = moment(domingo_1, "HH:mm:ss a");
        var endTime = moment(domingo_2, "HH:mm:ss a");
        var duration = moment.duration(endTime.diff(startTime));
        var hours = parseInt(duration.asHours());
        var minutes = parseInt(duration.asMinutes()) - hours * 60;
        document.getElementById('lblstats_' + day).style.display = 'block';
        var labelText = document.getElementById('lblstats_' + day);
        labelText.innerHTML = hours + ' Hrs' + minutes + ' Mins';


        if (!isNaN(hours)) {

            if (hours < 0 || minutes < 0) {
                ohSnap('Aviso!!: El horario ingresado no esta permitido!', {
                    color: 'red'
                });
                document.getElementById("lblstats_" + day).style.color = 'red';
            } else {
                document.getElementById("lblstats_" + day).style.color = 'green';
            }
            document.getElementById('lblstats_' + day).style.display = 'block';
            var labelText = document.getElementById('lblstats_' + day);
            labelText.innerHTML = hours + ' Hrs ' + minutes + ' Mins';
        } else {
            document.getElementById('lblstats_' + day).style.display = 'none';
        }

    }

    function endsTimeInput(e, day) {
        var mindate = e.target.value;


        domingo_1 = $('#appt_' + day + '1').val();
        domingo_2 = $('#appt_' + day + '2').val();

        if (domingo_1 == null) {
            console.log('vacio domingo 1');
        }

        if (domingo_2 == null) {
            console.log('vacio domingo 2');
        }
        var startTime = moment(domingo_1, "HH:mm:ss a");
        var endTime = moment(domingo_2, "HH:mm:ss a");
        var duration = moment.duration(endTime.diff(startTime));
        var hours = parseInt(duration.asHours());
        var minutes = parseInt(duration.asMinutes()) - hours * 60;



        if (!isNaN(hours)) {

            if (hours < 0 || minutes < 0) {
                ohSnap('Aviso!!: El horario ingresado no esta permitido!', {
                    color: 'red'
                });
                document.getElementById("lblstats_" + day).style.color = 'red';

            } else {
                document.getElementById("lblstats_" + day).style.color = 'green';
            }

            document.getElementById('lblstats_' + day).style.display = 'block';
            var labelText = document.getElementById('lblstats_' + day);
            labelText.innerHTML = hours + ' Hrs ' + minutes + ' Mins';
        } else {
            document.getElementById('lblstats_' + day).style.display = 'none';
        }


    }

    function limpiar_chek() {
        // Check
        document.getElementById("check1").checked = false;
        document.getElementById('appt_lun1').style.display = 'none';
        document.getElementById('appt_lun2').style.display = 'none';
        document.getElementById("appt_lun2").value = "12:59:48";
        document.getElementById('lblstats_lun').style.display = 'none';

        document.getElementById("check2").checked = false;

        document.getElementById('appt_mar1').style.display = 'none';
        document.getElementById('appt_mar2').style.display = 'none';
        document.getElementById("appt_mar2").value = "12:59:48";
        document.getElementById('lblstats_mar').style.display = 'none';

        document.getElementById("check3").checked = false;
        document.getElementById('appt_mier1').style.display = 'none';
        document.getElementById('appt_mier2').style.display = 'none';
        document.getElementById("appt_mier2").value = "12:59:48";
        document.getElementById('lblstats_mier').style.display = 'none';

        document.getElementById("check4").checked = false;


        document.getElementById('appt_juev1').style.display = 'none';
        document.getElementById('appt_juev2').style.display = 'none';
        document.getElementById("appt_juev2").value = "12:59:48";
        document.getElementById('lblstats_juev').style.display = 'none';

        document.getElementById("check5").checked = false;

        document.getElementById('appt_vier1').style.display = 'none';
        document.getElementById('appt_vier2').style.display = 'none';
        document.getElementById("appt_vier2").value = "12:59:48";
        document.getElementById('lblstats_vier').style.display = 'none';

        document.getElementById("check6").checked = false;


        document.getElementById('appt_sab1').style.display = 'none';
        document.getElementById('appt_sab2').style.display = 'none';
        document.getElementById("appt_sab2").value = "12:59:48";
        document.getElementById('lblstats_sab').style.display = 'none';


        document.getElementById("check7").checked = false;

        document.getElementById('appt_dom1').style.display = 'none';
        document.getElementById('appt_dom2').style.display = 'none';
        document.getElementById("appt_dom2").value = "12:59:48";
        document.getElementById('lblstats_dom').style.display = 'none';
    }

    function change_status(dat) {

        var data = {
            'id': dat,
        };
        $.ajax({
            url: site_url + '/staff/status_staff',
            method: "post",
            data: data,
            success: function(resp) {
                var result = $.parseJSON(resp);

                if (result.resp == 'true') {

                    Swal.fire({
                        title: 'Esta seguro de cambiar el estatus de : ' + result.name + '  ?',
                        text: "Una vez que se cambie el Status se borrara su Horario!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si Modificar!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            start_load();
                            $.ajax({
                                url: site_url + '/staff/status_mod',
                                method: "post",
                                data: data,
                                success: function(resp_1) {
                                    var resp_1 = $.parseJSON(resp_1);
                                    if (resp_1.resp == 1) {

                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Estatus modificado correctamente',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        $('#exampleModal').modal('toggle');


                                    } else if (resp_1 == 0) {
                                        $('#msg').html('<div class="alert alert-danger">Error al eliminar el plan.</div>')

                                    } else {
                                        // $('#msg').html('<div class="alert alert-danger">Error :Favor de contactar al administrador</div>')

                                    }
                                    table.ajax.reload();
                                }

                            });


                            end_load();
                        }
                    })

                } else if (resp_1 == 0) {
                    $('#msg').html('<div class="alert alert-danger">Error al eliminar el plan.</div>')

                } else {
                    //$('#msg').html('<div class="alert alert-danger">Error :Favor de contactar al administrador</div>')

                }

            }

        });





    }
</script>

<style>
    .testbtn {
        border-radius: 50%;
        color: white;
        background-color: mediumseagreen
    }

    .testbtn1 {
        border-radius: 50%;
        color: white;
        background-color: red
    }

    body {
        background-color: #f7f8f9;
    }

    .card {
        background-color: #ffffff;
        border: 1px solid rgba(0, 34, 51, 0.1);
        box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
        border-radius: 0.15rem;
    }

    /* Tabs Card */

    .tab-card {
        border: 1px solid #eee;
    }

    .tab-card-header {
        background: none;
    }

    /* Default mode */
    .tab-card-header>.nav-tabs {
        border: none;
        margin: 0px;
    }

    .tab-card-header>.nav-tabs>li {
        margin-right: 2px;
    }

    .tab-card-header>.nav-tabs>li>a {
        border: 0;
        border-bottom: 2px solid transparent;
        margin-right: 0;
        color: #737373;
        padding: 2px 15px;
    }

    .tab-card-header>.nav-tabs>li>a.show {
        border-bottom: 2px solid #007bff;
        color: #007bff;
    }

    .tab-card-header>.nav-tabs>li>a:hover {
        color: #007bff;
    }

    .tab-card-header>.tab-content {
        padding-bottom: 0;
    }

    p {
        margin: 0;
    }

    pre {
        padding: 20px 20px 0 0;
        background: #f9f9f9;
        border: 1px solid #f2f2f2;
        margin-bottom: 30px;
        line-height: 2em;
    }

    .top {
        background-color: #333;
        border-bottom: 3px solid #00b3bc;
        color: #fff;
        padding: 20px;
    }

    .top h1 {
        font-size: 20px;
        text-align: center;
    }

    /*
        .container {
            width: 80%;
            margin: 70px auto;
        }*/
    .slider-container {
        width: 90%;
        max-width: 500px;
        margin: 0 auto 50px;
    }

    .config {
        border: 1px solid #f2f2f2;
        margin-bottom: 30px;
        line-height: 1.7em;
    }

    .config table {
        border-collapse: collapse;
        width: 100%;
    }

    .config table td {
        padding: 10px;
        border-bottom: 1px solid #f2f2f2;
    }

    .config table tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    .mb {
        margin-bottom: 15px;
    }

    .label {
        font-weight: bold;
        white-space: nowrap;
    }

    .download {
        margin-bottom: 20px;
    }

    .download a {
        text-decoration: none;
        color: #00969b;
        font-size: 16px;
    }

    label {
        display: block;
        font: 1rem 'Fira Sans', sans-serif;
    }

    input,
    label {
        margin: .4rem 0;
    }

    .alert {
        padding: 15px;
        margin-bottom: 0px;
        border: 1px solid #eed3d7;
        border-radius: 4px;
        position: absolute;
        bottom: 380px;
        right: 0px;
        /* Each alert has its own width */
        float: right;
        clear: right;
        background-color: white;
    }

    .alert-red {
        color: white;
        background-color: #DA4453;
    }

    .alert-green {
        color: white;
        background-color: #37BC9B;
    }

    .alert-blue {
        color: white;
        background-color: #4A89DC;
    }

    .alert-yellow {
        color: white;
        background-color: #F6BB42;
    }

    .alert-orange {
        color: white;
        background-color: #E9573F;
    }

    body {
        font-family: Arial, Sans-serif;
    }

    label.error {
        color: red;
        font-family: verdana, Helvetica;
    }

    .modal-header {
        cursor: move;
    }
</style>


<?= $this->endSection() ?>