<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="bd/registros/alta_alu.php" id="step-form-horizontal" class="step-form-horizontal" method="post">
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
                                <input type="submit" value="ENVIAR" class="btn btn-primary">
                            </center>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>