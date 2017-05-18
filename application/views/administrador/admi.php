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
<body  style="background-color: #283747;">
	    <div id="inicio" >
        	<nav class="navbar navbar-default navbar-static-top">
            	<div class="container" >
                	<div class="navbar-header" ">
                    	<a class="navbar-brand" style="font-family: 'Elephant';color: #000000" >
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

                  <div class="panel-body">

                      <form class="form-horizontal" action="" method="POST">
                      
                         <div class="form-group" >
                              <label form="username" class="col-md-4 control-label">Nombre</label>
                              <div class="col-md-6">
                                <input type="text" name="username" id="username" class="form-control" placeholder="ingrese su nombre">
                                
                              </div>
                          </div>

                          <div class="form-group">
                              <label form="password" class="col-md-4 control-label">Contraseña</label>
                              <div class="col-md-6">
                              <input type="password" name="password" id="password" class="form-control" placeholder="ingrese su contraseña">
                              </div>
                          </div>
                          <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <input type="submit" name="" value="Ingresar" class="btn btn-success">
                                    </div>
                                </div>
                         </div> 
                      </form>
                  
              </div>
          </div>
			</div>
      </div>
      </div>
    	
      
</body>
</html>