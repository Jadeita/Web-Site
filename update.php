<body background="<?php echo base_url(); ?>imagenesmv/fondo11.png">

<?php echo validation_errors(); ?>
<?php echo form_open('alumnos/update'); ?>

<div style="margin-top:90px">
<font color="#FF2063" size="10" face="monospace">
<label> Alumnos update </label>
</div>

<div style="margin-top:50px">

<font color="#000000" size="5" face="Century Gothic">

<label> Nombre </label>
<div>
<input type="text" value="<?=$dato["nombre"];?>" name = "nombre"/><br />
</div>

<input type="text" style="display:none" value="<?=$dato["id"];?>" name = "id"/><br />

<label> Matricula</label>
<div>
<input type="text" value="<?=$dato["matricula"];?>" name = "matricula" /><br />
</div>

<label> Apellidos</label>
<div>
<input type="text" value="<?=$dato["apellidos"];?>" name = "apellidos" />
</div>

<div style="margin-top:20px">
<input type="submit"  name = "submit" value = "Actualizar alumno" />
</div>
</div>
</form>

</body>
