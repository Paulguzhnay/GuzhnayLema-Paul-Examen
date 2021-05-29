<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <link href="../css/index.css" rel="stylesheet" />
</head>
<body>
    <header>
        <a href="../vista/index.html"><img src="../imgs/Banner.png"></a>
        <header></header>
        <nav>
            <ul>
            <li><a href="indexBuscar.html">Búsqueda de Libro</a></li>
            <li><a href="indexAgregar.php">Registrar Libro</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <?php

//incluir conexión a la base de datos
    include '../config/conexionBD.php';

    //$isbn = $_GET['isbn'];
    //echo ($isbn);
    $numcapitulo = isset($_POST["numcapitulo"]) ? trim($_POST["numcapitulo"]): null;
    $ncapitulo = isset($_POST["ncapitulo"]) ? trim($_POST["ncapitulo"]): null;
    $autor = isset($_POST["autor"]) ? trim($_POST["autor"]): null;
    $isbn = isset($_POST["isbn"]) ? trim($_POST["isbn"]): null;
    echo ($isbn);
    echo ($autor);
// Consulta para obtener el id de autores  
    $sql =  "SELECT aut_id FROM autores WHERE aut_nombre='$autor';";
    $result1 = $conn->query($sql);
    
    while ($row1 = $result1->fetch_assoc()){
        if($row1['aut_id']){
            $autorid = $row1['aut_id'];
        }
    }
//Consulta para obtener el id de libros
    $sql2 =  "SELECT lib_id FROM libros WHERE lib_isbn='$isbn';";
    $result2 = $conn->query($sql2);
    while ($row1 = $result2->fetch_assoc()){
        if($row1['lib_id']){
            $libid = $row1['lib_id'];
        }
    }

    $sql =  "INSERT INTO capitulos VALUES (0, '$numcapitulo', '$ncapitulo','$autorid','$libid');";
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Capitulo ingresado correctamente</h1>";
    } else {
        echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
    }
    //cerrar la base de datos
    $conn->close();
?>
<h1>¿Desea agregar mas capítulos? </h1>
<a href="../vista/indexAgregarCapitulo.php?isbn="$isbn">Agregar </a>
<button onclick="href=>Agregar mas Capitulos</button>
<input type="reset" id="cancelar" name="cancelar" value="Regresar" /> 


</body>
<footer>
      Paul Guzhñay 
      <br>
      Universidad Politécnica Salesiana 
<br/>&copy; Todos los derechos reservados
</footer>
</html>