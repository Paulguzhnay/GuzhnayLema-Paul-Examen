<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <link href="../css/index.css" rel="stylesheet" />
    <script type="text/javascript" src="../controladores/buscarA.js"></script>
</head>
<body>


    <?php
 //incluir conexión a la base de datos
 include "../config/conexionBD.php";
 $autor = $_GET['autor'];
 //echo "Hola " . $cedula;
echo("<h1>Resultados</h1>");
   $sql="SELECT aut_id FROM autores WHERE aut_nombre = '$autor';";
   $result = $conn->query($sql);
 
   while ($row1 = $result->fetch_assoc()){
    if($row1['aut_id']){
        $codigoautor = $row1['aut_id'];
        echo ($row1['aut_id']);
    }
}
   $sql2="SELECT * FROM libros l ,capitulos c,autores a 
   WHERE c.autores_aut_id=aut_id and l.lib_id=lib_id and a.aut_id='$codigoautor';";
    $result2= $conn->query($sql2);
    //cambiar la consulta para puede buscar por ocurrencias de letras
    echo " <table style='width:100%' border='1' align='center'>
    <tr>
    <th colspan='5'>  Datos Personales </th>
    <th colspan ='3'>  Teléfonos</th>
    </tr>
    <tr>
    <th>Nombre del Libro</th>
    <th>Numero de paginas</th>
    <th>Numero del capitulo</th>
    <th>Titulo del capitulo</th>
    <th>Nombre del Autor</th>
    <th>Nacionalidad del Autor</th>
    </tr>";
    //-----------------
    if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {

    echo "<tr>";
    echo " <td>" . $row['lib_nombre'] . "</td>";
    echo " <td>" . $row['lib_num_pag'] ."</td>";
    echo " <td>" . $row['cap_numero'] . "</td>";
    echo " <td>" . $row['cap_titulo'] ."</td>";
    echo " <td>" . $row['aut_nombre'] . "</td>";
    echo " <td>" . $row['aut_nacionalidad'] . "</td>";
    echo "</tr>";
            
        
    }
    } else {
    echo "<tr>";
    echo " <td colspan='8'> No existen autores registradas en el sistema </td>";
    echo "</tr>";
    }
    echo "</table>";
    $conn->close();

?>

</body>

</html>