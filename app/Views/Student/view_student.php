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
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Miembros</li>
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
                    <b>Miembros</b>
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
                                <button id="btn_agregarmiembro" class="ejemplo1 agregar" data-toggle="modal" data-target="#addForma_Adq">
                                    <div class="icono">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <a class="small-box-footere">Agregar Miembro<i class="fa fa-arrow-circle-right"></i></a>
                                </button>
                                <button id="update_button" class="ejemplo1 modificar dis">
                                    <div class="icono">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                    <a class="small-box-footere">Modificar Miembro<i class="fa fa-arrow-circle-right"></i></a>
                                </button>

                                <button id="btndelete" class="ejemplo1 eliminar dis eliminar">
                                    <div class="icono">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                    <a class="small-box-footere">Eliminar Miembro <i class="fa fa-arrow-circle-right"></i></a>
                                </button>
                            </div>
                        </div>

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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <br>
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" id="miembro_pestaña">
                        <button class="nav-link pestaña active" id="miembro" data-bs-toggle="tab" data-bs-target="#member_form" type="button" role="tab" aria-controls="home" aria-selected="true">Miembro</button>
                    </li>
                    <li class="nav-item" role="presentation" id="plan_pestaña">
                        <button class="nav-link pestaña" style="" id="plan_button" data-bs-toggle="tab" data-bs-target="#plan_form" type="button" role="tab" aria-controls="profile" aria-selected="false">Elegir Plan</button>
                    </li>
                    <li class="nav-item" role="presentation" id="view_pestaña">
                        <button class="nav-link pestaña" style="" id="view_button" data-bs-toggle="tab" data-bs-target="#view_form" type="button" role="tab" aria-controls="profile" aria-selected="false">Datos Plan</button>
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

                                    <div id="div_4" class="col-md-4">
                                        <label id="label_4" class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="Contraseña" />
                                    </div>

                                </div>
                                <div class="row form-group">
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" id="btnmiembro" class="btn btn-info">Crear Miembro</button>
                                <button type="button" id="btnmodmiembro" class="btn btn-info">Modificar Miembro</button>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="plan_form" role="tabpanel" aria-labelledby="plan_button">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-3">
                                    <br>
                                    <h3>Elegir plan</h3>
                                    <br>
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-7">
                                    <br>
                                    Plan Mensual <input type="checkbox" class="form-check-input" id="check1" name="check1" value="something" checked>&nbsp;&nbsp;
                                    Prueba <input type="checkbox" class="form-check-input" id="check2" name="check2" value="something">&nbsp;&nbsp;
                                    Cuenta Correinte <input type="checkbox" class="form-check-input" id="check3" name="check3" value="something">
                                </div>
                            </div>

                            <form action="" id="member-plan">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Número de meses</label>
                                            <select class="js-select2" id="plan_select" style="width: 100%;" onchange="getval_plan(this);">
                                                <option value="0">Selecciona</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descuento</label>
                                            <input type="text" id="txt_desc" name="txt_desc" class="form-control" value="" readonly>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Costo Mes</label>
                                            <input type="text" id="txt_valor" name="txt_valor" class="form-control" value="<?php echo $costo_mensualidad ?>" readonly>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div id="div_5" class="col-md-4">
                                        <label class="control-label">Total</label>
                                        <input type="text" id="txt_total" name="txt_total" class="form-control" value="" readonly>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" id="btnplan" class="btn btn-info">Asignar Plan</button>
                                </div>
                            </form>


                            <form action="" id="member-plan_test" style="display: none;">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tipo de prueba</label>
                                            <select class="js-select2" id="plan_select_test" onchange="getval(this);" style="width: 100%;">
                                                <option value="0">Selecciona</option>
                                                <option value="1">Dia</option>
                                                <option value="2">Semana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="div_6" class="form-group">
                                            <label class="control-label">Seleccionar Número</label>
                                            <input type="number" id="txt_num_day" name="txt_num_day" class="form-control" value="" max="6" min="1" readonly>
                                            <input type="number" id="txt_num_week" name="txt_num_week" class="form-control" value="" max="3" min="1" style="display: none;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Costo</label>
                                            <input type="text" id="txt_valor_1" name="txt_valor_1" class="form-control" value="" readonly>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div id="div_7" class="col-md-4">
                                        <label class="control-label">Total</label>
                                        <input type="text" id="txt_total_1" name="txt_total_1" class="form-control" value="" readonly>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="modal-footer">
                                    <button type="button" id="btnplan_1" class="btn btn-info">Asignar Plan</button>
                                </div>
                            </form>

                            <form action="" id="member-current" style="display: none;">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Monto Cobrado</label>
                                            <input type="number" id="txt_monto_curr" name="txt_monto_curr" class="form-control" min="1" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="div_6" class="form-group">
                                            <label class="control-label">Fecha Inicio</label>
                                            <input class="form-control" id="fecha" name="fecha" placeholder="Fecha " type="text" />
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Fecha Fin</label>
                                            <input class="form-control" id="fecha_1" name="fecha_1" placeholder="Fecha " type="text" />
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <br>

                                <div class="modal-footer">
                                    <button type="button" id="btnact_1" class="btn btn-info">Actualizar Plan</button>
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
                            <br>
                            <br>
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

    #member-plan_test .error {
        color: red;
    }

    #member-current .error {
        color: red;
    }
