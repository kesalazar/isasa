<?php 
require_once ("./pdf/mpdf.php");

$html='<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo_calculo.css"> 
    <link rel="shortcut icon" href="./imagenes/Captura.JPG"/>
</head>
<body>
	<header>
		<div class="container text-center">
			<h1>ISASA</h1>
		</div>
		<div class="container text-center">
			<h5>
        Hola! Gracias por utilizar ISASA! Según las dimensiones: 
        largo <?php echo $largo ?> m, ancho <?php echo $ancho ?>m y espesor     
        <?php echo $espesor ?>m, te sugerimos estas cantidades!
      </h5>              
<table>
  <tr>
    <th>Material</th>
    <th>Cantidad</th> 
    <th>Precio</th>
  </tr>
  <tr>
    <td>Cemento</td>
    <td> <?php echo $cal1;?> sacos </td> 
    <td> <?php echo $pr1;?> CLP </td>
  </tr>
  <tr>
    <td>Arena</td>
    <td> <?php echo $cal2;?> sacos</td> 
    <td> <?php echo $pr2;?> CLP</td>
  </tr>
  <tr>
    <td>Ripio</td>
    <td> <?php echo $cal3;?> sacos</td> 
    <td> <?php echo $pr3;?> CLP </td>
  </tr>
  <tr>
    <td>Agua</td>
    <td> <?php echo $cal4;?> lts</td> 
    <td> <?php echo $pr4;?> CLP </td>
  </tr>
  <tr>
  	<th>Total</th>
  	<td></td>
  	<th> <?php echo $precio_total;?> CLP</th>
  </tr>
</table>
	<p>
    *Para el cálculo de materiales se han considerado sacos de 25 kg (arena y cemento) y 20 kg (ripio). Los precios son referenciales
  </p>
</body>
</html>';

$mpdf=new mPDF('c', 'letter');
$mpdf->writeHTML($html);
$mpdf->Output('tu_reporte.pdf', 'I')
?>