<!DOCTYPE >
<html>
	<head>
		<title>Sistema Base de Datos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<?php
		$x=1;
		?>
		 <script>
            function agregar(){
            var table=document.getElementById("tabla");    {	
            var row=table.insertRow(0);
                var cell1=row.insertCell(0);
                var cell2=row.insertCell(1);
                var cell3=row.insertCell(2);
                var cell4=row.insertCell(3);
                cell1.innerHTML="<td><input type='text' name='<?php  $x ?>'></td>";
                cell2.innerHTML="<td><input type='text'></td>";
                cell3.innerHTML="<td><select><option>Seleccionar</option></select></td>";
                cell4.innerHTML="<td><input type='text'></td>";
            
            }
            <?php   $x+1;  ?>
            }
            function borrar(){
            document.getElementById("table").deleteRow(0);
            }
        </script>
		
		
		<div id="Contenedor">
			<div id="Logotipo">
				<p>Data Base</p>
			</div> 
			<div id="Datos">	
				<form  method="post" name="" action="php/crerBD.php" >
					<div id="Orden">
						Orden: <br /> 
						<input type="text" name="number" id="CampoOrden"/>
					</div>
					<div id="Columna">
						Nombre Columna: <br /> 
						<input type="text" name="txtcolumna" id="CampoColumna"/>
					</div>
					<div id="Tipo">
						Tipo: <br /> 
						<select name="tipo">
							<option value="Selecciona">Selecciona una opción ...</option>
							<option value="Nombre">Nombre</option>
							<option value="Telefono/Fax">Telefono</option>
							<option value="Email">E-mail</option>
							<option value="Fecha">Fecha</option>
							<option value="Ciudad">Ciudad</option>
							<option value="C.P">Codigo Postal</option>
						</select>
					</div>
					<div id="Ejemplos">
						Ejemplos: <br /> 
						<input type="text" name="txtejemplo" id="CampoEjemplo"/>
					</div>
					<div id="Agregar">
						<a onclick="agregar()"><img src="images/+.svg" /></a>
					</div>
					<div id="Eliminar">
						<a href="#"><img src="images/-.png" /></a>
					</div>
					<div id="Datos">
						<table id="tabla" border="1" style="margin-top: 170px; margin-left: 208px;">
                <tr>
                	<td>
                		<input type="text" />
                	</td>
                    <td><input type="text" name="col1"></td>
                    <td><select>
                            <option>Seleccionar</option>    
                        </select>
                    </td>
                    <td><input type="text" /></td>                    
                </tr>
               
            </table>
					</div>
				</form>
			</div>
			
			<div id="Exportar">
				<div id="Titulo">
					<h1>Exportar</h1>
				</div>
				<div id="TiposDeExportacion">
					<a id="SQLTitulo" href="sql.php">SQL</a>
					<a id="XMLTitulo" href="#">XML</a>
				</div>
			</div>
		</div>
	</body>
</html>