</style>
<script>
    var site_url = "<?php echo base_url(); ?>";

    document.getElementById('txt_payid').style.display = 'none';


    $(document).ready(function() {



        get_plan();
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


        $('#check3').on('change', function() { // on change of state
            if (this.checked) // if changed state is "CHECKED"
            {
                $("#check1").prop("checked", false);
                $("#check2").prop("checked", false);

                document.getElementById('member-current').style.display = 'block';
                document.getElementById('member-plan').style.display = 'none';
                document.getElementById('member-plan_test').style.display = 'none';
                $('#txt_monto_curr').val('');
                $('#fecha').val('');
                $('#fecha_1').val('');
                $("#member-current").data('validator').resetForm();

            }
        })

        $('#check2').on('change', function() { // on change of state
            if (this.checked) // if changed state is "CHECKED"
            {
                $("#check3").prop("checked", false);
                $("#check1").prop("checked", false);
                $('#txt_valor_1').val('');
                $('#txt_total_1').val('');
                $("#member-plan_test").data('validator').resetForm();
                remove_red();
                document.getElementById('member-plan').style.display = 'none';
                document.getElementById('member-plan_test').style.display = 'block';
                document.getElementById('member-current').style.display = 'none';
                $('#plan_select_test').val('0').change();

            }
        })


        $('#check1').on('change', function() { // on change of state
            if (this.checked) // if changed state is "CHECKED"
            {
                // do the magic here
                $("#check3").prop("checked", false);
                $("#check2").prop("checked", false);
                remove_red();
                document.getElementById('member-plan').style.display = 'block';
                document.getElementById('member-plan_test').style.display = 'none';
                document.getElementById('member-current').style.display = 'none';
                $('#plan_select').val('0').change();
                $('#txt_desc').val('');
                $('#txt_total').val('');
                $('#txt_valor').val('<?php echo $costo_mensualidad; ?>');

            }
        })


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


        $('#txt_num_day').on('input', function() {
            num_days = $('#txt_num_day').val();
            costo = $('#txt_valor_1').val();
            res = num_days * costo;

            console.log(num_days, costo);
            $('#txt_total_1').val(res);

        });


        $('#txt_num_week').on('input', function() {
            num_days = $('#txt_num_week').val();
            costo = $('#txt_valor_1').val();
            res = num_days * costo;

            console.log(num_days, costo);
            $('#txt_total_1').val(res);

        });

        $('#plan_select_').on('change', function() {
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
        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+1):nth-child(-n+4)').each(function(i) {
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

        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+5)').each(function(i) {
            $(this).html('<select id="status" name="status" class="form-control input-sm" style="width:100%">' +
                '<option value="0">Selecciona</option><option value="1">Activo</option><option value="2">No activo</option></select>');
            $('select', this).on('change', function() {
                if (table.column(4).search() !== this.value) {
                    table
                        .column(4)
                        .search(this.value)
                        .draw();
                }
            });
        });
        $('#tbl-students-data thead tr:eq(1) th:nth-child(n+6)').each(function(i) {
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
                url: site_url + "/student/ajax-load", // json datasource
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
                    data: "matricula",
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
                },
                {


                    data: null,
                    'orderable': false,

                    render: function(data, type, row) {

                        if (row.status == "true") {
                            return '<div >' +
                                '<button type="button" class="green-button" onclick="change_status(' + row.id_indicator + ',' + row.proy + ',' + row.exercise + ')" data-toggle="tooltip" data-placement="top" title="Estatus" >Activo</button>' +
                                '</div>';
                        } else {
                            return '<div >' +
                                '<button  class="red-button" onclick="change_status(' + row.id_indicator + ',' + row.proy + ',' + row.exercise + ')" title="Estatus" >No activo</button>' +
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
                            '<button class="red-button-min" onclick="eliminar(' + row.id + ')"><i class="fas fa-trash-alt"></i></button>' +
                            '<button class="yellow-button-min" onclick="actualizar(' + row.id + ')"><i class="fa fa-pencil-square-o"></i></button>' +
                            '<button class="bluew-button-min" onclick="get_qr(' + row.id + ')"><i class="fa fa-qrcode"></i></button>' +
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

                eliminar(data['id']);
            }
        });



        function disable_tabs() {
            document.getElementById("plan_pestaña").classList.remove('enableTab');
            document.getElementById("plan_pestaña").classList.remove('active');
            document.getElementById("plan_pestaña").classList.remove('disabledTab');
            document.getElementById("miembro").classList.remove('enableTab');
            document.getElementById("plan_pestaña").classList.add('disabledTab');

        }

        var div_1 = document.getElementById("div_1");
        var div_2 = document.getElementById("div_2");
        var div_3 = document.getElementById("div_3");
        var div_4 = document.getElementById("div_4");
        var div_5 = document.getElementById("div_5");
        $("#btn_agregarmiembro").click(function() {
            document.getElementById('view_form').style.display = 'none';
            $("#registration").data('validator').resetForm();
            $("#member-plan").data('validator').resetForm();
            remove_red();

            //validator.resetForm();
            $('.modal-title').text('Agregar | Miembro');
            $('#exampleModal').modal('show');

            $('#txt_id').val('');
            $('#txt_name').val('');
            $('#txt_email').val('');
            $('#txt_mobile').val('');
            $('#btnmiembro').show();
            $('#btnmodmiembro').hide();
            $('#btnactializar_est').hide();


            document.getElementById("plan_form").classList.remove('show');
            document.getElementById("plan_form").classList.remove('active');

            document.getElementById("view_form").classList.remove('show');
            document.getElementById("view_form").classList.remove('active');

            document.getElementById("view_pestaña").classList.remove('active');
            document.getElementById("view_pestaña").classList.remove('show');

            document.getElementById('plan_pestaña').style.display = 'block';
            document.getElementById('view_pestaña').style.display = 'none';

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
                actualizar(data['id']);

            }
        });








        $('#tbl-students-data tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                table.$('tr.selected').removeClass('selected')
            } else {
                table.$('tr.selected').removeClass('selected');
                data = table.row(this).data();
                document.getElementById('lbltipAddedComment').innerHTML = data.id;
                $(this).addClass('selected')
                $('#update_button').prop('disabled', false)
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
                }
            },
            messages: {
                txt_name: {
                    required: 'El campo nombre no puede ir vacio!',
                },
                txt_email: {
                    required: 'El campo email no puede ir vacio!',
                    email: 'Por favor inserte un correo valido!'
                },
                txt_mobile: {
                    required: 'El campo de telefono no puede ir vacio!'
                },
                txt_password: {
                    required: 'El campo Contraseña no puede ir vacio!'
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

    var $planForm1 = $('#member-plan');
    if ($planForm1.length) {
        $planForm1.validate({
            rules: {
                txt_total: {
                    required: true,
                }
            },
            messages: {
                txt_total: {
                    required: 'Seleccione el numero de meses!'
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

    var $planFormdata = $('#member-plan_test');
    if ($planFormdata.length) {
        $planFormdata.validate({
            rules: {
                txt_num_day: {
                    required: true,
                    max: 6,
                    min: 1
                },
                txt_total_1: {
                    required: true,
                }
            },
            messages: {
                txt_total_1: {
                    required: 'Seleccione numero de dias!'
                }
            },
            highlight: function(element2) {
                $(element2).parent().addClass('error')
            },
            unhighlight: function(element2) {
                $(element2).parent().removeClass('error')
            }

        });
    }

    var $planFormdata = $('#member-plan_test');
    if ($planFormdata.length) {
        $planFormdata.validate({
            rules: {
                txt_num_week: {
                    required: true,
                    max: 3,
                    min: 1
                },
                txt_total_1: {
                    required: true,
                }
            },
            messages: {
                txt_total_1: {
                    required: 'Seleccione numero de semanas!'
                }
            },
            highlight: function(element2) {
                $(element2).parent().addClass('error')
            },
            unhighlight: function(element2) {
                $(element2).parent().removeClass('error')
            }

        });
    }

    var $planFormdata_current = $('#member-current');
    if ($planFormdata_current.length) {
        $planFormdata_current.validate({
            rules: {
                txt_monto_curr: {
                    required: true,
                    min: 1
                },
                fecha: {
                    required: true,
                },
                fecha_1: {
                    required: true,
                }
            },
            messages: {
                txt_monto_curr: {
                    required: 'El campo monto no puede ir Vacio!'
                },
                fecha: {
                    required: 'El campo Fecha Inicio no puede ir Vacio!'
                },
                fecha_1: {
                    required: 'El campo Fecha Fin no puede ir Vacio!'
                }
            },
            highlight: function(element2) {
                $(element2).parent().addClass('error')
            },
            unhighlight: function(element2) {
                $(element2).parent().removeClass('error')
            }

        });
    }

    /*
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
                }
            });
        }
    */

    $("#btn-refresh").click(function() {
        start_load();
        table.ajax.reload();
        end_load();
    });




    $("#btnplan").click(function() {

        if ($("#member-plan").valid() == false) {

            return;
        } else {
            start_load();

            document.getElementById("plan_button").disabled = false;
            if ($('#plan_select').select2('val') != null) {
                data = $('#plan_select').select2('data')[0];
            }
            var data = {
                'discount': $('#txt_desc').val(),
                'month': data['text'],
                'cost': "<?php echo $costo_mensualidad; ?>",
                'id': $('#txt_id').val(),

            };
            $.ajax({
                url: site_url + '/student/planmember_store',
                method: "post",
                data: data,
                success: function(resp) {
                    var result = $.parseJSON(resp);

                    if (result.resp == 1) {
                        end_load();
                        $('#exampleModal').modal('toggle');
                        Swal.fire({
                            title: 'Se Genero la Membrecia con exito!!',
                            html: '<h2>Datos del Plan!<h2><br> Fecha de inicio : ' + result.data.date_in + '<br> Fecha de Final : ' + result.data.date_out + '<br>',
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {


                                table.ajax.reload();


                            }
                        })


                        /* 
                        $('#exampleModal').modal('toggle');
                        table.ajax.reload();
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
                            title: 'Plan asignado correctamente'
                        })*/




                    } else if (resp == 2) {
                        $('#msg').html('<div class="alert alert-danger">Error al enviar el correo.</div>')
                        end_load();
                    }
                }
            })


        }
    });

    $("#btnplan_1").click(function() {
        if ($("#member-plan_test").valid() == false) {

            return;
        } else {

            document.getElementById("plan_button").disabled = false;
            if ($('#plan_select').select2('val') != null) {
                data = $('#plan_select').select2('data')[0];
            }

            day_num = $('#txt_num_day').val();
            weeak_num = $('#txt_num_week').val();

            if (day_num == '') {
                num = weeak_num;
                type = 'week';

            } else {
                num = day_num;
                type = 'day';
            }

            var data = {
                'num': num,
                'val': $('#txt_valor_1').val(),
                'id': $('#txt_id').val(),
                'type': type

            };
            $.ajax({
                url: site_url + '/student/planmember_store_test',
                method: "post",
                data: data,
                success: function(resp) {


                    var result = $.parseJSON(resp);

                    if (result.resp == 1) {
                        $('#exampleModal').modal('toggle');
                        Swal.fire({
                            title: 'Se Genero la Membrecia con exito!!',
                            html: '<h2>Datos del Plan!<h2><br> Fecha de inicio : ' + result.data.date_in + '<br> Fecha de Final : ' + result.data.date_out + '<br>',
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {


                                table.ajax.reload();


                            }
                        })
                        /*
                        
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
                            title: 'Plan asignado correctamente'
                        })

                        
                        */


                    } else if (resp == 2) {
                        $('#msg').html('<div class="alert alert-danger">Error al enviar el correo.</div>')
                        end_load();
                    }
                }
            })


        }
    });

    $("#btnact_1").click(function() {
        if ($("#member-current").valid() == false) {

            return;
        } else {
            var data = {
                'id': $('#txt_id').val(),
                'monto': $('#txt_monto_curr').val(),
                'fecha_entrada': $('#fecha').val(),
                'fecha_salida': $('#fecha_1').val()
            };
            $.ajax({
                url: site_url + '/student/planmember_store_current',
                method: "post",
                data: data,
                success: function(resp) {


                    var result = $.parseJSON(resp);

                    if (result.resp == 2) {
                        $('#exampleModal').modal('toggle');
                        Swal.fire({
                            title: 'Se Genero la Membrecia con exito!!',
                            html: '<h2>Datos del Plan!<h2><br> Fecha de inicio : ' + result.data.date_in + '<br> Fecha de Final : ' + result.data.date_out + '<br>',
                            icon: 'success',
                        }).then((result) => {
                            if (result.isConfirmed) {


                                table.ajax.reload();


                            }
                        })
                        /*
                        
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
                            title: 'Plan asignado correctamente'
                        })

                        
                        */


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
                            icon: 'error',
                            title: 'Error al crear el registro:' + result.msj
                        })

                        end_load();
                    }
                }
            })


        }
    });






    $("#btnmodmiembro").click(function() {
        //   $('#txt_valor').val('300');

        if ($("#registration").valid() == false) {

            return;
        } else {
            start_load();
            document.getElementById("plan_button").disabled = false;

            var data = {
                'id': $('#txt_id').val(),
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val()
                // 'password': $('#txt_password').val()
            };
            $.ajax({
                url: site_url + '/student/student_update',
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
                            title: 'Miembro se actualizo correctamente'
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
                        end_load();
                        data = result.msj_error;
                        $('#msg').html('<div class="alert alert-danger">Error al enviar correo:' + data + '</div>')
                        end_load();
                    } else {
                        end_load();
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
                    url: site_url + '/pays/pay_delete',
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
                                title: 'Plan eliminado correctamente'
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


    $("#btnmiembro").click(function() {
        if ($("#registration").valid() == false) {

            return;
        } else {

            document.getElementById("plan_button").disabled = false;

            var data = {
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val(),
                'password': $('#txt_password').val()
            };
            start_load();
            $.ajax({
                url: site_url + '/student/student_store',
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
                            title: 'Miembro registrado correctamente'
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
                url: site_url + '/student/student_update',
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
                            title: 'Miembro actualizado correctamente'
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
        document.getElementById("status").selectedIndex = 0;
        $('input[type=search]').val('').change();

        table.columns(0).search('').draw();
        table.columns(1).search('').draw();
        table.columns(2).search('').draw();
        table.columns(3).search('').draw();
        table.columns(4).search('').draw();
    }

    function eliminar(id) {

        end_load();
        $.ajax({
            url: site_url + '/student/student_chek_delete',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {

                end_load();
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
                        title: 'Miembro con una cuenta activa no es posible eliminar el registro'
                    })
                    table.ajax.reload();

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
                                url: site_url + '/student/student_delete',
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

    }

    function get_qr(id) {
        $('.modal-title').text('Codigo Qr');
        $.ajax({
            url: site_url + '/student/get_qr',
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
        today = new Date();

        $('#txt_desc').val('');
        //   $('#txt_valor').val('');
        $('#txt_total').val('');

        $('#plan_select').val('0').change();

        $("#check1").prop("checked", true);
        $("#check2").prop("checked", false);
        $("#check3").prop("checked", false);

        document.getElementById('member-plan').style.display = 'block';
        document.getElementById('member-plan_test').style.display = 'none';
        
        document.getElementById('member-current').style.display = 'none';

        $('.modal-title').text('Modificar | Miembro');
        $("#registration").data('validator').resetForm();
        div_1.classList.remove("error");
        div_2.classList.remove("error");
        div_3.classList.remove("error");
        div_4.classList.remove("error");
        let data = table.rows('.selected').data()[0];
        // $('#exampleModal').modal('toggle');

        $('#exampleModal').modal('show');
        $('#btnmiembro').hide();
        $('#btnactializar').show();
        $('#btnmodmiembro').show();

        $.ajax({
            url: site_url + '/student/student_get',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {
                var result = $.parseJSON(resp);
                if (result.resp == 1) {

                    end_load();

                    document.getElementById("plan_button").classList.remove('active');
                    document.getElementById("miembro_pestaña").classList.remove('enabledTab');
                    document.getElementById("plan_pestaña").classList.add('disabledTab');
                    document.getElementById("plan_form").classList.remove('active');
                    document.getElementById("view_form").classList.remove('active');

                    document.getElementById("member_form").classList.add('show');
                    document.getElementById("member_form").classList.add('active');
                    document.getElementById("member_form").classList.add('enabledTab');
                    document.getElementById("miembro").classList.add('active');

                    $('#txt_id').val(result.data['id']);
                    $('#txt_name').val(result.data['name']);
                    $('#txt_email').val(result.data['email']);
                    $('#txt_mobile').val(result.data['mobile']);
                    table.ajax.reload();
                    //	setTimeout(function() {
                    //		location.reload()
                    //	}, 1000)

                    if (result.pay != null) {

                        //  document.getElementById("plan_pestaña").classList.add('disabledTab');
                        document.getElementById('plan_pestaña').style.display = 'none';
                        document.getElementById('view_pestaña').style.display = 'block';
                        document.getElementById("view_button").classList.remove('active');

                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy = today.getFullYear();
                        today = yyyy + '-' + mm + '-' + dd;


                        var date1 = new Date(today);
                        var date2 = new Date(result.pay[0]['date_out']);

                        var Difference_In_Time = date2.getTime() - date1.getTime();
                        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

                        date_new = addDays(date2, 2);
                        []

                        $('#txt_payid').val(result.pay[0]['id_pay']);
                        $('#txt_date_1').val(result.pay[0]['date_in']);
                        $('#txt_date_2').val(result.pay[0]['date_out']);
                        $('#txt_days').val(Difference_In_Days);
                        $('#txt_date_next').val(date_new);

                        if (result.date === today) {
                            $('#btn_eliminarplan').show();
                        } else {
                            document.getElementById('btn_eliminarplan').style.display = 'none';
                        }



                    } else {

                        document.getElementById('view_pestaña').style.display = 'none';
                        document.getElementById('plan_pestaña').style.display = 'block';

                    }

                } else if (resp == 2) {
                    $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                    end_load();
                }
            }
        });
    }



    function getval(sel) {
        if (sel.value == '1') {
            $("#txt_num_day").val('');
            $("#txt_num_week").val('');
            $('#txt_valor_1').val('<?php echo $costo_dia; ?>');
            $("#txt_num_day").attr("readonly", false);
            $("#txt_total_1").val('');
            document.getElementById('txt_num_day').style.display = 'block';
            document.getElementById('txt_num_week').style.display = 'none';

            $("#member-plan_test").data('validator').resetForm();

        } else if (sel.value == '2') {
            $("#txt_num_day").val('');
            $("#txt_num_week").val('');
            $("#txt_total_1").val('');
            $("#txt_num_day").attr("readonly", true);
            document.getElementById('txt_num_day').style.display = 'none';
            document.getElementById('txt_num_week').style.display = 'block';
            $("#txt_num_week").attr("readonly", false);
            $('#txt_valor_1').val('<?php echo $costo_semanal; ?>');
            $("#member-plan_test").data('validator').resetForm();
        } else {
            $("#txt_num_day").val('');
            $("#txt_num_week").val('');
            $("#txt_total_1").val('');
            $("#txt_num_day").attr("readonly", true);
            $("#txt_num_week").attr("readonly", true);
            $("#member-plan_test").data('validator').resetForm();
        }
    }


    function getval_plan(sel) {
        if (sel.value == '0') {
            $("#txt_desc").val('');
            $("#txt_total").val('');
            $("#member-plan").data('validator').resetForm();

        }
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
        document.getElementById("miembro").classList.remove('disabledTab');
        document.getElementById("plan_pestaña").classList.add('enableTab');
        document.getElementById("plan_pestaña").classList.add('active');
        //document.getElementById("member_form").classList.remove('active');
        // document.getElementById("plan_form").classList.add('active');
        // document.getElementById("plan_form").classList.add('show');

        $('#plan_button').attr("style", " ");


    }

    function remove_red() {
        div_1.classList.remove("error");
        div_2.classList.remove("error");
        div_3.classList.remove("error");
        div_4.classList.remove("error");
        div_5.classList.remove("error");
    }

    $(function() {
        $("#fecha").datepicker({
            language: 'es',
            dateFormat: 'MM-DD-YYYY'
        });
    });
    $(function() {
        $("#fecha_1").datepicker({
            language: 'es',
            dateFormat: 'MM-DD-YYYY'
        });
    });

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

    .modal-header {
        cursor: move;
    }
</style>


<?= $this->endSection() ?>