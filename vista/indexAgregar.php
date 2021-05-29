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
            <li><a href="indexAgregar.html">Registrar Libro</a></li>
            </ul>
        </nav>
    </header>
    <br>


    <form id="formulario01" method="POST" action="../controladores/agregarLibro.php" >
        <h1>Registrar Libro</h1>
            <label for="nlibro">Nombre del Libro (*)</label>
            <input type="text" id="nlibro" name="nlibro" value="" placeholder="Ingrese el nombre del libro..." />
            <span id="mensajeNombres" class="error"></span>
        <br>
        <label for="ISBN">Codigo ISBN (*)</label>
        <input type="text" id="ISBN" name="ISBN" value="" placeholder="Ingrese el codigo ISBN ..."  />
        <span id="mensajeApellidos" class="error"></span>
        <br>

        <label for="numP">Numero de Paginas (*)</label>
        <input type="text" id="numP" name="numP" value="" placeholder="Ingrese el numero de Paginas..."/>
        <span id="mensajeApellidos" class="error"></span>
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