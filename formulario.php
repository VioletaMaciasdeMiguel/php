<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<title>Formulario de registro SCIII</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="group">
<div class="div_secundario">
    <form method="POST" action="a.php">
    <div class="div_secundario">
    <h2><em>Formulario de Registro</em></h2>
        <label for="nombre" class="input_secundario">Nombre<span><em>(requerido)</em></span></label><br>
        <input type="text" id="campo" class="input_secundario" name="nombre" class="form-input" required/><br>
        </div>
        <div class="div_secundario">
        <label for="apellido" class="input_secundario">Apellido<span><em>(requerido)</em></span></label><br>
        <input type="text" id="campo" class="input_secundario" name="apellido" class="form-input" required/><br>
        </div>
        <div class="div_secundario">
        <label for="email" class="input_secundario">Email<span><em>(requerido)</em></span></label><br>
        <input type="email" id="campo" class="input_secundario" name="email" class="form-input" required/><br>
        </div>
        <div class="div_secundario">
    <input class="form-btn" name="submit" id="button" type="submit" value="Suscribirse"/>
</div>
</div>
 <?php
 if($_POST){
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $email =$_POST['email'];

    
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO usuarios(nombre, apellido, email
VALUES ('$nombre', '$apellido', '$email')";

if($conn->query($sql) === TRUE){
    echo "New record created succesfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
    </form>
    
</div>
</body>
</html>