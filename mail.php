<?php
$paracorreo="";
$titulo ="test correo";
$mensaje=" puto";
$tucorreo="from :abimaton@gmail.com";

if(mail('sierraignacio87@gmail.com', $titulo,$mensaje,$tucorreo))
{
    echo"<script>alert('se envio exitosamente')</script>";
}
else{
    echo"<script>alert('no se envio')</script>";
}
?>