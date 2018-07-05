<?php 

function errs($a){
	if ($a==1) {
		$msg='<b>ERROR: Debe completar todos los campos</b>';
	}
	if ($a==2) {
		$msg='<b>ERROR: Usuario no registrado</b>';
	}
	if ($a==3) {
		$msg='<b>ERROR: Contrase&ntilde;a incorrecta</b>';
	}
	if ($a==4) {
		$msg="<b>ERROR: Ya existe una sesi&oacute;n iniciada</b>";
	}
	if ($a==5) {
		$msg='<b>ERROR: El archivo tiene mas de 10 puntos <br> o existen puntos incompletos</b>';
	}
	if ($a==6) {
		$msg='<b>ERROR: Debe iniciar sesi&oacute;n para registrar<br> un Elipsoide de Referencia </b>';
	}
	if ($a==7) {
		$msg='<b>ERROR: Seleccione alguna de las opciones <br> antes de continuar </b>';
	}
	if ($a==8) {
		$msg='<b>ERROR: Opci&oacute;n no disponible <br> hasta despues de la conversi&oacute;n </b>';
	}	
	return $msg;
}
?>