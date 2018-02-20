<?php 
	include '../conexion/connec.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $nick = $con->real_escape_string(htmlentities($_POST['nick']));
         $pass = $con->real_escape_string(htmlentities($_POST['pass2']));
         $nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
         $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
         $correo = $con->real_escape_string(htmlentities($_POST['correo']));
         if (empty($nick) || empty($pass) || empty($nivel) || empty($nombre) || empty($correo)) {
            header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=us&p=in&t=error');
               exit;
         }if (!ctype_alpha($nivel)) {
            header('location:../extend/alerta.php?msj=El nivel contiene solo letras&c=us&p=in&t=error');   
            exit;         
         }if (!ctype_alpha($nick)) {
            header('location:../extend/alerta.php?msj=El nick contiene solo letras&c=us&p=in&t=error');     
            exit;       
         }
         $caracteres  = "ABCDEFGHIJKLMNÑOPQRSTUVWXTZ ";  
         for($i=0;$i < strlen($nombre);$i++){
            $buscar = substr($nombre,$i,1);
               if (strpos($caracteres,$buscar) === false) {
                  header('location:../extend/alerta.php?msj=El nivel contiene solo letras&c=us&p=in&t=error');   
                  exit;   
               }
         }
         $usuario = strlen($nick);
         $contra = strlen($pass);

         if ($usuario < 6 || $usuario > 15) {
            header('location:../extend/alerta.php?msj=El usuario contiene mas de no cumple con los requisitos&c=us&p=in&t=error');   
                  exit; 
         }
         if ($contra < 6 || $contra > 15) {
            header('location:../extend/alerta.php?msj=El password contiene mas de no cumple con los requisitos&c=us&p=in&t=error');   
                  exit; 
         }
         if (!empty($correo)) {
            if (!filter_var($correo,FILTER_VALIDATE_EMAIL)) {
               header('location:../extend/alerta.php?msj=El emial no es valido&c=us&p=in&t=error');   
                  exit; 
            }
         }
         // BLOQUE PARA SUBIR UNA FOTO Y GUARDARLA EN UNA CARPETA
         // ------------------------------------------------------------------------
         $extension = "";
         $ruta =  "foto_perfil";
         $archivo = $_FILES['foto']['tmp_name'];
         $nombre_archivo = $_FILES['foto']['name'];
         $info = pathinfo($nombre_archivo);
         if ($archivo != '') {
            $extension = $info['extension'];
            if ($extension === 'png' || $extension === 'PNG' || $extension === 'jpg' || $extension === 'JPG') {
               move_uploaded_file($archivo,'foto_perfil/'.$nick.'.'.$extension);
               $ruta = $ruta.'/'.$nick.'.'.$extension;
            }else{
               header('location:../extend/alerta.php?msj=Formato invalido&c=us&p=in&t=error');   
                  exit; 
            }
         }else{
            $ruta = 'foto_perfil/perfil_default.png';
         }

         $pass1 = sha1($pass);
         $stmt = $con->query("INSERT INTO usuarios VALUES ('3','$nick','$pass1','$nombre','$correo','$nivel','1','$ruta') ");
         if ($stmt) {
            header('location:../extend/alerta.php?msj=El usuario se ha registrado correctamente&c=us&p=in&t=success');   
         }else{
            header('location:../extend/alerta.php?msj=Se ha generado un problema al registrar el usuario&c=us&p=in&t=error');   
         }
         $stmt->close();
	}else{
		header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
	}

 ?>