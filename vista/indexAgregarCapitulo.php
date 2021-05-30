<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <script type="text/javascript" src="../controladores/validaciones.js"></script>
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>


 
    <link href="../css/index.css" rel="stylesheet" />
</head>
<body>
    <header>
        <a href="index.html"><img src="../imgs/Banner.png"></a>
        <header></header>
        <nav>
            <ul>
            <li><a href="indexBuscar.html">Búsqueda de Libro</a></li>
            <li><a href="indexAgregar.php">Registrar Libro</a></li>
            </ul>
        </nav>
    </header>
    <br>

<!--
AGREGAR CAPITULOS
-->
<form id="formulario02" class='formulario02' method="POST" action="../controladores/agregarCapitulo.php" onsubmit="return validarCamposObligatorios2()" >
        <h1>Registrar Capitulo</h1>
            <label for="numcapitulo">Numero del Capitulo (*)</label>
            <br>
            <input type="text" id="numcapitulo" name="numcapitulo" value="" placeholder="Ingrese el numero del capitulo..." onkeyup="return validarNumCap(this)"/>
                   <span id="mensajeN" class="error"></span>

        <br>
        <label for="ncapitulo">Nombre del Capitulo (*)</label>
        <br>
        <input type="text" id="ncapitulo" name="ncapitulo" value="" placeholder="Ingrese el nombre del capitulo ..."  />
        <span id="mensajeNom" class="error"></span>
        <br>


        <label for="autor">Autor (*)</label>
        <br>
        <select id="autor" name="autor" >

        <?php
            $isbn = $_GET['isbn'];
            echo ($isbn);
            $sql = "SELECT * FROM autores;" ;
            include '../config/conexionBD.php';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option>" . $row['aut_nombre']. " </option>";
                    echo "";    
                }
                }
        $conn->close();
        ?>
        <input type="hidden" id ="isbn" name="isbn" value="<?php echo $isbn ?> "/>
        </select>
        <br>

        <div id="nacion"> </div>

        <br>
        <br>


        <input type="submit" id="crear" name="crear" value="Registrar Libro" /> 
            <input type="reset" id="cancelar" name="cancelar" value="Resetear" />
        </form>
    
</body>
        <br>
        <br>

<footer>
      Paul Guzhñay 
      <br>
      Universidad Politécnica Salesiana 
<br/>&copy; Todos los derechos reservados
</footer>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	//	$('#autor').val(1);
		recargarLista();

		$('#autor').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../controladores/datos.php",
			data:"continente=" + $('#autor').val(),
			success:function(r){
				$('#nacion').html(r);
			}
		});
	}
</script>