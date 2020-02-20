

<body background="<?php echo base_url(); ?>imagenesmv/fondo12.png">

<div style="margin-top:80px">
  <font color="#00AADE" size="8" face="monospace">
  <h2><?php echo $titulo ?></h2>

</div>


<?php echo validation_errors(); ?>
<?php echo form_open('alumnos/add'); ?>

<div style="margin-top:30px">
<font color="#545454" size="5" face="Century Gothic">
<label> Nombre </label>
<div>
<input type="text" name = "nombre"/><br />
</div>

<label> Matricula</label>
<div>
<input type="text" name = "matricula" /><br />
</div>

<label> Apellidos</label>
<div>
<input type="text" name = "apellidos" />
</div>

<div style="margin-top:20px">
<input type="submit" name = "submit" value = "Crear alumno" width="50" />
</div>
</div>


</form>
  </body>
