<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alumnos index</title>
  </head>
  <body background="<?php echo base_url(); ?>imagenesmv/fondo10.png" >
    <font color="#545454" size="5" face="Century Gothic">

<center>

<div  style="margin-bottom:50px;">
        <h1>Tabla Alumnos</h1>
        <a href="alumnos/add">Add Student</a>
</div>



  <table style="background:#FFD576" border="1px" cellspacing="7" cellpadding="10" width="1333">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Matricula</th>
      <th>Opciones</th>
    </tr>
    <?php
      foreach ($datos as $alumno ) {
        echo "<tr>";
         echo "<td>".$alumno->id."</td> <td>".$alumno->nombre. "</td> <td>".$alumno->matricula."</td><td> <a href='alumnos/view/".$alumno->id."' >Ver</a> <a href='alumnos/delete/".$alumno->id."'>Eliminar</a> <a href='alumnos/update/".$alumno->id."'>Editar</a> </td>";
         echo "</tr>";
      }
     ?>
   </table>
</center>






  </body>
</html>
