<?php 
$conexion=mysqli_connect('localhost','root','','librosdigital');
$continente=$_POST['continente'];

	$sql="SELECT * 
		from autores 
		where aut_nombre='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Nacionalidad</label>";

	while ($ver=mysqli_fetch_row($result)) {
		//$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
        $cadena=$cadena.'<input type="text"  value='.$ver[2].' disabled >';
    }

	echo  $cadena;
	

?>