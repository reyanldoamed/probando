
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/arquitectura.css">
	</head>
	<body>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="index.php" method="POST" role="form">
			<legend>Formulario de Evaluacion</legend>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
				    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				    	<div class="panel with-nav-tabs panel-info tab-panels">
				            <div class="panel-footer">
				                <ul class="nav nav-tabs tabs">
				                    <li rel="panel1" class=""><a href="#panel1" data-toggle="tab" aria-expanded="false">Literatura</a></li>
				                    <li rel="panel2" class=""><a href="#panel2" data-toggle="tab" aria-expanded="false">Matemáticas</a></li>
				                    <li rel="panel3" class=""><a href="#panel3" data-toggle="tab" aria-expanded="false">Física</a></li>
				                    <li rel="panel4" class=""><a href="#panel4" data-toggle="tab" aria-expanded="false">Historia</a></li>
				                   
				                </ul>
				            </div>


				            <div class="panel-body">
				                <div class="tab-content">
				                	<? 
				                		header("Content-Type: text/html;charset=utf-8");
				                		include("conexion.php");

				                		//CONSULTAS A BASE DE DATOS CORRESPONDIENTES A CATEGORIA DE LITERATURA

										$consulta_preg = "select * from preguntas where cod_categoria = 'lit' ORDER BY rand()";
										$datos_preg = mysqli_query($conectar, $consulta_preg);
										$cont = 1;
										
										echo"<div class='tab-pane fade' id='panel1'>
											<h4>Lea comprensivamente las siguientes preguntas y responda con el resultado correcto que corresponde a cada pregunta!!!...</h4>
						                    	";
										while ($fila = mysqli_fetch_array($datos_preg) and $cont <= 4) 
										{
											#code
											
											echo "
											<div class='panel panel-success'>
										 	 <div class='panel-heading'>".$cont.".- ".$fila["pregunta"]."</div>
											</div>";
						                    $codigo_preg = $fila["cod_pregunta"];
						                    //consulta para sacar la respuesta correcta	
						                    $consulta_resp = "select * from respuestas where cod_pregunta = '$codigo_preg'";
						                    $datos_resp = mysqli_query($conectar, $consulta_resp);

						                    //echo "<h1>".$codigo_preg."</h1>";
						                    $consulta_resp_falsa = "select * from respuestas_falsas where cod_pregunta='$codigo_preg' ORDER BY rand()";

						                    $num_aleatorio = rand ( 1, 4 );
						                   	echo "<h1> <small>resp correcta en </small> ".$num_aleatorio."</h1>";
						                    $datos_resp_falsa = mysqli_query($conectar, $consulta_resp_falsa);
						                    $cont1 = 1;
						                    while ($filaa = mysqli_fetch_array($datos_resp_falsa) and $cont1 <= 4)
						                    {
						                    	if($num_aleatorio == $cont1)
						                    	{
						                    		$fila_resp_correcta = mysqli_fetch_array($datos_resp);
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='rl$cont' id='input' value=''>"
							                        		.$cont1.") ".$fila_resp_correcta["respuesta"]."
							                        	</label>
							                        </div>";
						                    	}
						                    	else
						                    	{
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='rl$cont' id='input' value=''>"
							                        		.$cont1.") ".$filaa["resp_falsa"]."
							                        	</label>
							                        </div>";
						                    	}
							                     	
						                        $cont1++;
						                    }
						                    $cont++;
				                       }

				                        echo"
					                        
					                    </div>

					                    <div class='tab-pane fade' id='panel2'>";

					                    //CONSULTAS A BASE DE DATOS CORRESPONDIENTES A CATEGORIA DE MATEMATICAS*************************************************
					                    $consulta_preg = "select * from preguntas where cod_categoria = 'lit' ORDER BY rand()";
										$datos_preg = mysqli_query($conectar, $consulta_preg);
										$cont = 1;
										echo"
											<h4>Lea comprensivamente las siguientes preguntas y responda con el resultado correcto que corresponde a cada pregunta!!!...</h4>
						                    	";
										while ($fila = mysqli_fetch_array($datos_preg) and $cont <= 5) 
										{
											# code
											
						                    echo "<div class='panel panel-danger'><div class='panel-heading'>PREGUNTA".$cont."[".$fila["pregunta"]."]</div></div>";
						                    $codigo_preg = $fila["cod_pregunta"];
						                    //consulta para sacar la respuesta correcta	
						                    $consulta_resp = "select * from respuestas where cod_pregunta = '$codigo_preg'";
						                    $datos_resp = mysqli_query($conectar, $consulta_resp);

						                    //echo "<h1>".$codigo_preg."</h1>";
						                    $consulta_resp_falsa = "select * from respuestas_falsas where cod_pregunta='$codigo_preg' ORDER BY rand()";

						                    $num_aleatorio = rand ( 1, 4 );
						                   	echo "<h1>aleatorio".$num_aleatorio."</h1>";
						                    $datos_resp_falsa = mysqli_query($conectar, $consulta_resp_falsa);
						                    $cont1 = 1;
						                    while ($filaa = mysqli_fetch_array($datos_resp_falsa) and $cont1 <= 4)
						                    {
						                    	if($num_aleatorio == $cont1)
						                    	{
						                    		$fila_resp_correcta = mysqli_fetch_array($datos_resp);
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$fila_resp_correcta["respuesta"]."]
							                        	</label>
							                        </div>";
						                    	}
						                    	else
						                    	{
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$filaa["resp_falsa"]."]
							                        	</label>
							                        </div>";
						                    	}
							                     	
						                        $cont1++;
						                    }
						                    $cont++;
				                       	}
					                    echo "</div>

					                    <div class='tab-pane fade' id='panel3'>";
					                     //CONSULTAS A BASE DE DATOS CORRESPONDIENTES A CATEGORIA DE FISICA*************************************************
					                    $consulta_preg = "select * from preguntas where cod_categoria = 'lit' ORDER BY rand()";
										$datos_preg = mysqli_query($conectar, $consulta_preg);
										$cont = 1;
										echo"
											<h4>Lea comprensivamente las siguientes preguntas y responda con el resultado correcto que corresponde a cada pregunta!!!...</h4>
						                    	";
										while ($fila = mysqli_fetch_array($datos_preg) and $cont <= 5) 
										{
											# code
											
						                    echo "<div class='panel panel-warning'>
										 	 <div class='panel-heading'>PREGUNTA".$cont."[".$fila["pregunta"]."]</div></div>";
						                    $codigo_preg = $fila["cod_pregunta"];
						                    //consulta para sacar la respuesta correcta	
						                    $consulta_resp = "select * from respuestas where cod_pregunta = '$codigo_preg'";
						                    $datos_resp = mysqli_query($conectar, $consulta_resp);

						                    //echo "<h1>".$codigo_preg."</h1>";
						                    $consulta_resp_falsa = "select * from respuestas_falsas where cod_pregunta='$codigo_preg' ORDER BY rand()";

						                    $num_aleatorio = rand ( 1, 4 );
						                   	echo "<h1>aleatorio".$num_aleatorio."</h1>";
						                    $datos_resp_falsa = mysqli_query($conectar, $consulta_resp_falsa);
						                    $cont1 = 1;
						                    while ($filaa = mysqli_fetch_array($datos_resp_falsa) and $cont1 <= 4)
						                    {
						                    	if($num_aleatorio == $cont1)
						                    	{
						                    		$fila_resp_correcta = mysqli_fetch_array($datos_resp);
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$fila_resp_correcta["respuesta"]."]
							                        	</label>
							                        </div>";
						                    	}
						                    	else
						                    	{
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$filaa["resp_falsa"]."]
							                        	</label>
							                        </div>";
						                    	}
							                     	
						                        $cont1++;
						                    }
						                    $cont++;
				                       	}
					                    echo "</div>";

					                   	echo "<div class='tab-pane fade' id='panel4'>";
					                        //CONSULTAS A BASE DE DATOS CORRESPONDIENTES A CATEGORIA DE HISTORIA*************************************************
					                    $consulta_preg = "select * from preguntas where cod_categoria = 'lit' ORDER BY rand()";
										$datos_preg = mysqli_query($conectar, $consulta_preg);
										$cont = 1;
										echo"
											<h4>Lea comprensivamente las siguientes preguntas y responda con el resultado correcto que corresponde a cada pregunta!!!...</h4>
						                    	";
										while ($fila = mysqli_fetch_array($datos_preg) and $cont <= 4) 
										{
											# code
											
						                    echo "<div class='panel panel-success'><div class='panel-heading'>PREGUNTA".$cont."[".$fila["pregunta"]."]</div></div>";
						                    $codigo_preg = $fila["cod_pregunta"];
						                    //consulta para sacar la respuesta correcta	
						                    $consulta_resp = "select * from respuestas where cod_pregunta = '$codigo_preg'";
						                    $datos_resp = mysqli_query($conectar, $consulta_resp);

						                    //echo "<h1>".$codigo_preg."</h1>";
						                    $consulta_resp_falsa = "select * from respuestas_falsas where cod_pregunta='$codigo_preg' ORDER BY rand()";

						                    $num_aleatorio = rand ( 1, 4 );
						                   	echo "<h1>aleatorio".$num_aleatorio."</h1>";
						                    $datos_resp_falsa = mysqli_query($conectar, $consulta_resp_falsa);
						                    $cont1 = 1;
						                    while ($filaa = mysqli_fetch_array($datos_resp_falsa) and $cont1 <= 4)
						                    {
						                    	if($num_aleatorio == $cont1)
						                    	{
						                    		$fila_resp_correcta = mysqli_fetch_array($datos_resp);
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$fila_resp_correcta["respuesta"]."]
							                        	</label>
							                        </div>";
						                    	}
						                    	else
						                    	{
						                    		echo "<div class='radio'>
							                        	<label>
							                        		<input type='radio' name='p$cont' id='input' value='' checked='checked'>
							                        		RESPUESTA ".$cont1."[".$filaa["resp_falsa"]."]
							                        	</label>
							                        </div>";
						                    	}
							                     	
						                        $cont1++;
						                    }
						                    $cont++;
				                       	}
					                    echo "</div>";
				                    ?>
				                </div>
				            </div>
				        </div>
				    </div>

				<!-- Derivar a: -->
					
				</div>
				<div class="panel-footer">
					 	
					<button type="submit" class="btn btn-danger">Terminar Exámen</button>
					<button type="button" class="btn btn-primary disabled">Ver Resultados</button>
				</div>
			</div>
		</form>
	</body>
</html>
