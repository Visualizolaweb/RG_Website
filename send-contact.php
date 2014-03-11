<?php
$EmailFrom = $correo;
$EmailTo = "ventas@rgpanama.com";
//$Subject = "Contact Form";
$nombre = Trim(stripslashes($_POST['nombre'])); 
$apellidos = Trim(stripslashes($_POST['apellidos'])); 
$correo = Trim(stripslashes($_POST['correo'])); 
$interes = Trim(stripslashes($_POST['interes'])); 
$Subject = Trim(stripslashes($_POST['asunto'])); 
$mensaje = Trim(stripslashes($_POST['mensaje'])); 

// validation
$validationOK=true;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=index.htm\">";
exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $nombre." ".$apellidos;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $correo;
$Body .= "\n";
$Body .= "Interes: ";
$Body .= $interes;
$Body .= "\n";
$Body .= "asunto: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php?msg=true\">";
}
else{
print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto.php?msg=false\">";
}
?>