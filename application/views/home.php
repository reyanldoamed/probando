<!DOCTYPE html>
<html>
<head>
    <link href='//fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title><?= $title ?></title>
</head>
<body  style="background-color: #e6e6ff;font-family: 'Bauhaus 93'">
    <h1>Direccion de Servicios Academicos - "U.A.T.F"</h1>
    
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-family: 'Elephant';color: #f2f2f2">Universidad Autonoma "Tomas Frias - U.A.T.F"</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li> 
                    <button style="font-family: 'Elephant';color: #f2f2f2" class="btn btn-md btn-primary dropdown-toggle" type="button" data-toggle="dropdown">INICIAR SECION<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li style="font-family: 'Elephant';color: #f2f2f2"><a href="<?= base_url() ?>admi">ADMINISTRADOR</a></li>
                            <li style="font-family: 'Elephant';color: #f2f2f2"><a href="<?= base_url() ?>postulante/postulante/iniciar">POSTULANTE</a></li>
                        </ul>
                    </li>
                </ul>
            </div> 
        </div>
    </nav>
    <div class="container">  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-thumbnail"  src="<?= base_url()?>plantilla/images/img1.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img class="img-thumbnail" src="<?= base_url()?>plantilla/images/img2.jpg" alt="Los Angeles" style="width:100%;">
                </div>
    
                <div class="item">
                    <img class="img-thumbnail"  src="<?= base_url()?>plantilla/images/img3.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <img class="img-thumbnail"  src="<?= base_url()?>plantilla/images/img4.jpg" alt="Los Angeles" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
            <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4">
                        <h2>Mision</h2>
                        <p style="text-align: justify">La Carrera de Artes Musicales tiene la misón de formar profesionales críticos, reflexivos, creativos y emprendedores en el campo del arte musical. Capaces de transformar el contexto regional y nacional en busca de la pertinencia social.</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Vision</h2>
                        <p style="text-align: justify">La Carrera de Artes Musicales como institución de Educación Superior, tiene la visión de conseguir la excelencia académica en el campo de la formación artística musical, cultural con pertinencia social.</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Objetivos</h2>
                        <p style="text-align: justify"><ul><li>Formar profesionales idóneos en la actividad artística plástica con criterio técnico y científico, con capacidad analítica, crítica y creativa e integrar al profesional artista a la producción y desarrollo regional y Nacional.</li><li>Desarrollar valores éticos y principios en los estudiantes que les permita crecer no solo como profesionales, sino como seres humanos con una formación educativa en sus tres dimensiones (Educativo, Desarrollador e Instructivo).</li><li>Formar profesionales de espíritu emprendedor y transformador que promueva la participación y la concertación como actores sociales en el desarrollo del país.</li><li>Reflexionar y comprender la importancia de las Artes Plásticas, partiendo del análisis histórico y su situación actual.</li><li>Orientar a los Estudiantes realizando prácticas magistrales en el taller y en contacto con la naturaleza.</li><li>Determinar el carácter sistémico en el proceso de ejecución de la Obra Plástica, dentro de las diferentes formas de expresión plástica.</li></ul></p>
                    </div>
                </div>
                <hr>
        <!-- 
              <footer>
                <p>&copy; Company 2014</p>
              </footer>
              
               -->
            </div> <!-- /container --> 
</body>
</html>