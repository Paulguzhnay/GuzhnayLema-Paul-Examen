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
    <?php

//incluir conexión a la base de datos
    include '../config/conexionBD.php';


    $nlibro = isset($_POST["nlibro"]) ? trim($_POST["nlibro"]): null;
    $isbn = isset($_POST["isbn"]) ? trim($_POST["isbn"]): null;
    $numP = isset($_POST["numP"]) ? trim($_POST["numP"]): null;
    $sql =  "INSERT INTO libros VALUES (0, '$nlibro', '$isbn', '$numP');";
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Libro registrado correctamente</h1>";
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