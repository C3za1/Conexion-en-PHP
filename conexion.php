<?php

function conectar()
{

$Conexion=mysqli_connect("localhost","root","170397","revista");
if ($Conexion) 
{

	
}else{
	echo "vales verga";
}

}

?>