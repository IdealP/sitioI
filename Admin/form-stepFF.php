<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Alta Alumnos - Secundaria</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo_ideal.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }
        
        input:checked+.slider {
            background-color: #2196F3;
        }
        
        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        /* Rounded sliders */
        
        .slider.round {
            border-radius: 34px;
        }
        
        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        function PreviewImage() {
            pdffile = document.getElementById("uploadPDF").files[0];
            pdffile_url = URL.createObjectURL(pdffile);
            $('#viewer').attr('src', pdffile_url);
        }

        function PreviewImage2() {
            pdffile = document.getElementById("uploadPDF2").files[0];
            pdffile_url = URL.createObjectURL(pdffile);
            $('#viewer2').attr('src', pdffile_url);
        }

        function PreviewImage3() {
            pdffile = document.getElementById("uploadPDF3").files[0];
            pdffile_url = URL.createObjectURL(pdffile);
            $('#viewer3').attr('src', pdffile_url);
        }

        function PreviewImage4() {
            pdffile = document.getElementById("uploadPDF4").files[0];
            pdffile_url = URL.createObjectURL(pdffile);
            $('#viewer4').attr('src', pdffile_url);
        }
    </script>

</head>


<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="../assets/img/logo_ideal.png" alt=""> </b>
                    <span class="brand-title">
                        <center>
                        <h1 style="color: white;">IDEAL</h1>
                    </center>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Buscar" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Buscar">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/form-user.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href=""><i class="icon-user"></i> <span>Perfil</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Bloquear Pantalla</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Cerrar Sesión</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Tablero</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Principal</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./../index.html">Inicio</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-label">Alumnos</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Control Escolar</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Alta</a></li>
                            <li><a href="">Bajas</a></li>
                            <li><a href="">Por Matricular</a></li>
                            <li><a href="">Cardex</a></li>
                            <li><a href="">Plan de Estudio</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Titulaciones</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Carta Termino</a></li>
                            <li><a href="">Carta Pasante</a></li>
                            <li><a href="">Titulos</a></li>
                            <li><a href="">Cardex</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">CERTIFICACIONES</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Secundaria y Preparatoria</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Certificación</a>
                                <ul aria-expanded="false">
                                    <li><a href="form-step.html">Secundaria</a></li>
                                    <li><a href="form-stepPRE.html">Preparatoria</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Listas</a>
                                <ul aria-expanded="false">
                                    <li><a href="">Lista General</a></li>
                                    <li><a href="">Lista 2</a></li>
                                    <li><a href="">Lista 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Preparatoria 2 años</a></li>
                            <li><a href="">Preparatoria 3 años</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Finanzas</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Alumnos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Historial de Pagos</a></li>
                    </li>
                    </ul>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Escuelas</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Historial de Pagos por Carrera</a></li>
                    </li>
                    </ul>
                    <ul aria-expanded="false">
                        <li><a href="">Historial de Pagos General</a></li>
                        </li>
                    </ul>
                    <ul aria-expanded="false">
                        <li><a href="listaAbierta.html">Lista Abierta</a></li>
                        </li>
                    </ul>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Titulaciones</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Cobranza Ideal</a></li>
                    </li>
                    </ul>
                    <ul aria-expanded="false">
                        <li><a href="">Estadistica Total Ideal</a></li>
                        </li>
                    </ul>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Certificadoras</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Control de Pagos Mensual</a></li>
                    </li>
                    </ul>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Control de Pagos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="">Mensual</a></li>
                    </li>
                    </ul>

            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Secundaria y Preparatoria</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Alta Alumno</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form aaction="alta_alu.php" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <h4>Datos Generales</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>Apellido Paterno</p>
                                            <div class="form-group">
                                                <input type="text" name="apellidop" class="form-control" placeholder="Ap. Paterno" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Apellido Materno</p>
                                            <div class="form-group">
                                                <input type="text" name="apellidom" class="form-control" placeholder="Ap. Materno" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>Nombre(s)</p>
                                            <div class="form-group">
                                                <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>CURP</p>
                                            <div class="form-group">
                                                <input type="text" name="curp" class="form-control" placeholder="XXXXXXXXXXXXXXXXXX" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <p>Genero</p>
                                            <div class="form-group">
                                                <select name="genero" style="background-color: #F2F6F9; width: 200px; height: 45px; border-color: #F2F6F9 ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">Mujer</option>
                                                    <option value=" ">Hombre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <p>fecha Nacimiento</p>
                                            <input type="date" name="nacimiento" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-lg-3">
                                            <p>Edad</p>
                                            <div class="form-group">
                                                <input type="number" name="edad" class="form-control" placeholder="Edad" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            <p>Fecha Exp-Certificado</p>
                                            <div class="form-group ">
                                                <input type="date" name="fecerti" class="form-control " placeholder="Fecha Certificado " required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Datos Académicos</h4>
                                <section>
                                    <div class="row">
                                        <div class=" col-lg-4">
                                            <p>Nivel</p>
                                            <div class="form-group ">
                                                <input type="text" name="nivel" class="form-control " value="SECUNDARIA" placeholder="SECUNDARIA">
                                            </div>
                                        </div>
                                        <div class=" col-lg-4 ">
                                            <p>Cuatrimestre</p>
                                            <div class="form-group ">
                                                <select name="cuatri" class="form-select " id=" " style="background-color: #F2F6F9; width: 300px; height: 45px; border-color: #F2F6F9 ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">1</option>
                                                    <option value=" ">2</option>
                                                    <option value=" ">3</option>
                                                    <option value=" ">4</option>
                                                    <option value=" ">5</option>
                                                    <option value=" ">6</option>
                                                    <option value=" ">7</option>
                                                    <option value=" ">8</option>
                                                    <option value=" ">9</option>
                                                    <option value=" ">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <p>Fecha Registro</p>
                                            <div class="form-group ">
                                                <input type="date" name="fereg" class="form-control " placeholder="Fecha registro" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <p>No. Aplicación</p>
                                            <div class="form-group ">
                                                <select name="noapp" class="form-select " id=" " style="background-color: #F2F6F9   ; width: 400px; height: 45px; border-color: #F2F6F9  ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">EU-SEP 32</option>
                                                    <option value=" ">---</option>
                                                    <option value=" ">---</option>
                                                    <option value=" ">---</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <p>No. Ingreso</p>
                                            <div class="form-group ">
                                                <input type="text " name="matricula" class="form-control " placeholder="No. Ingreso " required>
                                            </div>
                                        </div>
                                        <center>
                                            <p>LOS DATOS SE DEBEN LLENAR SOLO SI SE REQUIERE (ESPECIAL O RETROACTIVO)</p>
                                        </center>
                                        <br>
                                        <div class="col-lg-4 ">
                                            <p>Especial Retroactivo</p>
                                            <label class="switch">
                                                <input name="retro" type="checkbox" checked>
                                                <span class="slider round"></span>
                                              </label>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <p>Carrea Técnica del Certificado</p>
                                            <div class="form-group ">
                                                <select name="carreart" class="form-control " id=" " style="background-color: #F2F6F9   ; width: 200px; height: 45px; border-color: #F2F6F9  ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value="Trabajo Social">Trabajo Social</option>
                                                    <option value="Programación">Programación</option>
                                                    <option value="Puericultura">Puericultura</option>
                                                    <option value="Contabilidad">Contabilidad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p>Promedio</p>
                                            <div class="form-group ">
                                                <input type="number" name="prom" class="form-control " placeholder="n.n" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <p>Constancia de Autenticidad</p>
                                            <div class="form-group ">
                                                <select name="constana" class="form-control " id=" " style="background-color: #F2F6F9   ; width: 200px; height: 45px; border-color: #F2F6F9  ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">SI</option>
                                                    <option value=" ">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <p>Estatus</p>
                                            <div class="form-group ">
                                                <select name="estatus" class="form-control " id=" " style="background-color: #F2F6F9   ; width: 200px; height: 45px; border-color: #F2F6F9  ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">POR CERTIFICAR</option>
                                                    <option value=" ">ALUMNO ACTIVO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <p>Generación</p>
                                            <div class="form-group ">
                                                <select name="generacion" class="form-control " id=" " style="background-color: #F2F6F9   ; width: 200px; height: 45px; border-color: #F2F6F9  ; ">
                                                    <option value=" ">Selecciona</option>
                                                    <option value=" ">2013-2016 - Retroactivo</option>
                                                    <option value=" ">2016-2019</option>
                                                    <option value=" ">2017-2020</option>
                                                    <option value=" ">2018-2020</option>
                                                    <option value=" ">2019-2021</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Documentos</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <center>
                                                        <h5 class="card-title">Acta de Nacimiento Certificada</h5>
                                                        <input id="uploadPDF" type="file" accept=".pdf" onclick="PreviewImage();" name="acta" />&nbsp;
                                                        <br>
                                                        <a href="#" class="btn btn-primary" value="Preview" onclick="PreviewImage();">Vista Previa</a></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="clear:both">
                                                        <iframe id="viewer" frameborder="0" scrolling="si" width="450" height="120"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <center>
                                                        <h5 class="card-title">Certificado de Secundaria</h5>
                                                        <br>
                                                        <input id="uploadPDF2" type="file" accept=".pdf" onclick="PreviewImage2();" name="certsec" />&nbsp;
                                                        <br>
                                                        <a href="#" class="btn btn-primary" value="Preview" onclick="PreviewImage2();">Vista Previa</a></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="clear:both">
                                                        <iframe id="viewer2" frameborder="0" scrolling="si" width="450" height="120"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <center>
                                                        <h5 class="card-title">CURP</h5>
                                                        <br>
                                                        <input id="uploadPDF3" type="file" accept=".pdf" onclick="PreviewImage3();" name="doccurp" />&nbsp;
                                                        <br>
                                                        <a href="#" class="btn btn-primary" value="Preview" onclick="PreviewImage3();">Vista Previa</a></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="clear:both">
                                                        <iframe id="viewer3" frameborder="0" scrolling="si" width="450" height="120"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Documento General</h4>
                                <section>
                                    <center>
                                        <h1>Por favor sube los tres docuementos previamente subidos en un solo PDF</h1>
                                    </center>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <center>
                                                        <h5 class="card-title">Documentos en un solo PDF</h5>
                                                        <br>
                                                        <input id="uploadPDF4" type="file" accept=".pdf" onclick="PreviewImage4();" name="todos" />&nbsp;
                                                        <br>
                                                        <a href="#" class="btn btn-primary" value="Preview" onclick="PreviewImage4();">Vista Previa</a></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="clear:both">
                                                        <iframe id="viewer4" frameborder="0" scrolling="si" width="450" height="120"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--   <div class="row h-100 ">
                                        <div class="col-12 h-100 d-flex flex-column justify-content-center align-items-center ">
                                            <br>
                                            <h2>Datos Enviados Correctamente</h2>
                                            <br>
                                            <p>En caso de algún cambio o error en los datos y/o documentación, se recibirá un correo electronico con las observaciones correspondientes.</p>
                                        </div>
                                    </div> -->
                                    <center>
                                        <input value="Submit" type="submit" class="btn btn-primary">
                                    </center>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer ">
            <center>
                <div class="container ">
                    <div class="copyright ">
                        <strong><span>CORPORATIVO IDEAL - ÉXITO: PASIÓN DE VIDA</span></strong>
                    </div>
                </div>
            </center>
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <script src="plugins/common/common.min.js "></script>
        <script src="js/custom.min.js "></script>
        <script src="js/settings.js "></script>
        <script src="js/gleek.js "></script>
        <script src="js/styleSwitcher.js "></script>


        <script src="./plugins/jquery-steps/build/jquery.steps.min.js "></script>
        <script src="./plugins/jquery-validation/jquery.validate.min.js "></script>
        <script src="./js/plugins-init/jquery-steps-init.js "></script>

</body>

</html>