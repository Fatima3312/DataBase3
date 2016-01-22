<?php
header("Content-type:force-download");
header("Content-type:text/plain");
header("Content-Disposition:attachment;filename=test.sql");

$Nombre=$_POST['nombre'];
set_time_limit(0);
ini_set("memory_limit","-1");
require('conexion.php');
$Nombre=$_POST['nombre'];
$columna1=$_POST['1'];
$columna2=$_POST['2'];
$columna3=$_POST['3'];
$columna4=$_POST['4'];
//$columna5=$_POST['5'];
//creamos la base de datos
//$crear = "CREATE DATABASE ".$Nombre;
//mysql_query("$crear");

//creamos la tabla

//$conexion=mysql_connect("localhost","root","");
//mysql_select_db("$Nombre",$conexion);
//$sql=mysql_query("CREATE TABLE datos($columnaprincipal varchar(30),$columna1 varchar(30))",$conexion);

//if($sql==0)
//{
	//printf("No se ha podido crear la tabla<P>\n");
//}else{
	//printf("La tabla se ha creado correctamente<P>\n");
//}

$llenar=mysql_connect("localhost","root","");
mysql_select_db("test1",$llenar);

$cons="select nombre_estado from estados ";
$datos=mysql_query($cons,$llenar);
$myrow=mysql_fetch_array($datos);
mysql_close($llenar);
$filas=$_POST['filas'];
$f=$filas;

for($r=1;$r<=$filas;$r++){
echo "insert into datos values(";	
		echo "'$myrow[0]','$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0],'$myrow[0]');";
			
}
	
?>



