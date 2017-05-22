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
</head>
<body >
      <?php
        foreach($consulta4->result() as $fila){
      ?>
        <h1>Nombre:<?= $fila->nombres ?></h1> <h1>Apellidos: <?= $fila->apellido_pat ?>   <?= $fila->apellido_mat ?> </h1>
        <h1>CI:<?= $fila->ci ?></h1>
      <?php
      }
      ?>
  <form name="" method="post" action="<?= base_url()?>respuesta/resultado">
    <table  width="95%" style="border: 2px solid black; border-spacing: 15px;">
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de fisica</h4></b></th> 
      </tr>
      <?php
        $i=0;
        foreach($consulta->result() as $fila){
        $i++;
      ?>  
            <tr>
              <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?>  </b></td>
            </tr>
            <tr>
              <td><b>Opcion A.</b>
                <input type="radio" name="pre<?= $i ?>" value="<?= $fila->respuestaposi ?>"><?= $fila->respuestaposi ?>
                <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areafis ?>">
              </td>
            </tr>
            <tr>
              <td><b>Opcion B.</b>
                <input type="radio" name="pre<?= $i ?>"><?= $fila->respuestafalun ?>
                <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areafis ?>">
              </td>
            </tr>
            <tr>
              <td><b>Opcion C.</b>
                <input type="radio" name="pre<?= $i ?>"><?= $fila->respuestafaldos ?>
                <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areafis ?>">
              </td>
            </tr>
            <tr>
              <td><b>Opcion D.</b>
                <input type="radio" name="pre<?= $i ?>"><?= $fila->respuestafaltres ?>
                <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areafis ?>">
              </td>
            </tr>
            <tr>
              <td><b>Opcion E.</b>
                <input type="radio" name="pre<?= $i ?>"><?= $fila->respuestafalcuatro ?>
                <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areafis ?>">
              </td>
            </tr>
            <tr>
        <?php
        }
        ?>
      <!--area de matematicas-->
       
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Matematicas</h4></b></th> 
      </tr>
      <?php
        $i=0;
        foreach($consulta1->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><b><?= $i ?>.-<?= $fila->pregunta ?>  </b></td>
        <input type="hidden" name="pre1" value="<?= $fila->id_areamat ?>">
      </tr>
      <td><b>Opcion A.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->respuestaposi ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areamat ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->respuestafalun ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areamat ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->respuestafaldos ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areamat ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->respuestafaltres ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areamat ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion E.</b>
          <input type="radio" name="mapre<?= $i ?>"><?= $fila->respuestafalcuatro ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areamat ?>">
        </td>
      </tr>
      <tr>
       <?php
        }
        ?>
    
      <!--area de histoia-->
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Historia</h4></b></th> 
      </tr>
       <?php
        $i=0;
        foreach($consulta2->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?> </b></td>
        <input type="hidden" name="pre1" value="<?= $fila->id_areahistoria ?>">
      </tr>
      <tr>
        <td><b>Opcion A.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->respuestaposi ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areahistoria ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->respuestafalun ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areahistoria ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->respuestafaldos ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areahistoria ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->respuestafaltres ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areahistoria ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion E.</b>
          <input type="radio" name="hispre<?= $i ?>"><?= $fila->respuestafalcuatro ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_areahistoria ?>">
        </td>
      </tr>
      <?php
        }
        ?>

      <!-- area de literatura-->
      <tr>
        <th style="background-color: #cc9900; text-align: center; border: 2px solid black; font-family: Wide Latin "><b><h4>Area de Literatura</h4></b></th> 
      </tr>
       <?php
        $i=0;
        foreach($consulta3->result() as $fila){
        $i++;
      ?>
      <tr>
        <td style="background-color: #EFE5E6;" valign="top"><b><?= $i ?>.-<?= $fila->pregunta ?> </b></td>
        <input type="hidden" name="pre1" value="<?= $fila->id_arealite ?>">
      </tr>
      <tr>
        <td><b>Opcion A.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->respuestaposi ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion B.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->respuestafalun ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion C.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->respuestafaldos ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion D.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->respuestafaltres ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <tr>
        <td><b>Opcion E.</b>
          <input type="radio" name="litpre<?= $i ?>"><?= $fila->respuestafalcuatro ?>
          <input type="hidden" name="idpre<?= $i ?>" value="<?= $fila->id_arealite ?>">
        </td>
      </tr>
      <?php
        }
        ?>
      <tr>
        <td style="background-color: #f9f;" align="center";><button type="submit" class="btn btn-danger">TERNIMAR EXAMEN</button></td> 
      </tr>
    </table>
  </form>
</body>
</html>