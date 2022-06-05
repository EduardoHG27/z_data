<?= $this->extend('Front/layout/main') ?>
<?= $this->section('content') ?>

<?php $session = session(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/select/css/select2.min.css">


<script type="text/javascript" src="<?php echo base_url(); ?>/select/js/select2.js"></script>
<div class="row mt-3 ml-3 mr-3">


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

</div>
<div class="card">

   
</div>






<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalTitle"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <br>


            <!--
                
    <div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#login-contents" id="login-tab" data-bs-toggle="tab">Log In</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#register-contents" id="register-tab" data-bs-toggle="tab">Register</a>
    </li>
  </ul>
  <div class="tab-content">
    <div id="login-contents" class="tab-pane active">
      <table>
        <tr>
          <td>Username :</td>
          <td><input type="text" id="ip-username" placeholder="Username"></td>
        </tr>
        <tr>
          <td>Password :</td>
          <td><input type="text" placeholder="Password" id="ip-password"></td>
        </tr>
      </table>
    </div>
    <div id="register-contents" class="tab-pane fade">
      <table>
        <tr>
          <td>Name :</td>
          <td><input type="text" placeholder="First Name" id="ip-f-name"></td>
        </tr>
        <tr>
          <td>Last Name :</td>
          <td><input type="text" placeholder="Last Name" id="ip-l-name"></td>
        </tr>
        <tr>
          <td>E-Mail :</td>
          <td><input type="text" placeholder="Your E-Mail Id" id="ip-e-mail"></td>
        </tr>
        <tr>
          <td>A OTP will be sent to your mail id for verification.</td>
          <td>
            <Button class="btn btn-success" id="register-btn">Register</Button>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>  
-->
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation" id="staff_pestaña">
                        <button class="nav-link pestaña active" id="staff" data-bs-toggle="tab" data-bs-target="#member_form" type="button" role="tab" aria-controls="home" aria-selected="true">Staff</button>
                    </li>
                    <li class="nav-item" role="presentation" id="plan_pestaña">
                        <button class="nav-link pestaña" style="" id="plan_button" data-bs-toggle="tab" data-bs-target="#plan_form" type="button" role="tab" aria-controls="profile" aria-selected="false">Elegir Horario</button>
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
                                        <label id="label_4" class="control-label">Cargo</label>
                                        <input type="text" class="form-control" name="txt_cargo" id="txt_cargo" placeholder="Cargo" />
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
                                <button type="button" id="btnstaff" class="btn btn-info">Crear Staff</button>
                                <button type="button" id="btnmodstaff" class="btn btn-info">Modificar Staff</button>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="plan_form" role="tabpanel" aria-labelledby="plan_button">
                        <div class="container">
                            <br>
                            <h3>Elegir Horario</h3>
                            <br>
                            <form action="" id="member-plan">
                                <div id="msg"></div>
                                <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>" class="form-control">
                                <div class="row form-group">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                            <label class="form-check-label" for="check1">Lunes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                            <label class="form-check-label" for="check1">Martes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
                                            <label class="form-check-label" for="check1">Miercoles</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
                                            <label class="form-check-label" for="check1">Jueves</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check5" name="option5" value="something">
                                            <label class="form-check-label" for="check1">Viernes</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check6" name="option6" value="something">
                                            <label class="form-check-label" for="check1">Sabado</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check7" name="option7" value="something">
                                            <label class="form-check-label" for="check1">Domingo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    <div class="container">
        <div class='col-md-4'>
         
        </div>
        <div class='col-md-4'>
          <input type="text" id="slider3" class="slider" />
        </div>
        <div class='col-md-4'>
          
        </div>
        
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
         <div class="container">
        <div class='col-md-4'>
         
        </div>
        <div class='col-md-4'>
          <input type="text" id="slider3" class="slider" />
        </div>
        <div class='col-md-4'>
          
        </div>
        
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
                onChange: function(vals) {
                    console.log(vals);
                }
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
                    data: "position"
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
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Debes seleccionar un registro de la tabla',
                    showConfirmButton: false,
                    timer: 1500
                })
                end_load();
            } else {

                eliminar(data['id_staff']);
            }
        });



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
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Debes seleccionar un registro de la tabla',
                    showConfirmButton: false,
                    timer: 1500
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

    var $registrationForm = $('#registration');
    if ($registrationForm.length) {
        $registrationForm.validate({
            rules: {
                txt_name: {
                    required: true,
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
                txt_cargo: {
                    required: true
                }
            },
            messages: {
                txt_name: {
                    required: 'Please enter username!',
                },
                txt_email: {
                    required: 'Please enter email!',
                    email: 'Please enter valid email!'
                },
                txt_mobile: {
                    required: 'Please enter mobile!'
                },
                txt_password: {
                    required: 'Please enter the password!'
                },
                txt_cargo: {
                    required: 'Please enter the charge!'
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




    $("#bthorario").click(function() {

        console.log("data");
        document.getElementById("plan_button").disabled = false;
        if ($('#plan_select').select2('val') != null) {
            data = $('#plan_select').select2('data')[0];
        }
        var data = {
            'discount': $('#txt_desc').val(),
            'month': data['text'],
            'cost': $('#txt_total').val(),
            'id': $('#txt_id').val(),

        };
        $.ajax({
            url: site_url + '/staff/schedule',
            method: "post",
            data: data,
            success: function(resp) {


                var result = $.parseJSON(resp);

                if (result.resp == 1) {
                    $('#exampleModal').modal('toggle');
                    table.ajax.reload();
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Plan asignado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    })


                } else if (resp == 2) {
                    $('#msg').html('<div class="alert alert-danger">Error al enviar el correo.</div>')
                    end_load();
                }
            }
        })
    });

    $("#btnmodstaff").click(function() {
        //   $('#txt_valor').val('300');
        if ($("#registration").valid() == false) {

            return;
        } else {

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
                    console.log(result);
                    if (result.resp == 1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Staff registrado correctamente',
                            showConfirmButton: false,
                            timer: 1500
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


    $("#btnstaff").click(function() {
        if ($("#registration").valid() == false) {

            return;
        } else {

            document.getElementById("plan_button").disabled = false;

            var data = {
                'name': $('#txt_name').val(),
                'email': $('#txt_email').val(),
                'mobile': $('#txt_mobile').val(),
                'password': $('#txt_password').val(),
                'charge': $('#txt_cargo').val()
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
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Staff registrado correctamente',
                            showConfirmButton: false,
                            timer: 1500
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
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Staff actualizado correctamente',
                            showConfirmButton: false,
                            timer: 1500
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
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Staff con una cuenta activa no es posible eliminar el registro',
                        showConfirmButton: false,
                        timer: 3500
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
                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Registro eliminado',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        table.ajax.reload();
                                        end_load();
                                    } else if (resp == 2) {
                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'error',
                                            title: 'Error al eliminar el registro',
                                            showConfirmButton: false,
                                            timer: 1500
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

    function actualizar(id) {
        enable_tabs();
        end_load();
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

                    console.log("data_2");
                    document.getElementById("plan_button").classList.remove('active');
                    document.getElementById("staff_pestaña").classList.remove('enabledTab');
                    document.getElementById("plan_pestaña").classList.add('disabledTab');
                    document.getElementById("plan_form").classList.remove('active');
                    document.getElementById("view_form").classList.remove('active');

                    document.getElementById("member_form").classList.add('show');
                    document.getElementById("member_form").classList.add('active');
                    document.getElementById("member_form").classList.add('enabledTab');
                    document.getElementById("staff").classList.add('active');

                    $('#txt_id').val(result.data['id_staff']);
                    $('#txt_name').val(result.data['name']);
                    $('#txt_email').val(result.data['email']);
                    $('#txt_mobile').val(result.data['mobile']);
                    $('#txt_cargo').val(result.data['position']);
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

                        if (result.pay[0]['date_in'] === today) {
                            $('#btn_eliminarplan').show();
                        } else {
                            document.getElementById('btn_eliminarplan').style.display = 'none';
                        }



                    } else {
                        console.log("data_1");
                        document.getElementById('view_pestaña').style.display = 'none';
                        document.getElementById('plan_pestaña').style.display = 'block';

                    }

                } else if (resp == 2) {
                    console.log("data_3");
                    $('#msg').html('<div class="alert alert-danger">ID No already existed.</div>')
                    end_load();
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



    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0 0 50px;
        color: #333;
        font-size: 14px;
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
</style>


<?= $this->endSection() ?>