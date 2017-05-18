<!DOCTYPE html>
<html>
<head>
  <style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}
</style>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title><?= $title ?></title>
</head>
<body  style="background-color: #283747;">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="font-family: 'Elephant';color: #e6e6ff;" class="navbar-brand" >EXAMEN DE PRUEBA DE SUFIECIENCIA ACADEMICA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" style="font-family: 'Elephant';color: #8080ff;background-color: black" data-toggle="dropdown" href="#">Listar Estudiantes<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url() ?>carreras/index">Arquitectura</a></li>
          <li><a href="#">-----</a></li>
          <li><a href="#">-----</a></li>
        </ul>
      </li>
      <li><a href="#" style="font-family: 'Elephant';color: #8080ff;background-color: black">Ver Resulatdos del Examen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="font-family: 'Elephant';color: #8080ff;background-color: black"><a style="font-family: 'Elephant';color: #8080ff;background-color: black" href="<?=site_url('admi/logout')?>"><span class="glyphicon glyphicon-user"></span> salir</a></li>
    </ul>
  </div>
</nav>
<div class="container" style="background-color: #e6e6ff;font-family: 'Bauhaus 93'">
  <h1>FACULTADES DE LA  "U.A.T.F"</h1>            
  
    <table class="table table-bordered" BORDER=1 WIDTH=900>
      <tr>
        <td >"D.S.A"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td style="color: #3366ff"><button style="color: #3366ff"  class="accordion">ARQUITECTURA</button>
                    <div style="color: black;font-family: 'Times New Roman'" class="panel">
                      <p> <!-- Trigger the modal with a button -->
                        <button type="button" class="btn default" data-toggle="modal" data-target="#myModal">FISICA</button>

                        <!-- Modal -->
                        <div   class="modal fade" id="myModal" role="dialog">
                            <div  class="modal-dialog">
        
                                <!-- Modal content-->
                                <div  style="color: black;font-family: 'Times New Roman'"class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">PREGUNTAS FISICA:</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" method="POST" action="<?= base_url()?>preguntas/cargarfisica">
                              
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="pregunta">PREGUNTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="pregunta" placeholder="ingrese la pregunta" name="pregunta">
                                                  </div>
                                              </div>
                                              
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestav">RESPUESTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestav" placeholder="ingrese la respuesta" name="respuestav">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf1">RESPUESTA FALSA 1:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf1" placeholder="ingrese la respuesta" name="respuestaf1">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf2">RESPUESTA FALSA 2:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf2" placeholder="ingrese la respuesta" name="respuestaf2">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf3">RESPUESTA FALSA 3:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf3" placeholder="ingrese la respuesta" name="respuestaf3">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">RESPUESTA FALSA 4:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf4" placeholder="ingrese la respuesta" name="respuestaf4">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="nota">PUNTAJE</label>
                                                  <div class="col-sm-10">
                                                      <input type="int" class="form-control" id="nota" placeholder="ingrese el puntaje" name="nota">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-sm-10">
                                                      <input type="hidden" id="oculto" name="oculto" value="1">
                                                  </div>
                                              </div>

                                              <div class="form-group">        
                                                  <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">CARGAR</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                         
                                      </div>
                                </div>
                            </div>
                        </div></p>
                        <p> <!-- Trigger the modal with a button -->
                        <button type="button" class="btn default" data-toggle="modal" data-target="#myModal1">HISTORIA</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
        
                                <!-- Modal content-->
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">PREGUNTAS DE HISTORIA:</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" method="POST" action="<?= base_url()?>preguntas/cargarhistoria">
                        
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="pregunta">PREGUNTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="pregunta" placeholder="ingrese la pregunta" name="pregunta">
                                                  </div>
                                              </div>
                                              
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestav">RESPUESTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestav" placeholder="ingrese la respuesta" name="respuestav">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf1">RESPUESTA FALSA 1:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf1" placeholder="ingrese la respuesta" name="respuestaf1">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf2">RESPUESTA FALSA 2:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf2" placeholder="ingrese la respuesta" name="respuestaf2">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf3">RESPUESTA FALSA 3:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf3" placeholder="ingrese la respuesta" name="respuestaf3">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">RESPUESTA FALSA 4:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf4" placeholder="ingrese la respuesta" name="respuestaf4">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">PUNTAJE</label>
                                                  <div class="col-sm-10">
                                                      <input type="int" class="form-control" id="nota" placeholder="ingrese el puntaje" name="nota">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-sm-10">
                                                      <input type="hidden" id="oculto" name="oculto" value="1">
                                                  </div>
                                              </div>

                                              <div class="form-group">        
                                                  <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">CARGAR</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                         
                                      </div>
                                </div>
                            </div>
                        </div></p>
                        <p> <!-- Trigger the modal with a button -->
                        <button type="button" class="btn default" data-toggle="modal" data-target="#myModal2">LITERATURA</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
        
                                <!-- Modal content-->
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">PREGUNTAS DE LITERATURA:</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" method="POST" action="<?= base_url()?>preguntas/cargarlite">
                        
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="pregunta">PREGUNTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="pregunta" placeholder="ingrese la pregunta" name="pregunta">
                                                  </div>
                                              </div>
                                              
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestav">RESPUESTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestav" placeholder="ingrese la respuesta" name="respuestav">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf1">RESPUESTA FALSA 1:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf1" placeholder="ingrese la respuesta" name="respuestaf1">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf2">RESPUESTA FALSA 2:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf2" placeholder="ingrese la respuesta" name="respuestaf2">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf3">RESPUESTA FALSA 3:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf3" placeholder="ingrese la respuesta" name="respuestaf3">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">RESPUESTA FALSA 4:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf4" placeholder="ingrese la respuesta" name="respuestaf4">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">PUNTAJE</label>
                                                  <div class="col-sm-10">
                                                      <input type="int" class="form-control" id="nota" placeholder="ingrese el puntaje" name="nota">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-sm-10">
                                                      <input type="hidden" id="oculto" name="oculto" value="1">
                                                  </div>
                                              </div>

                                              <div class="form-group">        
                                                  <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">CARGAR</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                         
                                      </div>
                                </div>
                            </div>
                        </div></p>
                        <p> <!-- Trigger the modal with a button -->
                        <button type="button" class="btn default" data-toggle="modal" data-target="#myModal3">MATEMATICA</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" role="dialog">
                            <div class="modal-dialog">
        
                                <!-- Modal content-->
                                <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">PREGUNTAS DE MATEMATICAS:</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" method="POST" method="POST" action="<?= base_url()?>preguntas/cargarmate">
                        
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="pregunta">PREGUNTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="pregunta" placeholder="ingrese la pregunta" name="pregunta">
                                                  </div>
                                              </div>
                                              
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestav">RESPUESTA:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestav" placeholder="ingrese la respuesta" name="respuestav">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf1">RESPUESTA FALSA 1:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf1" placeholder="ingrese la respuesta" name="respuestaf1">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf2">RESPUESTA FALSA 2:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf2" placeholder="ingrese la respuesta" name="respuestaf2">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf3">RESPUESTA FALSA 3:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf3" placeholder="ingrese la respuesta" name="respuestaf3">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">RESPUESTA FALSA 4:</label>
                                                  <div class="col-sm-10">
                                                      <input type="tex" class="form-control" id="respuestaf4" placeholder="ingrese la respuesta" name="respuestaf4">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-sm-2" for="respuestaf4">PUNTAJE</label>
                                                  <div class="col-sm-10">
                                                      <input type="int" class="form-control" id="nota" placeholder="ingrese el puntaje" name="nota">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-sm-10">
                                                      <input type="hidden" id="oculto" name="oculto" value="1">
                                                  </div>
                                              </div>

                                              <div class="form-group">        
                                                  <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">CARGAR</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                         
                                      </div>
                                </div>
                            </div>
                        </div></p>
                      
                    </div>
                  </td>  
              </tr>
              <tr>
                <td >DERECHO "UNCIA"</td>
              </tr>
              <tr>
                <td >PROGRAMA PEDAGOGIA</td>
              </tr>
          </table>
        </td>
        <td >"CIENCIAS DE LA SALUD"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >ENFERMERIA</td>  
              </tr>
              <tr>
                <td >MEDICINA</td>
              </tr>
          </table>
        </td>
        <td >"INGENIERIA"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >Ing CIVIL</td>  
              </tr>
              <tr>
                <td >Ing SISTEMAS</td>
              </tr>
              <tr>
                <td >CONSTRUCCIONES CIVILES</td>
              </tr>
              <tr>
                <td >GEODECIA Y TOPOGRAFIA</td>
              </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td >"SIENCIAS SOCIALES"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >LINGUISTICA "UYUNI"</td>  
              </tr>
              <tr>
                <td >LINGUISTICA E IDIOMAS</td>
              </tr>
              <tr>
                <td >TRABAJO SOCIAL "UNCIA"</td>
              </tr>
              <tr>
                <td >TRABAJO SOCIAL </td>
              </tr>
              <tr>
                <td >TURISMO "UYUNI"</td>
              </tr>
          </table>
        </td>
        <td >"CIENCIAS ECONOMICAS"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >ADMI DE EMPRESAS</td>  
              </tr>
              <tr>
                <td >CONTADURIA Y FINANZAS</td>
              </tr>
              <tr>
                <td >CONTADURIA "TUPIZA"</td>
              </tr>
              <tr>
                <td >CONTADURIA PUBLICA </td>
              </tr>
              <tr>
                <td >ECONOMIA "UNCIA"</td>
              </tr>
              <tr>
                <td >ECONOMIA "UYUNI"</td>
              </tr>
              <tr>
                <td >ECONOMIA </td>
              </tr>
          </table>
        </td>
        <td >"GEOLOGICA"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >Ing AMBIENTAL</td>  
              </tr>
              <tr>
                <td >GEOLOGIA</td>
              </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td >"ARTES"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >ARTES MUSICALES</td>  
              </tr>
              <tr>
                <td >ARTES PLASTICAS</td>
              </tr>
          </table>
        </td>
        <td >"CIENCIAS PURAS"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >ESTADISTICA</td>  
              </tr>
              <tr>
                <td >FISICA</td>
              </tr>
              <tr>
                <td >Ing INFORMATICA</td>
              </tr>
              <tr>
                <td >MATEMATICAS</td>
              </tr>
              <tr>
                <td >QUIMICA</td>
              </tr>
          </table>
        </td>
        <td >"MINERIA"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >PROCESOS Y MATERIA PRIMAS</td>  
              </tr>
              <tr>
                <td >Ing MINERA</td>
              </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td >"CIENCIAS AGRICOLAS Y PECUARIAS"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >Ing AGROINDUSTRIAL</td>  
              </tr>
              <tr>
                <td >Ing AGRONOMICA</td>
              </tr>
              <tr>
                <td >DESARROLLO RURAL</td>
              </tr>
              <tr>
                <td >VETERINARIA "TUPIZA"</td>
              </tr>
          </table>
        </td>
        <td >"DERECHO"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >DERECHO</td>  
              </tr>
              
          </table>
        </td>
        <td >"TECNOLOGICA"
          <table class="table table-bordered" BORDER=1 WIDTH=900>
              <tr>
                  <td >AUTOMOTRIZ</td>  
              </tr>
              <tr>
                <td >ELECTRICA</td>
              </tr>
              <tr>
                <td >ELECTRONICA</td>
              </tr>
              <tr>
                <td >MECANICA</td>
              </tr>
              <tr>
                <td >MECATRONICA</td>
              </tr>
          </table>
        </td>
      </tr>
    </table>
  
</div>
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>
</body>
</html>