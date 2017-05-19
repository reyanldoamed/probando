<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title><?= $title ?></title>
</head>
<body  style="background-color: #283747  ">
	    <div id="inicio" >
        	<nav class="navbar navbar-default navbar-static-top">
            	<div class="container" >
                	<div class="navbar-header" ">
                    	<a class="navbar-brand" style="font-family: 'Elephant';color: #000000">
                        	Prueba de Suficiencia Academica Universidad autonoma tomas frias
                    	</a>
               		</div>
            	</div>
        	</nav>
        	<div class="container"  >
   				<div class="row">
        			<div class="col-md-8 col-md-offset-2" >
          		  		<div class="panel panel-default">
               				<div class="panel-heading" >
                        		INTRODUSCA SUS DATOS
               				</div>
               				<div class="panel-body" >
               				<img src="">
                   				<form class="form-horizontal" action="<?= base_url() ?>postulante/postulante" method="POST">
                       					<div class="form-group">
                            				<label for="username" class="col-md-4 control-label">NOMBRES</label>
                            				<div class="col-md-6">
                               		 			<input id="username" type="text" class="form-control" name="username" value="" required autofocus placeholder="Nonbre">
                               		 		</div>
                        				</div>
                                <div class="form-group">
                                    <label for="apellido_pat" class="col-md-4 control-label">APELLIDO PATERNO</label>
                                    <div class="col-md-6">
                                        <input id="apellido_pat" type="text" class="form-control" name="apellido_pat" value="" required autofocus placeholder="Apellido Paterno">
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="apellido_mat" class="col-md-4 control-label">APELLIDO MATERNO</label>
                                    <div class="col-md-6">
                                        <input id="apellido_mat" type="text" class="form-control" name="apellido_mat" value="" required autofocus placeholder="Apellido Materno">
                                      </div>
                                </div>
                        				<div class="form-group">
                            				<label for="ci" class="col-md-4 control-label">C.I.</label>
                            				<div class="col-md-6">
                               		 			<input id="ci" type="int" class="form-control" name="ci" required placeholder="Carnet de Indentidad">
											               </div>
                        				</div>

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input id="nota" type="hidden" class="form-control" name="nota">
                                     </div>
                                </div>

                                <div class="form-group">
                                    <label for="carrera" class="col-md-4 control-label" >CARRERA</label>
                                    <div class="col-md-6">
                                       <select id="carrera"  name="carrera" class="form-control" required >
                                            <option>Elige tu carrera</option>
                                            <option value="1">Arquitectura</option>
                                            <option value="4">auditoria</option>
                                            <option value="5">macanica</option>
                                            <option value="6">Carrera3</option>

                                          </select>
                                     </div>
                                </div>
                        				<div class="form-group">
                            				<div class="col-md-8 col-md-offset-4">
                                				<button type="submit" class="btn btn-primary">INGRESAR</button>
                            				</div>
                        				</div>
                   				</form>
                			</div>
            			</div>
        			</div>
    			</div>
			</div>
    	</div>
</body>
</html> 