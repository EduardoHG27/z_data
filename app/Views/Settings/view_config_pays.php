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
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Settings</li>
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
                    <b>Settings Pays</b>
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
                                    <a class="small-box-footere">Agregar Cuota<i class="fa fa-arrow-circle-right"></i></a>
                                </button>
                                <button id="update_button" class="ejemplo1 btn-warning dis">
                                    <div class="icono">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                    <a class="small-box-footere">Modificar Cuota<i class="fa fa-arrow-circle-right"></i></a>
                                </button>

                                <button id="btndelete" class="ejemplo1 bg-red dis eliminar">
                                    <div class="icono">
                                        <i class="far fa-trash-alt"></i>
                                    </div>
                                    <a class="small-box-footere">Eliminar Cuota <i class="fa fa-arrow-circle-right"></i></a>
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
                                 <th>Id</th>
                                <th>Modificacion</th>
                                <th>Costo</th>
                                <th>Dato</th>
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
                        <button class="nav-link pestaña active" id="staff" data-bs-toggle="tab" data-bs-target="#member_form" type="button" role="tab" aria-controls="home" aria-selected="true">Cuota</button>
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
                                        <label class="control-label">Id</label>
                                        <input type="text" class="form-control" name="txt_id" id="txt_id" placeholder="Id" readonly />
                                        <small><i>Leave this blank if you want to a auto generate ID no.</i></small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    

                                    <div id="div_5" class="col-md-4">
                                        <label id="label_4" class="control-label">Nombre Cuota</label>
                                        <select class="js-select2" id="plan_select" name='plan_select' style="width: 100%;">
                                            <option value="">Selecciona</option>
                                            <option value="Mensualidad">Mensualidad</option>
                                            <option value="Semanal">Semanal</option>
                                            <option value="Dia">Dia</option>
                                        </select>
                                    </div>
                                    <div id="div_1" class="col-md-4">
                                        <label class="control-label">Costo</label>
                                        <input type="number" class="form-control" name="txt_costo" id="txt_costo" min="1" placeholder="Mensualidad" />
                                    </div>
                                
                                    <!--  <div id="div_5" class="col-md-4">
                                        
                                        <select class="js-select2" id="plan_select_1" name='item1' tyle="width: 100%;">
                                            <option value=''>Selecciona</option>
                                        </select>
                                     <div class="form-group">
                                        <label id="label_4" class="control-label">Cargo</label>
                                            <select class="js-select2" id="plan_select" name='plan_select' style="width: 100%;">
                                                <option value="">Selecciona</option>
                                            </select>
                                        </div>
                                    </div>-->

                                  
                                </div>
                                <div class="row form-group">
                                </div>
                            </form>
                            <div class="modal-footer">
                                <button type="button" id="btncuota" class="btn btn-info">Crear Cuota</button>
                                <button type="button" id="btnmodcuota" class="btn btn-info">Modificar Cuota</button>
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


    $(document).ready(function() {

      //  get_rol();
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
                url: site_url + "/settings/plan-ajax-load", // json datasource
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
            columns: [
                {
                    data:"id_config"
                },
                {
                    data: "name_config",
                   
                },
                {
                    data: "cost_config",
                    'orderable': true,
                    'searchable': true
                },
                {
                    data: "status_config"
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
                            '<button class="red-button-min" onclick="eliminar(' + row.id_config + ')"><i class="fas fa-trash-alt"></i></button>' +
                            '<button class="yellow-button-min" onclick="actualizar(' + row.id_config + ')"><i class="fa fa-pencil-square-o"></i></button>' +
                            '<button class="bluew-button-min" onclick="get_qr(' + row.id_config + ')"><i class="fa fa-qrcode"></i></button>' +
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
            });txt_id
            $("body").one("mouseup", function() {
                $("body").off("mousemove.draggable");
            });
            $draggable.closest(".modal").one("bs.modal.hide", function() {
                $("body").off("mousemove.draggable");
            });
        });


        $("#btn_agregarstaff").click(function() {
            $("#registration").data('validator').resetForm();
            remove_red();

            //validator.resetForm();
            $('.modal-title').text('Agregar | Cuota');
            $('#exampleModal').modal('show');

            $('#txt_id').val('');
            $('#txt_costo').val('');
            $('#txt_email').val('');
            $('#txt_mobile').val('');
            $('#btncuota').show();
            $('#btnmodcuota').hide();
            $('#btnactializar_est').hide();





            document.getElementById("member_form").classList.add('active');
            document.getElementById("member_form").classList.add('show');




            $('#plan_button').attr("style", "opacity:0.4");
            $('#plan_pestaña').attr("class", "disabledTab");
            $('#msg').html('')

        });


        $("#update_button").click(function() {

            remove_red();
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
                txt_costo: {
                    required: true,
                    min: 1
                },
                plan_select: {
                    required: true
                }
            },
            messages: {
                txt_costo: {
                    required: 'El campo Cuota esta vacio!',
                },
                plan_select: {
                    required: 'El campo Nombre Cuota esta vacio!!'
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



    $("#btncuota").click(function() {
        if ($("#registration").valid() == false) {

            return;
        } else {

           
            if ($('#plan_select').select2('val') != null) {
                data_select = $('#plan_select').select2('data')[0];
            }

            console.log(data_select);
            var data = {
                'charge': $('#txt_costo').val(),
                'text': data_select['text']
            };
            start_load();
            $.ajax({
                url: site_url + '/settings/create_pay',
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

                       

                        table.ajax.reload();
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

   


   
   

  
    function remove_red() {
        div_1.classList.remove("error");
        div_5.classList.remove("error");

    }
    


    function actualizar(id) {
        
        $("#registration").data('validator').resetForm();
        remove_red()
        end_load();
        $('#exampleModal').modal('toggle');
        $('#exampleModal').modal('show');
        $('.modal-title').text('Modificar | Cuota');
        $('#btnNewForma_Adq').hide();
        $('#btnmodcuota').show();
        $('#btncuota').hide();
        console.log(id);
        $.ajax({
            url: site_url + '/settings/mod_pay',
            method: "post",
            data: {
                id: id
            },
            success: function(resp) {
                var result = $.parseJSON(resp);
                if (result.resp == 1) {
                  
                    $('#txt_id').val(result.data['id_config']);
                    $('#txt_costo').val(result.data['cost_config']);
                    $('#plan_select').val(result.data['name_config']).change();
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
  

    $("#btnmodcuota").click(function() {
        //   $('#txt_valor').val('300');
        if ($("#registration").valid() == false) {
            //disable_tabs();
            return;
        } else {
            let res;
            if ($("#flexRadioDefault1").is(":checked")) {
                res = 'true';
            } else {
                res = 'false';
            }
            if ($('#plan_select').select2('val') != null) {
                data = $('#plan_select').select2('data')[0];
            }
            console.log(data['text']);
            var data = {
                'id_config': $('#txt_id').val(),
                'cost_config': $('#txt_costo').val(),
                'name_config': data['text']
            };
            $.ajax({
                url: site_url + '/settings/update_set',
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
                            title: 'Plan actualizado correctamente'
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