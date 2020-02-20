<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background="<?php echo base_url(); ?>imagenesmv/fondo9.png">

    <div style="margin-bottom:20px;margin-top:80px">
      <font color="#60DAFF" size="10" face="monospace">
        <label> Informacion de usuario </label>
    </div>

<div   >
  <font color="#FFFFFF" size="5" >
    <?php

    echo "ID: ";echo $dato["id"]."<br>";
    echo"<br>";
    echo "Nombre: ";echo $dato["nombre"]."<br>";
    echo"<br>";

    echo "Matricula: ";echo $dato["matricula"]

   ?>
   </div>
  </body>
</html>
