<html>

<head>

<title>Añadir filas a una tabla</title>

 

</head>

<SCRIPT LANGUAGE="JavaScript">

 

<!-- This script and many more are available free online at -->

<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Original: Scriptbreaker (pieterpareit@hotmail.com) -->

<!-- Original: http://www24.brinkster.com/scriptbreaker/home.htm) -->

 

<!-- Begin

function addRow(id){

var tbody = document.getElementById

(id).getElementsByTagName("TBODY")[0];

var row = document.createElement("TR")

var td1 = document.createElement("TD")

td1.appendChild(document.createTextNode("columna 1"))

var td2 = document.createElement("TD")

td2.appendChild (document.createTextNode("columna 2"))

row.appendChild(td1).innerHTML="<input type=text>";

row.appendChild(td2).innerHTML="<input type=text>";

tbody.appendChild(row);

}

// End -->

</script>


</HEAD>


<BODY style="font-family: Verdana">

<p align="center"><b>Añadir filas a una tabla</b></center><p>


<a href="javascript:addRow('myTable')">Añadir fila</a>


<table id="myTable" cellspacing="0" border="1">

<tbody>

<tr>

<td>fila1_columna1</td><td>fila1_columna1</td>

</tr>

</tbody>

</table>
</p>

</p>
</html>