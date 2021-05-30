<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
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
<form id="formulario02" method="POST" action="../controladores/agregarCapitulo.php" >
        <h1>Registrar Capitulo</h1>
            <label for="numcapitulo">Numero del Capitulo (*)</label>
            <input type="text" id="numcapitulo" name="numcapitulo" value="" placeholder="Ingrese el numero del capitulo..." />
            <span id="mensajeNombres" class="error"></span>
        <br>
        <label for="ncapitulo">Nombre del Capitulo (*)</label>
        <input type="text" id="ncapitulo" name="ncapitulo" value="" placeholder="Ingrese el nombre del capitulo ..."  />
        <span id="mensajeApellidos" class="error"></span>
        <br>


        <label for="autor">Autor (*)</label>
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
                    echo "<a>". $row['aut_nacionalidad']."</a>";    
                }
                }
        $conn->close();
        ?>
        <input type="hidden" id ="isbn" name="isbn" value="<?php echo $isbn ?> "/>
        </select>

        <br>
        <br>


        <input type="submit" id="crear" name="crear" value="Registrar Libro" /> 
            <input type="reset" id="cancelar" name="cancelar" value="Resetear" />
        </form>
    
</body>
<footer>
      Paul Guzhñay 
      <br>
      Universidad Politécnica Salesiana 
<br/>&copy; Todos los derechos reservados
</footer>
</html>