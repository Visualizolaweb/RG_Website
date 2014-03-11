<?php
	$nombre		= $_POST['nombre'];
	$correo		= $_POST['correo'];
	$telefono	= $_POST['telefono'];
	$mensaje	= $_POST['mensaje'];

	$EmailFrom = $correo;
$EmailTo  = "ventas@rgpanama.com";
$Subject  = "Member Form";
$nombre   = Trim(stripslashes($_POST['nombre'])); 
$correo   = Trim(stripslashes($_POST['correo'])); 
$telefono = Trim(stripslashes($_POST['telefono'])); 
$mensaje  = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=index.htm\">";
exit;
}

// prepare email body text
$Body = "";
$Body .= "asunto: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "telefono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
print "<meta http-equiv=\"refresh\" content=\"0;URL=membresia-rg.php?msg=true\">";
}
else{
print "<meta http-equiv=\"refresh\" content=\"0;URL=membresia-rg.php?msg=false\">";
}
?>