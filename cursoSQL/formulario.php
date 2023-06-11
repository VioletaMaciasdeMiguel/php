<?php
 if($_POST){
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $email =$_POST['email'];

    
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

function sololetras($text){
    $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    return preg_match($pattern, trim($text));
}
if (empty($nombre)){
    echo "Es necesario introducir un nombre.";
} elseif (empty($email)){
    echo "Es necesario un mail.";
} elseif(empty($apellido)){
    echo "Es necesario introducir un apellido.";
}  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "{$email} no es un mail correcto, revise el formato.";
} elseif(!sololetras($nombre)){
    echo"{$nombre} no es un nombre correcto, este campo solo se permite letras, revise el formato.";
} elseif(!sololetras($apellido)){
    echo"{$apellido} no es un apellido correcto, este campo solo se permite letras, revise el formato.";
}

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