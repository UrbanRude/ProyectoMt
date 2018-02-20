</main>
<script type="text/javascript"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.3.2/sweetalert2.js"></script>
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

	 <!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script>
  //  BLOQUE PARA HACER UNA BUSQUEDA EN UNA TABLA
  // ----------------------------------------------------------------------------------------------------------
  $('#idBuscar').keyup(function(e){
    var contenido = new RegExp($(this).val(),'i');
    $('tr').hide();
    $('tr').filter(function(){
      return contenido.test($(this).text());
    }).show();
    $('.cabecera').attr('style','');
  });
  // ----------------------------------------------------------------------------------------------------------
	$('.button-collpase').sideNav();
	function may(obj,id){
		obj = obj.toUpperCase();
		document.getElementById(id).value = obj;
	}
  $('select').material_select();
</script>