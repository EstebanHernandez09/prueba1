<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | GanaGana</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body class="contenedor-global">
<h3 class="card-title">VINCULA TU NEGOCIO</h3>   
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/01.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/02.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/03.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/04.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/05.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/06.jpeg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<div class="cont-preg flex-wrap"><h3 class="card-title">¿Que deseas hacer?</h3>   
<button  class="btn btn-outline-success bton1" onclick="mostrarRef();">Referir a un Interesado</button>
<button class="btn btn-outline-success bton1" onclick="mostrarInt();">Soy el Interesado</button>
</div><br>
<div class="img-gana">
        <img class="img-fluid" src="img/ganaplus.png" alt="Logo">
    </div>
    <div id="cont-one">
            <form class="row g-3 container container-one" role="form" method="post">
                <h3 class="card-title">Datos quien refiere</h3>   
                <div class="col-md-4">
                <input type="number" class="form-control" name="cedula_act" placeholder="Cedula Asesor, Colaborador o Tercero" required  autofocus autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="text" class="form-control" name="nom_ape" placeholder="Nombres y Apellidos" required  autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="number" class="form-control" name="contac_act" placeholder="Contacto Asesor, Colaborador o Tercero" required autocomplete="off">
                </div>
                <div class="col-md-4">
                    <select class="form-control input-lg" name="sel_Zona" required>

                    <option disabled selected>Selecciona una opcion</option>

                    <option value="1">Micro zona 1</option>
                    <option value="2">Micro zona 2</option>
                    <option value="3">Micro zona 3</option>
                    <option value="4">Micro zona 4</option>
                    <option value="5">Micro zona 5</option>
                    <option value="6">Micro zona 6</option>
                    <option value="7">Micro zona 7</option>
                    <option value="8">Micro zona 8</option>
                    <option value="9">Micro zona 9</option>
                    <option value="00">Otro</option>

                </select>
            </div>
                <h3 class="card-title">Información del referido GGPLUS</h3>
                <div class="col-md-4">
                <input type="number" class="form-control" name="ced_c" placeholder="Cédula cliente"  required autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="text" class="form-control" name="nom_ape_c" placeholder="Nombres y Apellidos" required  autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="number" class="form-control" name="cel_c" placeholder="Numero celular" required  autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="text" class="form-control" name="dir_c" placeholder="Direccion" required  autocomplete="off">
                </div>
                <div class="col-md-3">
                <select class="form-control input-lg" name="selcZona" required>

                    <option disabled selected>Selecciona Municipio o Vereda</option>
                    
                    <option value="Ibague">Ibague</option>
                    <option value="Honda">Honda</option>
                    <option value="Mariquita">Mariquita</option>
                    <option value="Fresno">Fresno</option>
                    <option value="Palocabildo">Palocabildo</option>
                    <option value="Herveo">Herveo</option>
                    <option value="Villahermosa">Villahermosa</option>
                    <option value="Libano">Libano</option>
                    <option value="Convenio">Convenio</option>
                    <option value="Armero">Armero</option>
                    <option value="Lerida">Lerida</option>
                    <option value="Ambalema">Ambalema</option>
                    <option value="Alvarado">Alvarado</option>
                    <option value="Venadillo">Venadillo</option>
                    <option value="Santa Isabel">Santa Isabel</option>
                    <option value="Espinal">Espinal</option>
                    <option value="Guamo">Guamo</option>
                    <option value="Chicoral">Chicoral</option>
                    <option value="Saldana">Saldana</option>
                    <option value="Purificacion">Purificacion</option>
                    <option value="Natagaima">Natagaima</option>
                    <option value="Coyaima">Coyaima</option>
                    <option value="Chenche">Chenche</option>
                    <option value="Ortega">Ortega</option>
                    <option value="Chaparral">Chaparral</option>
                    <option value="Prado">Prado</option>
                    <option value="Castilla">Castilla</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="Rioblanco">Rioblanco</option>
                    <option value="Planadas">Planadas</option>
                    <option value="Playarica">Playarica</option>
                    <option value="Ataco">Ataco</option>
                    <option value="Carmen De Apicala">Carmen De Apicala</option>
                    <option value="Melgar">Melgar</option>
                    <option value="Rovira">Rovira</option>
                    <option value="Flandes">Flandes</option>
                    <option value="San Luis">San Luis</option>
                    <option value="Dolores">Dolores</option>
                    <option value="Anzoategui">Anzoategui</option>
                    <option value="Villarrica">Villarrica</option>
                    <option value="Cunday">Cunday</option>
                    <option value="Cajamarca">Cajamarca</option>
                    <option value="Icononzo">Icononzo</option>
                    <option value="Murillo">Murillo</option>
                    <option value="Falan">Falan</option>
                    <option value="Tres Equinas">Tres Equinas</option>
                    <option value="Piedras">Piedras</option>
                    <option value="Alpujarra">Alpujarra</option>
                    <option value="Coello">Coello</option>
                    <option value="Valle De San Juan">Valle De San Juan</option>
                    <option value="Payande">Payande</option>
                    <option value="Gaitania">Gaitania</option>
                    <option value="San Juan De La China">San Juan De La China</option>
                    <option value="Roncesvalles">Roncesvalles</option>
                    <option value="Casabianca">Casabianca</option>
                    <option value="Doima">Doima</option>
                </select>
            </div>
                <div class="col-md-5">
                <textarea class="form-control" rows="7" name="observaciones" placeholder="Observaciones"  autocomplete="off"></textarea>
                </div>
            
                <div class="col-md-4 check cont">
                    <input class="form-check-input" type="checkbox"  name="check" required autocomplete="off">
                    <a onclick="terminos();" class="aceptar">Acepta los terminos y condiciones</a>
                </div>
                    <button class="btn bton btn-outline-success col-md-1" type="submit">Enviar</button>
                    <?php
                    include('referidos.php');
                    ?>
        </form>
    </div>

        <div id="cont-two">
          <form class="row g-3 container container-two" role="form" method="post">
            <h3 class="card-title">Datos del Interesado</h3>
                <div class="col-md-4">
                <input type="number" class="form-control" name="ced_c1" placeholder="Cédula cliente" required autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="text" class="form-control" name="nom_ape_c1" placeholder="Nombres y Apellidos" required autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="number" class="form-control" name="cel_c1" placeholder="Numero celular" required autocomplete="off">
                </div>
                <div class="col-md-4">
                <input type="text" class="form-control" name="dir_c1" placeholder="Direccion" required autocomplete="off">
                </div>
                <div class="col-md-3">
                <select class="form-control input-lg" name="selcZona1" required>

                    <option disabled selected>Selecciona Municipio o Vereda</option>
                    
                    <option value="Ibague">Ibague</option>
                    <option value="Honda">Honda</option>
                    <option value="Mariquita">Mariquita</option>
                    <option value="Fresno">Fresno</option>
                    <option value="Palocabildo">Palocabildo</option>
                    <option value="Herveo">Herveo</option>
                    <option value="Villahermosa">Villahermosa</option>
                    <option value="Libano">Libano</option>
                    <option value="Convenio">Convenio</option>
                    <option value="Armero">Armero</option>
                    <option value="Lerida">Lerida</option>
                    <option value="Ambalema">Ambalema</option>
                    <option value="Alvarado">Alvarado</option>
                    <option value="Venadillo">Venadillo</option>
                    <option value="Santa Isabel">Santa Isabel</option>
                    <option value="Espinal">Espinal</option>
                    <option value="Guamo">Guamo</option>
                    <option value="Chicoral">Chicoral</option>
                    <option value="Saldana">Saldana</option>
                    <option value="Purificacion">Purificacion</option>
                    <option value="Natagaima">Natagaima</option>
                    <option value="Coyaima">Coyaima</option>
                    <option value="Chenche">Chenche</option>
                    <option value="Ortega">Ortega</option>
                    <option value="Chaparral">Chaparral</option>
                    <option value="Prado">Prado</option>
                    <option value="Castilla">Castilla</option>
                    <option value="San Antonio">San Antonio</option>
                    <option value="Rioblanco">Rioblanco</option>
                    <option value="Planadas">Planadas</option>
                    <option value="Playarica">Playarica</option>
                    <option value="Ataco">Ataco</option>
                    <option value="Carmen De Apicala">Carmen De Apicala</option>
                    <option value="Melgar">Melgar</option>
                    <option value="Rovira">Rovira</option>
                    <option value="Flandes">Flandes</option>
                    <option value="San Luis">San Luis</option>
                    <option value="Dolores">Dolores</option>
                    <option value="Anzoategui">Anzoategui</option>
                    <option value="Villarrica">Villarrica</option>
                    <option value="Cunday">Cunday</option>
                    <option value="Cajamarca">Cajamarca</option>
                    <option value="Icononzo">Icononzo</option>
                    <option value="Murillo">Murillo</option>
                    <option value="Falan">Falan</option>
                    <option value="Tres Equinas">Tres Equinas</option>
                    <option value="Piedras">Piedras</option>
                    <option value="Alpujarra">Alpujarra</option>
                    <option value="Coello">Coello</option>
                    <option value="Valle De San Juan">Valle De San Juan</option>
                    <option value="Payande">Payande</option>
                    <option value="Gaitania">Gaitania</option>
                    <option value="San Juan De La China">San Juan De La China</option>
                    <option value="Roncesvalles">Roncesvalles</option>
                    <option value="Casabianca">Casabianca</option>
                    <option value="Doima">Doima</option>
                </select>
            </div>
                <div class="col-md-5">
                <textarea class="form-control" rows="7" name="observaciones1" placeholder="Observaciones"  autocomplete="off"></textarea>
                </div>
            
                <div class="col-md-4 check cont">
                    <input class="form-check-input" type="checkbox" name="check1" required autocomplete="off">
                    <a onclick="terminos();" class="aceptar">Acepta los terminos y condiciones</a>
                </div>
                    <button class="btn bton btn-outline-success col-md-1" type="submit">Enviar</button>
                    <?php
                    include('interesados.php');
                    ?>
            </form>
        </div>
        <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/cod.js"></script>
</body>
</html>
