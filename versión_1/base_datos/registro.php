<html>   

<head>   
<title>Guardamos los datos en la base de datos</title>   
</head>   

<body>   
<?php   

// Recibimos por POST los datos procedentes del formulario   

$nombres = $_POST["nombres"];   
$apellido_paterno = $_POST["apellido_paterno"]; 
$apellido_materno = $_POST["apellido_materno"];  
$CURP = $_POST["CURP"];  
$numero_celular = $_POST["numero_celular"];

// Abrimos la conexion a la base de datos   


"INSERT INTO $registro (nombres, apellido_paterno, apellido_materno, CURP, numero_celular) VALUES ('$nombres','$apellido_paterno','$apellido_materno','$CURP','$numero_celular')";   
mysql_query($sql);  

// Cerramos la conexion a la base de datos   


// Confirmamos que el registro ha sido insertado con exito   


?>   
</body>   

</html>  