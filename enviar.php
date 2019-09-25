<?php
  $destino= "rivas.deshire@gmail.com";
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];
  $contenido = "Nombre: ". $nombre . "\nCorreo: " . $correo . "\Telefono: " . $telefono . "\Mensaje: " . $mensaje;
  mail($destino,"Contenido",$contenido);
  header("Location:gracias.html");
?>