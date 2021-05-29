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
            <li><a href="../vista/indexBuscar.html">Búsqueda de Libro</a></li>
            <li><a href="../vista/indexAgregar.php">Registrar Libro</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <?php

//incluir conexión a la base de datos
    include '../config/conexionBD.php';

    $nlibro = isset($_POST["nlibro"]) ? trim($_POST["nlibro"]): null;
    $isbn = isset($_POST["ISBN"]) ? trim($_POST["ISBN"]): null;
    $numP = isset($_POST["numP"]) ? trim($_POST["numP"]): null;
    $sql =  "INSERT INTO libros VALUES (0, '$nlibro', '$isbn', '$numP');";
    if ($conn->query($sql) === TRUE) {
        
        header  ("location: ../vista/indexAgregarCapitulo.php?isbn=$isbn");
       // echo($isbn);
    } else {
        echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
    }
    //cerrar la base de datos
    $conn->close();
?>


</body>
<footer>
      Paul Guzhñay 
      <br>
      Universidad Politécnica Salesiana 
<br/>&copy; Todos los derechos reservados
</footer>
</html>