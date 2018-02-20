<?php 
	include '../conexion/connec.php';
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.css">
	<title>Document</title>
</head>
<body>
	<?php 
		$mensaje =htmlentities($_GET['msj']);
		$c =htmlentities($_GET['c']);
		$p =htmlentities($_GET['p']);
		$t =htmlentities($_GET['t']);

		switch ($c) {
			case 'us':
				$carpeta = '../usuarios/';
				break;
		}

		switch ($p) {
			case 'in':
				$pagina = 'index.php';
				break;
		}

		$dir = $carpeta.$pagina;

		if ($t == 'error') {
			$titulo = "Oppss..";
		}else{
			$titulo = "Bien echo!";
		}
	 ?>

	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
  <script>
  	swal({
  title: '<?php echo $titulo; ?>',
  text: "<?php echo $mensaje; ?>",
  type: '<?php echo $t; ?>',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Ok!'
}).then(function(){
 	location.href = '<?php echo $dir; ?>';
});

$(document).click(function(){
	location.href = '<?php echo $dir; ?>';
});

$(document).keyup(function(e){
	if (e.which == 27) {
		location.href = '<?php echo $dir; ?>';
	}
});

  </script>
</body>
</html>