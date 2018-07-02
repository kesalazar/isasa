<?php
$msg ='';
if (isset($_GET['errno'])){
    switch($_GET['errno']){
        case 0:
        $msg = '<p class="alert alert-danger">Debe ingresar por index.php</p>';
        break;
        case 1;
        $msg = '<p class="alert alert-warning">Debe llenar ambos campos.</p>';
        break;
        default:
        $msg ='';
        break; 
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<style>          
			body{
			  background: url(CWALL3.jpg);
			  background-repeat: no-repeat;
              background-position: center;
              margin-right: 1px;
              background-attachment: fixed;
 
			}           
		 </style>
		 <style>
		 h2 { 
		 }form{
			 background-color: rgb(236, 233, 15);
		 }
		 </style>
</head>
<body>
	<header>
		<div class="container text-center">
			<h1>ISASA</h1>
		</div>
	</header>
	<div class="container text-center">
		<h4>RADIER</h4>
		<p>Ingrese dimensiones y uso del radier:</p>
		<form class="form-signin" action="calculo.php" method="get">
			LARGO:<br>
            <input type="number" min="0.05" step="0.001" id= "inputlargo" name="largo" class="form-control" placeholder="Largo en metros" required autofocus>
			<br>
			ANCHO:<br>
			<input type="number" min="0.05" step="0.001" id= "inputancho" name="ancho" class="form-control" placeholder="Ancho en metros" required>
			<br>
			USO:<br>
			<select name="Cargas">
					<option value="liviana">Cargas Livianas</option> 
					<option value="media">Cargas Medianas</option> 
					<option value="pesada">Cargas Pesadas</option>
				 </select>
			<br><br>
			<input type="submit" value="Calcular">
		  </form> 
	</div>
</body>
</html>