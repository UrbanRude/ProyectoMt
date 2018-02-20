<?php include '../extend/header.php';?>
<div class="row">
	<div class="l12">
		<div class="card">
			<div class="card-content">
				<span class="card-tilte">Alta Usuarios</span>
					<form action="ins_usuarios.php" class="form" method="post" enctype="multipart/form-data">
						<div class="input-field">
							<input type="text" name="nick" placeholder="Nick name" required title="Debe de contener entre 8 y 15 caracteres" pattern="[A-Za-Z]{8,15}" id="nick" onblur="may(this.value,this.id)">
						</div>
						<div class="validacion"></div>
						<div class="input-field">
							<input type="password" title="Password con numeros y letras" name="pass1" id="pass1" pattern="[A-Za-z0-9]{8,15}" placeholder="Ingresa tu password">
						</div>
						<div class="input-field">
							<input type="password" title="Password con numeros y letras" name="pass2" id="pass2" pattern="[A-Za-z0-9]{8,15}" placeholder="Verifica tu password">
						</div>
						<select name="nivel" required="">
							<option value="" disabled selected>Elige una opcion</option>
							<option value="admin">Administrador</option>
							<option value="asesor">Asesor</option>
						</select>
						<div class="input-field">
							<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value,this.id)" required pattern="[A-Z/s ]+" placeholder="Ingresa tu nombre">
						</div>
						<div class="input-field">
							<input type="email" name="correo" title="Correo electronico" id="correo" placeholder="Ingresa tu email">
						</div>
						<div class="file-field input-field">
							<div class="btn">
								<span>Foto:</span>
								<input type="file" name="foto">
							</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>	
						</div>
						<button class="btn black" id="btnGuardar">Guardar <i class="material-icons">send</i></button>
					</form>
			</div>
		</div>
	</div>
</div>
<?php 
	$smtm = $con -> query("SELECT * FROM usuarios");
	$counta = mysqli_num_rows($smtm);
 ?>
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-tilte">Usuarios (<?php echo $counta; ?>)</span>
				<table>
					<thead>
						<th>Nick</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Nivel</th>
						<th>Foto</th>
						<th>Bloquedo</th>
						<th>Foto</th>
						<th></th>
					</thead>
					<?php 
						while ($f = $smtm -> fetch_assoc()) { ?>
						<tr>
							<td><?php echo $f['nick'] ?></td>
							<td><?php echo $f['pass'] ?></td>
							<td><?php echo $f['nombre'] ?></td>
							<td><?php echo $f['email'] ?></td>
							<td><?php echo $f['nivel'] ?></td>
							<td><?php echo $f['bloque'] ?></td>
							<td><img src="<?php echo $f['foto'] ?>" width="50" class="circle"></td>
							<td></td>
							<td></td>
						</tr>
					 <?}?>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include '../extend/scripts.php'; ?>
<script src="../js/validacion.js"></script>
</body>
</html>